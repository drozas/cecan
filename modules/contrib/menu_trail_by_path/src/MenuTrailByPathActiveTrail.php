<?php
/**
 * @file
 * Contains \Drupal\menu_trail_by_path\MenuTrailByPathActiveTrail.
 */

namespace Drupal\menu_trail_by_path;

use Drupal\Core\Menu\MenuActiveTrail;
use Drupal\Core\Menu\MenuLinkInterface;
use Drupal\Core\Menu\MenuLinkManagerInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Lock\LockBackendInterface;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Path\PathMatcherInterface;
use Drupal\Core\Url;

/**
 * Overrides the class for the file entity normalizer from HAL.
 */
class MenuTrailByPathActiveTrail extends MenuActiveTrail {

  /**
   * @var \Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface
   */
  protected $breadcrumbBuilder;

  /**
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * @var \Drupal\Core\Path\PathMatcherInterface
   */
  protected $pathMatcher;

  /**
   * @var string
   */
  protected $frontpagePath;

  /**
   * Constructs a Drupal\menu_trail_by_path\MenuTrailByPathLinkTree object.
   *
   * @param \Drupal\Core\Menu\MenuLinkManagerInterface $menu_link_manager
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache
   * @param \Drupal\Core\Lock\LockBackendInterface $lock
   * @param \Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface $breadcrumb_builder
   */
  public function __construct(MenuLinkManagerInterface $menu_link_manager, RouteMatchInterface $route_match, CacheBackendInterface $cache, LockBackendInterface $lock, BreadcrumbBuilderInterface $breadcrumb_builder, ConfigFactoryInterface $config_factory, PathMatcherInterface $path_matcher) {
    parent::__construct($menu_link_manager, $route_match, $cache, $lock);
    $this->breadcrumbBuilder = $breadcrumb_builder;
    $this->configFactory     = $config_factory;
    $this->pathMatcher       = $path_matcher;
    $this->frontpagePath     = $this->configFactory->get('system.site')->get('page.front');
  }

  /**
   * Helper method for ::getActiveTrailIds().
   */
  protected function doGetActiveTrailIds($menu_name) {
    // Parent ids; used both as key and value to ensure uniqueness.
    // We always want all the top-level links with parent == ''.
    $active_trail = array('' => '');
    $trail_urls   = $this->getTrailUrls();

    foreach (array_reverse($trail_urls) as $trail_url) {
      if ($active_link = $this->getActiveLinkByUrl($trail_url, $menu_name)) {
        break;
      }
    }

    if (isset($active_link) && $active_link instanceof MenuLinkInterface) {
      if ($parents = $this->menuLinkManager->getParentIds($active_link->getPluginId())) {
        $active_trail = $parents + $active_trail;
      }
    }

    return $active_trail;
  }

  /**
   * Fetches a menu link which matches the route name and parameters of the url object and menu name.
   * The menu links coming from the storage are already sorted by depth, weight and ID.
   *
   * @param \Drupal\Core\Url $url
   *   The url object to use to find the active link.
   *
   * @param string|NULL $menu_name
   *   (optional) The menu within which to find the active link. If omitted, all
   *   menus will be searched.
   *
   * @return MenuLinkInterface|NULL
   *   The menu link for the given route name, parameters and menu, or NULL if
   *   there is no matching menu link or the current user cannot access the
   *   current page (i.e. we have a 403 response).
   */
  protected function getActiveLinkByUrl(Url $url, $menu_name = NULL) {
    // The breadcrumb will "always" contain the Home link.
    // If this is not the frontpage, skip the Home link.
    if ((($url->getRouteName() && '/' . $url->getInternalPath() === $this->frontpagePath) || $url->getRouteName() === '<front>') && !$this->pathMatcher->isFrontPage()) {
      return NULL;
    }

    $found = NULL;
    $links = $this->menuLinkManager->loadLinksByRoute($url->getRouteName(), $url->getRouteParameters(), $menu_name);
    if (!$links) {
      // The breadcrumb may return the "page.front"-path instead of the "<front>"-path, both should match
      if ($url->getRouteName() && '/' . $url->getInternalPath() === $this->frontpagePath) {
        $links = $this->menuLinkManager->loadLinksByRoute('<front>', [], $menu_name);
      }
    }
    if ($links) {
      $found = end($links); // We want the deepest, heaviest, just like the d7 version of this module
    }

    return $found;
  }

  /**
   * @return \Drupal\Core\Url[]
   */
  protected function getTrailUrls() {
    $trail_urls = $this->getBreadcrumbUrls();
    if ($current_request_url = $this->getCurrentRequestUrl()) {
      $trail_urls[] = $current_request_url;
    }

    return $trail_urls;
  }

  /**
   * @return \Drupal\Core\Url|null
   */
  protected function getCurrentRequestUrl() {
    $route_name = $this->routeMatch->getRouteName();
    if ($route_name) {
      $route_parameters = $this->routeMatch->getRawParameters()->all();
      return new Url($route_name, $route_parameters);
    }

    return NULL;
  }

  /**
   * @return \Drupal\Core\Url[]
   */
  protected function getBreadcrumbUrls() {
    $breadcrumb_urls = [];
    $breadcrumb      = $this->breadcrumbBuilder->build($this->routeMatch);
    foreach ($breadcrumb->getLinks() as $breadcrumb_link) {
      $breadcrumb_urls[] = $breadcrumb_link->getUrl();
    }

    return $breadcrumb_urls;
  }
}

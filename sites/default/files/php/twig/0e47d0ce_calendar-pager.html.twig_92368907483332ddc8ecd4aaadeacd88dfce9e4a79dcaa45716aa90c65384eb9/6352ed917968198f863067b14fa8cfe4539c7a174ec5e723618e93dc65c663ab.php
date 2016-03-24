<?php

/* modules/contrib/calendar/templates/calendar-pager.html.twig */
class __TwigTemplate_ace98f3abaef7a080ebb2719fa9e339e5b0e34fa04fcf4f1b334f1560b4330f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 12);
        $filters = array("t" => 14, "without" => 18, "default" => 20);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t', 'without', 'default'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 12
        if ((($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) &&  !(isset($context["exclude"]) ? $context["exclude"] : null))) {
            // line 13
            echo "    <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
        <h4 class=\"visually-hidden\">";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Pagination")));
            echo "</h4>
        <ul class=\"js-pager__items\">
            ";
            // line 16
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 17
                echo "                <li class=\"pager__item pager__item--previous\">
                    <a href=\"";
                // line 18
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "url", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
                        <span>";
                // line 19
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous")));
                echo "</span>
                        <span aria-hidden=\"true\">";
                // line 20
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹‹"))) : (t("‹‹"))), "html", null, true));
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array())) {
                // line 25
                echo "                <li class=\"pager__item pager__item--current\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array()), "html", null, true));
                echo "</li>
            ";
            }
            // line 27
            echo "            ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 28
                echo "                <li class=\"pager__item pager__item--next\">
                    <a href=\"";
                // line 29
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "url", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
                        <span>";
                // line 30
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next")));
                echo "</span>
                        <span aria-hidden=\"true\">";
                // line 31
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("››"))) : (t("››"))), "html", null, true));
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 35
            echo "        </ul>
    </nav>
";
        }
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  111 => 35,  104 => 31,  100 => 30,  92 => 29,  89 => 28,  86 => 27,  80 => 25,  77 => 24,  70 => 20,  66 => 19,  58 => 18,  55 => 17,  53 => 16,  48 => 14,  45 => 13,  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a calendar pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if (items.previous or items.next) and not exclude %}*/
/*     <nav class="pager" role="navigation" aria-labelledby="pagination-heading">*/
/*         <h4 class="visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*         <ul class="js-pager__items">*/
/*             {% if items.previous %}*/
/*                 <li class="pager__item pager__item--previous">*/
/*                     <a href="{{ items.previous.url }}" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes|without('href', 'title', 'rel') }}>*/
/*                         <span>{{ 'Previous'|t }}</span>*/
/*                         <span aria-hidden="true">{{ items.previous.text|default('‹‹'|t) }}</span>*/
/*                     </a>*/
/*                 </li>*/
/*             {% endif %}*/
/*             {% if items.current %}*/
/*                 <li class="pager__item pager__item--current">{{ items.current }}</li>*/
/*             {% endif %}*/
/*             {% if items.next %}*/
/*                 <li class="pager__item pager__item--next">*/
/*                     <a href="{{ items.next.url }}" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes|without('href', 'title', 'rel') }}>*/
/*                         <span>{{ 'Next'|t }}</span>*/
/*                         <span aria-hidden="true">{{ items.next.text|default('››'|t) }}</span>*/
/*                     </a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </nav>*/
/* {% endif %}*/
/* */
/* */

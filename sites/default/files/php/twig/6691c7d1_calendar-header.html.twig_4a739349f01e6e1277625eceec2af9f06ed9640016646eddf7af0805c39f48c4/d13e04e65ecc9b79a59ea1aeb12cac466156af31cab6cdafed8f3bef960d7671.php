<?php

/* modules/contrib/calendar/templates/calendar-header.html.twig */
class __TwigTemplate_634435503873a1f01dfd0af08acd6160d25b9c60807036430e80c659a61c8c48 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 15
        echo "<h3>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,);
    }
}
/* {#/***/
/* * @file*/
/* * Template to display a calendar header.*/
/* * Be default called by CalendarHeader area.*/
/* **/
/* * Available variables:*/
/* * - title: Header Title.*/
/* * - empty: Whether there are any results.*/
/* * - granularity: whether this is week, day, month or year display.*/
/* **/
/* * @ingroup themeable*/
/* *//* */
/* #}*/
/* {# @todo Finish Header if this the way to go. #}*/
/* <h3>{{ title }}</h3>*/
/* */

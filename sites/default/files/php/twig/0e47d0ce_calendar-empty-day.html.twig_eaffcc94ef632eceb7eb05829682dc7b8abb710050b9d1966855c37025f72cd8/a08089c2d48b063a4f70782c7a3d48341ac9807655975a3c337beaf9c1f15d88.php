<?php

/* modules/contrib/calendar/templates/calendar-empty-day.html.twig */
class __TwigTemplate_1c46c3613d1074ba272c3b0daf7b02d12f81c6e15b6143f2790fc20618c7d0d3 extends Twig_Template
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
        $tags = array("if" => 13, "trans" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "dateInfo", array()), "calendarType", array()) != "day")) {
            // line 14
            echo "  <div class=\"calendar-empty\">&nbsp;</div>
";
        } else {
            // line 16
            echo "  <div class=\"calendar-dayview-empty\">";
            echo t("Empty day", array());
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-empty-day.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  45 => 14,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Format an empty day on a calendar.*/
/*  **/
/*  * Available variables:*/
/*  * - curday: The current day to display.*/
/*  * - view: The view.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if view.dateInfo.calendarType != 'day' %}*/
/*   <div class="calendar-empty">&nbsp;</div>*/
/* {% else %}*/
/*   <div class="calendar-dayview-empty">{% trans %}Empty day{% endtrans %}</div>*/
/* {% endif %}*/
/* */

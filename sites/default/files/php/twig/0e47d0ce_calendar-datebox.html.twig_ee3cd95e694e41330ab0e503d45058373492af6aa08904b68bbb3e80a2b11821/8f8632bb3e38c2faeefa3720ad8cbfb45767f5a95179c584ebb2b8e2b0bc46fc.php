<?php

/* modules/contrib/calendar/templates/calendar-datebox.html.twig */
class __TwigTemplate_709f709edde898183a5e8dc5752a335a2509413c04b670b72864a9bc2082ab2a extends Twig_Template
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
        $tags = array("if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 21
        echo "<div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["granularity"]) ? $context["granularity"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true));
        echo "\">
  ";
        // line 22
        if ( !twig_test_empty((isset($context["selected"]) ? $context["selected"] : null))) {
            // line 23
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
            echo "
  ";
        } else {
            // line 25
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["day"]) ? $context["day"] : null), "html", null, true));
            echo "
  ";
        }
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-datebox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  58 => 25,  52 => 23,  50 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to display the date box in a calendar.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view.*/
/*  * - granularity: The type of calendar this box is in -- year, month, day, or week.*/
/*  * - mini: Whether or not this is a mini calendar.*/
/*  * - class: The class for this box -- mini-on, mini-off, or day.*/
/*  * - day:  The day of the month.*/
/*  * - date: The current date, in the form YYYY-MM-DD.*/
/*  * - link: A formatted link to the calendar day view for this day.*/
/*  * - url:  The url to the calendar day view for this day.*/
/*  * - selected: Whether or not this day has any items.*/
/*  * - items: An array of items for this day.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="{{ granularity }} {{ class }}">*/
/*   {% if selected is not empty %}*/
/*     {{ link }}*/
/*   {% else %}*/
/*     {{ day }}*/
/*   {% endif %}*/
/* </div>*/
/* */

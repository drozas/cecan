<?php

/* modules/contrib/calendar/templates/calendar-month-col.html.twig */
class __TwigTemplate_d60107b1a92df8f676c68bbe23359d9bc519839e0cd913a661a767828da65f17 extends Twig_Template
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

        // line 12
        echo "
<td
  id=\"";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true));
        echo "\"
  date-date=\"";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "date", array()), "html", null, true));
        echo "\"
  data-day-of-month=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "day_of_month", array()), "html", null, true));
        echo "\"
  headers=\"";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "header_id", array()), "html", null, true));
        echo "\"
  class=\"";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "html", null, true));
        echo "\"
  colspan=\"";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "colspan", array()), "html", null, true));
        echo "\"
  rowspan=\"";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "rowspan", array()), "html", null, true));
        echo "\">
  <div class=\"inner\">
    ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "entry", array()), "html", null, true));
        echo "
  </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-month-col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to display a column.*/
/*  **/
/*  * Available variables:*/
/*  * - item: The item to render within a td element.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* <td*/
/*   id="{{ item.id }}"*/
/*   date-date="{{ item.date }}"*/
/*   data-day-of-month="{{ item.day_of_month }}"*/
/*   headers="{{ item.header_id }}"*/
/*   class="{{ item.class }}"*/
/*   colspan="{{ item.colspan }}"*/
/*   rowspan="{{ item.rowspan }}">*/
/*   <div class="inner">*/
/*     {{ item.entry }}*/
/*   </div>*/
/* </td>*/
/* */

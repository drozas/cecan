<?php

/* modules/contrib/calendar/templates/calendar-item.html.twig */
class __TwigTemplate_6fbc11819a867496c7ae4dea2b303f4b938a8755f112f2609586c840fa06ed6b extends Twig_Template
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
        $tags = array("for" => 42, "if" => 43);
        $filters = array("default" => 37, "calendar_stripe" => 40);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('default', 'calendar_stripe'),
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

        // line 37
        echo "<div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "item")) : ("item")), "html", null, true));
        echo "\">
  <div class=\"view-item\">
    <div class=\"calendar ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "granularity", array()), "html", null, true));
        echo "view\">
      ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('calendar')->getCalendarStripe((isset($context["item"]) ? $context["item"] : null))));
        echo "
      <div class=\"";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "date_id", array()), "html", null, true));
        echo " contents\">
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendered_fields"]) ? $context["rendered_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 43
            echo "          ";
            if (((((isset($context["index"]) ? $context["index"] : null) + 1) == 0) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "continuation", array()))) {
                // line 44
                echo "            <div class=\"continuation\">&laquo;</div>
          ";
            }
            // line 46
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["field"]);
            foreach ($context['_seq'] as $context["_key"] => $context["field_html"]) {
                // line 47
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["field_html"], "html", null, true));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_html'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </div>
      ";
        // line 51
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "continues", array())) {
            // line 52
            echo "        <div class=\"continues\">&raquo;</div>
      ";
        } else {
            // line 54
            echo "        <div class=\"cutoff\">&nbsp;</div>
      ";
        }
        // line 56
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 56,  101 => 54,  97 => 52,  95 => 51,  92 => 50,  86 => 49,  77 => 47,  72 => 46,  68 => 44,  65 => 43,  61 => 42,  57 => 41,  53 => 40,  49 => 39,  43 => 37,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to display view fields as a calendar item.*/
/*  **/
/*  * - item*/
/*  *   A result object for this calendar item. Note this is*/
/*  *   not a complete entity. It will contain various*/
/*  *   values as added by the row plugin, which may depend*/
/*  *   on the entity type.*/
/*  **/
/*  * - rendered_fields*/
/*  *   An array of the rendered html for the fields in the item,*/
/*  *   as generated by Views. This does not include excluded*/
/*  *   fields and should take into account any special processing*/
/*  *   added in the field settings.*/
/*  **/
/*  * Calendar info for this individual calendar item is in local time --*/
/*  * the user timezone where configurable timezones are allowed and set,*/
/*  * otherwise the site timezone. If this item has extends over more than*/
/*  * one day, it has been broken apart into separate items for each calendar*/
/*  * date and calendar_start will be no earlier than the start of*/
/*  * the current day and calendar_end will be no later than the end*/
/*  * of the current day.*/
/*  **/
/*  * - calendar_start - A formatted datetime start date for this item.*/
/*  *   i.e. '2008-05-12 05:26:15'.*/
/*  * - calendar_end - A formatted datetime end date for this item,*/
/*  *   the same as the start date except for fields that have from/to*/
/*  *   fields defined, like Date module dates.*/
/*  * - calendar_start_date - a PHP date object for the start time.*/
/*  * - calendar_end_date - a PHP date object for the end time.*/
/*  **/
/*  * @see template_preprocess_calendar_item.*/
/*  *//* */
/* #}*/
/* <div class="{{ item.class|default('item') }}">*/
/*   <div class="view-item">*/
/*     <div class="calendar {{ item.granularity }}view">*/
/*       {{ item | calendar_stripe }}*/
/*       <div class="{{ item.date_id }} contents">*/
/*         {% for field in rendered_fields %}*/
/*           {% if (index + 1) == 0 and item.continuation %}*/
/*             <div class="continuation">&laquo;</div>*/
/*           {% endif %}*/
/*           {% for field_html in field %}*/
/*             {{ field_html }}*/
/*           {% endfor %}*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% if item.continues %}*/
/*         <div class="continues">&raquo;</div>*/
/*       {% else %}*/
/*         <div class="cutoff">&nbsp;</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */

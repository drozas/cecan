<?php

/* modules/contrib/calendar/templates/calendar-day-overlap.html.twig */
class __TwigTemplate_f4372ad7a501963273a9b3b9de001458b8a085efc60c7294709c8723cff3df3f extends Twig_Template
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
        $tags = array("set" => 74, "for" => 75, "if" => 76);
        $filters = array("length" => 78);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('length'),
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

        // line 32
        echo "<div class=\"calendar-calendar\"><div class=\"day-view\">
";
        // line 65
        echo "<div id=\"single-day-container\">
  <table class=\"full\">
    <tbody>
      <tr class=\"holder\">
        <td class=\"calendar-time-holder\"></td>
        <td class=\"calendar-day-holder\"></td>
      </tr>
      <tr>
        <td class=\"first\">
          ";
        // line 74
        $context["is_first"] = true;
        // line 75
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["rows"]) ? $context["rows"] : null), "items", array(), "array"));
        foreach ($context['_seq'] as $context["time_cnt"] => $context["hour"]) {
            // line 76
            echo "            ";
            if (($context["time_cnt"] == 0)) {
                // line 77
                echo "              ";
                $context["class"] = "first";
                // line 78
                echo "            ";
            } elseif (($context["time_cnt"] == (twig_length_filter($this->env, (isset($context["start_times"]) ? $context["start_times"] : null)) - 1))) {
                // line 79
                echo "              ";
                $context["class"] = "last";
                // line 80
                echo "            ";
            } else {
                // line 81
                echo "              ";
                $context["class"] = "";
                // line 82
                echo "            ";
            }
            // line 83
            echo "            <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true));
            echo " calendar-agenda-hour\">
              <span class=\"calendar-hour\">";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["hour"], "hour", array()), "html", null, true));
            echo "</span><span class=\"calendar-ampm\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["hour"], "ampm", array()), "html", null, true));
            echo "</span>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['time_cnt'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </td>
        <td class=\"last\">
          ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["rows"]) ? $context["rows"] : null), "items", array(), "array"));
        foreach ($context['_seq'] as $context["time_cnt"] => $context["hour"]) {
            // line 90
            echo "            ";
            if (($context["time_cnt"] == 0)) {
                // line 91
                echo "              ";
                $context["class"] = "first";
                // line 92
                echo "            ";
            } elseif (($context["time_cnt"] == (twig_length_filter($this->env, (isset($context["start_times"]) ? $context["start_times"] : null)) - 1))) {
                // line 93
                echo "              ";
                $context["class"] = "last";
                // line 94
                echo "            ";
            } else {
                // line 95
                echo "              ";
                $context["class"] = "";
                // line 96
                echo "            ";
            }
            // line 97
            echo "
            ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 99
                echo "              <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true));
                echo " calendar-agenda-items single-day\">
                <div class=\"half-hour\">&nbsp;</div>
                ";
                // line 101
                if (((isset($context["is_first"]) ? $context["is_first"] : null) && $this->getAttribute($this->getAttribute($context["hour"], "values", array(), "array"), $context["column"], array(), "array"))) {
                    // line 102
                    echo "                  <div class=\"calendar item-wrapper first_item\">
                  ";
                    // line 103
                    $context["is_first"] = true;
                    // line 104
                    echo "                ";
                } else {
                    // line 105
                    echo "                  <div class=\"calendar item-wrapper\">
                ";
                }
                // line 107
                echo "                  <div class=\"inner\">
                    ";
                // line 108
                if (( !twig_test_empty($this->getAttribute($context["hour"], "values", array(), "array")) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["hour"], "values", array(), "array"), $context["column"], array(), "array")))) {
                    // line 109
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["hour"], "values", array(), "array"), $context["column"], array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 110
                        echo "                        ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["item"], "html", null, true));
                        echo "
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "                    ";
                } else {
                    // line 113
                    echo "                      &nbsp;
                    ";
                }
                // line 115
                echo "                  </div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['time_cnt'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "        </td>
      </tr>
    </tbody>
  </table>
</div>
<div class=\"single-day-footer\">&nbsp;</div>
</div></div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-day-overlap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 120,  192 => 119,  183 => 115,  179 => 113,  176 => 112,  167 => 110,  162 => 109,  160 => 108,  157 => 107,  153 => 105,  150 => 104,  148 => 103,  145 => 102,  143 => 101,  137 => 99,  133 => 98,  130 => 97,  127 => 96,  124 => 95,  121 => 94,  118 => 93,  115 => 92,  112 => 91,  109 => 90,  105 => 89,  101 => 87,  90 => 84,  85 => 83,  82 => 82,  79 => 81,  76 => 80,  73 => 79,  70 => 78,  67 => 77,  64 => 76,  59 => 75,  57 => 74,  46 => 65,  43 => 32,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to display a view as a calendar day, grouped by time with overlapping items*/
/*  **/
/*  * @see template_preprocess_calendar_day.*/
/*  **/
/*  * rows: The rendered data for this day.*/
/*  * rows['date'] - the date for this day, formatted as YYYY-MM-DD.*/
/*  * rows['datebox'] - the formatted datebox for this day.*/
/*  * rows['empty'] - empty text for this day, if no items were found.*/
/*  * rows['all_day'] - an array of formatted all day items.*/
/*  * rows['items'] - an array of timed items for the day.*/
/*  * rows['items'][time_period]['hour'] - the formatted hour for a time period.*/
/*  * rows['items'][time_period]['ampm'] - the formatted ampm value, if any for a time period.*/
/*  * rows['items'][time_period][$column]['values'] - An array of formatted*/
/*  *   items for a time period and field column.*/
/*  **/
/*  * view: The view.*/
/*  * columns: an array of column names.*/
/*  * min_date_formatted: The minimum date for this calendar in the format YYYY-MM-DD HH:MM:SS.*/
/*  * max_date_formatted: The maximum date for this calendar in the format YYYY-MM-DD HH:MM:SS.*/
/*  **/
/*  * The width of the columns is dynamically set using <col></col>*/
/*  * based on the number of columns presented. The values passed in will*/
/*  * work to set the 'hour' column to 10% and split the remaining columns*/
/*  * evenly over the remaining 90% of the table.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="calendar-calendar"><div class="day-view">*/
/* {# // Multi-day and all day events are not supported because Dates don't have end values*/
/* <div id="multi-day-container">*/
/*   <table class="full">*/
/*     <tbody>*/
/*       <tr class="holder">*/
/*         <td class="calendar-time-holder"></td>*/
/*         <td class="calendar-day-holder"></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td class="{{ agenda_hour_class }} first">*/
/*            <span class="calendar-hour">{% trans %}All day{% endtrans %}</span>*/
/*         </td>*/
/*         <td class="calendar-agenda-items multi-day last">*/
/*           {% for column in columns %}*/
/*           <div class="calendar">*/
/*             <div class="inner">*/
/*               {% if rows['all_day'] is not empty and rows['all_day'][column] is not empty %}*/
/*                 {{ rows['all_day'][column] }}*/
/*               {% else %}*/
/*                 &nbsp;*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* */
/* <div class="header-body-divider">&nbsp;</div>*/
/* #}*/
/* <div id="single-day-container">*/
/*   <table class="full">*/
/*     <tbody>*/
/*       <tr class="holder">*/
/*         <td class="calendar-time-holder"></td>*/
/*         <td class="calendar-day-holder"></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td class="first">*/
/*           {% set is_first = true %}*/
/*           {% for time_cnt, hour in rows['items'] %}*/
/*             {% if time_cnt == 0 %}*/
/*               {% set class = 'first' %}*/
/*             {% elseif time_cnt == start_times|length - 1 %}*/
/*               {% set class = 'last' %}*/
/*             {% else %}*/
/*               {% set class = '' %}*/
/*             {% endif %}*/
/*             <div class="{{ class }} calendar-agenda-hour">*/
/*               <span class="calendar-hour">{{ hour.hour }}</span><span class="calendar-ampm">{{ hour.ampm }}</span>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </td>*/
/*         <td class="last">*/
/*           {% for time_cnt, hour in rows['items'] %}*/
/*             {% if time_cnt == 0 %}*/
/*               {% set class = 'first' %}*/
/*             {% elseif time_cnt == start_times|length - 1 %}*/
/*               {% set class = 'last' %}*/
/*             {% else %}*/
/*               {% set class = '' %}*/
/*             {% endif %}*/
/* */
/*             {% for column in columns %}*/
/*               <div class="{{ class }} calendar-agenda-items single-day">*/
/*                 <div class="half-hour">&nbsp;</div>*/
/*                 {% if is_first and hour['values'][column] %}*/
/*                   <div class="calendar item-wrapper first_item">*/
/*                   {% set is_first = true %}*/
/*                 {% else %}*/
/*                   <div class="calendar item-wrapper">*/
/*                 {% endif %}*/
/*                   <div class="inner">*/
/*                     {% if hour['values'] is not empty and hour['values'][column] is not empty %}*/
/*                       {% for item in hour['values'][column] %}*/
/*                         {{ item }}*/
/*                       {% endfor %}*/
/*                     {% else %}*/
/*                       &nbsp;*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           {% endfor %}*/
/*         </td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="single-day-footer">&nbsp;</div>*/
/* </div></div>*/
/* */

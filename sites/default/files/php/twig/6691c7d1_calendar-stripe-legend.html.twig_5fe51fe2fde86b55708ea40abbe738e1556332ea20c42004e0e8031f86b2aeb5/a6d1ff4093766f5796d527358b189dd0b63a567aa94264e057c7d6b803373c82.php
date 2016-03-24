<?php

/* modules/contrib/calendar/templates/calendar-stripe-legend.html.twig */
class __TwigTemplate_3c29ed5d7d98d3c2b3e992b1f3ec3724318f0d976501d1ac502b697a4630d5cc extends Twig_Template
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
        $tags = array("for" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 17
        echo "<div class=\"calendar calendar-legend\">
  <table>
    <thead>
      <tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) ? $context["headers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 22
            echo "          <td class=\"calendar-legend\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["header"], "label", array()), "html", null, true));
            echo "</td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </tr>
    </thead>
    <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 28
            echo "        <tr>
          <td>";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "label", array()), "html", null, true));
            echo "</td>
          <td><div style=\"background-color:";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "stripe", array()), "html", null, true));
            echo ";color:";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "stripe", array()), "html", null, true));
            echo ";\" class=\"calendar-legend\" title=\"Key: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "label", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "stripe", array()), "html", null, true));
            echo " &nbsp;</div></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-stripe-legend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  78 => 30,  74 => 29,  71 => 28,  67 => 27,  62 => 24,  53 => 22,  49 => 21,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to display a stripe legend for a calendar view.*/
/*  **/
/*  * Available variables:*/
/*  * - headers: the header labels*/
/*  * - rows: an associative array holding all rows, each row defines:*/
/*  *   - label: the label of the entity of the current row*/
/*  *   - stripe: the hex code of the color*/
/*  **/
/*  * @see template_preprocess_calendar_stripe_legend()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="calendar calendar-legend">*/
/*   <table>*/
/*     <thead>*/
/*       <tr>*/
/*         {% for header in headers %}*/
/*           <td class="calendar-legend">{{ header.label }}</td>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for row in rows %}*/
/*         <tr>*/
/*           <td>{{ row.label }}</td>*/
/*           <td><div style="background-color:{{ row.stripe }};color:{{ row.stripe }};" class="calendar-legend" title="Key: {{ row.label }}">{{ row.stripe }} &nbsp;</div></td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* */

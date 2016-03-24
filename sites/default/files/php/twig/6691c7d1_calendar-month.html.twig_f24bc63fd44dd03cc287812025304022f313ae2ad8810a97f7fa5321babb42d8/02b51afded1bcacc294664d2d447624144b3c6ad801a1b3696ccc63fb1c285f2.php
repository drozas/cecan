<?php

/* modules/contrib/calendar/templates/calendar-month.html.twig */
class __TwigTemplate_a266c5f28b8127a201ffde53e7a15c351aabe661fb957a3440164f9af55e4400 extends Twig_Template
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
        $tags = array("for" => 24);
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

        // line 20
        echo "<div class=\"calendar-calendar\"><div class=\"month-view\">
<table class=\"full\">
  <thead>
    <tr>
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["day_names"]) ? $context["day_names"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
            // line 25
            echo "        <th class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "class", array()), "html", null, true));
            echo "\" id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "header_id", array()), "html", null, true));
            echo "\">
          ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "data", array()), "html", null, true));
            echo "
        </th>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tr>
  </thead>
  <tbody>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "data", array()), "html", null, true));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>
</table>
</div></div>
<!--
todo decide what we will do with this.
<script>
try {
  // ie hack to make the single day row expand to available space
  if (\$.browser.msie ) {
    var multiday_height = \$('tr.multi-day')[0].clientHeight; // Height of a multi-day row
    \$('tr[iehint]').each(function(index) {
      var iehint = this.getAttribute('iehint');
      // Add height of the multi day rows to the single day row - seems that 80% height works best
      var height = this.clientHeight + (multiday_height * .8 * iehint); 
      this.style.height = height + 'px';
    });
  }
}catch(e){
  // swallow 
}
</script>-->";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-month.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  78 => 33,  74 => 32,  69 => 29,  60 => 26,  53 => 25,  49 => 24,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to display a view as a calendar month.*/
/*  **/
/*  * Available variables:*/
/*  * - day_names: An array of the day of week names for the table header.*/
/*  * - rows: An array of data for each day of the week.*/
/*  * - view: The view.*/
/*  * - calendar_links: Array of formatted links to other calendar displays - year, month, week, day.*/
/*  * - display_type: year, month, day, or week.*/
/*  * - block: Whether or not this calendar is in a block.*/
/*  * - min_date_formatted: The minimum date for this calendar in the format YYYY-MM-DD HH:MM:SS.*/
/*  * - max_date_formatted: The maximum date for this calendar in the format YYYY-MM-DD HH:MM:SS.*/
/*  * - date_id: a css id that is unique for this date, it is in the form: calendar-nid-field_name-delta*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="calendar-calendar"><div class="month-view">*/
/* <table class="full">*/
/*   <thead>*/
/*     <tr>*/
/*       {% for cell in day_names %}*/
/*         <th class="{{ cell.class }}" id="{{ cell.header_id }}">*/
/*           {{ cell.data }}*/
/*         </th>*/
/*       {% endfor %}*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for row in rows %}*/
/*       {{ row.data }}*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* </div></div>*/
/* <!--*/
/* todo decide what we will do with this.*/
/* <script>*/
/* try {*/
/*   // ie hack to make the single day row expand to available space*/
/*   if ($.browser.msie ) {*/
/*     var multiday_height = $('tr.multi-day')[0].clientHeight; // Height of a multi-day row*/
/*     $('tr[iehint]').each(function(index) {*/
/*       var iehint = this.getAttribute('iehint');*/
/*       // Add height of the multi day rows to the single day row - seems that 80% height works best*/
/*       var height = this.clientHeight + (multiday_height * .8 * iehint); */
/*       this.style.height = height + 'px';*/
/*     });*/
/*   }*/
/* }catch(e){*/
/*   // swallow */
/* }*/
/* </script>-->*/

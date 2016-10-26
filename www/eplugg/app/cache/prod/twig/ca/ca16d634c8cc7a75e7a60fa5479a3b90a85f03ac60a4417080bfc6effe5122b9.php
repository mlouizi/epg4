<?php

/* EpluggFrontBundle:Calendar:calendar_backup.html.twig */
class __TwigTemplate_429f0ce792545780b3f5b0b1ec63619187b6b5c2d0fccca56804fe59b4e58809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Calendar:calendar_backup.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpluggFrontBundle::base_logged_in.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div id=\"content\" style=\"min-height: 834px;\">
        <div class=\"center_content_inner\" style=\"min-height: 829px;\">
            <div id=\"calendar-wrap\">
            <header>
                <a class=\"prev ajax-calendar\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_calendar", array("month" => twig_date_format_filter($this->env, (isset($context["prevDate"]) ? $context["prevDate"] : null), "m"), "year" => twig_date_format_filter($this->env, (isset($context["prevDate"]) ? $context["prevDate"] : null), "Y"))), "html", null, true);
        echo "\">prev</a>
                <h1 class=\"calendar-date\">";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "F Y"), "html", null, true);
        echo "</h1>
                <a class=\"next ajax-calendar\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_calendar", array("month" => twig_date_format_filter($this->env, (isset($context["nextDate"]) ? $context["nextDate"] : null), "m"), "year" => twig_date_format_filter($this->env, (isset($context["nextDate"]) ? $context["nextDate"] : null), "Y"))), "html", null, true);
        echo "\">next</a>
                <span class=\"add-event\"><a class=\"add_event\" rel=\"add_event\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_add_event", array("iframe" => "true", "width" => "500", "height" => "350")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un évènement"), "html", null, true);
        echo "</a></span>
            </header>
            <div class=\"clear\"></div>
            <div id=\"calendar\">
            <ul class=\"weekdays\">
                <li>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lundi"), "html", null, true);
        echo "</li>
                <li>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mardi"), "html", null, true);
        echo "</li>
                <li>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mercredi"), "html", null, true);
        echo "</li>
                <li>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Jeudi"), "html", null, true);
        echo "</li>
                <li>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vendredi"), "html", null, true);
        echo "</li>
                <li>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Samedi"), "html", null, true);
        echo "</li>
                <li>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dimanche"), "html", null, true);
        echo "</li>
            </ul>

            <!-- Days from previous month -->
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 27
            echo "                <ul class=\"days\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["week"]);
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 29
                echo "                        ";
                if ( !twig_test_empty($this->getAttribute($context["day"], "day", array(), "array"))) {
                    // line 30
                    echo "                            <li class=\"day other-month\">
                                <div class=\"date\">";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "day", array(), "array"), "html", null, true);
                    echo "</div>
                                ";
                    // line 32
                    if ($this->getAttribute($context["day"], "events", array(), "array", true, true)) {
                        // line 33
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["day"], "events", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                            // line 34
                            echo "                                        <div class=\"event\">
                                            <div class=\"event-desc\">
                                                ";
                            // line 36
                            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                            echo "
                                            </div>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                ";
                    }
                    // line 41
                    echo "                            </li>

                        ";
                } else {
                    // line 44
                    echo "                            <li class=\"day other-month\"></li>
                        ";
                }
                // line 46
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
            </div><!-- /. calendar -->
            </div><!-- /. wrap -->


            <div class=\"clear\"></div>
        </div>
        <div class=\"clear25\"></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Calendar:calendar_backup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  151 => 47,  145 => 46,  141 => 44,  136 => 41,  133 => 40,  123 => 36,  119 => 34,  114 => 33,  112 => 32,  108 => 31,  105 => 30,  102 => 29,  98 => 28,  95 => 27,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block body %}*/
/* */
/*     <div id="content" style="min-height: 834px;">*/
/*         <div class="center_content_inner" style="min-height: 829px;">*/
/*             <div id="calendar-wrap">*/
/*             <header>*/
/*                 <a class="prev ajax-calendar" href="{{ path("eplugg_calendar", {'month': prevDate|date("m"), 'year': prevDate|date("Y") }) }}">prev</a>*/
/*                 <h1 class="calendar-date">{{ date|date("F Y") }}</h1>*/
/*                 <a class="next ajax-calendar" href="{{ path("eplugg_calendar", {'month': nextDate|date("m"), 'year': nextDate|date("Y") }) }}">next</a>*/
/*                 <span class="add-event"><a class="add_event" rel="add_event"  href="{{ path('eplugg_add_event', {'iframe': 'true', 'width': '500', 'height': '350' }) }}">{{ 'Ajouter un évènement'|trans }}</a></span>*/
/*             </header>*/
/*             <div class="clear"></div>*/
/*             <div id="calendar">*/
/*             <ul class="weekdays">*/
/*                 <li>{{ 'Lundi'|trans }}</li>*/
/*                 <li>{{ 'Mardi'|trans }}</li>*/
/*                 <li>{{ 'Mercredi'|trans }}</li>*/
/*                 <li>{{ 'Jeudi'|trans }}</li>*/
/*                 <li>{{ 'Vendredi'|trans }}</li>*/
/*                 <li>{{ 'Samedi'|trans }}</li>*/
/*                 <li>{{ 'Dimanche'|trans }}</li>*/
/*             </ul>*/
/* */
/*             <!-- Days from previous month -->*/
/*             {% for week in events %}*/
/*                 <ul class="days">*/
/*                     {% for day in week %}*/
/*                         {% if day["day"] is not empty %}*/
/*                             <li class="day other-month">*/
/*                                 <div class="date">{{ day["day"] }}</div>*/
/*                                 {% if day["events"] is  defined %}*/
/*                                     {% for event in day["events"] %}*/
/*                                         <div class="event">*/
/*                                             <div class="event-desc">*/
/*                                                 {{ event.title }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             </li>*/
/* */
/*                         {% else %}*/
/*                             <li class="day other-month"></li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endfor %}*/
/* */
/*             </div><!-- /. calendar -->*/
/*             </div><!-- /. wrap -->*/
/* */
/* */
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */

<?php

/* EpluggFrontBundle:Calendar:calendar.html.twig */
class __TwigTemplate_64f5c86cabeae537ff62d7edbc1a8954b114cec4626a4c9f879fa8903657eef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Calendar:calendar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'more_javascripts' => array($this, 'block_more_javascripts'),
            'more_stylesheets' => array($this, 'block_more_stylesheets'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Calendrier"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-calendar\">
        <div class=\"add-event\">
            <a class=\"add_event\" rel=\"add_event\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_add_event", array("iframe" => "true", "width" => "500", "height" => "350")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un évènement"), "html", null, true);
        echo "</a>
        </div>
        <div style=\"width:100%; max-width:600px; display:inline-block;\">
            <div class=\"monthly\" id=\"mycalendar\"></div>
        </div>
    </div>
";
    }

    // line 14
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/monthly.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>

    <script>
        \$('#mycalendar').monthly({
            mode: 'event',
            xmlUrl: '";
        // line 21
        echo $this->env->getExtension('routing')->getPath("eplugg_xml_events");
        echo "'
        });
    </script>
";
    }

    // line 25
    public function block_more_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/monthly.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

 ";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Calendar:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 25,  73 => 21,  65 => 16,  62 => 15,  59 => 14,  46 => 6,  42 => 4,  39 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Calendrier'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="page-calendar">*/
/*         <div class="add-event">*/
/*             <a class="add_event" rel="add_event"  href="{{ path('eplugg_add_event', {'iframe': 'true', 'width': '500', 'height': '350' }) }}">{{ 'Ajouter un évènement'|trans }}</a>*/
/*         </div>*/
/*         <div style="width:100%; max-width:600px; display:inline-block;">*/
/*             <div class="monthly" id="mycalendar"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block more_javascripts %}*/
/* */
/*     <script src="{{ asset('js/monthly.js') }}" language="javascript" type="text/javascript"></script>*/
/* */
/*     <script>*/
/*         $('#mycalendar').monthly({*/
/*             mode: 'event',*/
/*             xmlUrl: '{{ path('eplugg_xml_events') }}'*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/*  {% block more_stylesheets %}*/
/*      <link href="{{ asset('css/monthly.css') }}" type="text/css" rel="stylesheet">*/
/* */
/*  {% endblock %}*/

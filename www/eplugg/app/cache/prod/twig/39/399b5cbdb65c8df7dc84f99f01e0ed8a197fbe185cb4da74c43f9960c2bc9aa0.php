<?php

/* EpluggFrontBundle:Activity:annuaire_activity.html.twig */
class __TwigTemplate_0023cbf4db2cba59af444d7ba1228d71aa16c989338a63281e815ee57f013f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Activity:annuaire_activity.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'more_javascripts' => array($this, 'block_more_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuaire d’activités"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\" style=\"min-height: 834px;\">
        <div class=\"center_content_inner\" style=\"min-height: 829px;\">
            <div id=\"left_content\">
                ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:leftSidebarConnected"));
        echo "
            </div>
            <div id=\"body_content\">
                <div class=\"titre_plugg search\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuaire d’activité"), "html", null, true);
        echo "</div>
                <div class=\"result_search\" id=\"directory_serach\">
                    <div class=\"input_search\"><input id=\"dir_ct_serach\" data-url=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("search_all_users_activities");
        echo "\" name=\"keys\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Rechercher"), "html", null, true);
        echo "...\" type=\"text\">
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"filtre_alphabet sc_menu\" style=\"overflow: hidden;\">
                    <ul class=\"sc_menu\">
                        <li><a class=\"select\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("search_all_users_activities");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tous"), "html", null, true);
        echo "</a></li>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 20
            echo "                            <li><a class=\"setLetter \"href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_all_users_activities", array("letter" => $context["letter"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["letter"]), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </ul>
                </div>

                <div id=\"dir_ct_list\">

                    ";
        // line 27
        $this->loadTemplate("@EpluggFront/Activity/block_activity_list_annuaire.html.twig", "EpluggFrontBundle:Activity:annuaire_activity.html.twig", 27)->display(array("activities" => (isset($context["activities"]) ? $context["activities"] : null)));
        // line 28
        echo "
                </div>
            </div>
            ";
        // line 31
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Activity:annuaire_activity.html.twig", 31)->display($context);
        // line 32
        echo "            <div class=\"clear\"></div>
        </div>
        <div class=\"clear25\"></div>
    </div>
    ";
        // line 36
        $this->displayBlock('more_javascripts', $context, $blocks);
        // line 52
        echo "



























































";
    }

    // line 36
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuphone/vendor/modernizr.custom.71422.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
        <script>
            \$(function(){
                var div = \$('div.sc_menu'), ul = \$('ul.sc_menu'), ulPadding = 15;
                var divWidth = div.width();
                div.css({overflow: 'hidden'});
                var lastLi = ul.find('li:last-child');
                div.mousemove(function(e){
                    var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;
                    var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
                    div.scrollLeft(left);
                });
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Activity:annuaire_activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 37,  177 => 36,  113 => 52,  111 => 36,  105 => 32,  103 => 31,  98 => 28,  96 => 27,  89 => 22,  78 => 20,  74 => 19,  68 => 18,  57 => 12,  52 => 10,  46 => 7,  41 => 4,  38 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Annuaire d’activités'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*         <div class="center_content_inner" style="min-height: 829px;">*/
/*             <div id="left_content">*/
/*                 {{ render(controller('EpluggFrontBundle:Default:leftSidebarConnected')) }}*/
/*             </div>*/
/*             <div id="body_content">*/
/*                 <div class="titre_plugg search">{{ 'Annuaire d’activité'|trans }}</div>*/
/*                 <div class="result_search" id="directory_serach">*/
/*                     <div class="input_search"><input id="dir_ct_serach" data-url="{{ path('search_all_users_activities') }}" name="keys" placeholder="{{ 'Rechercher'|trans }}..." type="text">*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div class="filtre_alphabet sc_menu" style="overflow: hidden;">*/
/*                     <ul class="sc_menu">*/
/*                         <li><a class="select" href="{{ path('search_all_users_activities') }}">{{ 'Tous'|trans }}</a></li>*/
/*                         {% for letter in 'a'..'z' %}*/
/*                             <li><a class="setLetter "href="{{ path('search_all_users_activities', {'letter':letter}) }}">{{ letter|upper }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <div id="dir_ct_list">*/
/* */
/*                     {% include "@EpluggFront/Activity/block_activity_list_annuaire.html.twig" with {"activities": activities} only %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*             {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/*     {% block more_javascripts %}*/
/*         <script src="{{ asset('js/menuphone/vendor/modernizr.custom.71422.js') }}" language="javascript" type="text/javascript"></script>*/
/*         <script>*/
/*             $(function(){*/
/*                 var div = $('div.sc_menu'), ul = $('ul.sc_menu'), ulPadding = 15;*/
/*                 var divWidth = div.width();*/
/*                 div.css({overflow: 'hidden'});*/
/*                 var lastLi = ul.find('li:last-child');*/
/*                 div.mousemove(function(e){*/
/*                     var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;*/
/*                     var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;*/
/*                     div.scrollLeft(left);*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/

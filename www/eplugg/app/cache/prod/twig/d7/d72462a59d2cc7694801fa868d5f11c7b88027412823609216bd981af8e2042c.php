<?php

/* EpluggFrontBundle:Repertoire:Repertoire.html.twig */
class __TwigTemplate_6138e336aea2ef0aee7ba379ce6dc842e6c952947b9d3fd5a7ad5b89f5ed529d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Repertoire:Repertoire.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Répertoire"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"content\" style=\"min-height: 834px;\">
        <div class=\"center_content_inner\" style=\"min-height: 829px;\">
            <div id=\"left_content\">
                ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:leftSidebarConnected"));
        echo "
            </div>
            <div id=\"body_content\">
                <div class=\"titre_plugg search\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Répertoire"), "html", null, true);
        echo "</div>
                <div class=\"result_search\" id=\"directory_serach\">
                    <div class=\"input_search\"><input id=\"dir_ct_serach\" data-url=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("directory");
        echo "\" name=\"keys\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Rechercher"), "html", null, true);
        echo "...\" type=\"text\">
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"filtre_alphabet sc_menu\" style=\"overflow: hidden;\">
                    <ul class=\"sc_menu\">
                        <li><a class=\"select\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("directory");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tous"), "html", null, true);
        echo "</a></li>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 21
            echo "
                            <li><a class=\"setLetter \"
                                   href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("directory", array("letter" => $context["letter"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["letter"]), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </ul>
                </div>
                
                <div id=\"dir_ct_list\">
                    ";
        // line 29
        $this->loadTemplate("EpluggFrontBundle:Repertoire:Repertoire_bloc_friends.html.twig", "EpluggFrontBundle:Repertoire:Repertoire.html.twig", 29)->display(array("annuaire" => (isset($context["annuaire"]) ? $context["annuaire"] : null)));
        // line 30
        echo "

                </div>
            </div>
            ";
        // line 34
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Repertoire:Repertoire.html.twig", 34)->display($context);
        // line 35
        echo "            <div class=\"clear\"></div>
        </div>
        <div class=\"clear25\"></div>
    </div>
    ";
        // line 39
        $this->displayBlock('more_javascripts', $context, $blocks);
        // line 55
        echo "



























































";
    }

    // line 39
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 40
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
        return "EpluggFrontBundle:Repertoire:Repertoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 40,  180 => 39,  116 => 55,  114 => 39,  108 => 35,  106 => 34,  100 => 30,  98 => 29,  92 => 25,  82 => 23,  78 => 21,  74 => 20,  68 => 19,  57 => 13,  52 => 11,  46 => 8,  41 => 5,  38 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Répertoire'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*         <div class="center_content_inner" style="min-height: 829px;">*/
/*             <div id="left_content">*/
/*                 {{ render(controller('EpluggFrontBundle:Default:leftSidebarConnected')) }}*/
/*             </div>*/
/*             <div id="body_content">*/
/*                 <div class="titre_plugg search">{{ 'Répertoire'|trans }}</div>*/
/*                 <div class="result_search" id="directory_serach">*/
/*                     <div class="input_search"><input id="dir_ct_serach" data-url="{{ path('directory') }}" name="keys" placeholder="{{ 'Rechercher'|trans }}..." type="text">*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div class="filtre_alphabet sc_menu" style="overflow: hidden;">*/
/*                     <ul class="sc_menu">*/
/*                         <li><a class="select" href="{{ path('directory') }}">{{ 'Tous'|trans }}</a></li>*/
/*                         {% for letter in 'a'..'z' %}*/
/* */
/*                             <li><a class="setLetter "*/
/*                                    href="{{ path('directory', {'letter':letter}) }}">{{ letter|upper }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 */
/*                 <div id="dir_ct_list">*/
/*                     {% include "EpluggFrontBundle:Repertoire:Repertoire_bloc_friends.html.twig" with {"annuaire": annuaire} only %}*/
/* */
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

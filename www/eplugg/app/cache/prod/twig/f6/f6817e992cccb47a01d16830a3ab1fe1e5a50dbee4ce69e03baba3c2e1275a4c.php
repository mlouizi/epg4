<?php

/* EpluggFrontBundle:Activity:activity.html.twig */
class __TwigTemplate_a523a7266c9292408eab12588a1ba79969ec3ce5737926a1e1f4ea5287d5dc5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Activity:activity.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Activité"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name_activity"]) ? $context["name_activity"] : null), "html", null, true);
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
                <div class=\"titre_plugg\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name_activity"]) ? $context["name_activity"] : null), "html", null, true);
        echo "</div>
                <div id=\"content_infinity\">

                    <div class=\"item_infinity\">

                        ";
        // line 16
        $this->loadTemplate("@EpluggFront/Activity/bloc_friends_activity.html.twig", "EpluggFrontBundle:Activity:activity.html.twig", 16)->display(array("annuaire" => (isset($context["annuaire"]) ? $context["annuaire"] : null), "name_activity" => (isset($context["name_activity"]) ? $context["name_activity"] : null)));
        // line 17
        echo "                        <a id=\"next\" href=\"?page=0\"></a>

                    </div>

                </div>

            </div>
            ";
        // line 24
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Activity:activity.html.twig", 24)->display($context);
        // line 25
        echo "            <div class=\"clear\"></div>
        </div>
        <div class=\"clear25\"></div>
    </div>




";
    }

    // line 34
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.infinitescroll.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#content_infinity').infinitescroll(
                    {
                        navSelector: \"#next:last\",
                        nextSelector: \"a#next:last\",
                        itemSelector: \"#content_infinity div.item_infinity\",
                        dataType: 'html',
                        maxPage: 3,
                        path: function (index) {
                            return \"?page=\" + index;
                        }
                    },
                    function (newElements, data, url) {
                        \$('.tooltip').darkTooltip({animation: 'flipIn', gravity: 'east', theme: 'light'});
                        intPretty();
                    }
            );
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Activity:activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  87 => 34,  75 => 25,  73 => 24,  64 => 17,  62 => 16,  54 => 11,  48 => 8,  43 => 5,  40 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Activité'|trans }} {{ name_activity }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*         <div class="center_content_inner" style="min-height: 829px;">*/
/*             <div id="left_content">*/
/*                 {{ render(controller('EpluggFrontBundle:Default:leftSidebarConnected')) }}*/
/*             </div>*/
/*             <div id="body_content">*/
/*                 <div class="titre_plugg">{{ name_activity }}</div>*/
/*                 <div id="content_infinity">*/
/* */
/*                     <div class="item_infinity">*/
/* */
/*                         {% include "@EpluggFront/Activity/bloc_friends_activity.html.twig" with {"annuaire": annuaire, 'name_activity': name_activity} only %}*/
/*                         <a id="next" href="?page=0"></a>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*             {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* {% block more_javascripts %}*/
/*     <script src="{{ asset('js/jquery.infinitescroll.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript">*/
/*         $(document).ready(function() {*/
/*             $('#content_infinity').infinitescroll(*/
/*                     {*/
/*                         navSelector: "#next:last",*/
/*                         nextSelector: "a#next:last",*/
/*                         itemSelector: "#content_infinity div.item_infinity",*/
/*                         dataType: 'html',*/
/*                         maxPage: 3,*/
/*                         path: function (index) {*/
/*                             return "?page=" + index;*/
/*                         }*/
/*                     },*/
/*                     function (newElements, data, url) {*/
/*                         $('.tooltip').darkTooltip({animation: 'flipIn', gravity: 'east', theme: 'light'});*/
/*                         intPretty();*/
/*                     }*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/

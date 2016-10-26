<?php

/* EpluggFrontBundle:Suggestion:suggested_list_auto.html.twig */
class __TwigTemplate_b9ada1557e3d772ece74dd98782a7eb92d511e094f2c4b001bfffe8c3d6adba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Suggestion:suggested_list_auto.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suggestion"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"content\">
        <div class=\"center_content_inner\">

            ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:leftSidebarConnected"));
        echo "

            <div id=\"body_content\">
                ";
        // line 11
        if ( !twig_test_empty((isset($context["users"]) ? $context["users"] : null))) {
            // line 12
            echo "                    <div class=\"titre_plugg search\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Résultats de la recherche"), "html", null, true);
            echo "</div>
                    <div id=\"content_infinity\">
                        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 15
                echo "                            <div class=\"item_infinity\">
                            <div class=\"bloc_user\">

                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"infobull_div tooltip\"></a>
                                <div class=\"im_connais\">
                                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"tooltip\">
                                        <img width=\"37\" height=\"37\" alt=\"\" src=\"";
                // line 21
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\">
                                    </a>
                                </div>
                                <div class=\"des_connais\">
                                    <strong> <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"tooltip\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "lastName", array()), "html", null, true);
                echo "</a></strong>
                                    ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "job", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"ferme_connais\">
                                    <div class=\"fermer_connais\"><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_ignore_user", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\" class=\"ignore-user\">X</a></div>
                                    <a rel=\"mutual_friend\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_common_firends", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()), "iframe" => "true", "width" => "400")), "html", null, true);
                echo "\" class=\"nb_vue_\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], 1, array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], 1, array(), "array"), "html", null, true);
                echo "</span></a>
                                </div>
                                <div class=\"clear5\"></div>
                            </div>
                            <div id=\"html-content";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">
                                <div onclick=\"window.location.href='";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "'\" id=\"card_eplugg\">
                                    <div class=\"yellow\"><img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
                echo "\"></div>
                                    <div id=\"card_user\">
                                        <div class=\"img_profil\"><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\"><img width=\"48\" height=\"48\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"></a></div>
                                        <div class=\"descp_card\">
                                            <div class=\"name_user\"> <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "lastName", array()), "html", null, true);
                echo "</a> </div>
                                            <div class=\"job_user\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "job", array()), "html", null, true);
                echo "</div>
                                        </div>
                                        <div class=\"clear\"></div>
                                    </div>
                                    <div id=\"card_company\">
                                        <div class=\"img_profil\">
                                            <a href=\"/";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\">
                                                <img width=\"51\" height=\"51\" src=\"";
                // line 48
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "CompanyAvatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
                    echo " ";
                }
                echo "\">
                                            </a>
                                        </div>
                                        <div class=\"descp_card\">
                                            <div class=\"company_user\"><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "companyName", array()), "html", null, true);
                echo "</a></div>
                                            <div class=\"tag_company\">
                                                ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "getActivitiesFormatted", array()), "html", null, true);
                echo "
                                            </div>
                                            <div class=\"lieu_company\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "companyAddress", array()), "html", null, true);
                echo "</div>
                                        </div>
                                        <div class=\"clear\"></div>
                                    </div>
                                </div>
                                <div class=\"plugg_link info_card\">
                                    <a onclick=\"Plugger(this, 0)\" data-id=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
                echo "</a>

                                    <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["user"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
                echo "</a>
                                </div>
                            </div>
                        </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "
                        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_suggest_page_auto", array("page" => (isset($context["next"]) ? $context["next"] : null))), "html", null, true);
            echo "\" id=\"next\"></a>
                    </div>
                ";
        }
        // line 74
        echo "            </div>
            ";
        // line 75
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Suggestion:suggested_list_auto.html.twig", 75)->display($context);
        // line 76
        echo "            <div class=\"clear\"></div>

        </div>
        <div class=\"clear25\"></div>
    </div>
";
    }

    // line 82
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.infinitescroll.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\">
        \$('#content_infinity').infinitescroll(
                {
                    navSelector:\"#next:last\",
                    nextSelector:\"a#next:last\",
                    itemSelector:\"#content_infinity div.item_infinity\",
                    dataType:'html',
                    maxPage:3,
                    path:function(index) { return \"?page=\" + index ; }
                },
                function(newElements, data, url){
                    \$('.tooltip').darkTooltip({animation:'flipIn', gravity:'east', theme:'light'});
                    intPretty() ;
                }
        );
    </script>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Suggestion:suggested_list_auto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 83,  256 => 82,  247 => 76,  245 => 75,  242 => 74,  236 => 71,  233 => 70,  219 => 64,  212 => 62,  203 => 56,  198 => 54,  191 => 52,  177 => 48,  173 => 47,  164 => 41,  156 => 40,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  116 => 30,  112 => 29,  106 => 26,  96 => 25,  82 => 21,  76 => 20,  69 => 18,  64 => 15,  60 => 14,  54 => 12,  52 => 11,  46 => 8,  41 => 5,  38 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Suggestion'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content">*/
/*         <div class="center_content_inner">*/
/* */
/*             {{ render(controller('EpluggFrontBundle:Default:leftSidebarConnected')) }}*/
/* */
/*             <div id="body_content">*/
/*                 {% if users is not empty %}*/
/*                     <div class="titre_plugg search">{{ 'Résultats de la recherche'|trans }}</div>*/
/*                     <div id="content_infinity">*/
/*                         {% for user in users %}*/
/*                             <div class="item_infinity">*/
/*                             <div class="bloc_user">*/
/* */
/*                                 <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}" data-tooltip="#html-content{{ user[0].id }}" class="infobull_div tooltip"></a>*/
/*                                 <div class="im_connais">*/
/*                                     <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}" data-tooltip="#html-content{{ user[0].id }}" class="tooltip">*/
/*                                         <img width="37" height="37" alt="" src="{% if user[0].avatar is not empty %} {{ asset(user[0].avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="des_connais">*/
/*                                     <strong> <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}" data-tooltip="#html-content{{ user[0].id }}" class="tooltip">{{ user[0].firstName }} {{ user[0].lastName }}</a></strong>*/
/*                                     {{ user[0].job }}*/
/*                                 </div>*/
/*                                 <div class="ferme_connais">*/
/*                                     <div class="fermer_connais"><a href="{{  path('eplugg_ignore_user', {'uid': user[0].id }) }}" class="ignore-user">X</a></div>*/
/*                                     <a rel="mutual_friend" href="{{ path('eplugg_common_firends', {'uid': user[0].id, 'iframe': 'true', 'width': '400'}) }}" class="nb_vue_" title="{{ user[1] }} {{ 'Contacts en commun'|trans }}"><span>{{ user[1] }}</span></a>*/
/*                                 </div>*/
/*                                 <div class="clear5"></div>*/
/*                             </div>*/
/*                             <div id="html-content{{ user[0].id }}" style="display:none;">*/
/*                                 <div onclick="window.location.href='{{ path('eplugg_profile_page', {'uid': user[0].id }) }}'" id="card_eplugg">*/
/*                                     <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                                     <div id="card_user">*/
/*                                         <div class="img_profil"><a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}"><img width="48" height="48" alt="" src="{% if user[0].avatar is not empty %} {{ asset(user[0].avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a></div>*/
/*                                         <div class="descp_card">*/
/*                                             <div class="name_user"> <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">{{ user[0].firstName }} {{ user[0].lastName }}</a> </div>*/
/*                                             <div class="job_user">{{ user[0].job }}</div>*/
/*                                         </div>*/
/*                                         <div class="clear"></div>*/
/*                                     </div>*/
/*                                     <div id="card_company">*/
/*                                         <div class="img_profil">*/
/*                                             <a href="/{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">*/
/*                                                 <img width="51" height="51" src="{% if  user[0].CompanyAvatar is not empty %} {{ asset( user[0].CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}">*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <div class="descp_card">*/
/*                                             <div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">{{ user[0].companyName }}</a></div>*/
/*                                             <div class="tag_company">*/
/*                                                 {{ user[0].getActivitiesFormatted }}*/
/*                                             </div>*/
/*                                             <div class="lieu_company">{{ user[0].companyAddress }}</div>*/
/*                                         </div>*/
/*                                         <div class="clear"></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="plugg_link info_card">*/
/*                                     <a onclick="Plugger(this, 0)" data-id="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">{{ 'Plugger'|trans }}</a>*/
/* */
/*                                     <a href="{{ path('eplugg_messages_user', {'uid': user[0].id } ) }}">{{ 'Message'|trans }}</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {% endfor %}*/
/* */
/*                         <a href="{{ path('eplugg_suggest_page_auto', {'page': next } ) }}" id="next"></a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/*             <div class="clear"></div>*/
/* */
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block more_javascripts %}*/
/*     <script src="{{ asset('js/jquery.infinitescroll.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript">*/
/*         $('#content_infinity').infinitescroll(*/
/*                 {*/
/*                     navSelector:"#next:last",*/
/*                     nextSelector:"a#next:last",*/
/*                     itemSelector:"#content_infinity div.item_infinity",*/
/*                     dataType:'html',*/
/*                     maxPage:3,*/
/*                     path:function(index) { return "?page=" + index ; }*/
/*                 },*/
/*                 function(newElements, data, url){*/
/*                     $('.tooltip').darkTooltip({animation:'flipIn', gravity:'east', theme:'light'});*/
/*                     intPretty() ;*/
/*                 }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/

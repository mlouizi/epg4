<?php

/* EpluggFrontBundle:Search:search_page.html.twig */
class __TwigTemplate_bf9884632fee970c5ffc34e14555c9e5ad34d44cadff9eec137373fbbdb04535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Search:search_page.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche"), "html", null, true);
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
                    <div class=\"result_search\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Résultats"), "html", null, true);
            echo "
                        <div class=\"right_search\">
                            <a ";
            // line 16
            if ( !(isset($context["directory"]) ? $context["directory"] : null)) {
                echo "class=\"selected\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("directory" => "0"))), "html", null, true);
            echo "\">All community </a>
                            <a ";
            // line 17
            if ((isset($context["directory"]) ? $context["directory"] : null)) {
                echo "class=\"selected\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("directory" => "1"))), "html", null, true);
            echo "\">My contacts </a>
                        </div>
                        <div style=\"clear:both\"></div>
                    </div>
                    <div id=\"content_infinity\">
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 23
                echo "                            <div class=\"item_infinity\">
                                <div class=\"bloc_user\">

                                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"infobull_div tooltip\"></a>
                                    <div class=\"im_connais\">
                                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"tooltip\">
                                            <img width=\"37\" height=\"37\" alt=\"\" src=\"";
                // line 29
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "avatar", array()), "croppedWebPath", array())), "html", null, true);
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
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" class=\"tooltip\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "lastName", array()), "html", null, true);
                echo "</a></strong>
                                        ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "job", array()), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"ferme_connais\">
                                        <a rel=\"mutual_friend\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_common_firends", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()), "iframe" => "true", "width" => "400")), "html", null, true);
                echo "\" class=\"nb_vue_\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "common_friends", array(), "array"), "html", null, true);
                echo " Contacts en commun\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "common_friends", array(), "array"), "html", null, true);
                echo "</span></a>
                                    </div>
                                    <div class=\"clear5\"></div>
                                </div>
                                <div id=\"html-content";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">
                                    <div onclick=\"window.location.href='";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "'\" id=\"card_eplugg\">
                                        <div class=\"yellow\"><img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
                echo "\"></div>
                                        <div id=\"card_user\">
                                            <div class=\"img_profil\"><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\"><img width=\"48\" height=\"48\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"></a></div>
                                            <div class=\"descp_card\">
                                                <div class=\"name_user\"> <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "lastName", array()), "html", null, true);
                echo "</a> </div>
                                                <div class=\"job_user\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "job", array()), "html", null, true);
                echo "</div>
                                            </div>
                                            <div class=\"clear\"></div>
                                        </div>
                                        <div id=\"card_company\">
                                            <div class=\"img_profil\">
                                                <a href=\"/";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\">
                                                    <img width=\"51\" height=\"51\" src=\"";
                // line 55
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "CompanyAvatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
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
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "companyName", array()), "html", null, true);
                echo "</a></div>
                                                <div class=\"tag_company\">
                                                    ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "companyActivity", array()), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"lieu_company\">";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "companyAddress", array()), "html", null, true);
                echo "</div>
                                            </div>
                                            <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                    <div class=\"plugg_link info_card\">
                                        <a onclick=\"Plugger(this, 0)\" data-id=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\">Plugger</a>

                                        <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["user"], "user", array(), "array"), "id", array()))), "html", null, true);
                echo "\">Message</a>
                                    </div>
                                </div>
                            </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_suggest_page_auto", array("page" => (isset($context["next"]) ? $context["next"] : null))), "html", null, true);
            echo "\" id=\"next\" data-search=\"";
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
            echo "\"></a>
                    </div>
                ";
        }
        // line 81
        echo "            </div>
            ";
        // line 82
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Search:search_page.html.twig", 82)->display($context);
        // line 83
        echo "            <div class=\"clear\"></div>

        </div>
        <div class=\"clear25\"></div>
    </div>
";
    }

    // line 89
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 90
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
                            return \"?page=\" + index + \"&topSearchInput=";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "&directory=";
        echo twig_escape_filter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true);
        echo "\";
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
        return "EpluggFrontBundle:Search:search_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 101,  278 => 90,  275 => 89,  266 => 83,  264 => 82,  261 => 81,  253 => 78,  250 => 77,  238 => 71,  233 => 69,  224 => 63,  219 => 61,  212 => 59,  198 => 55,  194 => 54,  185 => 48,  177 => 47,  163 => 45,  158 => 43,  154 => 42,  150 => 41,  139 => 37,  133 => 34,  123 => 33,  109 => 29,  103 => 28,  96 => 26,  91 => 23,  87 => 22,  75 => 17,  67 => 16,  60 => 14,  54 => 12,  52 => 11,  46 => 8,  41 => 5,  38 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Recherche'|trans }}{% endblock %}*/
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
/*                     <div class="result_search">*/
/*                         {{ total }} {{ 'Résultats'|trans }}*/
/*                         <div class="right_search">*/
/*                             <a {% if not directory %}class="selected"{% endif %} href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'directory': '0'})) }}">All community </a>*/
/*                             <a {% if directory %}class="selected"{% endif %} href="{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'directory': '1'})) }}">My contacts </a>*/
/*                         </div>*/
/*                         <div style="clear:both"></div>*/
/*                     </div>*/
/*                     <div id="content_infinity">*/
/*                         {% for user in users %}*/
/*                             <div class="item_infinity">*/
/*                                 <div class="bloc_user">*/
/* */
/*                                     <a href="{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}" data-tooltip="#html-content{{ user['user'].id }}" class="infobull_div tooltip"></a>*/
/*                                     <div class="im_connais">*/
/*                                         <a href="{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}" data-tooltip="#html-content{{ user['user'].id }}" class="tooltip">*/
/*                                             <img width="37" height="37" alt="" src="{% if user['user'].avatar is not empty %} {{ asset(user['user'].avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <div class="des_connais">*/
/*                                         <strong> <a href="{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}" data-tooltip="#html-content{{ user['user'].id }}" class="tooltip">{{ user['user'].firstName }} {{ user['user'].lastName }}</a></strong>*/
/*                                         {{ user['user'].job }}*/
/*                                     </div>*/
/*                                     <div class="ferme_connais">*/
/*                                         <a rel="mutual_friend" href="{{ path('eplugg_common_firends', {'uid': user['user'].id, 'iframe': 'true', 'width': '400'}) }}" class="nb_vue_" title="{{ user['common_friends'] }} Contacts en commun"><span>{{ user['common_friends'] }}</span></a>*/
/*                                     </div>*/
/*                                     <div class="clear5"></div>*/
/*                                 </div>*/
/*                                 <div id="html-content{{ user['user'].id }}" style="display:none;">*/
/*                                     <div onclick="window.location.href='{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}'" id="card_eplugg">*/
/*                                         <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                                         <div id="card_user">*/
/*                                             <div class="img_profil"><a href="{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}"><img width="48" height="48" alt="" src="{% if user['user'].avatar is not empty %} {{ asset(user['user'].avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a></div>*/
/*                                             <div class="descp_card">*/
/*                                                 <div class="name_user"> <a href="{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}">{{ user['user'].firstName }} {{ user['user'].lastName }}</a> </div>*/
/*                                                 <div class="job_user">{{ user['user'].job }}</div>*/
/*                                             </div>*/
/*                                             <div class="clear"></div>*/
/*                                         </div>*/
/*                                         <div id="card_company">*/
/*                                             <div class="img_profil">*/
/*                                                 <a href="/{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}">*/
/*                                                     <img width="51" height="51" src="{% if  user['user'].CompanyAvatar is not empty %} {{ asset( user['user'].CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}">*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div class="descp_card">*/
/*                                                 <div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}">{{ user['user'].companyName }}</a></div>*/
/*                                                 <div class="tag_company">*/
/*                                                     {{ user['user'].companyActivity }}*/
/*                                                 </div>*/
/*                                                 <div class="lieu_company">{{ user['user'].companyAddress }}</div>*/
/*                                             </div>*/
/*                                             <div class="clear"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="plugg_link info_card">*/
/*                                         <a onclick="Plugger(this, 0)" data-id="{{ path('eplugg_profile_page', {'uid': user['user'].id }) }}">Plugger</a>*/
/* */
/*                                         <a href="{{ path('eplugg_messages_user', {'uid': user['user'].id } ) }}">Message</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         {% endfor %}*/
/* */
/*                         <a href="{{ path('eplugg_suggest_page_auto', {'page': next } ) }}" id="next" data-search="{{ search }}"></a>*/
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
/*         $(document).ready(function() {*/
/*             $('#content_infinity').infinitescroll(*/
/*                     {*/
/*                         navSelector: "#next:last",*/
/*                         nextSelector: "a#next:last",*/
/*                         itemSelector: "#content_infinity div.item_infinity",*/
/*                         dataType: 'html',*/
/*                         maxPage: 3,*/
/*                         path: function (index) {*/
/*                             return "?page=" + index + "&topSearchInput={{ search }}&directory={{ directory }}";*/
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

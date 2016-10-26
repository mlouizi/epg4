<?php

/* EpluggFrontBundle:logged_in:header.html.twig */
class __TwigTemplate_6dcf0d533ac0a15fb00e586db1c235bfb24ab54745815e95ea384383f1480c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'lang' => array($this, 'block_lang'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"header\">
    <div class=\"center_content\">
        <div id=\"logo\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("eplugg_front_homepage");
        echo "\"><img alt=\"\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"></a></div>
        <div style=\"width: 400px;\" id=\"search\">
            <div class=\"jautocomplete layout-3\" data-url=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("search_users");
        echo "\" style=\"width: 450px;\" id=\"jautocomplete\">
                <div data-type=\"actions\" class=\"box ja-actions\">
                    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("search_users_page");
        echo "\" id=\"topSearchFORM\" method=\"GET\">
                        <input type=\"text\" autocomplete=\"off\" id=\"topSearchInput\" data-type=\"tb\" name=\"topSearchInput\" class=\"ja-tb\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name, City, Activity, Locations, Trades"), "html", null, true);
        echo " ...\">
                        <input type=\"hidden\" name=\"topSearch\" value=\"1\">
                        <button class=\"btn_searchTop\"></button>
                    </form>
                </div>
                ";
        // line 36
        echo "
                    <script id=\"jautocompleteTemplate\" type=\"text/x-jsrender\">
                        <div class=\"jautocomplete-box\">
                            <div classs=\"box\">
                                {{for data}}
                                <a href=\"{{>profile_url}}\" title=\"\" data-type=\"item\">
                                    <div class=\"item\">
                                        <div class=\"box\">
                                            <div class=\"img\"><p><img src=\"{{>user_picture}}\" alt=\"\" title=\"\" /></p></div>
                                            <div class=\"data\">
                                                <div class=\"box\">
                                                    <p class=\"title\">{{>firstname}} {{>lastname}}</p>
                                                    <p class=\"desc\">{{>job}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                {{/for}}
                            </div>
                            <div class=\"box\"><p class=\"footer\"><a onclick=\"\$('#topSearchFORM').submit();\">{{ 'Voir plus de résultats'|trans }} &raquo;</a></p></div>
                        </div>
                    </script>
                ";
        echo "
            </div>
        </div>

        <div style=\"margin: 17px 0 0 10px; float: right;\" class=\"cat_search\">
            <a style=\"color: #ffffff;\" id=\"lang_link\" data-url=\"\"><span id=\"cat_label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["originalRequest"]) ? $context["originalRequest"] : null), "locale", array()), "html", null, true);
        echo " </span></a>
            <a style=\"  display: inline-block;width: 20px;cursor: pointer;text-align: right\" id=\"btn_cat\"><img alt=\"\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow.png"), "html", null, true);
        echo "\"></a>
            <div class=\"souscat\">
                ";
        // line 44
        $this->displayBlock('lang', $context, $blocks);
        // line 50
        echo "            </div>
        </div>
        <div id=\"menu_profile\">
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">
                <img width=\"35\" height=\"33\" alt=\"\" src=\"";
        // line 54
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\">
                <span><img alt=\"\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/puce_profile.png"), "html", null, true);
        echo "\"></span>
            </a>
            <div class=\"submenu\">
                <ul>
                    <li><a rel=\"setting\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password", array("iframe" => "true", "width" => "500", "height" => "280")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/tools.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paramètres du compte"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logout.png"), "html", null, true);
        echo "\"> Logout</a></li>
                </ul>
            </div>
        </div>

        <div id=\"icone_header\">
            <ul>
                <li><a title=\"Répertoire\" id=\"localization\" href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("eplugg_localize");
        echo "\"><span></span></a></li>
                <li>
                    <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("eplugg_calendar");
        echo "\" title=\"Calendar\" id=\"cal\"><span>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["events"]) ? $context["events"] : null)), "html", null, true);
        echo "</span></a>
                </li>
                <li>
                    <a title=\"Message\" id=\"mssg\"><span>";
        // line 72
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)), "html", null, true);
        echo "</span></a>
                    <div style=\"display:none\">
                        <div id=\"contentMessage\">
                            <div style=\"overflow-y:auto; max-height:400px;\">
                            <div style=\"overflow-y:auto; max-height:400px;\">
                                ";
        // line 77
        if ( !twig_test_empty((isset($context["messagesSummary"]) ? $context["messagesSummary"] : null))) {
            // line 78
            echo "                                    <div class=\"bloc_user\">
                                        <a style=\"cursor: pointer;\" class=\"infobull_div\" data-tooltip=\"#html-content5\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute((isset($context["messagesSummary"]) ? $context["messagesSummary"] : null), "source", array()), "id", array()))), "html", null, true);
            echo "\"></a>
                                        <div class=\"im_connais\"><img width=\"37\" height=\"37\" src=\"";
            // line 80
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["messagesSummary"]) ? $context["messagesSummary"] : null), "source", array()), "avatar", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["messagesSummary"]) ? $context["messagesSummary"] : null), "source", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"\"></div>
                                        <div class=\"des_connais\">
                                            <strong><a>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messagesSummary"]) ? $context["messagesSummary"] : null), "source", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messagesSummary"]) ? $context["messagesSummary"] : null), "source", array()), "lastName", array()), "html", null, true);
            echo "</a></strong>
                                            ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messagesSummary"]) ? $context["messagesSummary"] : null), "body", array()), "html", null, true);
            echo "
                                        </div>
                                        <div class=\"clear5\"></div>
                                    </div>
                                ";
        }
        // line 88
        echo "
                            </div>

                            <div class=\"popModal_footer\"><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("eplugg_messages");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Afficher tout"), "html", null, true);
        echo "</a></div>
                        </div>
                    </div>
                </li>
                <li><a title=\"Répertoire\" id=\"rep\" href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("directory");
        echo "\"><span></span></a></li>
                <li>
                    <a title=\"Invitations\" id=\"invite\"><span>";
        // line 97
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["invitations"]) ? $context["invitations"] : null)), "html", null, true);
        echo "</span></a>
                    <div style=\"display:none;\">
                        <div style=\"width:298px;\" id=\"contentInvitations\">
                            <div style=\"overflow-y:auto; max-height:400px;\">
                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invitationsSummary"]) ? $context["invitationsSummary"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
            // line 102
            echo "                                    <div class=\"bloc_user\"> <a style=\"cursor: pointer;\" class=\"infobull_div\" data-tooltip=\"#html-content5\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
            echo "\"></a>
                                        <div class=\"im_connais\"><img width=\"37\" height=\"37\" src=\"";
            // line 103
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "avatar", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"\"></div>
                                        <div class=\"des_connais\"><strong><a>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "lastName", array()), "html", null, true);
            echo "</a></strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "job", array()), "html", null, true);
            echo "</div>
                                        <div class=\"clear5\"></div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invitation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Suggestion:suggestedNotificationBlock"));
        echo "

                            </div>
                            <div class=\"popModal_footer\"><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("eplugg_invitations");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Afficher tout"), "html", null, true);
        echo "</a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class=\"clear\"></div>
    </div>
</div>";
    }

    // line 44
    public function block_lang($context, array $blocks = array())
    {
        // line 45
        echo "                <ul>
                    <li><a data-lang=\"en\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["originalRequest"]) ? $context["originalRequest"] : null), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute((isset($context["originalRequest"]) ? $context["originalRequest"] : null), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("en"), "html", null, true);
        echo "</a></li>
                    <li><a data-lang=\"fr\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["originalRequest"]) ? $context["originalRequest"] : null), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute((isset($context["originalRequest"]) ? $context["originalRequest"] : null), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fr"), "html", null, true);
        echo "</a></li>
                </ul>
                ";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:logged_in:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 47,  282 => 46,  279 => 45,  276 => 44,  260 => 111,  253 => 108,  239 => 104,  228 => 103,  223 => 102,  219 => 101,  212 => 97,  207 => 95,  198 => 91,  193 => 88,  185 => 83,  179 => 82,  167 => 80,  163 => 79,  160 => 78,  158 => 77,  150 => 72,  142 => 69,  137 => 67,  125 => 60,  117 => 59,  110 => 55,  99 => 54,  95 => 53,  90 => 50,  88 => 44,  83 => 42,  79 => 41,  48 => 36,  40 => 8,  36 => 7,  31 => 5,  24 => 3,  20 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="center_content">*/
/*         <div id="logo"><a href="{{ path('eplugg_front_homepage') }}"><img alt="" src="{{ asset('images/logo.png') }}"></a></div>*/
/*         <div style="width: 400px;" id="search">*/
/*             <div class="jautocomplete layout-3" data-url="{{ path('search_users') }}" style="width: 450px;" id="jautocomplete">*/
/*                 <div data-type="actions" class="box ja-actions">*/
/*                     <form action="{{ path('search_users_page') }}" id="topSearchFORM" method="GET">*/
/*                         <input type="text" autocomplete="off" id="topSearchInput" data-type="tb" name="topSearchInput" class="ja-tb" placeholder="{{ 'Name, City, Activity, Locations, Trades'|trans }} ...">*/
/*                         <input type="hidden" name="topSearch" value="1">*/
/*                         <button class="btn_searchTop"></button>*/
/*                     </form>*/
/*                 </div>*/
/*                 {% raw %}*/
/*                     <script id="jautocompleteTemplate" type="text/x-jsrender">*/
/*                         <div class="jautocomplete-box">*/
/*                             <div classs="box">*/
/*                                 {{for data}}*/
/*                                 <a href="{{>profile_url}}" title="" data-type="item">*/
/*                                     <div class="item">*/
/*                                         <div class="box">*/
/*                                             <div class="img"><p><img src="{{>user_picture}}" alt="" title="" /></p></div>*/
/*                                             <div class="data">*/
/*                                                 <div class="box">*/
/*                                                     <p class="title">{{>firstname}} {{>lastname}}</p>*/
/*                                                     <p class="desc">{{>job}}</p>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                                 {{/for}}*/
/*                             </div>*/
/*                             <div class="box"><p class="footer"><a onclick="$('#topSearchFORM').submit();">{{ 'Voir plus de résultats'|trans }} &raquo;</a></p></div>*/
/*                         </div>*/
/*                     </script>*/
/*                 {% endraw %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div style="margin: 17px 0 0 10px; float: right;" class="cat_search">*/
/*             <a style="color: #ffffff;" id="lang_link" data-url=""><span id="cat_label">{{ originalRequest.locale }} </span></a>*/
/*             <a style="  display: inline-block;width: 20px;cursor: pointer;text-align: right" id="btn_cat"><img alt="" src="{{ asset('images/arrow.png') }}"></a>*/
/*             <div class="souscat">*/
/*                 {% block lang %}*/
/*                 <ul>*/
/*                     <li><a data-lang="en" href="{{ path(originalRequest.get('_route'), originalRequest.get('_route_params')|merge({'_locale': 'en'})) }}">{{ 'en'|trans }}</a></li>*/
/*                     <li><a data-lang="fr" href="{{ path(originalRequest.get('_route'), originalRequest.get('_route_params')|merge({'_locale': 'fr'})) }}">{{ 'fr'|trans }}</a></li>*/
/*                 </ul>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu_profile">*/
/*             <a href="{{ path('fos_user_profile_show') }}">*/
/*                 <img width="35" height="33" alt="" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*                 <span><img alt="" src="{{ asset('images/puce_profile.png') }}"></span>*/
/*             </a>*/
/*             <div class="submenu">*/
/*                 <ul>*/
/*                     <li><a rel="setting" href="{{ path('fos_user_change_password', {'iframe': 'true', 'width': '500', 'height': '280' }) }}"><img src="{{ asset('images/tools.png') }}"> {{ 'Paramètres du compte'|trans }}</a></li>*/
/*                     <li><a href="{{ path('fos_user_security_logout') }}"><img src="{{ asset('images/logout.png') }}"> Logout</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id="icone_header">*/
/*             <ul>*/
/*                 <li><a title="Répertoire" id="localization" href="{{ path('eplugg_localize') }}"><span></span></a></li>*/
/*                 <li>*/
/*                     <a href="{{ path('eplugg_calendar') }}" title="Calendar" id="cal"><span>{{ events|length }}</span></a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a title="Message" id="mssg"><span>{{ messages|length }}</span></a>*/
/*                     <div style="display:none">*/
/*                         <div id="contentMessage">*/
/*                             <div style="overflow-y:auto; max-height:400px;">*/
/*                             <div style="overflow-y:auto; max-height:400px;">*/
/*                                 {% if messagesSummary is not empty %}*/
/*                                     <div class="bloc_user">*/
/*                                         <a style="cursor: pointer;" class="infobull_div" data-tooltip="#html-content5" href="{{ path('eplugg_messages_user', {'uid': messagesSummary.source.id }) }}"></a>*/
/*                                         <div class="im_connais"><img width="37" height="37" src="{% if messagesSummary.source.avatar is not empty %} {{ asset(messagesSummary.source.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" alt=""></div>*/
/*                                         <div class="des_connais">*/
/*                                             <strong><a>{{ messagesSummary.source.firstName }} {{ messagesSummary.source.lastName }}</a></strong>*/
/*                                             {{ messagesSummary.body }}*/
/*                                         </div>*/
/*                                         <div class="clear5"></div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/* */
/*                             </div>*/
/* */
/*                             <div class="popModal_footer"><a href="{{ path('eplugg_messages') }}">{{ 'Afficher tout'|trans }}</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li><a title="Répertoire" id="rep" href="{{ path('directory') }}"><span></span></a></li>*/
/*                 <li>*/
/*                     <a title="Invitations" id="invite"><span>{{ invitations|length }}</span></a>*/
/*                     <div style="display:none;">*/
/*                         <div style="width:298px;" id="contentInvitations">*/
/*                             <div style="overflow-y:auto; max-height:400px;">*/
/*                                 {% for invitation in invitationsSummary %}*/
/*                                     <div class="bloc_user"> <a style="cursor: pointer;" class="infobull_div" data-tooltip="#html-content5" href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}"></a>*/
/*                                         <div class="im_connais"><img width="37" height="37" src="{% if invitation.userOne.avatar is not empty %} {{ asset(invitation.userOne.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" alt=""></div>*/
/*                                         <div class="des_connais"><strong><a>{{ invitation.userOne.firstName }} {{ invitation.userOne.lastName }}</a></strong> {{ invitation.userOne.job }}</div>*/
/*                                         <div class="clear5"></div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                                 {{ render(controller('EpluggFrontBundle:Suggestion:suggestedNotificationBlock')) }}*/
/* */
/*                             </div>*/
/*                             <div class="popModal_footer"><a href="{{ path('eplugg_invitations') }}">{{ 'Afficher tout'|trans }}</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*         <div class="clear"></div>*/
/*     </div>*/
/* </div>*/

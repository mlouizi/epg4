<?php

/* EpluggFrontBundle:Search:all_users.html.twig */
class __TwigTemplate_76a8d9289b2ee96b058b6fe6634f3750ea4701643bae0946f128e3d1d37e2a7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base.html.twig", "EpluggFrontBundle:Search:all_users.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
            'after_footer' => array($this, 'block_after_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpluggFrontBundle::base.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateurs"), "html", null, true);
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cupertino/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
    }

    // line 13
    public function block_login($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"login\">
        <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" id=\"signinform\" method=\"post\">
            <input type=\"text\" class=\"\" name=\"_username\" required=\"required\"  placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email address"), "html", null, true);
        echo "\"   />
            <input type=\"password\" class=\"\" name=\"_password\" required=\"required\" autocomplete=\"off\"  placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe"), "html", null, true);
        echo "\" />
            <input id=\"userLang\" type=\"hidden\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\" name=\"lang\">
            <button class=\"submit_header\" type=\"submit\" ></button>
            <div class=\"cat_search\">
                <a data-url='' id=\"lang_link\"><span id=\"cat_label\">en </span></a>
                <a id=\"btn_cat\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                <div class=\"souscat\">
                    <ul>
                        <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\" data-lang='en'>en</a></li>
                        <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\" data-lang='fr'>fr</a></li>
                    </ul>
                </div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>
            <a id=\"connex\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié"), "html", null, true);
        echo "?</a>
        </form>

    </div>
    <div class=\"clear10\"></div>
";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "<div id=\"content\" style=\"min-height: 923px;\">
    <div class=\"center_content_inner\" style=\"min-height: 918px;\">
        <div class=\"plugg_link\" align=\"right\">
            <a style=\"width:195px; margin:0\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("eplugg_front_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour à la page d’accueil"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"clear\"></div>
        <div class=\"titre_plugg search\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Résultats de la recherche"), "html", null, true);
        echo " </div>
        <div class=\"result_search\"> ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Résultats"), "html", null, true);
        echo " </div>
        <div id=\"content_infinity\" class=\"inf_search\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 48
            echo "                <div class=\"item_infinity item_infinity_serach__\">
                    <div onclick=\"\$('#loginname').html(' ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "') ; \$('#loginMessage').click()\" class=\"card_bloc\" id=\"card_eplugg\">
                        <div class=\"yellow\"><img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
            echo "\"></div>
                        <div id=\"card_user\">
                            <div class=\"img_profil\"><a><img width=\"48\" height=\"48\" alt=\"\" src=\"";
            // line 52
            if ( !twig_test_empty($this->getAttribute($context["user"], "avatar", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["user"], "avatar", array()), "croppedWebPath", array())), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                echo " ";
            }
            echo "\"></a></div>
                            <div class=\"descp_card\">
                                <div class=\"name_user\"><a> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</a> </div>
                                <div class=\"job_user\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "job", array()), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                        <div id=\"card_company\">
                            <div class=\"img_profil\"> <a><img width=\"51\" height=\"51\" src=\"";
            // line 60
            if ( !twig_test_empty($this->getAttribute($context["user"], "CompanyAvatar", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["user"], "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
                echo " ";
            }
            echo "\"></a></div>
                            <div class=\"descp_card\">
                                <div class=\"company_user\"><a>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "companyName", array()), "html", null, true);
            echo "</a></div>
                                <div class=\"tag_company\">
                                    ";
            // line 64
            if ( !twig_test_empty($this->getAttribute($context["user"], "getActivitiesFormatted", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getActivitiesFormatted", array()), "html", null, true);
            }
            // line 65
            echo "                                </div>
                                <div class=\"lieu_company\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "companyAddress", array()), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            <a id=\"next\" href=\"?page=0\"></a>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"clear25\"></div>
</div>
<a id=\"loginMessage\" href=\"#loginContent\" rel=\"message\"></a>
<div id=\"loginContent\" style=\"display: none\">
    <div class=\"titre_plugg\">Notification</div>
    <div align=\"center\" class=\"top_form\"><strong>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pour communiquer avec"), "html", null, true);
        echo "<span id=\"loginname\">madison MILLARD</span>, ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscrire sur Eplugg maintenant"), "html", null, true);
        echo ".</strong>
        <br><br>

        <div align=\"center\" class=\"plugg_link info_card\"><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("eplugg_front_homepage");
        echo "\">Sign Up</a> &nbsp;&nbsp;<a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’identifier"), "html", null, true);
        echo "</a></div></div>
</div>

";
    }

    // line 89
    public function block_after_footer($context, array $blocks = array())
    {
        // line 90
        echo "
";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/profile.js"), "html", null, true);
        echo "\"></script>

    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() { \$('input, textarea').placeholder(); });
    </script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.infinitescroll.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" language=\"javascript\">
        \$('#content_infinity').infinitescroll(
                {
                    navSelector:\"#next:last\",
                    nextSelector:\"a#next:last\",
                    itemSelector:\"#content_infinity div.item_infinity\",
                    dataType:'html',
                    maxPage:157,
                    path:function(index) {

                        return \"?page=\" + index ;
                    }
                },
                function(newElements, data, url){ }
        );
    </script>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Search:all_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 104,  301 => 103,  294 => 99,  289 => 97,  285 => 96,  281 => 95,  277 => 94,  274 => 93,  271 => 92,  266 => 90,  263 => 89,  251 => 85,  243 => 82,  232 => 73,  219 => 66,  216 => 65,  212 => 64,  207 => 62,  195 => 60,  187 => 55,  181 => 54,  169 => 52,  164 => 50,  158 => 49,  155 => 48,  151 => 47,  144 => 45,  140 => 44,  132 => 41,  127 => 38,  124 => 37,  112 => 31,  108 => 30,  101 => 26,  97 => 25,  91 => 22,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  69 => 14,  66 => 13,  58 => 9,  54 => 8,  49 => 6,  44 => 5,  41 => 4,  33 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Utilisateurs'|trans }}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/cupertino/jquery-ui-1.10.4.custom.css') }}" rel="stylesheet">*/
/* */
/*     <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/* */
/* */
/* {% endblock %}*/
/* {% block login %}*/
/*     <div class="login">*/
/*         <form action="{{ path("fos_user_security_check") }}" id="signinform" method="post">*/
/*             <input type="text" class="" name="_username" required="required"  placeholder="{{ 'Email address'|trans }}"   />*/
/*             <input type="password" class="" name="_password" required="required" autocomplete="off"  placeholder="{{ 'Mot de passe'|trans }}" />*/
/*             <input id="userLang" type="hidden" value="{{ app.request.locale }}" name="lang">*/
/*             <button class="submit_header" type="submit" ></button>*/
/*             <div class="cat_search">*/
/*                 <a data-url='' id="lang_link"><span id="cat_label">en </span></a>*/
/*                 <a id="btn_cat"><img src="{{ asset('images/arrow.png') }}" alt="" /></a>*/
/*                 <div class="souscat">*/
/*                     <ul>*/
/*                         <li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}" data-lang='en'>en</a></li>*/
/*                         <li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}" data-lang='fr'>fr</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*             <a id="connex" href="{{ path('fos_user_resetting_request') }}">{{ 'Mot de passe oublié'|trans }}?</a>*/
/*         </form>*/
/* */
/*     </div>*/
/*     <div class="clear10"></div>*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div id="content" style="min-height: 923px;">*/
/*     <div class="center_content_inner" style="min-height: 918px;">*/
/*         <div class="plugg_link" align="right">*/
/*             <a style="width:195px; margin:0" href="{{ path('eplugg_front_homepage') }}">{{ 'Retour à la page d’accueil'|trans }}</a>*/
/*         </div>*/
/*         <div class="clear"></div>*/
/*         <div class="titre_plugg search">{{ 'Résultats de la recherche'|trans }} </div>*/
/*         <div class="result_search"> {{ total }} {{ 'Résultats'|trans }} </div>*/
/*         <div id="content_infinity" class="inf_search">*/
/*             {% for user in users %}*/
/*                 <div class="item_infinity item_infinity_serach__">*/
/*                     <div onclick="$('#loginname').html(' {{ user.firstName }} {{ user.lastName }}') ; $('#loginMessage').click()" class="card_bloc" id="card_eplugg">*/
/*                         <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                         <div id="card_user">*/
/*                             <div class="img_profil"><a><img width="48" height="48" alt="" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a></div>*/
/*                             <div class="descp_card">*/
/*                                 <div class="name_user"><a> {{ user.firstName }} {{ user.lastName }}</a> </div>*/
/*                                 <div class="job_user">{{ user.job }}</div>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                         <div id="card_company">*/
/*                             <div class="img_profil"> <a><img width="51" height="51" src="{% if user.CompanyAvatar is not empty %} {{ asset(user.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}"></a></div>*/
/*                             <div class="descp_card">*/
/*                                 <div class="company_user"><a>{{ user.companyName }}</a></div>*/
/*                                 <div class="tag_company">*/
/*                                     {% if user.getActivitiesFormatted is not empty %}{{ user.getActivitiesFormatted }}{% endif %}*/
/*                                 </div>*/
/*                                 <div class="lieu_company">{{ user.companyAddress }}</div>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*              {% endfor %}*/
/*             <a id="next" href="?page=0"></a>*/
/*         </div>*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*     <div class="clear25"></div>*/
/* </div>*/
/* <a id="loginMessage" href="#loginContent" rel="message"></a>*/
/* <div id="loginContent" style="display: none">*/
/*     <div class="titre_plugg">Notification</div>*/
/*     <div align="center" class="top_form"><strong>{{ 'Pour communiquer avec'|trans }}<span id="loginname">madison MILLARD</span>, {{ 'Inscrire sur Eplugg maintenant'|trans }}.</strong>*/
/*         <br><br>*/
/* */
/*         <div align="center" class="plugg_link info_card"><a href="{{ path('eplugg_front_homepage') }}">Sign Up</a> &nbsp;&nbsp;<a href="{{ path('fos_user_security_login') }}">{{ 'S’identifier'|trans }}</a></div></div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* {% block after_footer %}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/profile.js') }}"></script>*/
/* */
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>*/
/*     <script>*/
/*         $(function() { $('input, textarea').placeholder(); });*/
/*     </script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.infinitescroll.js') }}"></script>*/
/* */
/*     <script type="text/javascript" language="javascript">*/
/*         $('#content_infinity').infinitescroll(*/
/*                 {*/
/*                     navSelector:"#next:last",*/
/*                     nextSelector:"a#next:last",*/
/*                     itemSelector:"#content_infinity div.item_infinity",*/
/*                     dataType:'html',*/
/*                     maxPage:157,*/
/*                     path:function(index) {*/
/* */
/*                         return "?page=" + index ;*/
/*                     }*/
/*                 },*/
/*                 function(newElements, data, url){ }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/

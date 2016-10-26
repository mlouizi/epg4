<?php

/* EpluggFrontBundle:Default:profile_anonyme.html.twig */
class __TwigTemplate_39dd4eb99239a0b90a7e3c5b2bf189cd5006fb1428c1df8e45308f84e3fd7d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Default:profile_anonyme.html.twig", 1);
        $this->blocks = array(
            'advancedSearch' => array($this, 'block_advancedSearch'),
            'title' => array($this, 'block_title'),
            'og' => array($this, 'block_og'),
            'header' => array($this, 'block_header'),
            'login' => array($this, 'block_login'),
            'chat' => array($this, 'block_chat'),
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
    public function block_advancedSearch($context, array $blocks = array())
    {
        // line 3
        echo "        ";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
    }

    // line 5
    public function block_og($context, array $blocks = array())
    {
        // line 6
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Carte visite eplugg"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "\"/>
    <meta property=\"og:image\" content=\"";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\"/>
    <meta property=\"og:description\" content=\"";
        // line 8
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Direct Phone"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()), "html", null, true);
            echo "  ";
        }
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mobile Phone"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()), "html", null, true);
            echo "  ";
        }
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Emails"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()), "html", null, true);
            echo "  ";
        }
        echo "\"/>
";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "            <div style=\"overflow:auto\" id=\"header\">
                <div class=\"center_content\">
                    <div id=\"logo\">
                        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("eplugg_front_homepage");
        echo "\">
                           <img alt=\"logo\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                    ";
        // line 18
        $this->displayBlock('login', $context, $blocks);
        // line 42
        echo "                </div>
            </div>
        ";
    }

    // line 18
    public function block_login($context, array $blocks = array())
    {
        // line 19
        echo "                        <div class=\"login\">
                            <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" id=\"signinform\" method=\"post\">
                                <input type=\"text\" class=\"\" name=\"_username\" required=\"required\"  placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email address"), "html", null, true);
        echo "\"   />
                                <input type=\"password\" class=\"\" name=\"_password\" required=\"required\" autocomplete=\"off\"  placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe"), "html", null, true);
        echo "\" />
                                <input id=\"userLang\" type=\"hidden\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\" name=\"lang\">
                                <button class=\"submit_header\" type=\"submit\" ></button>
                                <div class=\"cat_search\">
                                    <a data-url='' id=\"lang_link\"><span id=\"cat_label\">en </span></a>
                                    <a id=\"btn_cat\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                    <div class=\"souscat\">
                                        <ul>
                                            <li><a href=\"/lang?c=en\" data-lang='en'>en</a></li>
                                            <li><a href=\"/lang?c=fr\" data-lang='fr'>fr</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrfToken"]) ? $context["csrfToken"] : null), "html", null, true);
        echo "\"/>
                                <a id=\"connex\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié"), "html", null, true);
        echo "?</a>
                            </form>

                        </div>
                        <div class=\"clear10\"></div>
                    ";
    }

    // line 45
    public function block_chat($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "
    <div id=\"content\">
        <div class=\"center_content_inner\">
            <div id=\"body_content\" class=\"profil\">
                <div id=\"card_eplugg\">
                    <div class=\"yellow\">
                        ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:Vip", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
        echo "

                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow-big.png"), "html", null, true);
        echo "\">
                    </div>
                    <div id=\"card_user\" itemscope itemtype=\"http://schema.org/QAPage\">
                        <div class=\"img_profil\">
                            <a><img itemprop=\"image\" src=\"";
        // line 59
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\"></a>
                        </div>
                        <div class=\"descp_card\">
                            <strong><a href=\"#\" itemprop=\"name\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "</a></strong>
                            <em>search_users</em>
                            <ul itemprop=\"description\">
                                ";
        // line 65
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()))) {
            echo "<li class=\"tel1\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()), "html", null, true);
            echo "</li>";
        }
        // line 66
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()))) {
            echo "<li class=\"mobile\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()), "html", null, true);
            echo "</li>";
        }
        // line 67
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()))) {
            echo "<li class=\"mail1\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()), "html", null, true);
            echo "</li>";
        }
        // line 68
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sociaux", array()))) {
            echo "<li class=\"sociaux\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sociaux", array()), "html", null, true);
            echo "</li>";
        }
        // line 69
        echo "                            </ul>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\"><a><img src=\"";
        // line 74
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "CompanyAvatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
            echo " ";
        }
        echo "\"></a></div>
                        <div class=\"descp_card\">
                            <strong><a href=\"#\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyName", array()), "html", null, true);
        echo "</a></strong>
                            <div class=\"tag\">";
        // line 77
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getActivitiesFormatted", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getActivitiesFormatted", array()), "html", null, true);
        }
        echo "</div>
                            <ul>
                                ";
        // line 79
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyTel", array()))) {
            echo "<li class=\"tel2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyTel", array()), "html", null, true);
            echo "</li>";
        }
        // line 80
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyFax", array()))) {
            echo "<li class=\"fax\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyFax", array()), "html", null, true);
            echo "</li>";
        }
        // line 81
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyWebsite", array()))) {
            echo "<li class=\"site\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyWebsite", array()), "html", null, true);
            echo "</li>";
        }
        // line 82
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyAddress", array()))) {
            echo "<li class=\"sociaux\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyAddress", array()), "html", null, true);
            echo "</li>";
        }
        // line 83
        echo "                            </ul>
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                </div>
                <div class=\"social_bar\">
                    <a onclick=\"javascript:window.open(this.href, '', 'width=530,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_facebook hotspot\" onmouseover=\"tooltip.show('share_on_facebook');\" onmouseout=\"tooltip.hide();\" title=\"facebook\"></a>

                    <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"http://twitter.com/share?text=profile%20";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo "%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "&url=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_twitter hotspot\" onmouseover=\"tooltip.show('share_on_twitter');\" onmouseout=\"tooltip.hide();\"></a>

                    <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"https://plus.google.com/share?url=";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_google hotspot\" onmouseover=\"tooltip.show('share_on_google');\" onmouseout=\"tooltip.hide();\"></a>

                    <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"http://www.linkedin.com/shareArticle?mini=true&url=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_linkedin hotspot\" onmouseover=\"tooltip.show('share_on_linkedin');\" onmouseout=\"tooltip.hide();\"></a>
                </div>
                <div class=\"partage_profil\"></div>
                <div class=\"clear30\"></div>
                <div class=\"titre_plugg\"> ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parcours"), "html", null, true);
        echo " </div>
                <div class=\"cv_profil\">
                    ";
        // line 102
        if ((isset($context["isFriend"]) ? $context["isFriend"] : null)) {
            // line 103
            echo "                        ";
            if (( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array()), "path", array())))) {
                // line 104
                echo "                            <div class=\"btn_download\">
                                <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array()), "path", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                                    <img src=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/pdf.png"), "html", null, true);
                echo "\" />
                                </a>
                            </div>
                        ";
            }
            // line 110
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:getExperiences", array("ownProfile" => false, "uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
            echo "

                    ";
        } else {
            // line 113
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "
                    ";
        }
        // line 115
        echo "                </div>
                <div class=\"clear20\"></div>
                <div class=\"titre_plugg\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actualités"), "html", null, true);
        echo "</div>
                <div id=\"content_infinity\" class=\"content_center__\">
                    ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
        echo "
                </div>
                <div class=\"clear20\"></div>
            </div>
        </div>
        <div class=\"clear25\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:profile_anonyme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 119,  386 => 117,  382 => 115,  376 => 113,  369 => 110,  362 => 106,  358 => 105,  355 => 104,  352 => 103,  350 => 102,  345 => 100,  338 => 96,  333 => 94,  324 => 92,  319 => 90,  310 => 83,  303 => 82,  296 => 81,  289 => 80,  283 => 79,  276 => 77,  272 => 76,  260 => 74,  253 => 69,  246 => 68,  239 => 67,  232 => 66,  226 => 65,  218 => 62,  205 => 59,  198 => 55,  193 => 53,  185 => 47,  182 => 46,  177 => 45,  165 => 36,  161 => 35,  150 => 27,  143 => 23,  139 => 22,  135 => 21,  131 => 20,  128 => 19,  125 => 18,  119 => 42,  117 => 18,  111 => 15,  107 => 14,  102 => 11,  99 => 10,  76 => 8,  65 => 7,  56 => 6,  53 => 5,  41 => 4,  37 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/*         {% block advancedSearch %}*/
/*         {% endblock advancedSearch  %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Profile'|trans }} {{ user.firstName }} {{ user.lastName }}{% endblock %}*/
/* {% block og %}*/
/*     <meta property="og:title" content="{{ 'Carte visite eplugg'|trans }} {{ user.firstName }} {{ user.lastName }}"/>*/
/*     <meta property="og:image" content="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"/>*/
/*     <meta property="og:description" content="{% if user.directPhone is not empty %}{{ 'Direct Phone'|trans }}: {{ user.directPhone }}  {% endif %}{% if user.mobile is not empty %}{{ 'Mobile Phone'|trans }}: {{ user.mobile }}  {% endif %}{% if user.moreEmails is not empty %}{{ 'Emails'|trans }}: {{ user.moreEmails }}  {% endif %}"/>*/
/* {% endblock %}*/
/*         {% block header %}*/
/*             <div style="overflow:auto" id="header">*/
/*                 <div class="center_content">*/
/*                     <div id="logo">*/
/*                         <a href="{{ path('eplugg_front_homepage') }}">*/
/*                            <img alt="logo" src="{{ asset('images/logo.png') }}">*/
/*                         </a>*/
/*                     </div>*/
/*                     {% block login %}*/
/*                         <div class="login">*/
/*                             <form action="{{ path("fos_user_security_check") }}" id="signinform" method="post">*/
/*                                 <input type="text" class="" name="_username" required="required"  placeholder="{{ 'Email address'|trans }}"   />*/
/*                                 <input type="password" class="" name="_password" required="required" autocomplete="off"  placeholder="{{ 'Mot de passe'|trans }}" />*/
/*                                 <input id="userLang" type="hidden" value="{{ app.request.locale }}" name="lang">*/
/*                                 <button class="submit_header" type="submit" ></button>*/
/*                                 <div class="cat_search">*/
/*                                     <a data-url='' id="lang_link"><span id="cat_label">en </span></a>*/
/*                                     <a id="btn_cat"><img src="{{ asset('images/arrow.png') }}" alt="" /></a>*/
/*                                     <div class="souscat">*/
/*                                         <ul>*/
/*                                             <li><a href="/lang?c=en" data-lang='en'>en</a></li>*/
/*                                             <li><a href="/lang?c=fr" data-lang='fr'>fr</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="hidden" name="_csrf_token" value="{{ csrfToken }}"/>*/
/*                                 <a id="connex" href="{{ path('fos_user_resetting_request') }}">{{ 'Mot de passe oublié'|trans }}?</a>*/
/*                             </form>*/
/* */
/*                         </div>*/
/*                         <div class="clear10"></div>*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/* {% block chat %}{% endblock %}*/
/* {% block body %}*/
/* */
/*     <div id="content">*/
/*         <div class="center_content_inner">*/
/*             <div id="body_content" class="profil">*/
/*                 <div id="card_eplugg">*/
/*                     <div class="yellow">*/
/*                         {{ render(controller('EpluggFrontBundle:Default:Vip', {'uid': user.Id})) }}*/
/* */
/*                         <img src="{{ asset('images/arrow-yelow-big.png') }}">*/
/*                     </div>*/
/*                     <div id="card_user" itemscope itemtype="http://schema.org/QAPage">*/
/*                         <div class="img_profil">*/
/*                             <a><img itemprop="image" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <strong><a href="#" itemprop="name">{{ user.firstName }} {{ user.lastName }}</a></strong>*/
/*                             <em>search_users</em>*/
/*                             <ul itemprop="description">*/
/*                                 {% if user.directPhone is not empty %}<li class="tel1">{{ user.directPhone }}</li>{% endif %}*/
/*                                 {% if user.mobile is not empty %}<li class="mobile">{{ user.mobile }}</li>{% endif %}*/
/*                                 {% if user.moreEmails is not empty %}<li class="mail1">{{ user.moreEmails }}</li>{% endif %}*/
/*                                 {% if user.sociaux is not empty %}<li class="sociaux">{{ user.sociaux }}</li>{% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil"><a><img src="{% if user.CompanyAvatar is not empty %} {{ asset(user.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <strong><a href="#">{{ user.companyName }}</a></strong>*/
/*                             <div class="tag">{% if user.getActivitiesFormatted is not empty %}{{ user.getActivitiesFormatted }}{% endif %}</div>*/
/*                             <ul>*/
/*                                 {% if user.companyTel is not empty %}<li class="tel2">{{ user.companyTel }}</li>{% endif %}*/
/*                                 {% if user.companyFax is not empty %}<li class="fax">{{ user.companyFax }}</li>{% endif %}*/
/*                                 {% if user.companyWebsite is not empty %}<li class="site">{{ user.companyWebsite }}</li>{% endif %}*/
/*                                 {% if user.companyAddress is not empty %}<li class="sociaux">{{ user.companyAddress }}</li>{% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="social_bar">*/
/*                     <a onclick="javascript:window.open(this.href, '', 'width=530,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="https://www.facebook.com/sharer/sharer.php?u={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_facebook hotspot" onmouseover="tooltip.show('share_on_facebook');" onmouseout="tooltip.hide();" title="facebook"></a>*/
/* */
/*                     <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="http://twitter.com/share?text=profile%20{{ user.firstName }}%20{{ user.lastName }}&url={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_twitter hotspot" onmouseover="tooltip.show('share_on_twitter');" onmouseout="tooltip.hide();"></a>*/
/* */
/*                     <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="https://plus.google.com/share?url={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_google hotspot" onmouseover="tooltip.show('share_on_google');" onmouseout="tooltip.hide();"></a>*/
/* */
/*                     <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="http://www.linkedin.com/shareArticle?mini=true&url={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_linkedin hotspot" onmouseover="tooltip.show('share_on_linkedin');" onmouseout="tooltip.hide();"></a>*/
/*                 </div>*/
/*                 <div class="partage_profil"></div>*/
/*                 <div class="clear30"></div>*/
/*                 <div class="titre_plugg"> {{ 'Parcours'|trans }} </div>*/
/*                 <div class="cv_profil">*/
/*                     {% if isFriend %}*/
/*                         {% if user.Cv is not empty and user.Cv.path is not empty  %}*/
/*                             <div class="btn_download">*/
/*                                 <a href="{{ asset('uploads/' ~ user.Cv.path) }}" target="_blank">*/
/*                                     <img src="{{ asset('images/pdf.png') }}" />*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         {{ render(controller('EpluggFrontBundle:Default:getExperiences', {'ownProfile': false, 'uid': user.Id})) }}*/
/* */
/*                     {% else %}*/
/*                         {{ 'Information privée'|trans }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="clear20"></div>*/
/*                 <div class="titre_plugg">{{ 'Actualités'|trans }}</div>*/
/*                 <div id="content_infinity" class="content_center__">*/
/*                     {{ 'Information privée'|trans }}*/
/*                 </div>*/
/*                 <div class="clear20"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* {% endblock %}*/

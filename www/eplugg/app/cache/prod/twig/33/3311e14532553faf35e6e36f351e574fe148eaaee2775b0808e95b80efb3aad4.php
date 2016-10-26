<?php

/* EpluggFrontBundle:Default:profile.html.twig */
class __TwigTemplate_0694f24b1e2ab7a4fca31da142cd5afa4f8e21b8d2d5f49a2c5b09f483a6cffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Default:profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'og' => array($this, 'block_og'),
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

    // line 3
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

    // line 4
    public function block_og($context, array $blocks = array())
    {
        // line 5
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Carte visite eplugg"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "\"/>
    <meta property=\"og:image\" content=\"";
        // line 6
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
        // line 7
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
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    <div id=\"content\">
        <div class=\"center_content_inner\">
            <div id=\"body_content\" class=\"profil\">
                <div id=\"card_eplugg\">
                    <div class=\"yellow\">
                        ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:Vip", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
        echo "

                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow-big.png"), "html", null, true);
        echo "\">
                    </div>
                    <div id=\"card_user\" itemscope itemtype=\"http://schema.org/QAPage\">
                        <div class=\"img_profil\">
                            <a><img itemprop=\"image\" src=\"";
        // line 23
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
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "</a></strong>
                            <em>search_users</em>
                            <ul itemprop=\"description\">
                                ";
        // line 29
        if ((isset($context["isFriend"]) ? $context["isFriend"] : null)) {
            // line 30
            echo "                                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()))) {
                echo "<li class=\"tel1\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()), "html", null, true);
                echo "</li>";
            }
            // line 31
            echo "                                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()))) {
                echo "<li class=\"mobile\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()), "html", null, true);
                echo "</li>";
            }
            // line 32
            echo "                                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()))) {
                echo "<li class=\"mail1\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()), "html", null, true);
                echo "</li>";
            }
            // line 33
            echo "                                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sociaux", array()))) {
                echo "<li class=\"sociaux\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sociaux", array()), "html", null, true);
                echo "</li>";
            }
            // line 34
            echo "                                ";
        } else {
            // line 35
            echo "                                    <li class=\"tel1\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "</li>
                                    <li class=\"mobile\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "</li>
                                    <li class=\"mail1\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "</li>
                                    <li class=\"sociaux\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "</li>
                                ";
        }
        // line 40
        echo "                                
                            </ul>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\"><a><img src=\"";
        // line 46
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
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyName", array()), "html", null, true);
        echo "</a></strong>
                            <div class=\"tag\">";
        // line 49
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getActivitiesFormatted", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getActivitiesFormatted", array()), "html", null, true);
        }
        echo "</div>
                            <ul>
                                ";
        // line 51
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyTel", array()))) {
            echo "<li class=\"tel2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyTel", array()), "html", null, true);
            echo "</li>";
        }
        // line 52
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyFax", array()))) {
            echo "<li class=\"fax\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyFax", array()), "html", null, true);
            echo "</li>";
        }
        // line 53
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyWebsite", array()))) {
            echo "<li class=\"site\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyWebsite", array()), "html", null, true);
            echo "</li>";
        }
        // line 54
        echo "                                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyAddress", array()))) {
            echo "<li class=\"sociaux\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyAddress", array()), "html", null, true);
            echo "</li>";
        }
        // line 55
        echo "                            </ul>
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                </div>
                <div class=\"social_bar\">
                    <a onclick=\"javascript:window.open(this.href, '', 'width=530,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_facebook hotspot\" onmouseover=\"tooltip.show('share_on_facebook');\" onmouseout=\"tooltip.hide();\" title=\"facebook\"></a>

                    <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"http://twitter.com/share?text=profile%20";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo "%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "&url=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_twitter hotspot\" onmouseover=\"tooltip.show('share_on_twitter');\" onmouseout=\"tooltip.hide();\"></a>

                    <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"https://plus.google.com/share?url=";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_google hotspot\" onmouseover=\"tooltip.show('share_on_google');\" onmouseout=\"tooltip.hide();\"></a>

                    <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"http://www.linkedin.com/shareArticle?mini=true&url=";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_linkedin hotspot\" onmouseover=\"tooltip.show('share_on_linkedin');\" onmouseout=\"tooltip.hide();\"></a>
                </div>
                <div class=\"partage_profil\">
                    <ul>
                        ";
        // line 72
        if ((isset($context["isFriend"]) ? $context["isFriend"] : null)) {
            // line 73
            echo "                            <li id=\"first\"><a class=\"btn_share\" title=\"Suggérer\" rel=\"suggerer\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_suggest_user", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "iframe" => "true", "width" => 400)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suggérer"), "html", null, true);
            echo "</a></li>
                        ";
        } elseif (        // line 74
(isset($context["invitReceived"]) ? $context["invitReceived"] : null)) {
            // line 75
            echo "                            <li id=\"first\">
                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_accpet_invitation", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
            echo "\"  class=\"Vplugger plugger-link\" title=\"Accepter l'invitation\" data-id=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accepter l’invitation"), "html", null, true);
            echo "</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_cancel_invitation", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
            echo "\" class=\"Iplugger plugger-link\" title=\"Cancel\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuler l’invitation"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        } elseif (        // line 81
(isset($context["invitSended"]) ? $context["invitSended"] : null)) {
            // line 82
            echo "                            <li id=\"first\">
                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_cancel_invitation", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
            echo "\" class=\"Iplugger plugger-link\" title=\"Cancel\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuler l’invitation"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        } else {
            // line 86
            echo "                            <li id=\"first\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_invite_user", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
            echo "\" class=\"plugger plugger-link\" title=\"Plugger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
            echo "</a></li>
                        ";
        }
        // line 88
        echo "                        <li><a class=\"btn_msg\" title=\"Envoyer un message\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Envoyer un message"), "html", null, true);
        echo "</a></li>
                        ";
        // line 89
        if ((isset($context["isFriend"]) ? $context["isFriend"] : null)) {
            // line 90
            echo "                            <li>
                                <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_delete_friend", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
            echo "\" class=\"delete_contact plugger-link\" title=\"Delete\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supprimer"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 94
        echo "                    </ul>
                </div>
                <div class=\"partage_profil\"></div>
                <div class=\"clear30\"></div>
                <div class=\"titre_plugg\"> ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parcours"), "html", null, true);
        echo " </div>
                <div class=\"cv_profil\">
                    ";
        // line 100
        if ((isset($context["isFriend"]) ? $context["isFriend"] : null)) {
            // line 101
            echo "                        ";
            if (( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array()), "path", array())))) {
                // line 102
                echo "                            <div class=\"btn_download\">
                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array()), "path", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                                    <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/pdf.png"), "html", null, true);
                echo "\" />
                                </a>
                            </div>
                        ";
            }
            // line 108
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:getExperiences", array("ownProfile" => false, "uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
            echo "

                    ";
        } else {
            // line 111
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "
                    ";
        }
        // line 113
        echo "                </div>
                <div class=\"clear20\"></div>
                <div class=\"titre_plugg\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actualités"), "html", null, true);
        echo "</div>
                <div id=\"content_infinity\" class=\"content_center__\">
                    ";
        // line 117
        if ((isset($context["isFriend"]) ? $context["isFriend"] : null)) {
            // line 118
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:News", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
            echo "
                    ";
        } else {
            // line 120
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "

                    ";
        }
        // line 123
        echo "                </div>
                <div class=\"clear20\"></div>
            </div>
        </div>
        <div class=\"clear25\"></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 123,  406 => 120,  400 => 118,  398 => 117,  393 => 115,  389 => 113,  383 => 111,  376 => 108,  369 => 104,  365 => 103,  362 => 102,  359 => 101,  357 => 100,  352 => 98,  346 => 94,  338 => 91,  335 => 90,  333 => 89,  326 => 88,  318 => 86,  310 => 83,  307 => 82,  305 => 81,  298 => 79,  290 => 76,  287 => 75,  285 => 74,  278 => 73,  276 => 72,  269 => 68,  264 => 66,  255 => 64,  250 => 62,  241 => 55,  234 => 54,  227 => 53,  220 => 52,  214 => 51,  207 => 49,  203 => 48,  191 => 46,  183 => 40,  178 => 38,  174 => 37,  170 => 36,  165 => 35,  162 => 34,  155 => 33,  148 => 32,  141 => 31,  134 => 30,  132 => 29,  124 => 26,  111 => 23,  104 => 19,  99 => 17,  91 => 11,  88 => 10,  65 => 7,  54 => 6,  45 => 5,  42 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* */
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Profile'|trans }} {{ user.firstName }} {{ user.lastName }}{% endblock %}*/
/* {% block og %}*/
/*     <meta property="og:title" content="{{ 'Carte visite eplugg'|trans }} {{ user.firstName }} {{ user.lastName }}"/>*/
/*     <meta property="og:image" content="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"/>*/
/*     <meta property="og:description" content="{% if user.directPhone is not empty %}{{ 'Direct Phone'|trans }}: {{ user.directPhone }}  {% endif %}{% if user.mobile is not empty %}{{ 'Mobile Phone'|trans }}: {{ user.mobile }}  {% endif %}{% if user.moreEmails is not empty %}{{ 'Emails'|trans }}: {{ user.moreEmails }}  {% endif %}"/>*/
/* {% endblock %}*/
/* */
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
/*                                 {% if isFriend %}*/
/*                                     {% if user.directPhone is not empty %}<li class="tel1">{{ user.directPhone }}</li>{% endif %}*/
/*                                     {% if user.mobile is not empty %}<li class="mobile">{{ user.mobile }}</li>{% endif %}*/
/*                                     {% if user.moreEmails is not empty %}<li class="mail1">{{ user.moreEmails }}</li>{% endif %}*/
/*                                     {% if user.sociaux is not empty %}<li class="sociaux">{{ user.sociaux }}</li>{% endif %}*/
/*                                 {% else %}*/
/*                                     <li class="tel1">{{ 'Information privée'|trans }}</li>*/
/*                                     <li class="mobile">{{ 'Information privée'|trans }}</li>*/
/*                                     <li class="mail1">{{ 'Information privée'|trans }}</li>*/
/*                                     <li class="sociaux">{{ 'Information privée'|trans }}</li>*/
/*                                 {% endif %}*/
/*                                 */
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
/*                 <div class="partage_profil">*/
/*                     <ul>*/
/*                         {% if isFriend %}*/
/*                             <li id="first"><a class="btn_share" title="Suggérer" rel="suggerer" href="{{ path('eplugg_suggest_user', {'uid': user.id, 'iframe': 'true', 'width': 400} ) }}">{{ 'Suggérer'|trans }}</a></li>*/
/*                         {% elseif invitReceived %}*/
/*                             <li id="first">*/
/*                                 <a href="{{ path('eplugg_accpet_invitation', {'uid': user.id, 'token': csrfToken }) }}"  class="Vplugger plugger-link" title="Accepter l'invitation" data-id="8">{{ 'Accepter l’invitation'|trans }}</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('eplugg_cancel_invitation', {'uid': user.id, 'token': csrfToken }) }}" class="Iplugger plugger-link" title="Cancel">{{ 'Annuler l’invitation'|trans }}</a>*/
/*                             </li>*/
/*                         {% elseif invitSended %}*/
/*                             <li id="first">*/
/*                                 <a href="{{ path('eplugg_cancel_invitation', {'uid': user.id, 'token': csrfToken }) }}" class="Iplugger plugger-link" title="Cancel">{{ 'Annuler l’invitation'|trans }}</a>*/
/*                             </li>*/
/*                         {% else %}*/
/*                             <li id="first"><a href="{{ path('eplugg_invite_user', {'uid': user.id, 'token': csrfToken }) }}" class="plugger plugger-link" title="Plugger">{{ 'Plugger'|trans }}</a></li>*/
/*                         {% endif %}*/
/*                         <li><a class="btn_msg" title="Envoyer un message" href="{{ path('eplugg_messages_user', {'uid': user.id } ) }}">{{ 'Envoyer un message'|trans }}</a></li>*/
/*                         {% if isFriend %}*/
/*                             <li>*/
/*                                 <a href="{{ path('eplugg_delete_friend', {'uid': user.id, 'token': csrfToken }) }}" class="delete_contact plugger-link" title="Delete">{{ 'Supprimer'|trans }}</a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
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
/*                     {{ 'Information privée'|trans }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="clear20"></div>*/
/*                 <div class="titre_plugg">{{ 'Actualités'|trans }}</div>*/
/*                 <div id="content_infinity" class="content_center__">*/
/*                     {% if isFriend %}*/
/*                         {{ render(controller('EpluggFrontBundle:Default:News', {'uid': user.Id})) }}*/
/*                     {% else %}*/
/*                         {{ 'Information privée'|trans }}*/
/* */
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="clear20"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/

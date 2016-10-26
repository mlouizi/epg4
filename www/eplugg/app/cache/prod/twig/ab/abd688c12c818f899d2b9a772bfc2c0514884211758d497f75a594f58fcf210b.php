<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_63a65946af279d6b616ed76ce4b8e5578fed50cea3495aab393d1545c30f08b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"content\">
    <div class=\"center_content_inner\">
        <div id=\"body_content\" class=\"profil\">
            <div id=\"card_eplugg\">
                <div class=\"yellow\">
                    ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:Vip", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
        echo "

                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow-big.png"), "html", null, true);
        echo "\">
                </div>
                <div id=\"card_user\" itemscope itemtype=\"http://schema.org/QAPage\">
                    <div class=\"img_profil\">
                        <a><img itemprop=\"image\" src=\"";
        // line 13
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
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "</a></strong>
                        <em>search_users</em>
                        <ul itemprop=\"description\">
                            ";
        // line 19
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()))) {
            echo "<li class=\"tel1\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()), "html", null, true);
            echo "</li>";
        }
        // line 20
        echo "                            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()))) {
            echo "<li class=\"mobile\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()), "html", null, true);
            echo "</li>";
        }
        // line 21
        echo "                            <li class=\"mail1\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()))) {
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()), "html", null, true);
        }
        echo "</li>
                            ";
        // line 22
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sociaux", array()))) {
            echo "<li class=\"sociaux\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sociaux", array()), "html", null, true);
            echo "</li>";
        }
        // line 23
        echo "                        </ul>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div id=\"card_company\">
                    <div class=\"img_profil\"><a><img src=\"";
        // line 28
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
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyName", array()), "html", null, true);
        echo "</a></strong>
                        <div class=\"tag\">";
        // line 31
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getActivitiesFormatted", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getActivitiesFormatted", array()), "html", null, true);
        }
        echo "</div>
                        <ul>
                            ";
        // line 33
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyTel", array()))) {
            echo "<li class=\"tel2\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyTel", array()), "html", null, true);
            echo "</li>";
        }
        // line 34
        echo "                            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyFax", array()))) {
            echo "<li class=\"fax\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyFax", array()), "html", null, true);
            echo "</li>";
        }
        // line 35
        echo "                            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyWebsite", array()))) {
            echo "<li class=\"site\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyWebsite", array()), "html", null, true);
            echo "</li>";
        }
        // line 36
        echo "                            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyAddress", array()))) {
            echo "<li class=\"lieu\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyAddress", array()), "html", null, true);
            echo "</li>";
        }
        // line 37
        echo "                        </ul>
                    </div>
                    <div class=\"clear\"></div>
                </div>

            </div>
            <div class=\"social_bar\">
                <a onclick=\"javascript:window.open(this.href, '', 'width=530,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_facebook hotspot\" onmouseover=\"tooltip.show('share_on_facebook');\" onmouseout=\"tooltip.hide();\" title=\"facebook\"></a>

                <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"http://twitter.com/share?text=profile%20";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo "%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "&url=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_twitter hotspot\" onmouseover=\"tooltip.show('share_on_twitter');\" onmouseout=\"tooltip.hide();\"></a>

                <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"https://plus.google.com/share?url=";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_google hotspot\" onmouseover=\"tooltip.show('share_on_google');\" onmouseout=\"tooltip.hide();\"></a>

                <a onclick=\"javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;\" href=\"http://www.linkedin.com/shareArticle?mini=true&url=";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"link_linkedin hotspot\" onmouseover=\"tooltip.show('share_on_linkedin');\" onmouseout=\"tooltip.hide();\"></a>
            </div>
            <div style=\"display:none;\" id=\"canvas-card\"></div>
            <div style=\"display:none;\" id=\"image-card\"></div>
            <div class=\"partage_profil\">
                <ul>
                    <li id=\"first\">
                        <a class=\"btn_edit\" title=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier", array(), "FOSUserBundle"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("eplugg_edit_profile");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
            <div class=\"clear30\"></div>
            <div class=\"titre_plugg\">
                ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parcours", array(), "FOSUserBundle"), "html", null, true);
        echo "
                <a title=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter une expérience", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"link_exp\" rel=\"add_cv\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_add_experience", array("iframe" => "true", "width" => "500", "height" => "350")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter une expérience", array(), "FOSUserBundle"), "html", null, true);
        echo " </a>
                <a title=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter votre CV", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"link_cv\" rel=\"upload_cv\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_upload_cv", array("iframe" => "true", "width" => "500", "height" => "150")), "html", null, true);
        echo "\">
                    ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter votre CV", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"cv_profil\">
                ";
        // line 70
        if (( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array()), "path", array())))) {
            // line 71
            echo "                    <div class=\"btn_download\">
                        <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Cv", array()), "path", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                            <img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/pdf.png"), "html", null, true);
            echo "\" />
                        </a>
                    </div>
                ";
        }
        // line 77
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:getExperiences", array("ownProfile" => true, "uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
        echo "

            </div>
            <div class=\"clear20\"></div>
            <div class=\"titre_plugg\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actualités", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
            <div id=\"content_infinity\" class=\"content_center__\">
                ";
        // line 83
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:News", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array()))));
        echo "
            </div>
            <div class=\"clear20\"></div>
        </div>
    </div>
    <div class=\"clear25\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 83,  244 => 81,  236 => 77,  229 => 73,  225 => 72,  222 => 71,  220 => 70,  213 => 66,  207 => 65,  199 => 64,  195 => 63,  182 => 57,  172 => 50,  167 => 48,  158 => 46,  153 => 44,  144 => 37,  137 => 36,  130 => 35,  123 => 34,  117 => 33,  110 => 31,  106 => 30,  94 => 28,  87 => 23,  81 => 22,  72 => 21,  65 => 20,  59 => 19,  51 => 16,  38 => 13,  31 => 9,  26 => 7,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div id="content">*/
/*     <div class="center_content_inner">*/
/*         <div id="body_content" class="profil">*/
/*             <div id="card_eplugg">*/
/*                 <div class="yellow">*/
/*                     {{ render(controller('EpluggFrontBundle:Default:Vip', {'uid': user.Id})) }}*/
/* */
/*                     <img src="{{ asset('images/arrow-yelow-big.png') }}">*/
/*                 </div>*/
/*                 <div id="card_user" itemscope itemtype="http://schema.org/QAPage">*/
/*                     <div class="img_profil">*/
/*                         <a><img itemprop="image" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a>*/
/*                     </div>*/
/*                     <div class="descp_card">*/
/*                         <strong><a href="#" itemprop="name">{{ user.firstName }} {{ user.lastName }}</a></strong>*/
/*                         <em>search_users</em>*/
/*                         <ul itemprop="description">*/
/*                             {% if user.directPhone is not empty %}<li class="tel1">{{ user.directPhone }}</li>{% endif %}*/
/*                             {% if user.mobile is not empty %}<li class="mobile">{{ user.mobile }}</li>{% endif %}*/
/*                             <li class="mail1">{{ user.email }}{% if user.moreEmails is not empty %}|{{ user.moreEmails }}{% endif %}</li>*/
/*                             {% if user.sociaux is not empty %}<li class="sociaux">{{ user.sociaux }}</li>{% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div id="card_company">*/
/*                     <div class="img_profil"><a><img src="{% if user.CompanyAvatar is not empty %} {{ asset(user.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}"></a></div>*/
/*                     <div class="descp_card">*/
/*                         <strong><a href="#">{{ user.companyName }}</a></strong>*/
/*                         <div class="tag">{% if user.getActivitiesFormatted is not empty %}{{ user.getActivitiesFormatted }}{% endif %}</div>*/
/*                         <ul>*/
/*                             {% if user.companyTel is not empty %}<li class="tel2">{{ user.companyTel }}</li>{% endif %}*/
/*                             {% if user.companyFax is not empty %}<li class="fax">{{ user.companyFax }}</li>{% endif %}*/
/*                             {% if user.companyWebsite is not empty %}<li class="site">{{ user.companyWebsite }}</li>{% endif %}*/
/*                             {% if user.companyAddress is not empty %}<li class="lieu">{{ user.companyAddress }}</li>{% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="social_bar">*/
/*                 <a onclick="javascript:window.open(this.href, '', 'width=530,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="https://www.facebook.com/sharer/sharer.php?u={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_facebook hotspot" onmouseover="tooltip.show('share_on_facebook');" onmouseout="tooltip.hide();" title="facebook"></a>*/
/* */
/*                 <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="http://twitter.com/share?text=profile%20{{ user.firstName }}%20{{ user.lastName }}&url={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_twitter hotspot" onmouseover="tooltip.show('share_on_twitter');" onmouseout="tooltip.hide();"></a>*/
/* */
/*                 <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="https://plus.google.com/share?url={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_google hotspot" onmouseover="tooltip.show('share_on_google');" onmouseout="tooltip.hide();"></a>*/
/* */
/*                 <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="http://www.linkedin.com/shareArticle?mini=true&url={{ url('eplugg_profile_page', { 'uid': user.id}) }}" class="link_linkedin hotspot" onmouseover="tooltip.show('share_on_linkedin');" onmouseout="tooltip.hide();"></a>*/
/*             </div>*/
/*             <div style="display:none;" id="canvas-card"></div>*/
/*             <div style="display:none;" id="image-card"></div>*/
/*             <div class="partage_profil">*/
/*                 <ul>*/
/*                     <li id="first">*/
/*                         <a class="btn_edit" title="{{ 'Modifier'|trans }}" href="{{ path('eplugg_edit_profile') }}">{{ 'Modifier'|trans }}</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="clear30"></div>*/
/*             <div class="titre_plugg">*/
/*                 {{ 'Parcours'|trans }}*/
/*                 <a title="{{ 'Ajouter une expérience'|trans }}" class="link_exp" rel="add_cv" href="{{ path('eplugg_add_experience', {'iframe': 'true', 'width': '500', 'height': '350' }) }}"> {{ 'Ajouter une expérience'|trans }} </a>*/
/*                 <a title="{{ 'Ajouter votre CV'|trans }}" class="link_cv" rel="upload_cv" href="{{ path('eplugg_upload_cv', {'iframe': 'true', 'width': '500', 'height': '150' }) }}">*/
/*                     {{ 'Ajouter votre CV'|trans }}*/
/*                 </a>*/
/*             </div>*/
/*             <div class="cv_profil">*/
/*                 {% if user.Cv is not empty and user.Cv.path is not empty  %}*/
/*                     <div class="btn_download">*/
/*                         <a href="{{ asset('uploads/' ~ user.Cv.path) }}" target="_blank">*/
/*                             <img src="{{ asset('images/pdf.png') }}" />*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {{ render(controller('EpluggFrontBundle:Default:getExperiences', {'ownProfile': true, 'uid': user.Id})) }}*/
/* */
/*             </div>*/
/*             <div class="clear20"></div>*/
/*             <div class="titre_plugg">{{ 'Actualités'|trans }}</div>*/
/*             <div id="content_infinity" class="content_center__">*/
/*                 {{ render(controller('EpluggFrontBundle:Default:News', {'uid': user.Id})) }}*/
/*             </div>*/
/*             <div class="clear20"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clear25"></div>*/
/* </div>*/

<?php

/* EpluggFrontBundle:Default:signup_steptwo.html.twig */
class __TwigTemplate_52a77af7d2d42de0025e20ec7bd42044771674d7681884f463b763a00be7adf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Default:signup_steptwo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\" style=\"min-height: 832px;\">
        <div class=\"center_content_inner\" style=\"min-height: 827px;\">
            <div id=\"etape_page\">
                ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "files" => true, "action" => $this->env->getExtension('routing')->getPath("eplug_signup_step2"), "attr" => array("id" => "msform", "class" => "msform")));
        echo "

                <ul id=\"progressbar\">
                    <li id=\"step1\" class=\"active\">Step 1<span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pluggeur info"), "html", null, true);
        echo "</span></li>
                    <li id=\"step2\">Step 2<span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Establishment info"), "html", null, true);
        echo "</span></li>
                </ul>
                <fieldset id=\"fieldsetStep1\">
                    <div class=\"profil\">
                        <div id=\"card_eplugg\">
                            <div class=\"btn_step\">
                                <button id=\"previousStep\" disabled=\"disabled\" type=\"button\"><img
                                            src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/prev.png"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
        echo "
                                </button>
                                <button id=\"nextStep\" type=\"button\" onclick=\"getCompany()\"> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suivant"), "html", null, true);
        echo " <img
                                            src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/continue.png"), "html", null, true);
        echo "\"></button>
                            </div>
                            <div class=\"cache\"></div>
                            <div class=\"cache2\"></div>
                            <div class=\"yellow\">
                                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow-big.png"), "html", null, true);
        echo "\">
                            </div>
                            <div id=\"card_user\">
                                 <div class=\"img_profil user_avatar\">
                                    <a rel=\"edit_image\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_upload_avatar", array("iframe" => "true", "width" => "800", "height" => "560", "avatarType" => "user_avatar")), "html", null, true);
        echo "\">
                                        <img class=\"edit_img\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/png_edit.png"), "html", null, true);
        echo "\">
                                        <img id=\"profile_image\" class=\"avatar_img\" src=\"";
        // line 32
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\">
                                    </a>
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "avatar_user_id", array()), 'widget', array("attr" => array("class" => "avatar_id")));
        echo "

                                </div>
                                <div class=\"descp_card\">
                                    <strong>
                                        <a></a>
                                    </strong>
                                    <em></em>
                                    <ul>
                                        <li class=\"tel1\" style=\"position:relative\">
                                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direct_phone", array()), 'widget', array("id" => "perPhone", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Numéro téléphone fixe"))));
        echo "
                                            <a id=\"pAddSep\" class=\"addSep hotspot\" onmouseout=\"tooltip.hide()\"
                                               onmouseover=\"tooltip.show('";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un numéro de téléphone"), "html", null, true);
        echo "');\"></a>
                                        </li>
                                        <li class=\"mobile\" style=\"position:relative\">
                                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'widget', array("id" => "perMobile", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Numéro téléphone mobile"))));
        echo "
                                            <a id=\"pAddMobile\" class=\"addSep hotspot\" onmouseout=\"tooltip.hide();\"
                                               onmouseover=\"tooltip.show('";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un numéro de téléphone"), "html", null, true);
        echo "');\"></a>
                                        </li>
                                        <li class=\"mail1\" style=\"position:relative\">
                                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "more_emails", array()), 'widget', array("id" => "perEmail", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Emails"))));
        echo "
                                            <a id=\"pAddEmail\" class=\"addSep hotspot\" onmouseout=\"tooltip.hide();\"
                                               onmouseover=\"tooltip.show('";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter une adresse e-mail"), "html", null, true);
        echo "');\"></a>
                                        </li>
                                        <li class=\"sociaux\" style=\"position:relative\">
                                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sociaux", array()), 'widget', array("id" => "perSociaux", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Liens Réseaux sociaux (Facebook, Twitter, G+, Linkedin, ...)"))));
        echo "
                                            <a id=\"pAddSociaux\" class=\"addSep hotspot\" onmouseout=\"tooltip.hide();\"
                                               onmouseover=\"tooltip.show('";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter des liens vers des réseaux sociaux (facebook, google+,twitter...)"), "html", null, true);
        echo "');\"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id=\"card_company\">
                                <div class=\"img_profil company_avatar\">
                                    <a rel=\"edit_logo\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_upload_avatar", array("iframe" => "true", "width" => "800", "height" => "560", "avatarType" => "company_avatar")), "html", null, true);
        echo "\">
                                        <img class=\"edit_img\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/png_edit.png"), "html", null, true);
        echo "\">
                                        <img id=\"profile_logo\" class=\"avatar_img\" src=\"";
        // line 70
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "CompanyAvatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
            echo " ";
        }
        echo "\">
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "avatar_company_id", array()), 'widget', array("attr" => array("class" => "avatar_id")));
        echo "

                                    </a>
                                </div>
                                <div class=\"descp_card\">
                                    <strong><a></a></strong>

                                    <div class=\"tag\"></div>
                                    <ul>
                                        <li style=\"position:relative\" class=\"tel2\">
                                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_tel", array()), 'widget', array("id" => "cmpnPhone", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Téléphones"))));
        echo "
                                            <a onmouseout=\"tooltip.hide();\"
                                               onmouseover=\"tooltip.show('";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un numéro de téléphone"), "html", null, true);
        echo "');\"
                                               class=\"addSep hotspot\" id=\"cAddPhone\"></a>
                                        </li>
                                        <li style=\"position:relative\" class=\"fax\">
                                            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_fax", array()), 'widget', array("id" => "cmpnFax", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Fax"))));
        echo "
                                            <a onmouseout=\"tooltip.hide();\"
                                               onmouseover=\"tooltip.show('";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter le numéro de fax"), "html", null, true);
        echo "');\"
                                               class=\"addSep hotspot\" id=\"cAddFax\"></a>
                                        </li>
                                        <li style=\"position:relative\" class=\"site\">
                                            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_website", array()), 'widget', array("id" => "cmpnSite", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Sitesweb"))));
        echo "
                                            <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un site"), "html", null, true);
        echo "');\"
                                               class=\"addSep hotspot\" id=\"cAddSite\"></a>
                                        </li>
                                        <li class=\"lieu\">
                                            <table width=\"100%\">
                                                <tbody>
                                                <tr>
                                                    <td width=\"60%\">
                                                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_address", array()), 'widget', array("id" => "cmpnAddress", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Adresse"))));
        echo "
                                                    </td>
                                                    <td>,</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clear25\"></div>
                </fieldset>
                <fieldset id=\"fieldsetStep2\">
                    <div class=\"profil\">
                        <div id=\"card_eplugg\">
                            <div class=\"yellow \"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow-big.png"), "html", null, true);
        echo "\"></div>
                            <div id=\"card_user\">
                                <div class=\"img_profil user_avatar\"><a><img class=\"avatar_img\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
        echo "\"></a></div>
                                <div class=\"descp_card\">
                                    <strong><a> </a></strong>
                                    <em></em>
                                    <ul>
                                        <li id=\"cfmPerPhone\" class=\"tel1\"></li>
                                        <li id=\"cfmPerMobile\" class=\"mobile\"></li>
                                        <li id=\"cfmPerEmail\" class=\"mail1\"></li>
                                        <li id=\"cfmPerSociaux\" class=\"sociaux\"></li>
                                    </ul>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                            <div id=\"card_company\">
                                <div class=\"img_profil company_avatar\"><a><img class=\"avatar_img\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
        echo "\"></a></div>
                                <div class=\"descp_card\">
                                    <strong><a></a></strong>
                                    <ul>
                                        <li id=\"cfmCmpnPhone\" class=\"tel2\"></li>
                                        <li id=\"cfmCmpnFax\" class=\"fax\"></li>
                                        <li id=\"cfmCmpnSite\" class=\"site\"></li>
                                        <li class=\"lieu\"><span id=\"cfmCmpnAddress\"></span> ,</li>
                                    </ul>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clear25\"></div>
                    <button name=\"submit\" type=\"submit\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/valide_.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrer"), "html", null, true);
        echo "</button>
                    <button onclick=\"getPrevious2()\" type=\"button\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow_btn.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Retour"), "html", null, true);
        echo "
                    </button>
                </fieldset>
                ";
        // line 157
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:signup_steptwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 157,  312 => 154,  306 => 153,  288 => 138,  271 => 124,  266 => 122,  243 => 102,  232 => 94,  228 => 93,  221 => 89,  216 => 87,  209 => 83,  204 => 81,  191 => 71,  180 => 70,  176 => 69,  172 => 68,  162 => 61,  157 => 59,  151 => 56,  146 => 54,  140 => 51,  135 => 49,  129 => 46,  124 => 44,  111 => 34,  99 => 32,  95 => 31,  91 => 30,  84 => 26,  76 => 21,  72 => 20,  65 => 18,  55 => 11,  51 => 10,  45 => 7,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Inscription'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div id="content" style="min-height: 832px;">*/
/*         <div class="center_content_inner" style="min-height: 827px;">*/
/*             <div id="etape_page">*/
/*                 {{ form_start(form, {'method': 'post', 'files': true, 'action': path('eplug_signup_step2'), 'attr': {'id': 'msform', 'class': 'msform' } }) }}*/
/* */
/*                 <ul id="progressbar">*/
/*                     <li id="step1" class="active">Step 1<span>{{ 'Pluggeur info'|trans }}</span></li>*/
/*                     <li id="step2">Step 2<span>{{ 'Establishment info'|trans }}</span></li>*/
/*                 </ul>*/
/*                 <fieldset id="fieldsetStep1">*/
/*                     <div class="profil">*/
/*                         <div id="card_eplugg">*/
/*                             <div class="btn_step">*/
/*                                 <button id="previousStep" disabled="disabled" type="button"><img*/
/*                                             src="{{ asset('images/prev.png') }}">{{'Retour'|trans}}*/
/*                                 </button>*/
/*                                 <button id="nextStep" type="button" onclick="getCompany()"> {{ 'Suivant'|trans }} <img*/
/*                                             src="{{ asset('images/continue.png') }}"></button>*/
/*                             </div>*/
/*                             <div class="cache"></div>*/
/*                             <div class="cache2"></div>*/
/*                             <div class="yellow">*/
/*                                 <img src="{{ asset('images/arrow-yelow-big.png') }}">*/
/*                             </div>*/
/*                             <div id="card_user">*/
/*                                  <div class="img_profil user_avatar">*/
/*                                     <a rel="edit_image" href="{{ path('eplugg_upload_avatar', {'iframe': 'true', 'width': '800', 'height': '560','avatarType': 'user_avatar'}) }}">*/
/*                                         <img class="edit_img" src="{{ asset('images/png_edit.png') }}">*/
/*                                         <img id="profile_image" class="avatar_img" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*                                     </a>*/
/*                                     {{ form_widget(form.avatar_user_id, { 'attr': { 'class': 'avatar_id'} } ) }}*/
/* */
/*                                 </div>*/
/*                                 <div class="descp_card">*/
/*                                     <strong>*/
/*                                         <a></a>*/
/*                                     </strong>*/
/*                                     <em></em>*/
/*                                     <ul>*/
/*                                         <li class="tel1" style="position:relative">*/
/*                                             {{ form_widget(form.direct_phone, { 'id': "perPhone", 'attr': {'placeholder': 'Numéro téléphone fixe'| trans } } ) }}*/
/*                                             <a id="pAddSep" class="addSep hotspot" onmouseout="tooltip.hide()"*/
/*                                                onmouseover="tooltip.show('{{ "Ajouter un numéro de téléphone"|trans }}');"></a>*/
/*                                         </li>*/
/*                                         <li class="mobile" style="position:relative">*/
/*                                             {{ form_widget(form.mobile, { 'id': "perMobile", 'attr': {'placeholder': 'Numéro téléphone mobile'| trans } } ) }}*/
/*                                             <a id="pAddMobile" class="addSep hotspot" onmouseout="tooltip.hide();"*/
/*                                                onmouseover="tooltip.show('{{ "Ajouter un numéro de téléphone"|trans }}');"></a>*/
/*                                         </li>*/
/*                                         <li class="mail1" style="position:relative">*/
/*                                             {{ form_widget(form.more_emails, { 'id': "perEmail", 'attr': {'placeholder': 'Emails'| trans } } ) }}*/
/*                                             <a id="pAddEmail" class="addSep hotspot" onmouseout="tooltip.hide();"*/
/*                                                onmouseover="tooltip.show('{{ "Ajouter une adresse e-mail"|trans }}');"></a>*/
/*                                         </li>*/
/*                                         <li class="sociaux" style="position:relative">*/
/*                                             {{ form_widget(form.sociaux, { 'id': "perSociaux", 'attr': {'placeholder': 'Liens Réseaux sociaux (Facebook, Twitter, G+, Linkedin, ...)'| trans } } ) }}*/
/*                                             <a id="pAddSociaux" class="addSep hotspot" onmouseout="tooltip.hide();"*/
/*                                                onmouseover="tooltip.show('{{ "Ajouter des liens vers des réseaux sociaux (facebook, google+,twitter...)"|trans }}');"></a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="card_company">*/
/*                                 <div class="img_profil company_avatar">*/
/*                                     <a rel="edit_logo" href="{{ path('eplugg_upload_avatar', {'iframe': 'true', 'width': '800', 'height': '560','avatarType': 'company_avatar'}) }}">*/
/*                                         <img class="edit_img" src="{{ asset('images/png_edit.png') }}">*/
/*                                         <img id="profile_logo" class="avatar_img" src="{% if user.CompanyAvatar is not empty %} {{ asset(user.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}">*/
/*                                         {{ form_widget(form.avatar_company_id, { 'attr': { 'class': 'avatar_id'} } ) }}*/
/* */
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="descp_card">*/
/*                                     <strong><a></a></strong>*/
/* */
/*                                     <div class="tag"></div>*/
/*                                     <ul>*/
/*                                         <li style="position:relative" class="tel2">*/
/*                                             {{ form_widget(form.company_tel, { 'id': "cmpnPhone", 'attr': {'placeholder': 'Téléphones'| trans } } ) }}*/
/*                                             <a onmouseout="tooltip.hide();"*/
/*                                                onmouseover="tooltip.show('{{ "Ajouter un numéro de téléphone"|trans }}');"*/
/*                                                class="addSep hotspot" id="cAddPhone"></a>*/
/*                                         </li>*/
/*                                         <li style="position:relative" class="fax">*/
/*                                             {{ form_widget(form.company_fax, { 'id': "cmpnFax", 'attr': {'placeholder': 'Fax'| trans } } ) }}*/
/*                                             <a onmouseout="tooltip.hide();"*/
/*                                                onmouseover="tooltip.show('{{ "Ajouter le numéro de fax"|trans }}');"*/
/*                                                class="addSep hotspot" id="cAddFax"></a>*/
/*                                         </li>*/
/*                                         <li style="position:relative" class="site">*/
/*                                             {{ form_widget(form.company_website, { 'id': "cmpnSite", 'attr': {'placeholder': 'Sitesweb'| trans } } ) }}*/
/*                                             <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('{{ "Ajouter un site"|trans }}');"*/
/*                                                class="addSep hotspot" id="cAddSite"></a>*/
/*                                         </li>*/
/*                                         <li class="lieu">*/
/*                                             <table width="100%">*/
/*                                                 <tbody>*/
/*                                                 <tr>*/
/*                                                     <td width="60%">*/
/*                                                         {{ form_widget(form.company_address, { 'id': "cmpnAddress", 'attr': {'placeholder': 'Adresse'|trans } } ) }}*/
/*                                                     </td>*/
/*                                                     <td>,</td>*/
/*                                                 </tr>*/
/*                                                 </tbody>*/
/*                                             </table>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear25"></div>*/
/*                 </fieldset>*/
/*                 <fieldset id="fieldsetStep2">*/
/*                     <div class="profil">*/
/*                         <div id="card_eplugg">*/
/*                             <div class="yellow "><img src="{{ asset('images/arrow-yelow-big.png') }}"></div>*/
/*                             <div id="card_user">*/
/*                                 <div class="img_profil user_avatar"><a><img class="avatar_img" src="{{ asset('images/avatar.png') }}"></a></div>*/
/*                                 <div class="descp_card">*/
/*                                     <strong><a> </a></strong>*/
/*                                     <em></em>*/
/*                                     <ul>*/
/*                                         <li id="cfmPerPhone" class="tel1"></li>*/
/*                                         <li id="cfmPerMobile" class="mobile"></li>*/
/*                                         <li id="cfmPerEmail" class="mail1"></li>*/
/*                                         <li id="cfmPerSociaux" class="sociaux"></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <div id="card_company">*/
/*                                 <div class="img_profil company_avatar"><a><img class="avatar_img" src="{{ asset('images/avatar-company.png') }}"></a></div>*/
/*                                 <div class="descp_card">*/
/*                                     <strong><a></a></strong>*/
/*                                     <ul>*/
/*                                         <li id="cfmCmpnPhone" class="tel2"></li>*/
/*                                         <li id="cfmCmpnFax" class="fax"></li>*/
/*                                         <li id="cfmCmpnSite" class="site"></li>*/
/*                                         <li class="lieu"><span id="cfmCmpnAddress"></span> ,</li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear25"></div>*/
/*                     <button name="submit" type="submit"><img src="{{ asset('images/valide_.png') }}"> {{ 'Enregistrer'|trans }}</button>*/
/*                     <button onclick="getPrevious2()" type="button"><img src="{{ asset('images/arrow_btn.png') }}"> {{ 'Retour'|trans }}*/
/*                     </button>*/
/*                 </fieldset>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

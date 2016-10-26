<?php

/* EpluggFrontBundle:Default:edit_profile.html.twig */
class __TwigTemplate_fe050117055f14e1cd0d1d3cc270d735a39a19b3d7c8b3cb3c7085af7fc434eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Default:edit_profile.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier vos informations"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\" style=\"min-height: 834px;\">
    <div class=\"center_content_inner\" style=\"min-height: 829px;\">
    <div class=\"profil\" id=\"body_content\">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "files" => true, "action" => $this->env->getExtension('routing')->getPath("eplugg_edit_profile")));
        echo "
    <div class=\"edit_profil\" id=\"card_eplugg\">
    <div class=\"yellow\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow-big.png"), "html", null, true);
        echo "\"></div>
    <div id=\"card_user\">
        <div class=\"img_profil user_avatar\">
            <a rel=\"edit_image\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_upload_avatar", array("iframe" => "true", "width" => "800", "height" => "560", "avatarType" => "user_avatar")), "html", null, true);
        echo "\">
                <img class=\"edit_img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/png_edit.png"), "html", null, true);
        echo "\">
                 <img id=\"profile_image\" class=\"avatar_img\" src=\"";
        // line 14
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
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "avatar_user_id", array()), 'widget', array("attr" => array("class" => "avatar_id")));
        echo "

        </div>
        <div class=\"descp_card\">
            <strong>
                <div class=\"half_div\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'widget', array("id" => "perFirstname", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Prénom"))));
        echo "


                </div>
                <div class=\"half_div\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'widget', array("id" => "perFirstname", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Nom"))));
        echo "
                </div>
            </strong>
            <em>
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'widget', array("id" => "perJob", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Profession / Status"))));
        echo "
            </em>
            <ul>
                <li style=\"position:relative\" class=\"tel1\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direct_phone", array()), 'widget', array("id" => "perPhone", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Numéro téléphone fixe"))));
        echo "

                    <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un numéro de téléphone"), "html", null, true);
        echo "');\"
                       class=\"addSep hotspot\" id=\"pAddMobile\"></a>
                </li>
                <li style=\"position:relative\" class=\"mobile\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'widget', array("id" => "perMobile", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Numéro téléphone mobile"))));
        echo "

                    <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un numéro de téléphone"), "html", null, true);
        echo "');\"
                       class=\"addSep hotspot\" id=\"pAddMobile\"></a>
                </li>
                <li style=\"position:relative\" class=\"mail1\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "more_emails", array()), 'widget', array("id" => "perEmail", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Emails"))));
        echo "

                    <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter une adresse email"), "html", null, true);
        echo "');\"
                       class=\"addSep hotspot\" id=\"pAddMobile\"></a>
                </li>
                <li style=\"position:relative\" class=\"sociaux\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sociaux", array()), 'widget', array("id" => "perSociaux", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Liens des comptes Facebook, Twitter, G+, Linkedin, ..."))));
        echo "


                    <a onmouseout=\"tooltip.hide();\"
                       onmouseover=\"tooltip.show('";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter des liens vers des réseaux sociaux (facebook, google+,twitter...)"), "html", null, true);
        echo "');\"
                       class=\"addSep hotspot\" id=\"pAddSociaux\"></a>
                </li>
            </ul>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div id=\"card_company\">

    <div class=\"img_profil company_avatar\">
        <a rel=\"edit_logo\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_upload_avatar", array("iframe" => "true", "width" => "800", "height" => "560", "avatarType" => "company_avatar")), "html", null, true);
        echo "\">
            <img class=\"edit_img\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/png_edit.png"), "html", null, true);
        echo "\">
            <img id=\"profile_logo\" class=\"avatar_img\" src=\"";
        // line 69
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
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "avatar_company_id", array()), 'widget', array("attr" => array("class" => "avatar_id")));
        echo "

        </a>
    </div>
    <div class=\"descp_card\">
    <strong>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget', array("id" => "cmpnName", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Etablissement"))));
        echo "</strong>

    <em style=\"position:relative\">
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activities", array()), 'widget', array("id" => "cmpnActivity", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Domaine d'activité"))));
        echo "

        <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('Ajouter une activité');\" class=\"addSep hotspot\"
           id=\"pAddAct\"></a>
    </em>
    <ul>
    <li style=\"position:relative\" class=\"tel2\">
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_tel", array()), 'widget', array("id" => "cmpnPhone", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Numéro téléphone"))));
        echo "

        <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un numéro de téléphone"), "html", null, true);
        echo "');\"
           class=\"addSep hotspot\" id=\"pAddMobile\"></a>
    </li>
    <li style=\"position:relative\" class=\"fax\">
        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_fax", array()), 'widget', array("id" => "cmpnFax", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Numéro fax"))));
        echo "
        <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un numéro de Fax"), "html", null, true);
        echo "');\" class=\"addSep hotspot\"
           id=\"pAddMobile\"></a>
    </li>
    <li style=\"position:relative\" class=\"site\">
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_website", array()), 'widget', array("id" => "cmpnSite", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Site Web"))));
        echo "
        <a onmouseout=\"tooltip.hide();\" onmouseover=\"tooltip.show('Ajouter un Site');\" class=\"addSep hotspot\"
           id=\"pAddSite\"></a>
    </li>
    <li class=\"lieu\">
    <div class=\"adress_div\">
        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_address", array()), 'widget', array("id" => "cmpnAddress", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Adresse"))));
        echo "

    </div>
    <div class=\"div_city\">
        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_city", array()), 'widget', array("id" => "company_city", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Ville"))));
        echo "
    </div>
    <div class=\"country_div\">
    <label class=\"custom_country\">
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_country", array()), 'widget', array("id" => "company_country", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Adresse"))));
        echo "
    </label>
    </div>
    </li>
    </ul>
    </div>
    <div class=\"clear\"></div>
    </div>
    </div>
    <div class=\"partage_profil\">
        <ul>
            <li>

                <button class=\"submit\" type=\"submit\"><img width=\"20\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow-big.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrer"), "html", null, true);
        echo "</button>
            </li>
        </ul>
    </div>
    ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    <div class=\"clear30\"></div>
    </div>
        ";
        // line 130
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Default:edit_profile.html.twig", 130)->display($context);
        // line 131
        echo "

    </div>
    <div class=\"clear25\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 131,  283 => 130,  277 => 127,  268 => 123,  252 => 110,  245 => 106,  238 => 102,  229 => 96,  222 => 92,  218 => 91,  211 => 87,  206 => 85,  196 => 78,  190 => 75,  182 => 70,  171 => 69,  167 => 68,  163 => 67,  150 => 57,  143 => 53,  136 => 49,  131 => 47,  124 => 43,  119 => 41,  112 => 37,  107 => 35,  100 => 31,  93 => 27,  85 => 22,  76 => 16,  64 => 14,  60 => 13,  56 => 12,  50 => 9,  45 => 7,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Modifier vos informations'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*     <div class="center_content_inner" style="min-height: 829px;">*/
/*     <div class="profil" id="body_content">*/
/*     {{ form_start(form, {'method': 'post', 'files': true, 'action': path('eplugg_edit_profile') }) }}*/
/*     <div class="edit_profil" id="card_eplugg">*/
/*     <div class="yellow"><img src="{{ asset('images/arrow-yelow-big.png') }}"></div>*/
/*     <div id="card_user">*/
/*         <div class="img_profil user_avatar">*/
/*             <a rel="edit_image" href="{{ path('eplugg_upload_avatar', {'iframe': 'true', 'width': '800', 'height': '560','avatarType': 'user_avatar'}) }}">*/
/*                 <img class="edit_img" src="{{ asset('images/png_edit.png') }}">*/
/*                  <img id="profile_image" class="avatar_img" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*             </a>*/
/*             {{ form_widget(form.avatar_user_id, { 'attr': { 'class': 'avatar_id'} } ) }}*/
/* */
/*         </div>*/
/*         <div class="descp_card">*/
/*             <strong>*/
/*                 <div class="half_div">*/
/*                     {{ form_widget(form.firstName, { 'id': "perFirstname", 'attr': {'placeholder': 'Prénom'| trans } } ) }}*/
/* */
/* */
/*                 </div>*/
/*                 <div class="half_div">*/
/*                     {{ form_widget(form.lastName, { 'id': "perFirstname", 'attr': {'placeholder': 'Nom'| trans } } ) }}*/
/*                 </div>*/
/*             </strong>*/
/*             <em>*/
/*                 {{ form_widget(form.job, { 'id': "perJob", 'attr': {'placeholder': 'Profession / Status'|trans } } ) }}*/
/*             </em>*/
/*             <ul>*/
/*                 <li style="position:relative" class="tel1">*/
/*                     {{ form_widget(form.direct_phone, { 'id': "perPhone", 'attr': {'placeholder': 'Numéro téléphone fixe'| trans } } ) }}*/
/* */
/*                     <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('{{ "Ajouter un numéro de téléphone"|trans }}');"*/
/*                        class="addSep hotspot" id="pAddMobile"></a>*/
/*                 </li>*/
/*                 <li style="position:relative" class="mobile">*/
/*                     {{ form_widget(form.mobile, { 'id': "perMobile", 'attr': {'placeholder': 'Numéro téléphone mobile'| trans } } ) }}*/
/* */
/*                     <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('{{ "Ajouter un numéro de téléphone"|trans }}');"*/
/*                        class="addSep hotspot" id="pAddMobile"></a>*/
/*                 </li>*/
/*                 <li style="position:relative" class="mail1">*/
/*                     {{ form_widget(form.more_emails, { 'id': "perEmail", 'attr': {'placeholder': 'Emails'| trans } } ) }}*/
/* */
/*                     <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('{{ "Ajouter une adresse email"|trans }}');"*/
/*                        class="addSep hotspot" id="pAddMobile"></a>*/
/*                 </li>*/
/*                 <li style="position:relative" class="sociaux">*/
/*                     {{ form_widget(form.sociaux, { 'id': "perSociaux", 'attr': {'placeholder': 'Liens des comptes Facebook, Twitter, G+, Linkedin, ...'|trans } } ) }}*/
/* */
/* */
/*                     <a onmouseout="tooltip.hide();"*/
/*                        onmouseover="tooltip.show('{{ "Ajouter des liens vers des réseaux sociaux (facebook, google+,twitter...)"|trans }}');"*/
/*                        class="addSep hotspot" id="pAddSociaux"></a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*     <div id="card_company">*/
/* */
/*     <div class="img_profil company_avatar">*/
/*         <a rel="edit_logo" href="{{ path('eplugg_upload_avatar', {'iframe': 'true', 'width': '800', 'height': '560','avatarType': 'company_avatar'}) }}">*/
/*             <img class="edit_img" src="{{ asset('images/png_edit.png') }}">*/
/*             <img id="profile_logo" class="avatar_img" src="{% if user.CompanyAvatar is not empty %} {{ asset(user.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}">*/
/*             {{ form_widget(form.avatar_company_id, { 'attr': { 'class': 'avatar_id'} } ) }}*/
/* */
/*         </a>*/
/*     </div>*/
/*     <div class="descp_card">*/
/*     <strong>{{ form_widget(form.company_name, { 'id': "cmpnName", 'attr': {'placeholder': 'Etablissement'|trans } } ) }}</strong>*/
/* */
/*     <em style="position:relative">*/
/*         {{ form_widget(form.activities, { 'id': "cmpnActivity", 'attr': {'placeholder': 'Domaine d\'activité'| trans } } ) }}*/
/* */
/*         <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('Ajouter une activité');" class="addSep hotspot"*/
/*            id="pAddAct"></a>*/
/*     </em>*/
/*     <ul>*/
/*     <li style="position:relative" class="tel2">*/
/*         {{ form_widget(form.company_tel, { 'id': "cmpnPhone", 'attr': {'placeholder': 'Numéro téléphone'|trans } } ) }}*/
/* */
/*         <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('{{ "Ajouter un numéro de téléphone"|trans }}');"*/
/*            class="addSep hotspot" id="pAddMobile"></a>*/
/*     </li>*/
/*     <li style="position:relative" class="fax">*/
/*         {{ form_widget(form.company_fax, { 'id': "cmpnFax", 'attr': {'placeholder': 'Numéro fax'|trans } } ) }}*/
/*         <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('{{ "Ajouter un numéro de Fax"|trans }}');" class="addSep hotspot"*/
/*            id="pAddMobile"></a>*/
/*     </li>*/
/*     <li style="position:relative" class="site">*/
/*         {{ form_widget(form.company_website, { 'id': "cmpnSite", 'attr': {'placeholder': 'Site Web'|trans } } ) }}*/
/*         <a onmouseout="tooltip.hide();" onmouseover="tooltip.show('Ajouter un Site');" class="addSep hotspot"*/
/*            id="pAddSite"></a>*/
/*     </li>*/
/*     <li class="lieu">*/
/*     <div class="adress_div">*/
/*         {{ form_widget(form.company_address, { 'id': "cmpnAddress", 'attr': {'placeholder': 'Adresse'|trans } } ) }}*/
/* */
/*     </div>*/
/*     <div class="div_city">*/
/*         {{ form_widget(form.company_city, { 'id': "company_city", 'attr': {'placeholder': 'Ville'|trans } } ) }}*/
/*     </div>*/
/*     <div class="country_div">*/
/*     <label class="custom_country">*/
/*         {{ form_widget(form.company_country, { 'id': "company_country", 'attr': {'placeholder': 'Adresse'|trans } } ) }}*/
/*     </label>*/
/*     </div>*/
/*     </li>*/
/*     </ul>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/*     </div>*/
/*     </div>*/
/*     <div class="partage_profil">*/
/*         <ul>*/
/*             <li>*/
/* */
/*                 <button class="submit" type="submit"><img width="20" src="{{ asset('images/arrow-yelow-big.png') }}"> {{ 'Enregistrer'|trans }}</button>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/*     <div class="clear30"></div>*/
/*     </div>*/
/*         {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/* */
/* */
/*     </div>*/
/*     <div class="clear25"></div>*/
/*     </div>*/
/* {% endblock %}*/

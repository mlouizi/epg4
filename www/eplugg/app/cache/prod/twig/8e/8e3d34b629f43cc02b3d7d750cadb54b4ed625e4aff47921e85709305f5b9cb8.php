<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_1c8a6efee0f9cc9d3e6e72cb6c9938ab6248ce2bc0b7c691fe232dbf095645e0 extends Twig_Template
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
        echo "
<div class=\"titre_plugg\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paramètres du compte", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "

    <div class=\"top_form\">
        <table width=\"100%\" class=\"tab_cv\">
            <tbody>
            <tr>
                <td height=\"35\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Adresse email", array(), "FOSUserBundle"), "html", null, true);
        echo " : </td>
                <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("id" => "email"));
        echo "<div class=\"error\"> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "</div></td>

            </tr>
            <tr>
                <td height=\"35\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe actuel", array(), "FOSUserBundle"), "html", null, true);
        echo " : </td>
                <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password", array()), 'widget', array("id" => "current_password"));
        echo "<div class=\"error\"> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password", array()), 'errors');
        echo "</div></td>

            </tr>
            <tr>
                <td height=\"35\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nouveau mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo " : </td>
                <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("id" => "password"));
        echo "</td>
            </tr>
            <tr>
                <td height=\"35\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Confirmer mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo " : </td>
                <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("id" => "password_again"));
        echo "
                    <div class=\"error\"> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'errors');
        echo "</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"div_btn\">
        <button class=\"submitSetting btn btn-large btn-inverse\" type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrer", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  96 => 35,  89 => 33,  79 => 26,  75 => 25,  71 => 24,  65 => 21,  61 => 20,  52 => 16,  48 => 15,  39 => 11,  35 => 10,  26 => 4,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="titre_plugg">{{ 'Paramètres du compte'|trans }}</div>*/
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/* */
/*     <div class="top_form">*/
/*         <table width="100%" class="tab_cv">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td height="35">{{ 'Adresse email'|trans }} : </td>*/
/*                 <td>{{ form_widget(form.email, { 'id': "email",}) }}<div class="error"> {{ form_errors(form.email) }}</div></td>*/
/* */
/*             </tr>*/
/*             <tr>*/
/*                 <td height="35">{{ 'Mot de passe actuel'|trans }} : </td>*/
/*                 <td>{{ form_widget(form.current_password, { 'id': "current_password",}) }}<div class="error"> {{ form_errors(form.current_password) }}</div></td>*/
/* */
/*             </tr>*/
/*             <tr>*/
/*                 <td height="35">{{ 'Nouveau mot de passe'|trans }} : </td>*/
/*                 <td>{{ form_widget(form.plainPassword.first, { 'id': "password",}) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td height="35">{{ 'Confirmer mot de passe'|trans }} : </td>*/
/*                 <td>{{ form_widget(form.plainPassword.second, { 'id': "password_again",}) }}*/
/*                     <div class="error"> {{ form_errors(form.plainPassword) }}</div>*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <div class="div_btn">*/
/*         <button class="submitSetting btn btn-large btn-inverse" type="submit" value="{{ 'change_password.submit'|trans }}">{{ 'Enregistrer'|trans }}</button>*/
/*     </div>*/
/* {{ form_widget(form) }}*/
/* */
/* {{ form_end(form) }}*/

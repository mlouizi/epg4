<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9e246a85fdf0531ac3656bfdde592f9909ef4081e97b9876b305ce7180fb48b0 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("id" => "registration", "class" => "fos_user_registration_register")));
        echo "
    <div class=\"form_home div_email\" style=\"width:79%\">
        <div class=\"div_message error\" id=\"registerMsg\" style=\"display:none\" ></div>
        <div class=\"clear10\"></div>
        <div class=\"signstep\">
            <div>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("id" => "email", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Email address", array(), "FOSUserBundle"))));
        echo "</div>
            <div>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("id" => "password", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Mot de passe", array(), "FOSUserBundle"))));
        echo "</div>
            <div>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("id" => "password_again", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Confirmation mot de passe", array(), "FOSUserBundle"))));
        echo "</div>
        </div>
        <div class=\"clear10\"></div>
        <div align=\"right\" >
            <button class=\"submitSignup\" onclick=\"if(!ValidateForm()) return false;\" name=\"submit\" type=\"submit\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrer", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        </div>
    </div>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'widget', array("id" => "gender1"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'widget', array("id" => "firstname1"));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'widget', array("id" => "lastname1"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'widget', array("id" => "job1"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget', array("id" => "company_name1"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activities", array()), 'widget', array("id" => "company_activity1"));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_city", array()), 'widget', array("id" => "company_city1"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_country", array()), 'widget', array("id" => "company_country1"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'widget', array("id" => "birthday1"));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthmonth", array()), 'widget', array("id" => "birthmonth1"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthyear", array()), 'widget', array("id" => "birthyear1"));
        echo "

";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  42 => 13,  35 => 9,  31 => 8,  27 => 7,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'id': 'registration', 'class': 'fos_user_registration_register'}}) }}*/
/*     <div class="form_home div_email" style="width:79%">*/
/*         <div class="div_message error" id="registerMsg" style="display:none" ></div>*/
/*         <div class="clear10"></div>*/
/*         <div class="signstep">*/
/*             <div>{{ form_widget(form.email, { 'id': "email", 'attr': {'placeholder': "Email address"|trans} } ) }}</div>*/
/*             <div>{{ form_widget(form.plainPassword.first, { 'id': "password", 'attr': {'placeholder': "Mot de passe"|trans} } ) }}</div>*/
/*             <div>{{ form_widget(form.plainPassword.second, { 'id': "password_again", 'attr': {'placeholder': "Confirmation mot de passe"|trans} } ) }}</div>*/
/*         </div>*/
/*         <div class="clear10"></div>*/
/*         <div align="right" >*/
/*             <button class="submitSignup" onclick="if(!ValidateForm()) return false;" name="submit" type="submit">{{ 'Enregistrer'|trans }}</button>*/
/*         </div>*/
/*     </div>*/
/*     {{ form_widget(form.gender, { 'id': "gender1" } ) }}*/
/*     {{ form_widget(form.firstname, { 'id': "firstname1" } ) }}*/
/*     {{ form_widget(form.lastname, { 'id': "lastname1" } ) }}*/
/*     {{ form_widget(form.job, { 'id': "job1" } ) }}*/
/*     {{ form_widget(form.company_name, { 'id': "company_name1" } ) }}*/
/*     {{ form_widget(form.activities, { 'id': "company_activity1" } ) }}*/
/*     {{ form_widget(form.company_city, { 'id': "company_city1" } ) }}*/
/*     {{ form_widget(form.company_country, { 'id': "company_country1" } ) }}*/
/*     {{ form_widget(form.birthday, { 'id': "birthday1" } ) }}*/
/*     {{ form_widget(form.birthmonth, { 'id': "birthmonth1" } ) }}*/
/*     {{ form_widget(form.birthyear, { 'id': "birthyear1" } ) }}*/
/* */
/* {{ form_end(form) }}*/

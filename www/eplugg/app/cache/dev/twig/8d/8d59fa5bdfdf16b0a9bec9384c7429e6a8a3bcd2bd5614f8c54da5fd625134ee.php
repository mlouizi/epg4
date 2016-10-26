<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c7c5cb99b48488638397f7bb96b9dc767ac603a904b06a9d3d65ae26a054d0b1 extends Twig_Template
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
        $__internal_545b88e87fe2cd240811a39d0a30d6f4570d05cc7f39d45b1db092973cf5ff55 = $this->env->getExtension("native_profiler");
        $__internal_545b88e87fe2cd240811a39d0a30d6f4570d05cc7f39d45b1db092973cf5ff55->enter($__internal_545b88e87fe2cd240811a39d0a30d6f4570d05cc7f39d45b1db092973cf5ff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("id" => "registration", "class" => "fos_user_registration_register")));
        echo "
    <div class=\"form_home div_email\" style=\"width:79%\">
        <div class=\"div_message error\" id=\"registerMsg\" style=\"display:none\" ></div>
        <div class=\"clear10\"></div>
        <div class=\"signstep\">
            <div>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("id" => "email", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Email address", array(), "FOSUserBundle"))));
        echo "</div>
            <div>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("id" => "password", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Mot de passe", array(), "FOSUserBundle"))));
        echo "</div>
            <div>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("id" => "password_again", "attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Confirmation mot de passe", array(), "FOSUserBundle"))));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("id" => "gender1"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("id" => "firstname1"));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("id" => "lastname1"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job", array()), 'widget', array("id" => "job1"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_name", array()), 'widget', array("id" => "company_name1"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activities", array()), 'widget', array("id" => "company_activity1"));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_city", array()), 'widget', array("id" => "company_city1"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company_country", array()), 'widget', array("id" => "company_country1"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday", array()), 'widget', array("id" => "birthday1"));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthmonth", array()), 'widget', array("id" => "birthmonth1"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthyear", array()), 'widget', array("id" => "birthyear1"));
        echo "

";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_545b88e87fe2cd240811a39d0a30d6f4570d05cc7f39d45b1db092973cf5ff55->leave($__internal_545b88e87fe2cd240811a39d0a30d6f4570d05cc7f39d45b1db092973cf5ff55_prof);

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
        return array (  96 => 28,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  45 => 13,  38 => 9,  34 => 8,  30 => 7,  22 => 2,);
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

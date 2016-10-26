<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_b8d5eda90885fabbeeab5463d3405184473f7560a16fcba60978d39d1d1b801d extends Twig_Template
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
        echo "<div class=\"login-sys\">
    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : null))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <div>
            <span class=\"login_span\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"connex\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’identifier", array(), "FOSUserBundle"), "html", null, true);
        echo "</a><br>
            </span>
            <span class=\"button_span\">
                <button class=\"submit\" type=\"submit\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’identifier", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            </span>
            <div class=\"clear\"></div>
        </div>

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  40 => 10,  32 => 7,  26 => 4,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="login-sys">*/
/*     {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*         {{ form_widget(form) }}*/
/*         <div>*/
/*             <span class="login_span">*/
/*                 <a href="{{ path('fos_user_security_login') }}" class="connex">{{ 'S’identifier'|trans }}</a><br>*/
/*             </span>*/
/*             <span class="button_span">*/
/*                 <button class="submit" type="submit">{{ 'S’identifier'|trans }}</button>*/
/*             </span>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* </div>*/
/* */

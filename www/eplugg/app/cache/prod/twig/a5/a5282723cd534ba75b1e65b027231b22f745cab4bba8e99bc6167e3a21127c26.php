<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_56e23f19a600f862b2024a33f60969235a61c71c4195bac01a0c61e1b311e9f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg", array(), "FOSUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "        <div class=\"login-sys\">
            <div class=\"titre_plugg\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
            <div class=\"login_inner\">
                ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 15
            echo "                    <div class=\"message error\">
                        <strong>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</strong>
                    </div>
                ";
        }
        // line 19
        echo "                <form id=\"signinform\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>
                    <input placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Adresse e-mail", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"text\" id=\"username\" name=\"_username\" value=\"\"
                           required=\"required\"/>
                    <input placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"password\" id=\"password\" name=\"_password\"
                           required=\"required\"/>
                    <input id=\"userLang\" type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\" name=\"lang\">

                    <div>
                        <span class=\"login_span\">
                            <a class=\"connex\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’inscrire", array(), "FOSUserBundle"), "html", null, true);
        echo "</a><br>
                            <a class=\"connex\"
                               href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié?", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                        </span>
                        <span class=\"button_span\">
                            <button type=\"submit\" id=\"_submit\" name=\"_submit\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’identifier", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </span>

                        <div class=\"clear\"></div>
                    </div>
                </form>
            </div>
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  115 => 31,  108 => 29,  101 => 25,  96 => 23,  91 => 21,  87 => 20,  82 => 19,  76 => 16,  73 => 15,  71 => 14,  66 => 12,  63 => 11,  56 => 10,  53 => 9,  47 => 7,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Connexion'|trans }}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block fos_user_content %}*/
/*         <div class="login-sys">*/
/*             <div class="titre_plugg">{{ 'Connexion'|trans }}</div>*/
/*             <div class="login_inner">*/
/*                 {% if error %}*/
/*                     <div class="message error">*/
/*                         <strong>{{ error.messageKey|trans(error.messageData, 'security') }}</strong>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <form id="signinform" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*                     <input placeholder="{{ 'Adresse e-mail'|trans }}" type="text" id="username" name="_username" value=""*/
/*                            required="required"/>*/
/*                     <input placeholder="{{ 'Password'|trans }}" type="password" id="password" name="_password"*/
/*                            required="required"/>*/
/*                     <input id="userLang" type="hidden" value="{{ app.request.locale }}" name="lang">*/
/* */
/*                     <div>*/
/*                         <span class="login_span">*/
/*                             <a class="connex" href="{{ url('homepage') }}">{{ 'S’inscrire'|trans }}</a><br>*/
/*                             <a class="connex"*/
/*                                href="{{ path('fos_user_resetting_request') }}">{{ 'Mot de passe oublié?'|trans }}</a>*/
/*                         </span>*/
/*                         <span class="button_span">*/
/*                             <button type="submit" id="_submit" name="_submit">{{ 'S’identifier'|trans }}</button>*/
/*                         </span>*/
/* */
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endblock fos_user_content %}*/
/* {% endblock body %}*/
/* */
/* */

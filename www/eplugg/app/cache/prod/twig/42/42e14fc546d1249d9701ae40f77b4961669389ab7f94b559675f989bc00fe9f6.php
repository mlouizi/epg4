<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_235a1b1a58ccdf3d6d9f91c28943afdbc056ceb04d875c5e79552e8459233aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg", array(), "FOSUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié", array(), "FOSUserBundle"), "html", null, true);
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
        echo "        ";
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 11)->display($context);
        // line 12
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  63 => 11,  56 => 10,  53 => 9,  47 => 7,  42 => 6,  39 => 5,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Mot de passe oublié'|trans }}{% endblock %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block fos_user_content %}*/
/*         {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/*     {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */

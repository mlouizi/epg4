<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6a03e5b4d4f2751b300c89bb8d8013818b12a539adb07d1af274ab22e9d1626f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 10)->display($context);
        // line 11
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  47 => 9,  44 => 8,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block fos_user_content %}*/
/*         {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/*     {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */

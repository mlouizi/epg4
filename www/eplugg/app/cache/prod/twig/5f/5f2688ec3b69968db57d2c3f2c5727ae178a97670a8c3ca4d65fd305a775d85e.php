<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_98d3b8048a1fd6b3a669efb193b393942188ad5f82870cc6ca3dec486acd1373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'og' => array($this, 'block_og'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
    }

    // line 3
    public function block_og($context, array $blocks = array())
    {
        // line 4
        echo "    <meta property=\"og:title\" content=\"Profile ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "\"/>
    <meta property=\"og:image\" content=\"";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\"/>
    <meta property=\"og:description\" content=\"";
        // line 6
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Direct Phone"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "directPhone", array()), "html", null, true);
            echo "  ";
        }
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mobile Phone"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()), "html", null, true);
            echo "  ";
        }
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Emails"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "moreEmails", array()), "html", null, true);
            echo "  ";
        }
        echo "\"/>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 9)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 9,  86 => 8,  63 => 6,  52 => 5,  45 => 4,  42 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Profile'|trans }}  {{ user.firstName }} {{ user.lastName }}{% endblock %}*/
/* {% block og %}*/
/*     <meta property="og:title" content="Profile {{ user.firstName }} {{ user.lastName }}"/>*/
/*     <meta property="og:image" content="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"/>*/
/*     <meta property="og:description" content="{% if user.directPhone is not empty %}{{ 'Direct Phone'|trans }}: {{ user.directPhone }}  {% endif %}{% if user.mobile is not empty %}{{ 'Mobile Phone'|trans }}: {{ user.mobile }}  {% endif %}{% if user.moreEmails is not empty %}{{ 'Emails'|trans }}: {{ user.moreEmails }}  {% endif %}"/>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock %}*/
/* */

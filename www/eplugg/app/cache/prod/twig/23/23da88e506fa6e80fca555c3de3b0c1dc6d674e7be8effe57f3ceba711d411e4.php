<?php

/* EpluggFrontBundle::base.html.twig */
class __TwigTemplate_87d566900a4d4209f410a93b13058b6b90636c29f3b5260f292bb8f9d2ef8861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'after_footer' => array($this, 'block_after_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no\" />

</head>
<body>
<div id=\"eplugg\">
";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        $this->displayBlock('after_footer', $context, $blocks);
        // line 33
        echo "</div>
";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "    <div style=\"overflow:auto\" id=\"header\">
        <div class=\"center_content\">
            <div id=\"logo\">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("eplugg_front_homepage");
        echo "\">
                    <img alt=\"logo\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
                </a>
            </div>
            ";
        // line 21
        $this->displayBlock('login', $context, $blocks);
        // line 22
        echo "        </div>
    </div>
";
    }

    // line 21
    public function block_login($context, array $blocks = array())
    {
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("EpluggFrontBundle:Default:footer.html.twig", "EpluggFrontBundle::base.html.twig", 28)->display($context);
        // line 29
        echo "
";
    }

    // line 31
    public function block_after_footer($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  129 => 31,  124 => 29,  121 => 28,  118 => 27,  113 => 25,  108 => 21,  102 => 22,  100 => 21,  94 => 18,  90 => 17,  85 => 14,  82 => 13,  77 => 6,  71 => 5,  65 => 35,  63 => 34,  60 => 33,  58 => 31,  56 => 27,  53 => 26,  51 => 25,  49 => 13,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}{{ 'Eplugg'|trans }}{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />*/
/* */
/* </head>*/
/* <body>*/
/* <div id="eplugg">*/
/* {% block header %}*/
/*     <div style="overflow:auto" id="header">*/
/*         <div class="center_content">*/
/*             <div id="logo">*/
/*                 <a href="{{ path('eplugg_front_homepage') }}">*/
/*                     <img alt="logo" src="{{ asset('images/logo.png') }}">*/
/*                 </a>*/
/*             </div>*/
/*             {% block login %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block body %}{% endblock %}*/
/* */
/* {% block footer %}*/
/*     {% include "EpluggFrontBundle:Default:footer.html.twig" %}*/
/* */
/* {% endblock %}*/
/* {% block after_footer %}*/
/* {% endblock %}*/
/* </div>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */

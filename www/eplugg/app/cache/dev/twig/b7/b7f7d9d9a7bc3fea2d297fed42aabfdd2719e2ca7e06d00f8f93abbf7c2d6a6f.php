<?php

/* EpluggFrontBundle::base.html.twig */
class __TwigTemplate_008223c7f5b93b8722666088c9e9fc87863f0d866811a4c82dba691afbe936ad extends Twig_Template
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
        $__internal_7cf88fe6aa1b2b88f3ce4f77b09b2f1627c4abe370d5bb4799a81acc7f5d3cc0 = $this->env->getExtension("native_profiler");
        $__internal_7cf88fe6aa1b2b88f3ce4f77b09b2f1627c4abe370d5bb4799a81acc7f5d3cc0->enter($__internal_7cf88fe6aa1b2b88f3ce4f77b09b2f1627c4abe370d5bb4799a81acc7f5d3cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpluggFrontBundle::base.html.twig"));

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
        
        $__internal_7cf88fe6aa1b2b88f3ce4f77b09b2f1627c4abe370d5bb4799a81acc7f5d3cc0->leave($__internal_7cf88fe6aa1b2b88f3ce4f77b09b2f1627c4abe370d5bb4799a81acc7f5d3cc0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f5b1e4be1ee4f4196a7b331a43c775c6e0e8e8df2a8cc46ac27af981e89fc45 = $this->env->getExtension("native_profiler");
        $__internal_3f5b1e4be1ee4f4196a7b331a43c775c6e0e8e8df2a8cc46ac27af981e89fc45->enter($__internal_3f5b1e4be1ee4f4196a7b331a43c775c6e0e8e8df2a8cc46ac27af981e89fc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        
        $__internal_3f5b1e4be1ee4f4196a7b331a43c775c6e0e8e8df2a8cc46ac27af981e89fc45->leave($__internal_3f5b1e4be1ee4f4196a7b331a43c775c6e0e8e8df2a8cc46ac27af981e89fc45_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a1ba474054cf97190575282a1cd46dad70a3b9e48e9116e3848390c5c6f232e = $this->env->getExtension("native_profiler");
        $__internal_4a1ba474054cf97190575282a1cd46dad70a3b9e48e9116e3848390c5c6f232e->enter($__internal_4a1ba474054cf97190575282a1cd46dad70a3b9e48e9116e3848390c5c6f232e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4a1ba474054cf97190575282a1cd46dad70a3b9e48e9116e3848390c5c6f232e->leave($__internal_4a1ba474054cf97190575282a1cd46dad70a3b9e48e9116e3848390c5c6f232e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_70c8635ecd2b94e0b6e1f4a71f24f17137d22cd4daf9b051b4e59b15abb1379b = $this->env->getExtension("native_profiler");
        $__internal_70c8635ecd2b94e0b6e1f4a71f24f17137d22cd4daf9b051b4e59b15abb1379b->enter($__internal_70c8635ecd2b94e0b6e1f4a71f24f17137d22cd4daf9b051b4e59b15abb1379b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_70c8635ecd2b94e0b6e1f4a71f24f17137d22cd4daf9b051b4e59b15abb1379b->leave($__internal_70c8635ecd2b94e0b6e1f4a71f24f17137d22cd4daf9b051b4e59b15abb1379b_prof);

    }

    // line 21
    public function block_login($context, array $blocks = array())
    {
        $__internal_2f9634e735a5849dd543c1d018aaa84eb6da5873f5a898f47c1cc7f0c46c821e = $this->env->getExtension("native_profiler");
        $__internal_2f9634e735a5849dd543c1d018aaa84eb6da5873f5a898f47c1cc7f0c46c821e->enter($__internal_2f9634e735a5849dd543c1d018aaa84eb6da5873f5a898f47c1cc7f0c46c821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        
        $__internal_2f9634e735a5849dd543c1d018aaa84eb6da5873f5a898f47c1cc7f0c46c821e->leave($__internal_2f9634e735a5849dd543c1d018aaa84eb6da5873f5a898f47c1cc7f0c46c821e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde7f189698ae48f85b4b31e9cb3499ccea9aca79a44c54ea4faa33c8111b4d1 = $this->env->getExtension("native_profiler");
        $__internal_cde7f189698ae48f85b4b31e9cb3499ccea9aca79a44c54ea4faa33c8111b4d1->enter($__internal_cde7f189698ae48f85b4b31e9cb3499ccea9aca79a44c54ea4faa33c8111b4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cde7f189698ae48f85b4b31e9cb3499ccea9aca79a44c54ea4faa33c8111b4d1->leave($__internal_cde7f189698ae48f85b4b31e9cb3499ccea9aca79a44c54ea4faa33c8111b4d1_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_65ee6e2bbe64c6911510a353c7c837b3226fff2bf461c8f7820f60952ba43283 = $this->env->getExtension("native_profiler");
        $__internal_65ee6e2bbe64c6911510a353c7c837b3226fff2bf461c8f7820f60952ba43283->enter($__internal_65ee6e2bbe64c6911510a353c7c837b3226fff2bf461c8f7820f60952ba43283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 28
        echo "    ";
        $this->loadTemplate("EpluggFrontBundle:Default:footer.html.twig", "EpluggFrontBundle::base.html.twig", 28)->display($context);
        // line 29
        echo "
";
        
        $__internal_65ee6e2bbe64c6911510a353c7c837b3226fff2bf461c8f7820f60952ba43283->leave($__internal_65ee6e2bbe64c6911510a353c7c837b3226fff2bf461c8f7820f60952ba43283_prof);

    }

    // line 31
    public function block_after_footer($context, array $blocks = array())
    {
        $__internal_d23e736fa9d3d8b02535cdc5c71d4e31100e71ad0fd0cdcba2a4aca828ffbfaa = $this->env->getExtension("native_profiler");
        $__internal_d23e736fa9d3d8b02535cdc5c71d4e31100e71ad0fd0cdcba2a4aca828ffbfaa->enter($__internal_d23e736fa9d3d8b02535cdc5c71d4e31100e71ad0fd0cdcba2a4aca828ffbfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "after_footer"));

        
        $__internal_d23e736fa9d3d8b02535cdc5c71d4e31100e71ad0fd0cdcba2a4aca828ffbfaa->leave($__internal_d23e736fa9d3d8b02535cdc5c71d4e31100e71ad0fd0cdcba2a4aca828ffbfaa_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ccc4ce9efde35065b9165e580b759cfe390c2c47985dbbdf0e7d6cf91d43d0a = $this->env->getExtension("native_profiler");
        $__internal_6ccc4ce9efde35065b9165e580b759cfe390c2c47985dbbdf0e7d6cf91d43d0a->enter($__internal_6ccc4ce9efde35065b9165e580b759cfe390c2c47985dbbdf0e7d6cf91d43d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ccc4ce9efde35065b9165e580b759cfe390c2c47985dbbdf0e7d6cf91d43d0a->leave($__internal_6ccc4ce9efde35065b9165e580b759cfe390c2c47985dbbdf0e7d6cf91d43d0a_prof);

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
        return array (  182 => 34,  171 => 31,  163 => 29,  160 => 28,  154 => 27,  143 => 25,  132 => 21,  123 => 22,  121 => 21,  115 => 18,  111 => 17,  106 => 14,  100 => 13,  89 => 6,  77 => 5,  68 => 35,  66 => 34,  63 => 33,  61 => 31,  59 => 27,  56 => 26,  54 => 25,  52 => 13,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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

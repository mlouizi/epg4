<?php

/* EpluggFrontBundle:Default:page_edito.html.twig */
class __TwigTemplate_2ab71caeb27c0e1687d20b6674960a83ebaa814cf5715a6b877fcb58b8f1b648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base.html.twig", "EpluggFrontBundle:Default:page_edito.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg", array(), "FOSUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"content\">
        <div class=\"center_content_inner mentionlegal\">
            <div class=\"titre_plugg search\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</div>
            ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array());
        echo "
            <div class=\"clear\"></div>
        </div>
    </div>
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.caret.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" >
        var invalide_email_error = \"Invalid email address.\" ;
        var password_error = \"Password must be a minimum of 6 characters string.\" ;
        var confirm_password_error = \"The two passwords must be identical.\" ;
    </script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/steps.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:page_edito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  76 => 19,  73 => 18,  64 => 13,  60 => 12,  56 => 10,  53 => 9,  45 => 7,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ page.title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content">*/
/*         <div class="center_content_inner mentionlegal">*/
/*             <div class="titre_plugg search">{{ page.title }}</div>*/
/*             {{ page.body | raw }}*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock body %}*/
/* {% block javascripts %}*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.caret.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" >*/
/*         var invalide_email_error = "Invalid email address." ;*/
/*         var password_error = "Password must be a minimum of 6 characters string." ;*/
/*         var confirm_password_error = "The two passwords must be identical." ;*/
/*     </script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/steps.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */

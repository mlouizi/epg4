<?php

/* EpluggFrontBundle:popin:base_popin.html.twig */
class __TwigTemplate_4668c881f26a414b1e2ad866d1b4e6c195185afd76cb79c5af06cd8a5b0d3ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
        <title>ePlugg</title>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" language=\"javascript\">
            var current_password_error = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le mot de passe actuel obligatoire"), "html", null, true);
        echo ".\" ;
            var password_error = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le mot de passe doit être une chaîne d’au minimum 6 caractères"), "html", null, true);
        echo ".\" ;
            var confirm_password_error \t= \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les deux mots de passe doivent être identiques"), "html", null, true);
        echo ".\" ;
            var has_error = \"0\" ;
            var user_lang = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fr"), "html", null, true);
        echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/validateCv.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 15
        $this->displayBlock('scripts', $context, $blocks);
        // line 17
        echo "        <link type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jcrop/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jcrop/demos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cupertino/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        ";
        // line 21
        $this->displayBlock('styles', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
    <div id=\"extendedMedia\">
        <div class=\"widget-overlay\"></div>
        <div id=\"registerMsg\" class=\"datagrid-loader div_message error\"></div>
    </div>

    <div class=\"jc-demo-box\">
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "    </div>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/setting.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    </body>
    </html>
";
    }

    // line 15
    public function block_scripts($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    // line 21
    public function block_styles($context, array $blocks = array())
    {
        // line 22
        echo "        ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "        ";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:popin:base_popin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  118 => 31,  114 => 22,  111 => 21,  107 => 16,  104 => 15,  95 => 34,  92 => 33,  90 => 31,  80 => 23,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  61 => 17,  59 => 15,  55 => 14,  50 => 12,  45 => 10,  41 => 9,  37 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         <meta content="text/html; charset=utf-8" http-equiv="Content-Type">*/
/*         <title>ePlugg</title>*/
/*         <script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery-ui-1.10.4.custom.js') }}"></script>*/
/*         <script type="text/javascript" language="javascript">*/
/*             var current_password_error = "{{ 'Le mot de passe actuel obligatoire'|trans }}." ;*/
/*             var password_error = "{{ 'Le mot de passe doit être une chaîne d’au minimum 6 caractères'|trans }}." ;*/
/*             var confirm_password_error 	= "{{ 'Les deux mots de passe doivent être identiques'|trans }}." ;*/
/*             var has_error = "0" ;*/
/*             var user_lang = "{{ 'fr'|trans }}";*/
/*         </script>*/
/*         <script type="text/javascript" src="{{ asset('js/validateCv.js') }}"></script>*/
/*         {% block scripts %}*/
/*         {% endblock %}*/
/*         <link type="text/css" href="{{ asset('css/jcrop/main.css') }}" rel="stylesheet">*/
/*         <link type="text/css" href="{{ asset('css/jcrop/demos.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/cupertino/jquery-ui-1.10.4.custom.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet">*/
/*         {% block styles %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     <div id="extendedMedia">*/
/*         <div class="widget-overlay"></div>*/
/*         <div id="registerMsg" class="datagrid-loader div_message error"></div>*/
/*     </div>*/
/* */
/*     <div class="jc-demo-box">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <script src="{{ asset('js/setting.js') }}" type="text/javascript"></script>*/
/* */
/*     </body>*/
/*     </html>*/
/* */

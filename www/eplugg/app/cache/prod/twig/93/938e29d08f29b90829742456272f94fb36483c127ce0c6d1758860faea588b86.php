<?php

/* EpluggBackBundle::base.html.twig */
class __TwigTemplate_1c45852a22a538f15aff1c696bab530530a1e9ff970f900fe1c653e3308da8d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'aside' => array($this, 'block_aside'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'pages_javascripts' => array($this, 'block_pages_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body class=\"skin-blue sidebar-mini\">
<div class=\"wrapper\">
    ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "    ";
        $this->displayBlock('aside', $context, $blocks);
        // line 46
        echo "    <div class=\"content-wrapper\" style=\"min-height: 903px;\">
        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "    </div>
    <footer class=\"main-footer\">
        ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "    </footer>

</div>



";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        $this->displayBlock('pages_javascripts', $context, $blocks);
        // line 79
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "        <header class=\"main-header\">
            <nav role=\"navigation\" class=\"navbar navbar-static-top\">
                <!-- Sidebar toggle button-->
                <a role=\"button\" data-toggle=\"offcanvas\" class=\"sidebar-toggle\" href=\"#\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
            </nav>
        </header>
    ";
    }

    // line 33
    public function block_aside($context, array $blocks = array())
    {
        // line 34
        echo "        <aside class=\"main-sidebar\">
            <section class=\"sidebar\" style=\"height: auto;\">
                <ul class=\"sidebar-menu\">
                    <li class=\"header\">MAIN NAVIGATION</li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("eplugg_back_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i><span>Dashboard</span></a></li>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("eplugg_back_users");
        echo "\"><i class=\"fa fa-users\"></i><span>Users</span></a></li>
                    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("eplugg_back_pages");
        echo "\"><i class=\"fa fa-edit\"></i><span>Pages</span></a></li>
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-edit\"></i><span>Logout</span></a></li>
                </ul>
            </section>
        </aside>
    ";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "
        ";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.3.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"http://eplugg.com\">Eplugg</a>.</strong> All rights reserved.
        ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "    <script async=\"\" src=\"//www.google-analytics.com/analytics.js\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 77
    public function block_pages_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EpluggBackBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 77,  223 => 75,  219 => 74,  215 => 73,  211 => 72,  207 => 71,  203 => 70,  199 => 69,  195 => 68,  191 => 67,  187 => 66,  184 => 65,  181 => 64,  173 => 53,  170 => 52,  165 => 48,  162 => 47,  153 => 41,  149 => 40,  145 => 39,  141 => 38,  135 => 34,  132 => 33,  117 => 21,  114 => 20,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  89 => 9,  86 => 8,  80 => 6,  74 => 79,  72 => 77,  70 => 64,  62 => 58,  60 => 52,  56 => 50,  54 => 47,  51 => 46,  48 => 33,  46 => 20,  41 => 17,  39 => 8,  34 => 6,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta content="IE=edge" http-equiv="X-UA-Compatible">*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bo/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">*/
/*         <link href="{{ asset('bo/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bo/dist/css/AdminLTE.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bo/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">*/
/* 		<link href="{{asset('bo/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />*/
/*     {% endblock %}*/
/* </head>*/
/* <body class="skin-blue sidebar-mini">*/
/* <div class="wrapper">*/
/*     {% block header %}*/
/*         <header class="main-header">*/
/*             <nav role="navigation" class="navbar navbar-static-top">*/
/*                 <!-- Sidebar toggle button-->*/
/*                 <a role="button" data-toggle="offcanvas" class="sidebar-toggle" href="#">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </a>*/
/*             </nav>*/
/*         </header>*/
/*     {%  endblock %}*/
/*     {% block aside %}*/
/*         <aside class="main-sidebar">*/
/*             <section class="sidebar" style="height: auto;">*/
/*                 <ul class="sidebar-menu">*/
/*                     <li class="header">MAIN NAVIGATION</li>*/
/*                     <li><a href="{{ path('eplugg_back_homepage') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>*/
/*                     <li><a href="{{ path('eplugg_back_users') }}"><i class="fa fa-users"></i><span>Users</span></a></li>*/
/*                     <li><a href="{{ path('eplugg_back_pages') }}"><i class="fa fa-edit"></i><span>Pages</span></a></li>*/
/*                     <li><a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-edit"></i><span>Logout</span></a></li>*/
/*                 </ul>*/
/*             </section>*/
/*         </aside>*/
/*     {% endblock %}*/
/*     <div class="content-wrapper" style="min-height: 903px;">*/
/*         {% block content %}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/*     <footer class="main-footer">*/
/*         {% block footer %}*/
/*             <div class="pull-right hidden-xs">*/
/*                 <b>Version</b> 2.3.0*/
/*             </div>*/
/*             <strong>Copyright &copy; 2014-2015 <a href="http://eplugg.com">Eplugg</a>.</strong> All rights reserved.*/
/*         {% endblock %}*/
/*     </footer>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     <script async="" src="//www.google-analytics.com/analytics.js"></script>*/
/*     <script src="{{ asset('bo/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>*/
/*     <script src="{{ asset('bo/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bo/plugins/fastclick/fastclick.js') }}"></script>*/
/*     <script src="{{ asset('bo/dist/js/app.min.js') }}"></script>*/
/*     <script src="{{ asset('bo/plugins/sparkline/jquery.sparkline.min.js') }}"></script>*/
/*     <script src="{{ asset('bo/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>*/
/*     <script src="{{ asset('bo/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>*/
/*     <script src="{{ asset('bo/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>*/
/*     <script src="{{ asset('bo/plugins/chartjs/Chart.min.js') }}"></script>*/
/*     <script src="{{ asset('bo/dist/js/demo.js') }}"></script>*/
/* {% endblock %}*/
/* {% block pages_javascripts %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */

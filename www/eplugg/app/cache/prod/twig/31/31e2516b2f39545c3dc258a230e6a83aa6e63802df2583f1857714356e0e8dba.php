<?php

/* EpluggFrontBundle:Suggestion:user_suggest.html.twig */
class __TwigTemplate_5dba255c22d4e1e597f4d05c387b729b06fe2acca7ef812fd46c007ef0824800 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    ";
        // line 4
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 5
            echo "        <script>
            parent.document.location.reload();
        </script>
    ";
        }
        // line 9
        echo "    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
    <title>ePlugg</title>
    <link type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tagsinput/dist/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css\">


    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js\"></script>


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/suggest.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <style>

        .top_form .bootstrap-tagsinput .tag {
            color: inherit;
        }
    </style>
    <script type=\"text/javascript\" language=\"javascript\">
      /*  \$(document).ready(function(){
            if(\$('#config_sugget').height()&lt;300){
                _height = \$('#config_sugget').height() + 50
                parent.document.getElementById('iframe_eplugg').setAttribute('height', _height) ;
                parent.document.getElementById('pp_content_eplugg').setAttribute('style', 'width:400px;height:' + _height +'px;') ;
            }
        }) ;*/
    </script>
</head>
<body>
    <div style=\"max-height: 300px;\" id=\"config_sugget\">

        ";
        // line 45
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 46
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vous n’êtes pas autorisé à effectuer cette action"), "html", null, true);
            echo "
        ";
        } else {
            // line 48
            echo "            <div class=\"titre_plugg\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suggest"), "html", null, true);
            echo "</div>
            <form method=\"post\" action=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
            echo "\" >
                <div class=\"top_form\">
                    <input name=\"suggestion\" type=\"text\" id=\"suggestion\" size=\"35\" data-url=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_suggest_users", array("uid" => (isset($context["uid"]) ? $context["uid"] : null), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
            echo "\">
                    <input name=\"token\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["csrfToken"]) ? $context["csrfToken"] : null), "html", null, true);
            echo "\" type=\"hidden\">
                </div>
                <div class=\"clear20\"></div>
                <div align=\"right\" class=\"div_btn\"><button type=\"submit\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suggérer"), "html", null, true);
            echo "</button></div>
            </form>
        ";
        }
        // line 58
        echo "    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Suggestion:user_suggest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 58,  113 => 55,  107 => 52,  103 => 51,  98 => 49,  93 => 48,  87 => 46,  85 => 45,  61 => 24,  57 => 23,  49 => 18,  40 => 12,  36 => 11,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     {% if success %}*/
/*         <script>*/
/*             parent.document.location.reload();*/
/*         </script>*/
/*     {% endif %}*/
/*     <meta content="text/html; charset=utf-8" http-equiv="Content-Type">*/
/*     <title>ePlugg</title>*/
/*     <link type="text/css" href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*     <link type="text/css" href="{{ asset('js/tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet">*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css">*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css">*/
/* */
/* */
/*     <script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>*/
/* */
/* */
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/jquery.prettyPhoto.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/suggest.js') }}" type="text/javascript"></script>*/
/* */
/*     <style>*/
/* */
/*         .top_form .bootstrap-tagsinput .tag {*/
/*             color: inherit;*/
/*         }*/
/*     </style>*/
/*     <script type="text/javascript" language="javascript">*/
/*       /*  $(document).ready(function(){*/
/*             if($('#config_sugget').height()&lt;300){*/
/*                 _height = $('#config_sugget').height() + 50*/
/*                 parent.document.getElementById('iframe_eplugg').setAttribute('height', _height) ;*/
/*                 parent.document.getElementById('pp_content_eplugg').setAttribute('style', 'width:400px;height:' + _height +'px;') ;*/
/*             }*/
/*         }) ;*//* */
/*     </script>*/
/* </head>*/
/* <body>*/
/*     <div style="max-height: 300px;" id="config_sugget">*/
/* */
/*         {% if error %}*/
/*             {{ 'Vous n’êtes pas autorisé à effectuer cette action'|trans }}*/
/*         {% else %}*/
/*             <div class="titre_plugg">{{ 'Suggest'|trans }}</div>*/
/*             <form method="post" action="{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) }}" >*/
/*                 <div class="top_form">*/
/*                     <input name="suggestion" type="text" id="suggestion" size="35" data-url="{{ path('eplugg_suggest_users', {'uid': uid, 'token' : csrfToken }) }}">*/
/*                     <input name="token" value="{{ csrfToken }}" type="hidden">*/
/*                 </div>*/
/*                 <div class="clear20"></div>*/
/*                 <div align="right" class="div_btn"><button type="submit">{{ 'Suggérer'|trans }}</button></div>*/
/*             </form>*/
/*         {% endif %}*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */

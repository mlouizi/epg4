<?php

/* EpluggFrontBundle:Search:common_friends_popin.html.twig */
class __TwigTemplate_e03304878332b2f2ca34f55828e01a1af7f02f32872ff6befa4ab9918718ec91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('styles', $context, $blocks);
        // line 3
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ePlugg"), "html", null, true);
        echo "</title>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
</head>
    <body>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "    </body>
</html>";
    }

    // line 1
    public function block_styles($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "        <div class=\"titre_plugg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "</div>
        ";
        // line 15
        if ( !twig_test_empty((isset($context["users"]) ? $context["users"] : null))) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 17
                echo "                <div class=\"bloc_connais\">
                    <div class=\"im_connais\"><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><img width=\"37\" height=\"37\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($context["user"], "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["user"], "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"><span></span></a></div>
                    <div class=\"des_connais\">
                        <strong><a data-tooltip=\"#html-content";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                echo "</a></strong>
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "job", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"clear5\"></div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        } else {
            // line 27
            echo "        <div class=\"message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucun contact trouvé"), "html", null, true);
            echo ".</div>
        ";
        }
        // line 29
        echo "        <div class=\"clear20\"></div>
    ";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Search:common_friends_popin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  115 => 27,  112 => 26,  101 => 21,  91 => 20,  77 => 18,  74 => 17,  69 => 16,  67 => 15,  62 => 14,  59 => 13,  54 => 1,  49 => 31,  47 => 13,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 1,);
    }
}
/* {% block styles %}*/
/* {% endblock %}*/
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta content="text/html; charset=utf-8" http-equiv="Content-Type">*/
/*     <title>{{ 'ePlugg'|trans }}</title>*/
/*     <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet">*/
/*     <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>*/
/* </head>*/
/*     <body>*/
/*     {% block body %}*/
/*         <div class="titre_plugg">{{ 'Contacts en commun'|trans }}</div>*/
/*         {% if users is not empty %}*/
/*             {% for user in users %}*/
/*                 <div class="bloc_connais">*/
/*                     <div class="im_connais"><a href="{{ path('eplugg_profile_page', {'uid': user.id }) }}"><img width="37" height="37" alt="" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"><span></span></a></div>*/
/*                     <div class="des_connais">*/
/*                         <strong><a data-tooltip="#html-content{{ user.id }}" href="{{ path('eplugg_profile_page', {'uid': user.id }) }}">{{ user.firstName }} {{ user.lastName }}</a></strong>*/
/*                         {{ user.job }}*/
/*                     </div>*/
/*                     <div class="clear5"></div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*         <div class="message">{{ 'Aucun contact trouvé'|trans }}.</div>*/
/*         {% endif %}*/
/*         <div class="clear20"></div>*/
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/

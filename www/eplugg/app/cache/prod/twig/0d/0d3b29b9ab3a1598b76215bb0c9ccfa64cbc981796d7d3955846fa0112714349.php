<?php

/* EpluggFrontBundle:Default:footer.html.twig */
class __TwigTemplate_90058d6d41a8fc4533a74fd2cafa2b61cd33ba6a1ebe7a982f5557ca49c29026 extends Twig_Template
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
        echo "
<div id=\"footer\">
    <div class=\"center_content\">
        <div id=\"menu_footer\">
            <ul>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["MenuFooter"]) ? $context["MenuFooter"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 7
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_front_page", array("slug" => $this->getAttribute($context["link"], "slug", array()))), "html", null, true);
            echo "\">";
            if ( !twig_test_empty($this->getAttribute($context["link"], "menuTitle", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "menuTitle", array()), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
                echo " ";
            }
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </ul>
        </div>
        <div id=\"copyright\"><img alt=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Corporation"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo_footer.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Corporation"), "html", null, true);
        echo " &copy; 2016</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  49 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <div id="footer">*/
/*     <div class="center_content">*/
/*         <div id="menu_footer">*/
/*             <ul>*/
/*                 {% for link in MenuFooter %}*/
/*                 <li><a href="{{ path('eplugg_front_page', {'slug': link.slug }) }}">{% if link.menuTitle is not empty %} {{ link.menuTitle }} {% else %} {{ link.title }} {% endif %}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <div id="copyright"><img alt="{{ 'Corporation'|trans }}" src="{{ asset('images/logo_footer.png') }}"> {{ 'Corporation'|trans }} &copy; 2016</div>*/
/*     </div>*/
/* </div>*/

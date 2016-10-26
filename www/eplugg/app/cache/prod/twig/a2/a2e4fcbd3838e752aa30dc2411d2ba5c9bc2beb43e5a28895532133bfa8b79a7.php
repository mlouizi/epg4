<?php

/* EpluggFrontBundle:Suggestion:suggested_notifications_block.html.twig */
class __TwigTemplate_a2d230590c2e7b0dcc1ec01d6495b501904d24df28fd0659c05b98043f9b834a extends Twig_Template
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
        if ( !twig_test_empty((isset($context["suggestions"]) ? $context["suggestions"] : null))) {
            // line 2
            echo "<div class=\"block-suggests\">
    <div class=\"suggests-title\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connaissez-vous"), "html", null, true);
            echo "?</div>
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["suggestions"]) ? $context["suggestions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["suggestion"]) {
                // line 5
                echo "        <div class=\"bloc_user\"> <a style=\"cursor: pointer;\" class=\"infobull_div\" data-tooltip=\"#html-content5\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\"></a>
            <div class=\"im_connais\"><img width=\"37\" height=\"37\" src=\"";
                // line 6
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\" alt=\"\"></div>
            <div class=\"des_connais\"><strong><a>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "lastName", array()), "html", null, true);
                echo "</a></strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "job", array()), "html", null, true);
                echo "</div>
            <div class=\"clear5\"></div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suggestion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Suggestion:suggested_notifications_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  48 => 7,  37 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if suggestions is not empty %}*/
/* <div class="block-suggests">*/
/*     <div class="suggests-title">{{ 'Connaissez-vous'|trans }}?</div>*/
/*     {% for suggestion in suggestions %}*/
/*         <div class="bloc_user"> <a style="cursor: pointer;" class="infobull_div" data-tooltip="#html-content5" href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}"></a>*/
/*             <div class="im_connais"><img width="37" height="37" src="{% if suggestion.suggested.avatar is not empty %} {{ asset(suggestion.suggested.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" alt=""></div>*/
/*             <div class="des_connais"><strong><a>{{ suggestion.suggested.firstName }} {{ suggestion.suggested.lastName }}</a></strong> {{ suggestion.suggested.job }}</div>*/
/*             <div class="clear5"></div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* {% endif %}*/

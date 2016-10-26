<?php

/* EpluggFrontBundle:Default:vip.html.twig */
class __TwigTemplate_8d05121371f9b227b28b5ac06d3c9ba433d239efcdc847e2d6019cc6b5053dfc extends Twig_Template
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
        if ((isset($context["vip"]) ? $context["vip"] : null)) {
            // line 2
            echo "    <img height=\"66px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/vip.png"), "html", null, true);
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:vip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if vip %}*/
/*     <img height="66px" src="{{ asset('images/vip.png') }}">*/
/* {% endif %}*/

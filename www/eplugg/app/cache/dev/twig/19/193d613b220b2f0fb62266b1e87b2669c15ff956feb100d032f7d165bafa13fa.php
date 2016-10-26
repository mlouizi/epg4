<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c76466ac1d876ee2fe10d680ad754176def278eb4b2d1ff6cc9e0f9f1362ab14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6397436c32fb9fdf1730057fe14ee97acecad2bc72fd179ac06c50571cce2f8f = $this->env->getExtension("native_profiler");
        $__internal_6397436c32fb9fdf1730057fe14ee97acecad2bc72fd179ac06c50571cce2f8f->enter($__internal_6397436c32fb9fdf1730057fe14ee97acecad2bc72fd179ac06c50571cce2f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6397436c32fb9fdf1730057fe14ee97acecad2bc72fd179ac06c50571cce2f8f->leave($__internal_6397436c32fb9fdf1730057fe14ee97acecad2bc72fd179ac06c50571cce2f8f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55d89768687fe8a96497b7b42194eea918f196d333f9b6327ce0d1f1cdab9f00 = $this->env->getExtension("native_profiler");
        $__internal_55d89768687fe8a96497b7b42194eea918f196d333f9b6327ce0d1f1cdab9f00->enter($__internal_55d89768687fe8a96497b7b42194eea918f196d333f9b6327ce0d1f1cdab9f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_55d89768687fe8a96497b7b42194eea918f196d333f9b6327ce0d1f1cdab9f00->leave($__internal_55d89768687fe8a96497b7b42194eea918f196d333f9b6327ce0d1f1cdab9f00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

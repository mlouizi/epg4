<?php

/* EpluggFrontBundle:logged_in:right_sidebar.html.twig */
class __TwigTemplate_68ce7ba3e8cf79fa7fc90bdf0952de2172f1433d837cd0fe6a4d411ea038a211 extends Twig_Template
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
        echo "<div id=\"right_content\">
    ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Suggestion:SuggestedUsers", array("all" => false)));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:logged_in:right_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="right_content">*/
/*     {{ render(controller('EpluggFrontBundle:Suggestion:SuggestedUsers', { 'all': false } )) }}*/
/* </div>*/

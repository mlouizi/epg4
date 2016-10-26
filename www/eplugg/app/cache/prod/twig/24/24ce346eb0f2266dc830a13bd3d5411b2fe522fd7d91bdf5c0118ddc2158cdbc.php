<?php

/* EpluggBackBundle:Default:page_deleted.html.twig */
class __TwigTemplate_a7d9200303b57e9990bbb140d8c57e33b840cfdfc0109011949027fd68979ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggBackBundle::base.html.twig", "EpluggBackBundle:Default:page_deleted.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpluggBackBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        <div id=\"users\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"callout callout-info\">
                                        <p>The page has been successfully deleted!</p>
                                    </div>
                                    <a class=\"btn\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("eplugg_back_pages");
        echo "\">Back</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "EpluggBackBundle:Default:page_deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggBackBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="box">*/
/*                     <div class="box-body">*/
/*                         <div id="users" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <div class="callout callout-info">*/
/*                                         <p>The page has been successfully deleted!</p>*/
/*                                     </div>*/
/*                                     <a class="btn" href="{{ path('eplugg_back_pages') }}">Back</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/

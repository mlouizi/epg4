<?php

/* EpluggBackBundle:Default:user_delete_confirmation.html.twig */
class __TwigTemplate_f66a9db3f87664352a5e1474f60d44c2f245aa092b8d77942b51b738a05492ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggBackBundle::base.html.twig", "EpluggBackBundle:Default:user_delete_confirmation.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"content-header\">
        <h1>Users</h1>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        <div id=\"users\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("eplugg_delete_user", array("uid" => (isset($context["uid"]) ? $context["uid"] : null))), "attr" => array("class" => "box-title")));
        echo "
                                        <h3>Are you sure you want to delete?</h3>
                                        <div>
                                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array()), 'widget', array("id" => "delete", "attr" => array("class" => "btn btn-primary", "type" => "submit"), "label" => "Delete"));
        echo "
                                            <a class=\"btn\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("eplugg_back_users");
        echo "\">Cancel</a>
                                        </div>
                                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
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
        return "EpluggBackBundle:Default:user_delete_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  55 => 20,  51 => 19,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'EpluggBackBundle::base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <section class="content-header">*/
/*         <h1>Users</h1>*/
/*     </section>*/
/* */
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="box">*/
/*                     <div class="box-body">*/
/*                         <div id="users" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     {{ form_start(form, {'method': 'post',  'action':  path('eplugg_delete_user', {'uid': uid}) , 'attr': {'class': 'box-title'} }) }}*/
/*                                         <h3>Are you sure you want to delete?</h3>*/
/*                                         <div>*/
/*                                             {{ form_widget(form.delete, { 'id': "delete", 'attr': {'class': 'btn btn-primary', 'type': 'submit'}, 'label': 'Delete' } ) }}*/
/*                                             <a class="btn" href="{{ path('eplugg_back_users') }}">Cancel</a>*/
/*                                         </div>*/
/*                                     {{ form_end(form) }}*/
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

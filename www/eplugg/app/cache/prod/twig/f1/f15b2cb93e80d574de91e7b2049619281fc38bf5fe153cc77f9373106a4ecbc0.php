<?php

/* EpluggBackBundle:Default:page_edit.html.twig */
class __TwigTemplate_39eaa9abd9583736e09bd2d73e86a991d8f64c1254e03573781b7bb3c1fa73f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggBackBundle::base.html.twig", "EpluggBackBundle:Default:page_edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'pages_javascripts' => array($this, 'block_pages_javascripts'),
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
        echo "    <section class=\"content-header\">
        <h1>User Add</h1>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("eplugg_edit_page", array("pid" => (isset($context["pid"]) ? $context["pid"] : null)))));
        echo "
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label');
        echo "
                                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
        echo "
                                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "title")));
        echo "

                                </div>
                            </div>

                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-12\">
                                <div class=\"box box-info\">
                                    <div class=\"box-body pad\">
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label');
        echo "
                                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'errors');
        echo "
                                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget', array("id" => "editor1", "attr" => array("class" => "form-control", "placeholder" => "title", "cols" => "80", "rows" => "10")));
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), 'label');
        echo "
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), 'errors');
        echo "
                                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "path")));
        echo "

                                </div>
                            </div>

                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weight", array()), 'label');
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weight", array()), 'errors');
        echo "
                                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weight", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                </div>
                            </div>

                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promoteFooterMenu", array()), 'label');
        echo "
                                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promoteFooterMenu", array()), 'errors');
        echo "
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promoteFooterMenu", array()), 'widget', array("attr" => array()));
        echo "

                                </div>
                            </div>

                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "menuTitle", array()), 'label');
        echo "
                                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "menuTitle", array()), 'errors');
        echo "
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "menuTitle", array()), 'widget', array("attr" => array()));
        echo "

                                </div>
                            </div>

                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), 'label');
        echo "
                                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), 'errors');
        echo "
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), 'widget', array("attr" => array()));
        echo "

                                </div>
                            </div>

                        </div>

                        <div class=\"margin row\">
                            <div class=\"form-group\">
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("id" => "delete", "attr" => array("class" => "btn btn-primary", "type" => "submit"), "label" => "Submit"));
        echo "
                            </div>
                        </div>
                        ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    </div>
                </div>

            </div>
        </div>
    </section>

";
    }

    // line 104
    public function block_pages_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "    <script src=\"https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js\"></script>
    <script>
        jQuery(function () {
            // Replace the <textarea id=\"editor1\"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "EpluggBackBundle:Default:page_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 105,  208 => 104,  195 => 95,  189 => 92,  177 => 83,  173 => 82,  169 => 81,  157 => 72,  153 => 71,  149 => 70,  137 => 61,  133 => 60,  129 => 59,  117 => 50,  113 => 49,  109 => 48,  97 => 39,  93 => 38,  89 => 37,  78 => 29,  74 => 28,  70 => 27,  57 => 17,  53 => 16,  49 => 15,  42 => 11,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggBackBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <section class="content-header">*/
/*         <h1>User Add</h1>*/
/*     </section>*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-12">*/
/*                         {{ form_start(form, {'method': 'post',  'action':  path('eplugg_edit_page', {'pid': pid})  }) }}*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.title) }}*/
/*                                     {{ form_errors(form.title) }}*/
/*                                     {{ form_widget(form.title, { 'attr': {'class': 'form-control', 'placeholder': 'title' } }) }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="box box-info">*/
/*                                     <div class="box-body pad">*/
/*                                         {{ form_label(form.body) }}*/
/*                                         {{ form_errors(form.body) }}*/
/*                                         {{ form_widget(form.body, {'id': 'editor1', 'attr': {'class': 'form-control', 'placeholder': 'title','cols': '80', 'rows': '10' } }) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.slug) }}*/
/*                                     {{ form_errors(form.slug) }}*/
/*                                     {{ form_widget(form.slug, { 'attr': {'class': 'form-control', 'placeholder': 'path' } }) }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.weight) }}*/
/*                                     {{ form_errors(form.weight) }}*/
/*                                     {{ form_widget(form.weight, { 'attr': {'class': 'form-control' } }) }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.promoteFooterMenu) }}*/
/*                                     {{ form_errors(form.promoteFooterMenu) }}*/
/*                                     {{ form_widget(form.promoteFooterMenu, { 'attr': {} }) }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.menuTitle) }}*/
/*                                     {{ form_errors(form.menuTitle) }}*/
/*                                     {{ form_widget(form.menuTitle, { 'attr': {} }) }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.status) }}*/
/*                                     {{ form_errors(form.status) }}*/
/*                                     {{ form_widget(form.status, { 'attr': {} }) }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="margin row">*/
/*                             <div class="form-group">*/
/*                                 {{ form_widget(form.submit, { 'id': "delete", 'attr': {'class': 'btn btn-primary', 'type': 'submit'}, 'label': 'Submit' } ) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* {% block pages_javascripts %}*/
/*     <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>*/
/*     <script>*/
/*         jQuery(function () {*/
/*             // Replace the <textarea id="editor1"> with a CKEditor*/
/*             // instance, using default configuration.*/
/*             CKEDITOR.replace('editor1');*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/

<?php

/* EpluggBackBundle:Default:user_add.html.twig */
class __TwigTemplate_fadc00ff56039c43287728e5eb404de89eb0023d761e59a7db5be9c03ac28aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggBackBundle::base.html.twig", "EpluggBackBundle:Default:user_add.html.twig", 1);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("eplugg_add_user")));
        echo "
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'label');
        echo "
                                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'errors');
        echo "

                                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "First Name")));
        echo "

                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'label');
        echo "
                                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'errors');
        echo "

                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Last Name")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'label');
        echo "
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'errors');
        echo "

                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Gender")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                            </div>
                            <div class=\"col-md-3\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'label');
        echo "
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'errors');
        echo "

                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Job")));
        echo "
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">

                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'label');
        echo "
                                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "


                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'label');
        echo "
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'errors');
        echo "

                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password confirmation")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-1\">
                                <div class=\"form-group\">
                                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'label');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">

                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'errors');
        echo "

                                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthmonth", array()), 'errors');
        echo "

                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthmonth", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthyear", array()), 'errors');
        echo "

                                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthyear", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "
                                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'errors');
        echo "

                                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 115
        echo "                                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_activity", array()), 'label');
        echo "
                                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_activity", array()), 'errors');
        echo "

                                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_activity", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_country", array()), 'label');
        echo "
                                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_country", array()), 'errors');
        echo "

                                    ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_city", array()), 'label');
        echo "
                                    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_city", array()), 'errors');
        echo "

                                    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direct_phone", array()), 'label');
        echo "
                                    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direct_phone", array()), 'errors');
        echo "

                                    ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direct_phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'label');
        echo "
                                    ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'errors');
        echo "

                                    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "more_emails", array()), 'label');
        echo "
                                    ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "more_emails", array()), 'errors');
        echo "

                                    ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "more_emails", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sociaux", array()), 'label');
        echo "
                                    ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sociaux", array()), 'errors');
        echo "

                                    ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sociaux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_tel", array()), 'label');
        echo "
                                    ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_tel", array()), 'errors');
        echo "

                                    ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_fax", array()), 'label');
        echo "
                                    ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_fax", array()), 'errors');
        echo "

                                    ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_fax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_website", array()), 'label');
        echo "
                                    ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_website", array()), 'errors');
        echo "

                                    ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_website", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_address", array()), 'label');
        echo "
                                    ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_address", array()), 'errors');
        echo "

                                    ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"margin row\">
                            <div class=\"form-group\">
                                ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("id" => "delete", "attr" => array("class" => "btn btn-primary", "type" => "submit"), "label" => "Submit"));
        echo "
                            </div>
                        </div>
                        ";
        // line 218
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                    </div>
                </div>

            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "EpluggBackBundle:Default:user_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 218,  440 => 215,  431 => 209,  426 => 207,  422 => 206,  414 => 201,  409 => 199,  405 => 198,  395 => 191,  390 => 189,  386 => 188,  378 => 183,  373 => 181,  369 => 180,  359 => 173,  354 => 171,  350 => 170,  342 => 165,  337 => 163,  333 => 162,  323 => 155,  318 => 153,  314 => 152,  306 => 147,  301 => 145,  297 => 144,  287 => 137,  282 => 135,  278 => 134,  270 => 129,  265 => 127,  261 => 126,  250 => 118,  245 => 116,  240 => 115,  232 => 109,  227 => 107,  223 => 106,  213 => 99,  208 => 97,  200 => 92,  195 => 90,  187 => 85,  182 => 83,  171 => 75,  161 => 68,  156 => 66,  152 => 65,  142 => 58,  138 => 57,  134 => 56,  124 => 49,  119 => 47,  115 => 46,  109 => 43,  105 => 42,  101 => 41,  92 => 35,  87 => 33,  83 => 32,  75 => 27,  70 => 25,  66 => 24,  57 => 18,  52 => 16,  48 => 15,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
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
/*                         {{ form_start(form, {'method': 'post',  'action':  path('eplugg_add_user') }) }}*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.firstName) }}*/
/*                                     {{ form_errors(form.firstName) }}*/
/* */
/*                                     {{ form_widget(form.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'First Name' } }) }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.lastName) }}*/
/*                                     {{ form_errors(form.lastName) }}*/
/* */
/*                                     {{ form_widget(form.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Last Name' } }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.gender) }}*/
/*                                     {{ form_errors(form.gender) }}*/
/* */
/*                                     {{ form_widget(form.gender, {'attr': {'class': 'form-control', 'placeholder': 'Gender' } }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 {{ form_label(form.email) }}*/
/*                                 {{ form_errors(form.email) }}*/
/*                                 {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email' } }) }}*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 {{ form_label(form.job) }}*/
/*                                 {{ form_errors(form.job) }}*/
/* */
/*                                 {{ form_widget(form.job, {'attr': {'class': 'form-control', 'placeholder': 'Job' }} ) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/* */
/*                                     {{ form_label(form.plainPassword.first) }}*/
/*                                     {{ form_errors(form.plainPassword.first) }}*/
/*                                     {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': 'Password'} } ) }}*/
/* */
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.plainPassword.second) }}*/
/*                                     {{ form_errors(form.plainPassword.second) }}*/
/* */
/*                                     {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': 'Password confirmation'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-1">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.birthday) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/* */
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_errors(form.birthday) }}*/
/* */
/*                                     {{ form_widget(form.birthday, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_errors(form.birthmonth) }}*/
/* */
/*                                     {{ form_widget(form.birthmonth, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_errors(form.birthyear) }}*/
/* */
/*                                     {{ form_widget(form.birthyear, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.company_name) }}*/
/*                                     {{ form_errors(form.company_name) }}*/
/* */
/*                                     {{ form_widget(form.company_name, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {# todo activity #}*/
/*                                     {{ form_label(form.company_activity) }}*/
/*                                     {{ form_errors(form.company_activity) }}*/
/* */
/*                                     {{ form_widget(form.company_activity, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.company_country) }}*/
/*                                     {{ form_errors(form.company_country) }}*/
/* */
/*                                     {{ form_widget(form.company_country, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.company_city) }}*/
/*                                     {{ form_errors(form.company_city) }}*/
/* */
/*                                     {{ form_widget(form.company_city, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.direct_phone) }}*/
/*                                     {{ form_errors(form.direct_phone) }}*/
/* */
/*                                     {{ form_widget(form.direct_phone, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.mobile) }}*/
/*                                     {{ form_errors(form.mobile) }}*/
/* */
/*                                     {{ form_widget(form.mobile, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.more_emails) }}*/
/*                                     {{ form_errors(form.more_emails) }}*/
/* */
/*                                     {{ form_widget(form.more_emails, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.sociaux) }}*/
/*                                     {{ form_errors(form.sociaux) }}*/
/* */
/*                                     {{ form_widget(form.sociaux, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.company_tel) }}*/
/*                                     {{ form_errors(form.company_tel) }}*/
/* */
/*                                     {{ form_widget(form.company_tel, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.company_fax) }}*/
/*                                     {{ form_errors(form.company_fax) }}*/
/* */
/*                                     {{ form_widget(form.company_fax, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="margin row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.company_website) }}*/
/*                                     {{ form_errors(form.company_website) }}*/
/* */
/*                                     {{ form_widget(form.company_website, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <div class="form-group">*/
/*                                     {{ form_label(form.company_address) }}*/
/*                                     {{ form_errors(form.company_address) }}*/
/* */
/*                                     {{ form_widget(form.company_address, {'attr': {'class': 'form-control'} } ) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
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

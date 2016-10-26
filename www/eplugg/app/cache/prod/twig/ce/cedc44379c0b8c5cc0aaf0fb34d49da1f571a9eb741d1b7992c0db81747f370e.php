<?php

/* EpluggBackBundle:Default:pages.html.twig */
class __TwigTemplate_33ea5cdbaa6c4fc3b8f4bf2673712f00f298c09b0b53569170767699bd01c3ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggBackBundle::base.html.twig", "EpluggBackBundle:Default:pages.html.twig", 1);
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
                                    <a class=\"btn btn-success\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("eplugg_add_page");
        echo "\">Add new page</a>

                                    <table id=\"example2\" class=\"table table-bordered table-hover dataTable\" role=\"grid\"
                                           aria-describedby=\"example2_info\">
                                        <thead>
                                        <tr role=\"row\">
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Title
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Status
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Created
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Updated
                                            </th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 41
            echo "
                                            <tr class=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\" role=\"row\">
                                                <td>
                                                    ";
            // line 44
            if ( !twig_test_empty($this->getAttribute($context["page"], "title", array()))) {
                // line 45
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 47
                echo "                                                        -
                                                    ";
            }
            // line 49
            echo "                                                </td>

                                                <td>
                                                    ";
            // line 52
            if (($this->getAttribute($context["page"], "status", array()) == true)) {
                // line 53
                echo "                                                        Published
                                                    ";
            } else {
                // line 55
                echo "                                                        Unpublished
                                                    ";
            }
            // line 57
            echo "                                                </td>

                                                <td>
                                                    ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "created", array()), "date", array()), "html", null, true);
            echo "

                                                </td>
                                                <td>
                                                    ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "updated", array()), "date", array()), "html", null, true);
            echo "

                                                </td>

                                                <td>
                                                    <div class=\"btn-group\">
                                                        <button class=\"btn btn-success\" type=\"button\">Action</button>
                                                        <button data-toggle=\"dropdown\"
                                                                class=\"btn btn-success dropdown-toggle\" type=\"button\">
                                                            <span class=\"caret\"></span>
                                                            <span class=\"sr-only\">Toggle Dropdown</span>
                                                        </button>
                                                        <ul role=\"menu\" class=\"dropdown-menu\">
                                                            <li><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_edit_page", array("pid" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">Edit Page</a></li>
                                                            <li>";
            // line 78
            if (($this->getAttribute($context["page"], "status", array()) == true)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_unpublish_page", array("pid" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
                echo "\">Unpublish Page</a>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_publish_page", array("pid" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
                echo "\">publish Page</a>";
            }
            echo "</li>
                                                            <li><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("eplugg_add_page");
            echo "?trPage=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\">Traduire</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_delete_page", array("pid" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">Delete Page</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                        </tbody>
                                    </table>

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

    // line 101
    public function block_pages_javascripts($context, array $blocks = array())
    {
        // line 102
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bo/plugins/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(document).ready(function () {
\t\t";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 107
            echo "\t\t\t";
            if (($context["flashMessage"] == "pageTraduite")) {
                // line 108
                echo "\t\t\t\t\t\$.gritter.add({title: \"ERREUR !\", text: \"La page existe dans toutes les langues ! \", sticky: false, time: \"\"});
\t\t\t";
            }
            // line 110
            echo "\t\t\t";
            if (($context["flashMessage"] == "pageReliee")) {
                // line 111
                echo "\t\t\t\t\t\$.gritter.add({title: \"ERREUR !\", text: \"La page est reliée !\", sticky: false, time: \"\"});
\t\t\t";
            }
            // line 113
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    });
</script>

";
    }

    public function getTemplateName()
    {
        return "EpluggBackBundle:Default:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 114,  241 => 113,  237 => 111,  234 => 110,  230 => 108,  227 => 107,  223 => 106,  215 => 102,  212 => 101,  195 => 86,  175 => 80,  169 => 79,  157 => 78,  153 => 77,  137 => 64,  130 => 60,  125 => 57,  121 => 55,  117 => 53,  115 => 52,  110 => 49,  106 => 47,  100 => 45,  98 => 44,  93 => 42,  90 => 41,  73 => 40,  47 => 17,  32 => 4,  29 => 3,  11 => 1,);
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
/* */
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <a class="btn btn-success" href="{{ path('eplugg_add_page') }}">Add new page</a>*/
/* */
/*                                     <table id="example2" class="table table-bordered table-hover dataTable" role="grid"*/
/*                                            aria-describedby="example2_info">*/
/*                                         <thead>*/
/*                                         <tr role="row">*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Title*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Status*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Created*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Updated*/
/*                                             </th>*/
/* */
/* */
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for page in pages %}*/
/* */
/*                                             <tr class="{{ cycle(['odd', 'even'], loop.index) }}" role="row">*/
/*                                                 <td>*/
/*                                                     {% if page.title is not empty %}*/
/*                                                         {{ page.title }}*/
/*                                                     {% else %}*/
/*                                                         -*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/* */
/*                                                 <td>*/
/*                                                     {% if page.status == true %}*/
/*                                                         Published*/
/*                                                     {% else %}*/
/*                                                         Unpublished*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/* */
/*                                                 <td>*/
/*                                                     {{ page.created.date }}*/
/* */
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {{ page.updated.date }}*/
/* */
/*                                                 </td>*/
/* */
/*                                                 <td>*/
/*                                                     <div class="btn-group">*/
/*                                                         <button class="btn btn-success" type="button">Action</button>*/
/*                                                         <button data-toggle="dropdown"*/
/*                                                                 class="btn btn-success dropdown-toggle" type="button">*/
/*                                                             <span class="caret"></span>*/
/*                                                             <span class="sr-only">Toggle Dropdown</span>*/
/*                                                         </button>*/
/*                                                         <ul role="menu" class="dropdown-menu">*/
/*                                                             <li><a href="{{ path('eplugg_edit_page', {'pid': page.id }) }}">Edit Page</a></li>*/
/*                                                             <li>{% if page.status == true %}<a href="{{ path('eplugg_unpublish_page', {'pid': page.id }) }}">Unpublish Page</a>{% else %}<a href="{{ path('eplugg_publish_page', {'pid': page.id }) }}">publish Page</a>{% endif %}</li>*/
/*                                                             <li><a href="{{ path('eplugg_add_page') }}?trPage={{ page.id }}">Traduire</a></li>*/
/* 															<li><a href="{{ path('eplugg_delete_page', {'pid': page.id }) }}">Delete Page</a></li>*/
/*                                                         </ul>*/
/*                                                     </div>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                         </tbody>*/
/*                                     </table>*/
/* */
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
/* */
/* {% block pages_javascripts %}*/
/* <script src="{{asset('bo/plugins/gritter/js/jquery.gritter.js') }}"></script>*/
/* */
/* <script>*/
/*     $(document).ready(function () {*/
/* 		{% for flashMessage in app.session.flashbag.get('error') %}*/
/* 			{% if  flashMessage == "pageTraduite" %}*/
/* 					$.gritter.add({title: "ERREUR !", text: "La page existe dans toutes les langues ! ", sticky: false, time: ""});*/
/* 			{% endif %}*/
/* 			{% if  flashMessage == "pageReliee" %}*/
/* 					$.gritter.add({title: "ERREUR !", text: "La page est reliée !", sticky: false, time: ""});*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/*     });*/
/* </script>*/
/* */
/* {% endblock %}*/

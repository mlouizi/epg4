<?php

/* EpluggBackBundle:Default:users.html.twig */
class __TwigTemplate_6ab0a8b7613ca483b7d0968dddad31f9bcaee978e92da6d6e391f2c85dea0d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggBackBundle::base.html.twig", "EpluggBackBundle:Default:users.html.twig", 1);
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
                                    <a class=\"btn btn-success\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("eplugg_add_user");
        echo "\">Add new user</a>

                                    <table id=\"example2\" class=\"table table-bordered table-hover dataTable\" role=\"grid\"
                                           aria-describedby=\"example2_info\">
                                        <thead>
                                        <tr role=\"row\">
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">First Name
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Last Name
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Email
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Last Login
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Status
                                            </th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\"
                                                colspan=\"1\" aria-label=\"\" aria-sort=\"ascending\">Action
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "
                                            <tr class=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\" role=\"row\">
                                                <td>
                                                    ";
            // line 49
            if ( !twig_test_empty($this->getAttribute($context["user"], "firstname", array()))) {
                // line 50
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 52
                echo "                                                        -
                                                    ";
            }
            // line 54
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 56
            if ( !twig_test_empty($this->getAttribute($context["user"], "lastname", array()))) {
                // line 57
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 59
                echo "                                                        -
                                                    ";
            }
            // line 61
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 63
            if ( !twig_test_empty($this->getAttribute($context["user"], "email", array()))) {
                // line 64
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 66
                echo "                                                        -
                                                    ";
            }
            // line 68
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 70
            if (($this->getAttribute($context["user"], "lastLogin", array()) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["user"], "lastLogin", array()), "date", array())))) {
                // line 71
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "lastLogin", array()), "date", array()), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 73
                echo "                                                        -
                                                    ";
            }
            // line 75
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 77
            if (($this->getAttribute($context["user"], "enabled", array()) == true)) {
                // line 78
                echo "                                                        Active
                                                    ";
            } else {
                // line 80
                echo "                                                        Blocked
                                                    ";
            }
            // line 82
            echo "                                                </td>
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
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_edit_user", array("uid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Edit User</a></li>
                                                            <li>";
            // line 93
            if (($this->getAttribute($context["user"], "enabled", array()) == true)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_block_user", array("uid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">Block User</a>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_activate_user", array("uid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">Enable User</a>";
            }
            echo "</li>
                                                            <li><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_delete_user", array("uid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Delete User</a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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

    public function getTemplateName()
    {
        return "EpluggBackBundle:Default:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 100,  204 => 94,  192 => 93,  188 => 92,  176 => 82,  172 => 80,  168 => 78,  166 => 77,  162 => 75,  158 => 73,  152 => 71,  150 => 70,  146 => 68,  142 => 66,  136 => 64,  134 => 63,  130 => 61,  126 => 59,  120 => 57,  118 => 56,  114 => 54,  110 => 52,  104 => 50,  102 => 49,  97 => 47,  94 => 46,  77 => 45,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
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
/*                                     <a class="btn btn-success" href="{{ path('eplugg_add_user') }}">Add new user</a>*/
/* */
/*                                     <table id="example2" class="table table-bordered table-hover dataTable" role="grid"*/
/*                                            aria-describedby="example2_info">*/
/*                                         <thead>*/
/*                                         <tr role="row">*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">First Name*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Last Name*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Email*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Last Login*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Status*/
/*                                             </th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"*/
/*                                                 colspan="1" aria-label="" aria-sort="ascending">Action*/
/*                                             </th>*/
/* */
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for user in users %}*/
/* */
/*                                             <tr class="{{ cycle(['odd', 'even'], loop.index) }}" role="row">*/
/*                                                 <td>*/
/*                                                     {% if user.firstname is not empty %}*/
/*                                                         {{ user.firstname }}*/
/*                                                     {% else %}*/
/*                                                         -*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {% if user.lastname is not empty %}*/
/*                                                         {{ user.lastname }}*/
/*                                                     {% else %}*/
/*                                                         -*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {% if user.email is not empty %}*/
/*                                                         {{ user.email }}*/
/*                                                     {% else %}*/
/*                                                         -*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {% if user.lastLogin and user.lastLogin.date is not empty %}*/
/*                                                         {{ user.lastLogin.date }}*/
/*                                                     {% else %}*/
/*                                                         -*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {% if user.enabled == true %}*/
/*                                                         Active*/
/*                                                     {% else %}*/
/*                                                         Blocked*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     <div class="btn-group">*/
/*                                                         <button class="btn btn-success" type="button">Action</button>*/
/*                                                         <button data-toggle="dropdown"*/
/*                                                                 class="btn btn-success dropdown-toggle" type="button">*/
/*                                                             <span class="caret"></span>*/
/*                                                             <span class="sr-only">Toggle Dropdown</span>*/
/*                                                         </button>*/
/*                                                         <ul role="menu" class="dropdown-menu">*/
/*                                                             <li><a href="{{ path('eplugg_edit_user', {'uid': user.id }) }}">Edit User</a></li>*/
/*                                                             <li>{% if user.enabled == true %}<a href="{{ path('eplugg_block_user', {'uid': user.id }) }}">Block User</a>{% else %}<a href="{{ path('eplugg_activate_user', {'uid': user.id }) }}">Enable User</a>{% endif %}</li>*/
/*                                                             <li><a href="{{ path('eplugg_delete_user', {'uid': user.id }) }}">Delete User</a></li>*/
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

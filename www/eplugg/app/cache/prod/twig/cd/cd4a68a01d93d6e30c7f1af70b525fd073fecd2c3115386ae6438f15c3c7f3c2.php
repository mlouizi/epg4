<?php

/* EpluggFrontBundle:Suggestion:suggested_block.html.twig */
class __TwigTemplate_1ba40b4a73f800eaea6b3e8835c5bd6438385da5d21fb9a037dc8edc71bc6693 extends Twig_Template
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
        echo "<script type=\"text/javascript\" language=\"javascript\">
    function getSuggestion(_this) {
        \$('#suggestion' + \$(_this).attr('data-id')).hide('slow', function(){ \$(this.remove())}) ;
        \$('#list_suggestions').append(\$('#others_suggestions li:first').html()) ;
        \$('#others_suggestions li:first').remove() ;
    }
</script>
";
        // line 8
        if ( !twig_test_empty((isset($context["users"]) ? $context["users"] : null))) {
            // line 9
            echo "<div class=\"list_suggestions\">
    <div class=\"titre_plugg\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vous intéressent-ils"), "html", null, true);
            echo " ?</div>
";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 12
                echo "    ";
                $this->loadTemplate("EpluggFrontBundle:Suggestion:suggested_user.html.twig", "EpluggFrontBundle:Suggestion:suggested_block.html.twig", 12)->display(array("user" => $context["user"]));
                // line 13
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</div>
";
            // line 16
            if ( !twig_test_empty((isset($context["moreUsers"]) ? $context["moreUsers"] : null))) {
                // line 17
                echo "<ul style=\"display:none\" id=\"others_suggestions\">
";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["moreUsers"]) ? $context["moreUsers"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 19
                    echo "    <li>
        ";
                    // line 20
                    $this->loadTemplate("EpluggFrontBundle:Suggestion:suggested_user.html.twig", "EpluggFrontBundle:Suggestion:suggested_block.html.twig", 20)->display(array("user" => $context["user"]));
                    // line 21
                    echo "    </li>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "</ul>

";
            }
            // line 26
            echo "<div style=\"  margin-top: 20px; margin-left: 45px; float: left;\" class=\"right_search\">
    <a class=\"selected\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("eplugg_suggest_page_auto");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Toutes les suggestions"), "html", null, true);
            echo " </a>
</div>
";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Suggestion:suggested_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  83 => 27,  80 => 26,  75 => 23,  68 => 21,  66 => 20,  63 => 19,  59 => 18,  56 => 17,  54 => 16,  51 => 15,  44 => 13,  41 => 12,  37 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <script type="text/javascript" language="javascript">*/
/*     function getSuggestion(_this) {*/
/*         $('#suggestion' + $(_this).attr('data-id')).hide('slow', function(){ $(this.remove())}) ;*/
/*         $('#list_suggestions').append($('#others_suggestions li:first').html()) ;*/
/*         $('#others_suggestions li:first').remove() ;*/
/*     }*/
/* </script>*/
/* {% if users is not empty %}*/
/* <div class="list_suggestions">*/
/*     <div class="titre_plugg">{{ 'Vous intéressent-ils'|trans }} ?</div>*/
/* {% for user in users %}*/
/*     {% include "EpluggFrontBundle:Suggestion:suggested_user.html.twig" with {"user": user} only %}*/
/* */
/* {% endfor %}*/
/* </div>*/
/* {% if moreUsers is not empty %}*/
/* <ul style="display:none" id="others_suggestions">*/
/* {% for user in moreUsers %}*/
/*     <li>*/
/*         {% include "EpluggFrontBundle:Suggestion:suggested_user.html.twig" with {"user": user} only %}*/
/*     </li>*/
/* {% endfor %}*/
/* </ul>*/
/* */
/* {% endif %}*/
/* <div style="  margin-top: 20px; margin-left: 45px; float: left;" class="right_search">*/
/*     <a class="selected" href="{{ path('eplugg_suggest_page_auto') }}">{{ 'Toutes les suggestions'|trans }} </a>*/
/* </div>*/
/* {% endif %}*/
/* */
/* */

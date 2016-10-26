<?php

/* EpluggFrontBundle:Activity:block_activity_list_annuaire.html.twig */
class __TwigTemplate_a47220f776bdb4409fb04ab5c7889f6a0faa4b3f4021041972481b42c1ca02ce extends Twig_Template
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
        if (twig_test_empty((isset($context["activities"]) ? $context["activities"] : null))) {
            // line 2
            echo "<div class=\"message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucune activité trouvée"), "html", null, true);
            echo ".</div>
";
        } else {
            // line 4
            echo "
";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 6
                echo "    <div class=\"bloc_user\">
    <div class=\"des_connais\"><strong><a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_users_by_activity", array("id" => $this->getAttribute($context["activity"], "activity_id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "name", array()), "html", null, true);
                echo "</a></strong></div>
    <div class=\"ferme_connais\"><a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_users_by_activity", array("id" => $this->getAttribute($context["activity"], "activity_id", array()))), "html", null, true);
                echo "\" title=\"1 Contact\" class=\"nb_vue_\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "nbr_repeat_activity", array()), "html", null, true);
                echo "</span></a></div>
    <div class=\"clear5\"></div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Activity:block_activity_list_annuaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if activities is empty %}*/
/* <div class="message">{{ 'Aucune activité trouvée'|trans }}.</div>*/
/* {% else %}*/
/* */
/* {% for activity in activities %}*/
/*     <div class="bloc_user">*/
/*     <div class="des_connais"><strong><a href="{{ path('search_users_by_activity',{'id': activity.activity_id}) }}">{{ activity.name }}</a></strong></div>*/
/*     <div class="ferme_connais"><a href="{{ path('search_users_by_activity',{'id': activity.activity_id}) }}" title="1 Contact" class="nb_vue_"><span>{{ activity.nbr_repeat_activity }}</span></a></div>*/
/*     <div class="clear5"></div>*/
/* </div>*/
/* {% endfor %}*/
/* {% endif %}*/
/* */

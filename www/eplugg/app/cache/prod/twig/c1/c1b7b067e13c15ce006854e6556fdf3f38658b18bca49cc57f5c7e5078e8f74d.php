<?php

/* EpluggFrontBundle:Default:experiences.html.twig */
class __TwigTemplate_48b92c0bc19a2281f33f8c330c154f70ebb85573efbabd671d9420989cd2dea6 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) ? $context["experiences"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 2
            echo "<div class=\"mon_cv\" style=\"position:relative\" id=\"config_cv";
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "id", array()), "html", null, true);
            echo "\">
    <div class=\"date_mon_cv\">
        ";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "startDate", array()), "M Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "endDate", array()), "M Y"), "html", null, true);
            echo "
    </div>
    <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
            echo "</h3>
    <div class=\"lieu_mon_cv\"> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "address", array()), "html", null, true);
            echo "</div>
    <div class=\"poste_mon_cv\"> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "title", array()), "html", null, true);
            echo " </div>
    ";
            // line 9
            if ((isset($context["ownProfile"]) ? $context["ownProfile"] : null)) {
                // line 10
                echo "    <div class=\"action_cv\">
        <a title=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supprimer"), "html", null, true);
                echo "\" class=\"delete_cv\" rel=\"delete_cv\" href=\"#delete_cv";
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "id", array()), "html", null, true);
                echo " \"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supprimer"), "html", null, true);
                echo "</a>
        <div style=\"display:none;\" id=\"delete_cv";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "id", array()), "html", null, true);
                echo "\">
            <div class=\"titre_plugg\"> Confirmation </div>
            <div class=\"top_form\"> <div> ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Voulez vous vraiment supprimer ce contenu"), "html", null, true);
                echo " ? </div> </div>
            <div class=\"clear10\"></div>
            <div align=\"center\" class=\"plugg_link\">
                <a onclick=\"\$.prettyPhoto.close();\"> ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuler"), "html", null, true);
                echo " </a>
                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_delete_experience", array("eid" => $this->getAttribute($context["experience"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Confirmer"), "html", null, true);
                echo " </a>
            </div>
            <div class=\"clear\"></div>
        </div>
        <a title=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier"), "html", null, true);
                echo "\" class=\"edit_cv\" rel=\"edit_cv\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_edit_experience", array("eid" => $this->getAttribute($context["experience"], "id", array()), "iframe" => "true", "width" => "500", "height" => "350")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier"), "html", null, true);
                echo " </a>
    </div>
    ";
            }
            // line 25
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:experiences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  85 => 22,  76 => 18,  72 => 17,  66 => 14,  61 => 12,  53 => 11,  50 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for experience in experiences %}*/
/* <div class="mon_cv" style="position:relative" id="config_cv{{ experience.id }}">*/
/*     <div class="date_mon_cv">*/
/*         {{ experience.startDate|date("M Y") }} - {{ experience.endDate|date("M Y") }}*/
/*     </div>*/
/*     <h3>{{ experience.etablissement }}</h3>*/
/*     <div class="lieu_mon_cv"> {{ experience.address }}</div>*/
/*     <div class="poste_mon_cv"> {{ experience.title }} </div>*/
/*     {% if ownProfile %}*/
/*     <div class="action_cv">*/
/*         <a title="{{ 'Supprimer'|trans }}" class="delete_cv" rel="delete_cv" href="#delete_cv{{ experience.id }} "> {{ 'Supprimer'|trans }}</a>*/
/*         <div style="display:none;" id="delete_cv{{ experience.id }}">*/
/*             <div class="titre_plugg"> Confirmation </div>*/
/*             <div class="top_form"> <div> {{ 'Voulez vous vraiment supprimer ce contenu'|trans }} ? </div> </div>*/
/*             <div class="clear10"></div>*/
/*             <div align="center" class="plugg_link">*/
/*                 <a onclick="$.prettyPhoto.close();"> {{ 'Annuler'|trans }} </a>*/
/*                 <a href="{{ path('eplugg_delete_experience', {'eid': experience.id }) }}"> {{ 'Confirmer'|trans }} </a>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <a title="{{ 'Modifier'|trans }}" class="edit_cv" rel="edit_cv" href="{{ path('eplugg_edit_experience', {'eid': experience.id,'iframe': 'true', 'width': '500', 'height': '350' }) }}"> {{ 'Modifier'|trans }} </a>*/
/*     </div>*/
/*     {% endif %}*/
/* </div>*/
/* {% endfor %}*/

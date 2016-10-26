<?php

/* EpluggFrontBundle:Calendar:add_event.html.twig */
class __TwigTemplate_023640a4885d3f39e35c2403afd77919920ee9dab9b84a70ae8c7d8a640b9104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle:popin:base_popin.html.twig", "EpluggFrontBundle:Calendar:add_event.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpluggFrontBundle:popin:base_popin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if ((isset($context["valid"]) ? $context["valid"] : null)) {
            // line 4
            echo "        <script>
            parent.document.location.reload();
        </script>
    ";
        }
        // line 8
        echo "    <script>
        \$( document ).ready(function() {
            \$('#date').datepicker({ dateFormat: 'dd-mm-yy' })

        });

    </script>
    <div class=\"titre_plugg\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter un évènement"), "html", null, true);
        echo "</div>
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("eplugg_add_event"), "attr" => array("class" => "fos_user_change_password")));
        echo "
        <div class=\"top_form\">
            <table width=\"100%\" class=\"tab_cv\">
                <tbody>
                <tr>
                    <td>Titre : <br>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("id" => "title", "attr" => array()));
        echo "
                </tr>
                <tr>
                    <td>Date : <br>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "eventDate", array()), 'widget', array("id" => "date", "attr" => array()));
        echo "
                </tr>

                </tbody>
            </table>
        </div>
        <div class=\"clear20\"></div>
        <div align=\"right\" class=\"div_btn\">
            <button class=\"btn btn-large btn-inverse submit\" type=\"submit\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrer"), "html", null, true);
        echo "</button>
        </div>
    ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Calendar:add_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  78 => 32,  67 => 24,  61 => 21,  53 => 16,  49 => 15,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle:popin:base_popin.html.twig' %}*/
/* {% block body %}*/
/*     {% if valid %}*/
/*         <script>*/
/*             parent.document.location.reload();*/
/*         </script>*/
/*     {% endif %}*/
/*     <script>*/
/*         $( document ).ready(function() {*/
/*             $('#date').datepicker({ dateFormat: 'dd-mm-yy' })*/
/* */
/*         });*/
/* */
/*     </script>*/
/*     <div class="titre_plugg">{{ 'Ajouter un évènement'|trans }}</div>*/
/*     {{ form_start(form, { 'action': path('eplugg_add_event'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*         <div class="top_form">*/
/*             <table width="100%" class="tab_cv">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <td>Titre : <br>{{ form_widget(form.title, {'id': 'title', 'attr': {}}) }}*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Date : <br>{{ form_widget(form.eventDate, {'id': 'date', 'attr': {}}) }}*/
/*                 </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <div class="clear20"></div>*/
/*         <div align="right" class="div_btn">*/
/*             <button class="btn btn-large btn-inverse submit" type="submit">{{ 'Enregistrer'|trans }}</button>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/

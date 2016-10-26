<?php

/* EpluggFrontBundle:popin:edit_experience.html.twig */
class __TwigTemplate_0f321940d567a44a40e75220200cf35e440bbcf18534b1b097edf06202982c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle:popin:base_popin.html.twig", "EpluggFrontBundle:popin:edit_experience.html.twig", 1);
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
        echo "    <div class=\"titre_plugg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter une expérience professionnelle / école"), "html", null, true);
        echo "</div>
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("eplugg_add_experience"), "attr" => array("class" => "fos_user_change_password")));
        echo "

    <div class=\"top_form\">
        <table width=\"100%\" class=\"tab_cv\">
            <tbody>
            <tr>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Etablissement"), "html", null, true);
        echo " : <br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "etablissement", array()), 'widget', array("id" => "company", "attr" => array()));
        echo "

            </tr>
            <tr>
                <td> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Poste / Diplôme"), "html", null, true);
        echo " : <br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("id" => "work_status", "attr" => array()));
        echo "
            </tr>
            <tr>
                <td>Date<br>
                    <table width=\"100%\" class=\"date\">
                        <tbody><tr>
                            <td>
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startDate", array()), 'widget', array("id" => "from_date", "attr" => array("class" => "", "style" => "width:90%", "placeholder" => $this->env->getExtension('translator')->trans("Début"))));
        echo "
                            </td>
                            <td>
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endDate", array()), 'widget', array("id" => "to_date", "attr" => array("class" => "", "style" => "width:90%", "placeholder" => $this->env->getExtension('translator')->trans("Fin"))));
        echo "

                            </td>
                        </tr>
                        </tbody></table>
                </td>
            </tr>
            <tr>
                <td>
                    Adresse : <br>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget', array("id" => "place", "attr" => array()));
        echo "
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"clear20\"></div>
    <div align=\"right\" class=\"div_btn\"><button class=\"btn btn-large btn-inverse submit\" type=\"submit\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrer"), "html", null, true);
        echo "</button> </div>
    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:popin:edit_experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  103 => 45,  93 => 38,  81 => 29,  75 => 26,  63 => 19,  54 => 15,  45 => 9,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle:popin:base_popin.html.twig' %}*/
/* {% block body %}*/
/*     {% if valid %}*/
/*         <script>*/
/*             parent.document.location.reload();*/
/*         </script>*/
/*     {% endif %}*/
/*     <div class="titre_plugg">{{ 'Ajouter une expérience professionnelle / école'|trans }}</div>*/
/*     {{ form_start(form, { 'action': path('eplugg_add_experience'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/* */
/*     <div class="top_form">*/
/*         <table width="100%" class="tab_cv">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td>{{ 'Etablissement'|trans }} : <br>{{ form_widget(form.etablissement, {'id': 'company', 'attr': {}}) }}*/
/* */
/*             </tr>*/
/*             <tr>*/
/*                 <td> {{ 'Poste / Diplôme'|trans }} : <br>{{ form_widget(form.title, {'id': 'work_status', 'attr': {}}) }}*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>Date<br>*/
/*                     <table width="100%" class="date">*/
/*                         <tbody><tr>*/
/*                             <td>*/
/*                                 {{ form_widget(form.startDate, {'id': 'from_date', 'attr': {'class': '', 'style': 'width:90%', 'placeholder': 'Début'|trans }}) }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ form_widget(form.endDate, {'id': 'to_date', 'attr': {'class': '', 'style': 'width:90%', 'placeholder': 'Fin'|trans }}) }}*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                         </tbody></table>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     Adresse : <br>{{ form_widget(form.address, {'id': 'place', 'attr': {}}) }}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <div class="clear20"></div>*/
/*     <div align="right" class="div_btn"><button class="btn btn-large btn-inverse submit" type="submit">{{ 'Enregistrer'|trans }}</button> </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock  %}*/

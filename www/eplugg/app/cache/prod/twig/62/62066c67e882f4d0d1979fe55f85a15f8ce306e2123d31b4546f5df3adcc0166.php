<?php

/* EpluggFrontBundle:popin:add_cv.html.twig */
class __TwigTemplate_cde57c04bc0fcb3d26a3c50d28652b8362712ca0201b486ce4894a05a0ed31dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle:popin:base_popin.html.twig", "EpluggFrontBundle:popin:add_cv.html.twig", 1);
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
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("eplugg_upload_cv"), "attr" => array("class" => "fos_user_change_password")));
        echo "

        <div class=\"titre_plugg\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Télécharger votre CV"), "html", null, true);
        echo "</div>
        <div class=\"clear10\"></div>
        <div style=\"padding:10px\">
            <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vous pouvez télécharger un fichier au format Word, PDF, JPG ou PNG"), "html", null, true);
        echo ".</p>
            <table width=\"100%\">
                <tbody>
                <tr>
                    <td colspan=\"2\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget', array("attr" => array("id" => "document_cv", "class" => "custom-file-input")));
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    <div class=\"div_btn\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("attr" => array("id" => "document_cv", "class" => "submitSetting btn btn-large btn-inverse")));
        echo "
    </div>
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:popin:add_cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  68 => 23,  59 => 17,  52 => 13,  46 => 10,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle:popin:base_popin.html.twig' %}*/
/* {% block body %}*/
/*     {% if valid %}*/
/*         <script>*/
/*             parent.document.location.reload();*/
/*         </script>*/
/*     {% endif %}*/
/*     {{ form_start(form, { 'action': path('eplugg_upload_cv'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/* */
/*         <div class="titre_plugg">{{ 'Télécharger votre CV'|trans }}</div>*/
/*         <div class="clear10"></div>*/
/*         <div style="padding:10px">*/
/*             <p>{{ 'Vous pouvez télécharger un fichier au format Word, PDF, JPG ou PNG'|trans }}.</p>*/
/*             <table width="100%">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <td colspan="2">{{ form_widget(form.file, { 'attr': {'id': 'document_cv', 'class': 'custom-file-input'}}) }}</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     <div class="div_btn">*/
/*         {{ form_widget(form.submit, { 'attr': {'id': 'document_cv', 'class': 'submitSetting btn btn-large btn-inverse'}}) }}*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock  %}*/
/* */

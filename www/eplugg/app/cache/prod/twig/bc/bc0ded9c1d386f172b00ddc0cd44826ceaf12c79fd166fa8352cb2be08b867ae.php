<?php

/* EpluggFrontBundle:Search:advanced_search_block.html.twig */
class __TwigTemplate_e5e1cd0553f44f6b4392bff06824baedd97c8b0f3420f9f62cb6b0abbd7f3686 extends Twig_Template
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
        echo "<div class=\"search_\" id=\"adv_search_conf\">
    <div class=\"inner_search\"><div id=\"specsearch\"><a id=\"adv_search\" class=\"link_ad\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche Avancée"), "html", null, true);
        echo "</a></div>
        <div class=\"form_search\">
            ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "get", "files" => true, "action" => $this->env->getExtension('routing')->getPath("search_users_page"), "attr" => array("id" => "advancedSearchForm")));
        echo "
                <div class=\"search_inner\">
                    <div class=\"card_user-search\">
                        <div class=\"select_div\">
                            <label class=\"custom_gendre\">
                                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gendre", array()), 'widget', array("attr" => array("class" => "type1")));
        echo "

                            </label>
                        </div>
                        <div class=\"half_div\">
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Prénom"))));
        echo "

                        </div>
                        <div class=\"half_div\">
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Nom"))));
        echo "
                        </div>
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Métier"))));
        echo "

                    </div>
                    <div class=\"card_company-search\">
                        <div>
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Établissement"))));
        echo "
                        </div>
                        <div>
                            ";
        // line 29
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activity", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Activités"))));
        echo "
                        </div>
                        <div class=\"half_div\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_city", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('translator')->trans("Ville"))));
        echo "

                        </div>
                        <div class=\"half_div\">
                            <label class=\"custom_country\">
                               ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'widget');
        echo "
                            </label>
                        </div>

                    </div>
                </div>
                <div class=\"clear15\"></div>
                <div align=\"center\">

                    <input type=\"hidden\" id=\"status_adv_search\" value=\"0\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "advancedSearch", array()), 'widget');
        echo "

                    <button type=\"reset\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Réinitialiser"), "html", null, true);
        echo "</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type=\"submit\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Rechercher"), "html", null, true);
        echo "</button>
                </div>
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Search:advanced_search_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  106 => 50,  102 => 49,  97 => 47,  84 => 37,  76 => 32,  69 => 29,  63 => 25,  55 => 20,  50 => 18,  43 => 14,  35 => 9,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="search_" id="adv_search_conf">*/
/*     <div class="inner_search"><div id="specsearch"><a id="adv_search" class="link_ad">{{ 'Recherche Avancée'|trans }}</a></div>*/
/*         <div class="form_search">*/
/*             {{ form_start(form, {'method': 'get', 'files': true, 'action': path('search_users_page'),'attr': {'id': 'advancedSearchForm'} }) }}*/
/*                 <div class="search_inner">*/
/*                     <div class="card_user-search">*/
/*                         <div class="select_div">*/
/*                             <label class="custom_gendre">*/
/*                                 {{ form_widget(form.gendre, { 'attr': { 'class': 'type1'} } ) }}*/
/* */
/*                             </label>*/
/*                         </div>*/
/*                         <div class="half_div">*/
/*                             {{ form_widget(form.first_name, { 'attr': {'placeholder': 'Prénom'|trans} }) }}*/
/* */
/*                         </div>*/
/*                         <div class="half_div">*/
/*                             {{ form_widget(form.last_name, { 'attr': {'placeholder': 'Nom'|trans} }) }}*/
/*                         </div>*/
/*                         {{ form_widget(form.job, { 'attr': {'placeholder': 'Métier'|trans} }) }}*/
/* */
/*                     </div>*/
/*                     <div class="card_company-search">*/
/*                         <div>*/
/*                             {{ form_widget(form.company_name, { 'attr': {'placeholder': 'Établissement'|trans} }) }}*/
/*                         </div>*/
/*                         <div>*/
/*                             {# todo activity #}*/
/*                             {{ form_widget(form.activity, { 'attr': {'placeholder': 'Activités'|trans} }) }}*/
/*                         </div>*/
/*                         <div class="half_div">*/
/*                             {{ form_widget(form.company_city, { 'attr': {'placeholder': 'Ville'|trans} }) }}*/
/* */
/*                         </div>*/
/*                         <div class="half_div">*/
/*                             <label class="custom_country">*/
/*                                {{ form_widget(form.country  ) }}*/
/*                             </label>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clear15"></div>*/
/*                 <div align="center">*/
/* */
/*                     <input type="hidden" id="status_adv_search" value="0">*/
/*                     {{ form_widget(form.advancedSearch  ) }}*/
/* */
/*                     <button type="reset">{{ 'Réinitialiser'|trans }}</button>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                     <button type="submit">{{ 'Rechercher'|trans }}</button>*/
/*                 </div>*/
/*             {{ form_end(form) }}*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/

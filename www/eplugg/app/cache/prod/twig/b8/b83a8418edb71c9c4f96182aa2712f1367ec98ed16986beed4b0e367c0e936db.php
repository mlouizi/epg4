<?php

/* EpluggFrontBundle:Post:post_new.html.twig */
class __TwigTemplate_58f143df15b29b49843d145b6fa1892742cdd0d15cf2b502086b1d45a3a96eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Post:post_new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'more_javascripts' => array($this, 'block_more_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpluggFrontBundle::base_logged_in.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"content\" style=\"min-height: 834px;\">
        <div class=\"center_content_inner\" style=\"min-height: 829px;\">
            <div id=\"left_content\">
                ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:leftSidebarConnected"));
        echo "
            </div>
            <div id=\"body_content\" style=\"background-color: #e9ebee!important;\">
                <div class=\"titre_plugg titre_plugg_post\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Exprimez vous"), "html", null, true);
        echo "</div>
                <div class=\"post\" id=\"post\">
                    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    <img class=\"imgPost\" width=\"55\" height=\"68\" alt=\"\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["userpic"]) ? $context["userpic"] : null), "html", null, true);
        echo "\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'widget', array("id" => "textareaFB", "attr" => array("class" => "textareaFB")));
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'errors', array("id" => "", "attr" => array("class" => "error")));
        echo "
                    ";
        // line 21
        echo "                    <hr>
                    <div class=\"imagePreview\">
                    </div>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileImage", array()), 'widget', array("id" => "uploadPostImg", "attr" => array("class" => "inputfile inputfile-2 uploadPost")));
        echo "
                    <label for=\"file-2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"17\" viewBox=\"0 0 20 17\"><path d=\"M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z\"/></svg> <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Joindre fichier"), "html", null, true);
        echo "&hellip;</span></label>
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileImage", array()), 'errors', array("id" => "", "attr" => array("class" => "error")));
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "partager", array()), 'widget', array("id" => "", "label" => "Post it", "attr" => array("class" => "submitFB")));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
                <div id=\"dir_ct_list\" class=\"content-infinity-post\">
                    ";
        // line 32
        $this->loadTemplate("EpluggFrontBundle:Post:post_bloc_friends.html.twig", "EpluggFrontBundle:Post:post_new.html.twig", 32)->display(array("posts" => (isset($context["posts"]) ? $context["posts"] : null)));
        // line 33
        echo "                    <a id=\"next\" href=\"?page=0\"></a>
                </div>
            </div>
            ";
        // line 36
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Post:post_new.html.twig", 36)->display($context);
        // line 37
        echo "            <div class=\"clear\"></div>
        </div>
        <div class=\"clear25\"></div>
    </div>

";
    }

    // line 43
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.infinitescroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" language=\"javascript\">
            \$('.content-infinity-post').infinitescroll(
                    {
                        navSelector:\"#next:last\",
                        nextSelector:\"a#next:last\",
                        itemSelector:\".content-infinity-post div.item_infinity\",
                        dataType:'html',
                        maxPage:157,
                        path:function(index) {
                            return \"?page=\" + index ;
                        }
                    },
                    function(newElements, data, url){ }
            );
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Post:post_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  122 => 43,  113 => 37,  111 => 36,  106 => 33,  104 => 32,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  73 => 21,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 11,  46 => 8,  41 => 5,  38 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Accueil'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*         <div class="center_content_inner" style="min-height: 829px;">*/
/*             <div id="left_content">*/
/*                 {{ render(controller('EpluggFrontBundle:Default:leftSidebarConnected')) }}*/
/*             </div>*/
/*             <div id="body_content" style="background-color: #e9ebee!important;">*/
/*                 <div class="titre_plugg titre_plugg_post">{{ 'Exprimez vous'|trans }}</div>*/
/*                 <div class="post" id="post">*/
/*                     {{ form_start(form) }}*/
/*                     <img class="imgPost" width="55" height="68" alt="" src="{{ userpic }}">*/
/*                     {{ form_widget(form.contenu, { 'id': 'textareaFB',  'attr': { 'class' : 'textareaFB' }} ) }}*/
/*                     {{ form_errors(form.contenu, { 'id': '',  'attr': { 'class' : 'error' }} ) }}*/
/*                     {#*/
/*                                  {{ form_widget(form.filePdf, { 'id': 'uploadPostPdf',  'attr': { 'class' : 'uploadPost' }} )}}*/
/*                                  {{ form_errors(form.filePdf, { 'id': '',  'attr': { 'class' : 'error' }} )}}*/
/*                               #}*/
/*                     <hr>*/
/*                     <div class="imagePreview">*/
/*                     </div>*/
/*                     {{ form_widget(form.fileImage, { 'id': 'uploadPostImg',  'attr': { 'class' : 'inputfile inputfile-2 uploadPost' }} ) }}*/
/*                     <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>{{ 'Joindre fichier'|trans }}&hellip;</span></label>*/
/*                     {{ form_errors(form.fileImage, { 'id': '',  'attr': { 'class' : 'error' }} ) }}*/
/*                     {{ form_widget(form.partager, { 'id': '', 'label': 'Post it',  'attr': { 'class' : 'submitFB' }} ) }}*/
/*                     {{ form_rest(form) }}*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*                 <div id="dir_ct_list" class="content-infinity-post">*/
/*                     {% include "EpluggFrontBundle:Post:post_bloc_friends.html.twig" with {"posts": posts} only %}*/
/*                     <a id="next" href="?page=0"></a>*/
/*                 </div>*/
/*             </div>*/
/*             {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/*     {% block more_javascripts %}*/
/*         <script src="{{ asset('js/jquery.infinitescroll.js') }}"></script>*/
/*         <script type="text/javascript" language="javascript">*/
/*             $('.content-infinity-post').infinitescroll(*/
/*                     {*/
/*                         navSelector:"#next:last",*/
/*                         nextSelector:"a#next:last",*/
/*                         itemSelector:".content-infinity-post div.item_infinity",*/
/*                         dataType:'html',*/
/*                         maxPage:157,*/
/*                         path:function(index) {*/
/*                             return "?page=" + index ;*/
/*                         }*/
/*                     },*/
/*                     function(newElements, data, url){ }*/
/*             );*/
/*         </script>*/
/*     {% endblock %}*/

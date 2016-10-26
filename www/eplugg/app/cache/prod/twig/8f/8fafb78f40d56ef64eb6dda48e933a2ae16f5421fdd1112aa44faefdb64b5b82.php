<?php

/* EpluggFrontBundle:Post:one_Post_Show.html.twig */
class __TwigTemplate_d8c48f497e0a36b006ade3dbb68612e7d53b0e47a664d06e81708490b36f7be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Post:one_Post_Show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Publication"), "html", null, true);
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

                <div id=\"dir_ct_list\">
                    ";
        // line 13
        if (twig_test_empty((isset($context["post"]) ? $context["post"] : null))) {
            // line 14
            echo "                        <div class=\"message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucun article trouvé"), "html", null, true);
            echo ".</div>
                    ";
        } else {
            // line 16
            echo "
                            <div  class=\"bloc_post\">
                                ";
            // line 18
            if (($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                // line 19
                echo "                                    <a class=\"deletepost\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
                echo "\"  onclick=\"return confirm('Are you sure?')\" >Delete</a>
                                ";
            }
            // line 21
            echo "                                <div class=\"post_avatar_user\">
                                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                                        <img width=\"50\" height=\"50\"
                                             src=\"";
            // line 24
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "avatar", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                echo " ";
            }
            echo "\">
                                    </a>
                                </div>

                                <div class=\"post_name_user\">
                                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "user", array()), "lastName", array()), "html", null, true);
            echo "</a>
                                </div>
                                <br>
                                <div class=\"post_name_time\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "dateAjout", array()), "d-m-y h:m:s"), "html", null, true);
            echo "
                                </div>
                                <br>
                                <div class=\"contenu_post\">
                                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "contenu", array()), "html", null, true);
            echo "
                                </div>



                                ";
            // line 42
            if ( !twig_test_empty($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "getWebPath", array(), "method"))) {
                // line 43
                echo "                                    <img class=\"img_post\" width=\"100%\" height=\"315px\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "getWebPath", array(), "method")), "html", null, true);
                echo "\">
                                ";
            }
            // line 45
            echo "



                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_share", array("idpost" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Partager"), "html", null, true);
            echo "</a>
                                ";
            // line 50
            $this->loadTemplate("EpluggFrontBundle:Post:like_post_block.html.twig", "EpluggFrontBundle:Post:one_Post_Show.html.twig", 50)->display(array_merge($context, array("postlike" => $this->env->getExtension('count_extension')->getlikedpost($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array())), "post" => (isset($context["post"]) ? $context["post"] : null), "likedpostsameuser" => $this->env->getExtension('count_extension')->likedPostOrNot($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))));
            // line 51
            echo "




                                <div class=\"commentire_post\" id=\"commentire_post_";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "\">
                                    ";
            // line 58
            echo "                                    ";
            $this->loadTemplate("EpluggFrontBundle:Post:commentaires.html.twig", "EpluggFrontBundle:Post:one_Post_Show.html.twig", 58)->display(array_merge($context, array("comments" => $this->env->getExtension('count_extension')->getcomments($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array())), "post" => (isset($context["post"]) ? $context["post"] : null))));
            // line 59
            echo "

                                </div>

                            </div>



                    ";
        }
        // line 68
        echo "

                </div>
            </div>
            ";
        // line 72
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Post:one_Post_Show.html.twig", 72)->display($context);
        // line 73
        echo "            <div class=\"clear\"></div>
        </div>
        <div class=\"clear25\"></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Post:one_Post_Show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 73,  175 => 72,  169 => 68,  158 => 59,  155 => 58,  151 => 56,  144 => 51,  142 => 50,  136 => 49,  130 => 45,  124 => 43,  122 => 42,  114 => 37,  107 => 33,  96 => 29,  81 => 24,  76 => 22,  73 => 21,  67 => 19,  65 => 18,  61 => 16,  55 => 14,  53 => 13,  45 => 8,  40 => 5,  37 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Publication'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*         <div class="center_content_inner" style="min-height: 829px;">*/
/*             <div id="left_content">*/
/*                 {{ render(controller('EpluggFrontBundle:Default:leftSidebarConnected')) }}*/
/*             </div>*/
/*             <div id="body_content" style="background-color: #e9ebee!important;">*/
/* */
/*                 <div id="dir_ct_list">*/
/*                     {% if post is empty %}*/
/*                         <div class="message">{{ 'Aucun article trouvé'|trans }}.</div>*/
/*                     {% else %}*/
/* */
/*                             <div  class="bloc_post">*/
/*                                 {% if post.user.id ==  app.user.id %}*/
/*                                     <a class="deletepost" href="{{ path('post_delete',{'id':post.id}) }}"  onclick="return confirm('Are you sure?')" >Delete</a>*/
/*                                 {% endif %}*/
/*                                 <div class="post_avatar_user">*/
/*                                     <a href="{{ path('eplugg_profile_page', {'uid': post.user.id }) }}">*/
/*                                         <img width="50" height="50"*/
/*                                              src="{% if post.user.avatar is not empty %} {{ asset(post.user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                                 <div class="post_name_user">*/
/*                                     <a href="{{ path('eplugg_profile_page', {'uid': post.user.id }) }}">{{ post.user.firstName }} {{ post.user.lastName }}</a>*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="post_name_time">*/
/*                                     {{ post.dateAjout|date('d-m-y h:m:s') }}*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="contenu_post">*/
/*                                     {{ post.contenu }}*/
/*                                 </div>*/
/* */
/* */
/* */
/*                                 {% if post.getWebPath() is not  empty %}*/
/*                                     <img class="img_post" width="100%" height="315px" src="{{ asset(post.getWebPath()) }}">*/
/*                                 {% endif %}*/
/* */
/* */
/* */
/* */
/*                                 <a href="{{ path('post_share',{'idpost':post.id}) }}">{{ 'Partager'|trans }}</a>*/
/*                                 {% include "EpluggFrontBundle:Post:like_post_block.html.twig" with {"postlike": getlikedpost(post.id),"post":post,"likedpostsameuser":likedPostOrNot(post.id,app.user.id)}  %}*/
/* */
/* */
/* */
/* */
/* */
/*                                 <div class="commentire_post" id="commentire_post_{{ post.id }}">*/
/*                                     {#   {{ render(controller('EpluggFrontBundle:Post:addListComment',{ 'id_post': post.id })) }} #}*/
/*                                     {% include "EpluggFrontBundle:Post:commentaires.html.twig" with {"comments": getcomments(post.id),"post":post}  %}*/
/* */
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/* */
/* */
/*                     {% endif %}*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*             {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/

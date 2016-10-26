<?php

/* EpluggFrontBundle:Post:post_bloc_friends.html.twig */
class __TwigTemplate_55b84cee47786edee8d6da3e67f19fa92add6c0a7989fa56141c92ed74442ccb extends Twig_Template
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
        if (twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
            // line 2
            echo "    <div class=\"message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucun article trouvé"), "html", null, true);
            echo ".</div>
";
        } else {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 5
                echo "
        <div class=\"bloc_post item_infinity\">
            ";
                // line 7
                if (($this->getAttribute($this->getAttribute($context["post"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                    // line 8
                    echo "                <a class=\"deletepost\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\"  onclick=\"return confirm('Are you sure?')\" >Delete</a>
            ";
                }
                // line 10
                echo "            <div class=\"post_avatar_user\">
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "id", array()))), "html", null, true);
                echo "\">
                    <img width=\"50\" height=\"50\"
                         src=\"";
                // line 13
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["post"], "user", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "user", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
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
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["post"], "user", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "lastName", array()), "html", null, true);
                echo "</a>
            </div>
            <div>

                ";
                // line 22
                $context["source_post"] = $this->env->getExtension('count_extension')->getsourcepost($this->getAttribute($context["post"], "id", array()));
                // line 23
                echo "                ";
                if ( !(null === (isset($context["source_post"]) ? $context["source_post"] : null))) {
                    // line 24
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a partagé"), "html", null, true);
                    echo "
                    <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("idpost" => $this->getAttribute((isset($context["source_post"]) ? $context["source_post"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("le post"), "html", null, true);
                    echo "  </a> de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["source_post"]) ? $context["source_post"] : null), "user", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["source_post"]) ? $context["source_post"] : null), "user", array()), "lastName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 27
                echo "
            </div>

            <br>
            <div class=\"post_name_time\">
                ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "dateAjout", array()), "d-m-y h:i:s"), "html", null, true);
                echo "
            </div>
            <br>
            <div class=\"contenu_post\">
                ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "contenu", array()), "html", null, true);
                echo "
            </div>
            ";
                // line 38
                if ( !twig_test_empty($this->getAttribute($context["post"], "getWebPath", array(), "method"))) {
                    // line 39
                    echo "                <img class=\"img_post\" width=\"100%\" height=\"315px\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["post"], "getWebPath", array(), "method")), "html", null, true);
                    echo "\">
            ";
                }
                // line 41
                echo "            <div class=\"like_post_\" id=\"like_post_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">
            ";
                // line 42
                $this->loadTemplate("EpluggFrontBundle:Post:like_post_block.html.twig", "EpluggFrontBundle:Post:post_bloc_friends.html.twig", 42)->display(array_merge($context, array("postlike" => $this->env->getExtension('count_extension')->getlikedpost($this->getAttribute($context["post"], "id", array())), "post" => $context["post"], "likedpostsameuser" => $this->env->getExtension('count_extension')->likedPostOrNot($this->getAttribute($context["post"], "id", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))));
                // line 43
                echo "            </div>
            <a class=\"share-btt\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_share", array("idpost" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\"><span>Partager</span></a>
            

            <div class=\"commentire_post\" id=\"commentire_post_";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">
                ";
                // line 49
                echo "                ";
                $this->loadTemplate("EpluggFrontBundle:Post:commentaires.html.twig", "EpluggFrontBundle:Post:post_bloc_friends.html.twig", 49)->display(array_merge($context, array("comments" => $this->env->getExtension('count_extension')->getcomments($this->getAttribute($context["post"], "id", array())), "post" => $context["post"])));
                // line 50
                echo "
            </div>

        </div>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Post:post_bloc_friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 56,  162 => 50,  159 => 49,  155 => 47,  149 => 44,  146 => 43,  144 => 42,  139 => 41,  133 => 39,  131 => 38,  126 => 36,  119 => 32,  112 => 27,  101 => 25,  96 => 24,  93 => 23,  91 => 22,  80 => 18,  65 => 13,  60 => 11,  57 => 10,  51 => 8,  49 => 7,  45 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if posts is empty %}*/
/*     <div class="message">{{ 'Aucun article trouvé'|trans }}.</div>*/
/* {% else %}*/
/*     {% for post in posts %}*/
/* */
/*         <div class="bloc_post item_infinity">*/
/*             {% if post.user.id ==  app.user.id %}*/
/*                 <a class="deletepost" href="{{ path('post_delete',{'id':post.id}) }}"  onclick="return confirm('Are you sure?')" >Delete</a>*/
/*             {% endif %}*/
/*             <div class="post_avatar_user">*/
/*                 <a href="{{ path('eplugg_profile_page', {'uid': post.user.id }) }}">*/
/*                     <img width="50" height="50"*/
/*                          src="{% if post.user.avatar is not empty %} {{ asset(post.user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div class="post_name_user">*/
/*                 <a href="{{ path('eplugg_profile_page', {'uid': post.user.id }) }}">{{ post.user.firstName }} {{ post.user.lastName }}</a>*/
/*             </div>*/
/*             <div>*/
/* */
/*                 {%  set source_post = getsourcepost(post.id) %}*/
/*                 {% if source_post is not null %}*/
/*                     {{ 'a partagé'|trans }}*/
/*                     <a href="{{ path('post_show',{'idpost':source_post.id}) }}">{{ 'le post'|trans }}  </a> de {{ source_post.user.firstName }} {{ source_post.user.lastName  }}*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*             <br>*/
/*             <div class="post_name_time">*/
/*                 {{ post.dateAjout|date('d-m-y h:i:s') }}*/
/*             </div>*/
/*             <br>*/
/*             <div class="contenu_post">*/
/*                 {{ post.contenu }}*/
/*             </div>*/
/*             {% if post.getWebPath() is not  empty %}*/
/*                 <img class="img_post" width="100%" height="315px" src="{{ asset(post.getWebPath()) }}">*/
/*             {% endif %}*/
/*             <div class="like_post_" id="like_post_{{ post.id }}">*/
/*             {% include "EpluggFrontBundle:Post:like_post_block.html.twig" with {"postlike": getlikedpost(post.id),"post":post,"likedpostsameuser":likedPostOrNot(post.id,app.user.id)}  %}*/
/*             </div>*/
/*             <a class="share-btt" href="{{ path('post_share',{'idpost':post.id}) }}"><span>Partager</span></a>*/
/*             */
/* */
/*             <div class="commentire_post" id="commentire_post_{{ post.id }}">*/
/*                 {#   {{ render(controller('EpluggFrontBundle:Post:addListComment',{ 'id_post': post.id })) }} #}*/
/*                 {% include "EpluggFrontBundle:Post:commentaires.html.twig" with {"comments": getcomments(post.id),"post":post}  %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/* {% endif %}*/

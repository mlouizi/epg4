<?php

/* EpluggFrontBundle:Post:commentaires.html.twig */
class __TwigTemplate_28f2e996bd2ab2c40293c8911254bd833ebd72330f8a8d1be91a48f719490f8e extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "
<div class=\"comments\">


<div class=\"comment_avatar_user\">
   <a> <img width=\"35\" height=\"35\"
         src=\"";
            // line 8
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "avatar", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                echo " ";
            }
            echo "\">
    </a>
</div>

    <div class=\"comment_name_user\">
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "lastName", array()), "html", null, true);
            echo "</a>
    </div>


    <div class=\"comment_message\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", array()), "html", null, true);
            echo "
    </div>

    <div class=\"comment_time\">
        ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "dateAjout", array()), "m-d-Y h:i"), "html", null, true);
            echo "
    </div>
";
            // line 24
            if (($this->getAttribute($this->getAttribute($context["comment"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                // line 25
                echo "    <a class=\"delete_comment\" id=\"delete_comment_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" href=\"javascript:void(0);\"  onclick=\"return confirm('delete comment ?')\" data-postid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo "\"   data-commentid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"  data-url=\"";
                echo $this->env->getExtension('routing')->getPath("comment_delete");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supprimer"), "html", null, true);
                echo "</a>
";
            }
            // line 27
            echo "

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "<input class=\"comment_form\" id=\"comment_form_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" type=\"text\" name=\"content\" data-postid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" data-url=\" ";
        echo $this->env->getExtension('routing')->getPath("comment_add_ajax");
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Commenter"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Post:commentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  86 => 27,  72 => 25,  70 => 24,  65 => 22,  58 => 18,  46 => 13,  31 => 8,  23 => 2,  19 => 1,);
    }
}
/* {% for comment in comments %}*/
/* */
/* <div class="comments">*/
/* */
/* */
/* <div class="comment_avatar_user">*/
/*    <a> <img width="35" height="35"*/
/*          src="{% if comment.user.avatar is not empty %} {{ asset(comment.user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*     </a>*/
/* </div>*/
/* */
/*     <div class="comment_name_user">*/
/*         <a href="{{ path('eplugg_profile_page', {'uid': comment.user.id }) }}">{{ comment.user.firstName }} {{ comment.user.lastName }}</a>*/
/*     </div>*/
/* */
/* */
/*     <div class="comment_message">*/
/*         {{ comment.message }}*/
/*     </div>*/
/* */
/*     <div class="comment_time">*/
/*         {{ comment.dateAjout|date('m-d-Y h:i')  }}*/
/*     </div>*/
/* {% if comment.user.id == app.user.id %}*/
/*     <a class="delete_comment" id="delete_comment_{{ comment.id }}" href="javascript:void(0);"  onclick="return confirm('delete comment ?')" data-postid="{{ post.id }}"   data-commentid="{{ comment.id }}"  data-url="{{ path('comment_delete') }}">{{ 'Supprimer'|trans }}</a>*/
/* {% endif %}*/
/* */
/* */
/* </div>*/
/* {% endfor %}*/
/* <input class="comment_form" id="comment_form_{{ post.id }}" type="text" name="content" data-postid="{{ post.id }}" data-url=" {{ path('comment_add_ajax') }}" placeholder="{{ 'Commenter'|trans }}">*/
/* */

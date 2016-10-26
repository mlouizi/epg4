<?php

/* EpluggFrontBundle:Post:like_post_block.html.twig */
class __TwigTemplate_478c2b6d8e22fa58eddde1cdf8096766f1fb70a586d0d46af0a5d0bd6218f88f extends Twig_Template
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
        echo "

";
        // line 3
        if (((isset($context["likedpostsameuser"]) ? $context["likedpostsameuser"] : null) == false)) {
            // line 4
            echo "    <a class=\"like_post_boutton\" href=\"javascript:void(0);\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("post_like");
            echo "\" data-postid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("J’aime"), "html", null, true);
            echo "</a>
";
        } else {
            // line 6
            echo "    <a class=\"like_post_boutton\" href=\"javascript:void(0);\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("post_dislike");
            echo "\" data-postid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("J’aime pas"), "html", null, true);
            echo "</a>
";
        }
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["postlike"]) ? $context["postlike"] : null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("J’aime"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Post:like_post_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  35 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* */
/* {% if likedpostsameuser == false %}*/
/*     <a class="like_post_boutton" href="javascript:void(0);" data-url="{{ path('post_like') }}" data-postid="{{ post.id }}">{{ 'J’aime'|trans }}</a>*/
/* {% else %}*/
/*     <a class="like_post_boutton" href="javascript:void(0);" data-url="{{ path('post_dislike') }}" data-postid="{{ post.id }}">{{ 'J’aime pas'|trans }}</a>*/
/* {% endif %}*/
/* */
/* {{ postlike|length }} {{ 'J’aime'|trans }}*/
/* */
/* */

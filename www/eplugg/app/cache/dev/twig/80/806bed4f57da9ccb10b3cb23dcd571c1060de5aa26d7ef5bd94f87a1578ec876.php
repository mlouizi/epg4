<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0d9607f35fbb4744c6dfbd036c19acdef6c01ef07593dba7a7d3da6d0814802d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c87632a23e6a1af4940e142b2ca41bde9eabf1839b451d824ae5d8325175200d = $this->env->getExtension("native_profiler");
        $__internal_c87632a23e6a1af4940e142b2ca41bde9eabf1839b451d824ae5d8325175200d->enter($__internal_c87632a23e6a1af4940e142b2ca41bde9eabf1839b451d824ae5d8325175200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c87632a23e6a1af4940e142b2ca41bde9eabf1839b451d824ae5d8325175200d->leave($__internal_c87632a23e6a1af4940e142b2ca41bde9eabf1839b451d824ae5d8325175200d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2660d927e4ec4b51b219441164b56ec6fb2dd9e87253fed13f2851d30e0cb71 = $this->env->getExtension("native_profiler");
        $__internal_b2660d927e4ec4b51b219441164b56ec6fb2dd9e87253fed13f2851d30e0cb71->enter($__internal_b2660d927e4ec4b51b219441164b56ec6fb2dd9e87253fed13f2851d30e0cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b2660d927e4ec4b51b219441164b56ec6fb2dd9e87253fed13f2851d30e0cb71->leave($__internal_b2660d927e4ec4b51b219441164b56ec6fb2dd9e87253fed13f2851d30e0cb71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_468bd550fe2963c36248f0fd126dadcdea71c47ec09730f4f96fbd24d54ede45 = $this->env->getExtension("native_profiler");
        $__internal_468bd550fe2963c36248f0fd126dadcdea71c47ec09730f4f96fbd24d54ede45->enter($__internal_468bd550fe2963c36248f0fd126dadcdea71c47ec09730f4f96fbd24d54ede45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_468bd550fe2963c36248f0fd126dadcdea71c47ec09730f4f96fbd24d54ede45->leave($__internal_468bd550fe2963c36248f0fd126dadcdea71c47ec09730f4f96fbd24d54ede45_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_127614a9ac67779e890fd45aaed7727b5156e62e5a34cdbe2e55ba4759e9a837 = $this->env->getExtension("native_profiler");
        $__internal_127614a9ac67779e890fd45aaed7727b5156e62e5a34cdbe2e55ba4759e9a837->enter($__internal_127614a9ac67779e890fd45aaed7727b5156e62e5a34cdbe2e55ba4759e9a837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_127614a9ac67779e890fd45aaed7727b5156e62e5a34cdbe2e55ba4759e9a837->leave($__internal_127614a9ac67779e890fd45aaed7727b5156e62e5a34cdbe2e55ba4759e9a837_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

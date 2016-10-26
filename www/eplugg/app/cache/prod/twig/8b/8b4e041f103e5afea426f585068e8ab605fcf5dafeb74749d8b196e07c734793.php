<?php

/* EpluggFrontBundle:Calendar:xml_events.xml.twig */
class __TwigTemplate_79a579c16aa785b2ddf7a0ee205e8aa2b73bcaa30e2ae51d8a5cd9d303417708 extends Twig_Template
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
        echo "<?xml version=\"1.0\"?>
<monthly>

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 5
            echo "    <event>
        <id>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "</id>
        <name>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
            echo "</name>
        <startdate>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "eventDate", array()), "Y-m-d"), "html", null, true);
            echo "</startdate>
        <enddate></enddate>
        <starttime></starttime>
        <endtime></endtime>
        <color>#ffb128</color>
        <url></url>
    </event>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

</monthly>";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Calendar:xml_events.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  39 => 8,  35 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <?xml version="1.0"?>*/
/* <monthly>*/
/* */
/*     {% for event in events %}*/
/*     <event>*/
/*         <id>{{ event.id }}</id>*/
/*         <name>{{ event.title }}</name>*/
/*         <startdate>{{ event.eventDate|date("Y-m-d") }}</startdate>*/
/*         <enddate></enddate>*/
/*         <starttime></starttime>*/
/*         <endtime></endtime>*/
/*         <color>#ffb128</color>*/
/*         <url></url>*/
/*     </event>*/
/*     {% endfor %}*/
/* */
/* */
/* </monthly>*/

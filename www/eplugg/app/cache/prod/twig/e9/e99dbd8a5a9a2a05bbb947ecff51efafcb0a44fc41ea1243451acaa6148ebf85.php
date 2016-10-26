<?php

/* EpluggFrontBundle:Messages:messages_search.html.twig */
class __TwigTemplate_599e0a5485465399bf09eb32073d582105187d9d209b8a8d1bfc14de97f93320 extends Twig_Template
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
        if (twig_test_empty((isset($context["messagesContacts"]) ? $context["messagesContacts"] : null))) {
            // line 2
            echo "    <div class=\"message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucun contact trouvé"), "html", null, true);
            echo ".</div>
";
        } else {
            // line 4
            echo "
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesContacts"]) ? $context["messagesContacts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 6
                echo "        <div class=\"bloc_suggestion ";
                if ((((isset($context["currentUid"]) ? $context["currentUid"] : null) == $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "id", array())) && ($this->getAttribute($context["contact"], "status", array()) == false))) {
                    echo "actif";
                }
                echo "\">
            ";
                // line 7
                if (((isset($context["currentUid"]) ? $context["currentUid"] : null) == $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "id", array()))) {
                    // line 8
                    echo "                <div class=\"im_connais\">
                    <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "avatar", array()))) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                        echo " ";
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                        echo " ";
                    }
                    echo "\" width=\"37\" height=\"37\"></a>
                </div>
                <div class=\"des_connais\">
                    <strong>
                        <a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "lastName", array()), "html", null, true);
                    echo "</a>
                    </strong>
                    ";
                    // line 15
                    if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "Y-m-d"))) {
                        // line 16
                        echo "                        aujourd'hui à ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "H:i"), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 18
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "d-m-Y H:i"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 20
                    echo "                </div>
            ";
                } else {
                    // line 22
                    echo "                <div class=\"im_connais\">
                    <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["contact"], "source", array()), "avatar", array()))) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["contact"], "source", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                        echo " ";
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                        echo " ";
                    }
                    echo "\" width=\"37\" height=\"37\"></a>
                </div>
                <div class=\"des_connais\">
                    <strong>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "lastName", array()), "html", null, true);
                    echo "</a>
                    </strong>
                    ";
                    // line 29
                    if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "Y-m-d"))) {
                        // line 30
                        echo "                        aujourd'hui à ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "H:i"), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 32
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "d-m-Y H:i"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 34
                    echo "                </div>
            ";
                }
                // line 36
                echo "            <div class=\"clear5\"></div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Messages:messages_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  131 => 34,  125 => 32,  119 => 30,  117 => 29,  108 => 27,  92 => 23,  89 => 22,  85 => 20,  79 => 18,  73 => 16,  71 => 15,  62 => 13,  46 => 9,  43 => 8,  41 => 7,  34 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if messagesContacts is empty %}*/
/*     <div class="message">{{ 'Aucun contact trouvé'|trans }}.</div>*/
/* {% else %}*/
/* */
/*     {% for contact in messagesContacts  %}*/
/*         <div class="bloc_suggestion {% if currentUid == contact.destination.id and contact.status == false %}actif{% endif %}">*/
/*             {% if currentUid == contact.source.id %}*/
/*                 <div class="im_connais">*/
/*                     <a href="{{ path('eplugg_messages_user', {'uid': contact.destination.id }) }}"><img src="{% if contact.destination.avatar is not empty %} {{ asset(contact.destination.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" width="37" height="37"></a>*/
/*                 </div>*/
/*                 <div class="des_connais">*/
/*                     <strong>*/
/*                         <a href="{{ path('eplugg_messages_user', {'uid': contact.destination.id }) }}">{{ contact.destination.firstName }} {{ contact.destination.lastName }}</a>*/
/*                     </strong>*/
/*                     {% if "now"|date('Y-m-d') == contact.timeSended|date('Y-m-d') %}*/
/*                         aujourd'hui à {{ contact.timeSended|date('H:i') }}*/
/*                     {% else %}*/
/*                         {{ contact.timeSended|date('d-m-Y H:i') }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="im_connais">*/
/*                     <a href="{{ path('eplugg_messages_user', {'uid': contact.source.id }) }}"><img src="{% if contact.source.avatar is not empty %} {{ asset(contact.source.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" width="37" height="37"></a>*/
/*                 </div>*/
/*                 <div class="des_connais">*/
/*                     <strong>*/
/*                         <a href="{{ path('eplugg_messages_user', {'uid': contact.source.id }) }}">{{ contact.source.firstName }} {{ contact.source.lastName }}</a>*/
/*                     </strong>*/
/*                     {% if "now"|date('Y-m-d') == contact.timeSended|date('Y-m-d') %}*/
/*                         aujourd'hui à {{ contact.timeSended|date('H:i') }}*/
/*                     {% else %}*/
/*                         {{ contact.timeSended|date('d-m-Y H:i') }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="clear5"></div>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endif %}*/

<?php

/* EpluggFrontBundle:Messages:reload_messages_chat.html.twig */
class __TwigTemplate_f269a31dfc2e678873ee9aca8b88be0e2b195e065196b91c4dce8db4ea452935 extends Twig_Template
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
        if ( !twig_test_empty((isset($context["messages"]) ? $context["messages"] : null))) {
            // line 2
            echo "\t
\t<div class=\"";
            // line 3
            if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0, array(), "array"), "source", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                echo "msg_text_2";
            } else {
                echo "msg_text_1";
            }
            echo "\">
\t\t<a class=\"tooltip tooltip-right-message\" data-tooltip=\"";
            // line 4
            if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0, array(), "array"), "source", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastName", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "lastName", array()), "html", null, true);
            }
            echo "\">
\t\t\t<img class=\"profil_photo\" width=\"36\" height=\"34\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
            if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0, array(), "array"), "source", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()), "path", array()), "html", null, true);
                } else {
                    echo "none.png";
                }
            } else {
                if ( !(null === $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "avatar", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "avatar", array()), "path", array()), "html", null, true);
                } else {
                    echo "none.png";
                }
            }
            echo "\"/>
\t\t</a>
\t\t<div class=\"content_msg\"><div class=\"first_msg\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0, array(), "array"), "body", array()), "html", null, true);
            echo "</div></div>
\t</div>
\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 10
                echo "\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "source", array()) == $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), ($context["i"] - 1), array(), "array"), "source", array()))) {
                    // line 11
                    echo "\t\t\t<div class=\"another_msg ";
                    if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "source", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                        echo "to_another";
                    } else {
                        echo "from_another";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "body", array()), "html", null, true);
                    echo "</div>
\t\t";
                } else {
                    // line 13
                    echo "\t\t\t<div class=\"";
                    if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "source", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                        echo "msg_text_2";
                    } else {
                        echo "msg_text_1";
                    }
                    echo "\">
\t\t\t  <a class=\"tooltip tooltip-right-message\" data-tooltip=\"";
                    // line 14
                    if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "source", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstName", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastName", array()), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "firstName", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "lastName", array()), "html", null, true);
                    }
                    echo "\">
\t\t\t\t<img class=\"profil_photo\" width=\"36\" height=\"34\" src=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
                    if (($this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "source", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()))) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array()), "path", array()), "html", null, true);
                        } else {
                            echo "none.png";
                        }
                    } else {
                        if ( !(null === $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "avatar", array()))) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "avatar", array()), "path", array()), "html", null, true);
                        } else {
                            echo "none.png";
                        }
                    }
                    echo "\"/>
\t\t\t  </a>
\t\t\t <div class=\"content_msg\"><div class=\"first_msg\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "body", array()), "html", null, true);
                    echo "</div></div>
\t\t\t</div>
\t\t";
                }
                // line 20
                echo "\t\t";
                if (($context["i"] == (twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) - 1))) {
                    echo "<font class=\"last_msgbox\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dernier message"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), $context["i"], array(), "array"), "timeSended", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</font>";
                }
                // line 21
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t
";
        } else {
            // line 24
            echo "\t
\t<br/><center><font class=\"noNewMessages\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pas de nouveaux messages"), "html", null, true);
            echo "</font></center>
\t
";
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Messages:reload_messages_chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 25,  150 => 24,  146 => 22,  140 => 21,  131 => 20,  125 => 17,  107 => 15,  95 => 14,  86 => 13,  74 => 11,  71 => 10,  67 => 9,  62 => 7,  44 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if messages is not empty %}*/
/* 	*/
/* 	<div class="{% if messages[0].source == app.user %}msg_text_2{% else %}msg_text_1{% endif %}">*/
/* 		<a class="tooltip tooltip-right-message" data-tooltip="{% if messages[0].source == app.user %}{{ app.user.firstName }} {{ app.user.lastName }}{% else %}{{ destination.firstName }} {{ destination.lastName }}{% endif %}">*/
/* 			<img class="profil_photo" width="36" height="34" src="{{ asset('uploads/pictures/') }}{% if messages[0].source == app.user %}{% if app.user.avatar is not null %}{{ app.user.avatar.path }}{% else %}none.png{% endif %}{% else %}{% if destination.avatar is not null %}{{ destination.avatar.path }}{% else %}none.png{% endif %}{% endif %}"/>*/
/* 		</a>*/
/* 		<div class="content_msg"><div class="first_msg">{{ messages[0].body }}</div></div>*/
/* 	</div>*/
/* 	{% for i in 1..messages|length-1 %}*/
/* 		{% if messages[i].source == messages[i-1].source %}*/
/* 			<div class="another_msg {% if messages[i].source == app.user %}to_another{% else %}from_another{% endif %}">{{ messages[i].body }}</div>*/
/* 		{% else %}*/
/* 			<div class="{% if messages[i].source == app.user %}msg_text_2{% else %}msg_text_1{% endif %}">*/
/* 			  <a class="tooltip tooltip-right-message" data-tooltip="{% if messages[i].source == app.user %}{{ app.user.firstName }} {{ app.user.lastName }}{% else %}{{ destination.firstName }} {{ destination.lastName }}{% endif %}">*/
/* 				<img class="profil_photo" width="36" height="34" src="{{ asset('uploads/pictures/') }}{% if messages[i].source == app.user %}{% if app.user.avatar is not null %}{{ app.user.avatar.path }}{% else %}none.png{% endif %}{% else %}{% if destination.avatar is not null %}{{ destination.avatar.path }}{% else %}none.png{% endif %}{% endif %}"/>*/
/* 			  </a>*/
/* 			 <div class="content_msg"><div class="first_msg">{{ messages[i].body }}</div></div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{% if i == messages|length-1 %}<font class="last_msgbox">{{ 'Dernier message'|trans }} {{ messages[i].timeSended | date("Y-m-d H:i:s") }}</font>{% endif %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% else %}*/
/* 	*/
/* 	<br/><center><font class="noNewMessages">{{ 'Pas de nouveaux messages'|trans }}</font></center>*/
/* 	*/
/* {% endif %}*/

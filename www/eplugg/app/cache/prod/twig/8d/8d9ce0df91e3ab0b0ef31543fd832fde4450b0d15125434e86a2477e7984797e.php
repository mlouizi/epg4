<?php

/* EpluggFrontBundle:Messages:messages.html.twig */
class __TwigTemplate_b99331f9b78330850fcdb71d2796a5b46c7d07513761750cb9b1a7d7f5691a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Messages:messages.html.twig", 1);
        $this->blocks = array(
            'more_stylesheets' => array($this, 'block_more_stylesheets'),
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
    public function block_more_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link media=\"all\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Messages"), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"content\" style=\"min-height: 834px;\">
        <div class=\"center_content_inner\" style=\"min-height: 829px;\">
            <div class=\"messagesLeft\">
                <div class=\"titre_plugg search\">Messages</div>
                <div class=\"list_contacts responsivediv\">
                        <div class=\"search\"><input type=\"text\" id=\"msg_ct_serach\" placeholder=\"Rechercher\" data-url=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("eplugg_messages_user_search");
        echo "\"></div>
                        <div class=\"clear20\"></div>
                        <div id=\"msg_ct_list\">
                        ";
        // line 17
        if ( !twig_test_empty((isset($context["messagesContacts"]) ? $context["messagesContacts"] : null))) {
            // line 18
            echo "
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesContacts"]) ? $context["messagesContacts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 20
                echo "                                <div class=\"bloc_suggestion ";
                if ((((isset($context["currentUid"]) ? $context["currentUid"] : null) == $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "id", array())) && ($this->getAttribute($context["contact"], "status", array()) == false))) {
                    echo "actif";
                }
                echo "\">
                                    ";
                // line 21
                if (((isset($context["currentUid"]) ? $context["currentUid"] : null) == $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "id", array()))) {
                    // line 22
                    echo "                                        <div class=\"im_connais\">
                                            <a href=\"";
                    // line 23
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
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "destination", array()), "lastName", array()), "html", null, true);
                    echo "</a>
                                            </strong>
                                            ";
                    // line 29
                    if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "Y-m-d"))) {
                        // line 30
                        echo "                                                aujourd'hui à ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "H:i"), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 32
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "d-m-Y H:i"), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 34
                    echo "                                        </div>
                                    ";
                } else {
                    // line 36
                    echo "                                        <div class=\"im_connais\">
                                            <a href=\"";
                    // line 37
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
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "source", array()), "lastName", array()), "html", null, true);
                    echo "</a>
                                            </strong>
                                            ";
                    // line 43
                    if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "Y-m-d"))) {
                        // line 44
                        echo "                                                aujourd'hui à ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "H:i"), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 46
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "timeSended", array()), "d-m-Y H:i"), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 48
                    echo "                                        </div>
                                    ";
                }
                // line 50
                echo "                                    <div class=\"clear5\"></div>
                                </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                    ";
        }
        // line 54
        echo "                    </div>

                </div>

                <div class=\"messages\">
                    ";
        // line 59
        if ( !twig_test_empty((isset($context["uid"]) ? $context["uid"] : null))) {
            // line 60
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesList"]) ? $context["messagesList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 61
                echo "                            <div class=\"";
                if (((isset($context["uid"]) ? $context["uid"] : null) == $this->getAttribute($this->getAttribute($context["message"], "source", array()), "id", array()))) {
                    echo "msg_block-left";
                } else {
                    echo "msg_block-right";
                }
                echo "\">
                                <div class=\"im_connais\">
                                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["message"], "source", array()), "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["message"], "source", array()), "Avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["message"], "source", array()), "Avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\" width=\"37\" height=\"37\"></a>
                                </div>
                                <div class=\"msg_left\">
                                    <div class=\"conten_msg\">";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
                echo "</div>
                                    <div class=\"top_msg\">
                                        <div class=\"time\">
                                            ";
                // line 69
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute($context["message"], "timeSended", array()), "Y-m-d"))) {
                    // line 70
                    echo "                                                aujourd'hui à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "timeSended", array()), "H:i"), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 72
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "timeSended", array()), "d-m-Y H:i"), "html", null, true);
                    echo "
                                            ";
                }
                // line 74
                echo "
                                        </div>
                                    </div>
                                    <div class=\"arrow_left\"></div>
                                </div>
                                <div class=\"clear5\"></div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                        ";
            if ( !twig_test_empty((isset($context["form"]) ? $context["form"] : null))) {
                // line 83
                echo "                            ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "files" => true, "action" => $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => (isset($context["uid"]) ? $context["uid"] : null))), "attr" => array("id" => "sendMsgForm")));
                echo "
                                ";
                // line 84
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget', array("id" => "messageText", "attr" => array("style" => "font-family: Arial, Helvetica, sans-serif; color: #5e5e5e", "cols" => 59, "rows" => 5, "autocomplete" => "off")));
                echo "
                                <div class=\"clear10\"></div>
                                <div align=\"right\"><button type=\"submit\" name=\"send_message\" value=\"1\" id=\"submitMessage\">Envoyer</button></div>
                            ";
                // line 87
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
                echo "
                        ";
            }
            // line 89
            echo "
                    ";
        }
        // line 91
        echo "                </div>
            </div>
            ";
        // line 93
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Messages:messages.html.twig", 93)->display($context);
        // line 94
        echo "            <div class=\"clear\"></div>
        </div>
        <div class=\"clear25\"></div>
    </div>
";
    }

    // line 99
    public function block_more_javascripts($context, array $blocks = array())
    {
        // line 100
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuphone/pushy.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.souscat a').click(function(){
                _this = \$(this) ;
                \$('#userLang').val(_this.data('lang')) ;
                \$('#lang_link').html(_this.html()) ;
                \$('.souscat').animate({height: ['hide', 'swing'],opacity: 'hide'}, 500, 'linear');
            }) ;
            \$('#btn_cat, #lang_link').click(function(){
                \$('.souscat').animate({height: ['toggle', 'swing'],opacity: 'toggle'}, 500, 'linear');
            }) ;
        }) ;
    </script>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Messages:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 100,  296 => 99,  288 => 94,  286 => 93,  282 => 91,  278 => 89,  273 => 87,  267 => 84,  262 => 83,  259 => 82,  246 => 74,  240 => 72,  234 => 70,  232 => 69,  226 => 66,  211 => 63,  201 => 61,  196 => 60,  194 => 59,  187 => 54,  184 => 53,  176 => 50,  172 => 48,  166 => 46,  160 => 44,  158 => 43,  149 => 41,  133 => 37,  130 => 36,  126 => 34,  120 => 32,  114 => 30,  112 => 29,  103 => 27,  87 => 23,  84 => 22,  82 => 21,  75 => 20,  71 => 19,  68 => 18,  66 => 17,  60 => 14,  53 => 9,  50 => 8,  42 => 6,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block more_stylesheets %}*/
/*     <link media="all" type="text/css" href="{{ asset('css/default.min.css') }}" rel="stylesheet">*/
/* */
/* {% endblock %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Messages'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*         <div class="center_content_inner" style="min-height: 829px;">*/
/*             <div class="messagesLeft">*/
/*                 <div class="titre_plugg search">Messages</div>*/
/*                 <div class="list_contacts responsivediv">*/
/*                         <div class="search"><input type="text" id="msg_ct_serach" placeholder="Rechercher" data-url="{{  path('eplugg_messages_user_search') }}"></div>*/
/*                         <div class="clear20"></div>*/
/*                         <div id="msg_ct_list">*/
/*                         {% if messagesContacts is  not empty %}*/
/* */
/*                         {% for contact in messagesContacts  %}*/
/*                                 <div class="bloc_suggestion {% if currentUid == contact.destination.id and contact.status == false %}actif{% endif %}">*/
/*                                     {% if currentUid == contact.source.id %}*/
/*                                         <div class="im_connais">*/
/*                                             <a href="{{ path('eplugg_messages_user', {'uid': contact.destination.id }) }}"><img src="{% if contact.destination.avatar is not empty %} {{ asset(contact.destination.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" width="37" height="37"></a>*/
/*                                         </div>*/
/*                                         <div class="des_connais">*/
/*                                             <strong>*/
/*                                                 <a href="{{ path('eplugg_messages_user', {'uid': contact.destination.id }) }}">{{ contact.destination.firstName }} {{ contact.destination.lastName }}</a>*/
/*                                             </strong>*/
/*                                             {% if "now"|date('Y-m-d') == contact.timeSended|date('Y-m-d') %}*/
/*                                                 aujourd'hui à {{ contact.timeSended|date('H:i') }}*/
/*                                             {% else %}*/
/*                                                 {{ contact.timeSended|date('d-m-Y H:i') }}*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                     {% else %}*/
/*                                         <div class="im_connais">*/
/*                                             <a href="{{ path('eplugg_messages_user', {'uid': contact.source.id }) }}"><img src="{% if contact.source.avatar is not empty %} {{ asset(contact.source.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" width="37" height="37"></a>*/
/*                                         </div>*/
/*                                         <div class="des_connais">*/
/*                                             <strong>*/
/*                                                 <a href="{{ path('eplugg_messages_user', {'uid': contact.source.id }) }}">{{ contact.source.firstName }} {{ contact.source.lastName }}</a>*/
/*                                             </strong>*/
/*                                             {% if "now"|date('Y-m-d') == contact.timeSended|date('Y-m-d') %}*/
/*                                                 aujourd'hui à {{ contact.timeSended|date('H:i') }}*/
/*                                             {% else %}*/
/*                                                 {{ contact.timeSended|date('d-m-Y H:i') }}*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                     <div class="clear5"></div>*/
/*                                 </div>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="messages">*/
/*                     {% if uid is not empty %}*/
/*                         {% for message in messagesList %}*/
/*                             <div class="{% if uid == message.source.id  %}msg_block-left{% else %}msg_block-right{% endif %}">*/
/*                                 <div class="im_connais">*/
/*                                     <a href="{{ path('eplugg_profile_page', {'uid': message.source.id }) }}"><img src="{% if message.source.Avatar is not empty %} {{ asset(message.source.Avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" width="37" height="37"></a>*/
/*                                 </div>*/
/*                                 <div class="msg_left">*/
/*                                     <div class="conten_msg">{{ message.body }}</div>*/
/*                                     <div class="top_msg">*/
/*                                         <div class="time">*/
/*                                             {% if "now"|date('Y-m-d') == message.timeSended|date('Y-m-d') %}*/
/*                                                 aujourd'hui à {{ message.timeSended|date('H:i') }}*/
/*                                             {% else %}*/
/*                                                 {{ message.timeSended|date('d-m-Y H:i') }}*/
/*                                             {% endif %}*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="arrow_left"></div>*/
/*                                 </div>*/
/*                                 <div class="clear5"></div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                         {% if form is not empty %}*/
/*                             {{ form_start(form, {'method': 'post', 'files': true, 'action': path('eplugg_messages_user', {'uid': uid }), 'attr': {'id': 'sendMsgForm'} }) }}*/
/*                                 {{ form_widget(form.body, { 'id': "messageText", 'attr': {'style': 'font-family: Arial, Helvetica, sans-serif; color: #5e5e5e', 'cols': 59, 'rows': 5, 'autocomplete': 'off'} } ) }}*/
/*                                 <div class="clear10"></div>*/
/*                                 <div align="right"><button type="submit" name="send_message" value="1" id="submitMessage">Envoyer</button></div>*/
/*                             {{ form_end(form) }}*/
/*                         {% endif %}*/
/* */
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="clear25"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block more_javascripts %}*/
/*     <script src="{{ asset('js/menuphone/pushy.min.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function(){*/
/*             $('.souscat a').click(function(){*/
/*                 _this = $(this) ;*/
/*                 $('#userLang').val(_this.data('lang')) ;*/
/*                 $('#lang_link').html(_this.html()) ;*/
/*                 $('.souscat').animate({height: ['hide', 'swing'],opacity: 'hide'}, 500, 'linear');*/
/*             }) ;*/
/*             $('#btn_cat, #lang_link').click(function(){*/
/*                 $('.souscat').animate({height: ['toggle', 'swing'],opacity: 'toggle'}, 500, 'linear');*/
/*             }) ;*/
/*         }) ;*/
/*     </script>*/
/* {% endblock %}*/

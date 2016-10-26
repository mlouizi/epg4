<?php

/* EpluggFrontBundle:Default:invitations.html.twig */
class __TwigTemplate_ceecd97123cc643911cb90a7dfeb56fedad5632437391bd9a208516ab6059ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Default:invitations.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Invitations"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" style=\"min-height: 834px;\">
    <div class=\"center_content_inner\">
        ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:leftSidebarConnected"));
        echo "

        <div id=\"body_content\">
            <div class=\"titre_plugg search\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Invitations"), "html", null, true);
        echo "</div>
            ";
        // line 11
        if (twig_test_empty((isset($context["invitations"]) ? $context["invitations"] : null))) {
            // line 12
            echo "                <div class=\"message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucune invitation trouvée"), "html", null, true);
            echo ".</div>

            ";
        } else {
            // line 15
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["invitations"]) ? $context["invitations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
                // line 16
                echo "                    <div class=\"bloc_user\">
                        <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()), "html", null, true);
                echo "\" class=\"infobull_div tooltip\"></a>
                        <div class=\"im_connais\"><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\"><img width=\"37\" height=\"37\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"><span></span></a></div>
                        <div class=\"des_connais\">
                            <strong><a class=\"tooltip\" data-tooltip=\"#html-content8\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "lastName", array()), "html", null, true);
                echo "</a></strong>
                            ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "job", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"ferme_connais\">
                            <a class=\"nb_vue_\" title=\"0 ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
                echo "\"><span>0</span></a>
                        </div>
                        <div class=\"clear5\"></div>
                    </div>
                    <div id=\"html-content";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">
                        <div onclick=\"window.location.href='";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "'\" id=\"card_eplugg\">
                            <div class=\"yellow\"><img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
                echo "\"></div>
                            <div id=\"card_user\">
                                <div class=\"img_profil\"><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\"><img width=\"48\" height=\"48\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"></a></div>
                                <div class=\"descp_card\">
                                    <div class=\"name_user\"><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "lastName", array()), "html", null, true);
                echo "</a></div>
                                    <div class=\"job_user\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "job", array()), "html", null, true);
                echo "</div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                            <div id=\"card_company\">
                                <div class=\"img_profil\">
                                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\">
                                        <img width=\"51\" height=\"51\" src=\"";
                // line 42
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "CompanyAvatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
                    echo " ";
                }
                echo "\">
                                    </a>
                                </div>
                                <div class=\"descp_card\">
                                    <div class=\"company_user\"><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "companyName", array()), "html", null, true);
                echo "</a> </div>
                                    <div class=\"tag_company\">
                                        ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "getActivitiesFormatted", array()), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"lieu_company\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "companyAddress", array()), "html", null, true);
                echo "</div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                        </div>
                        <div class=\"plugg_link info_card\">
                            <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_accpet_invitation", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
                echo "\" class=\"plugger-link\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accepter l’invitation"), "html", null, true);
                echo "\" data-id=\"8\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accepter"), "html", null, true);
                echo "</a>

                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["invitation"], "userOne", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
                echo "</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invitation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            ";
        }
        // line 63
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Suggestion:suggestedNotificationBlock", array("blockNotification" => false)));
        echo "

        </div>

        ";
        // line 67
        $this->loadTemplate("EpluggFrontBundle:logged_in:right_sidebar.html.twig", "EpluggFrontBundle:Default:invitations.html.twig", 67)->display($context);
        // line 68
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:invitations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 68,  227 => 67,  219 => 63,  216 => 62,  204 => 58,  195 => 56,  186 => 50,  181 => 48,  174 => 46,  160 => 42,  156 => 41,  147 => 35,  139 => 34,  125 => 32,  120 => 30,  116 => 29,  112 => 28,  105 => 24,  99 => 21,  91 => 20,  77 => 18,  71 => 17,  68 => 16,  63 => 15,  56 => 12,  54 => 11,  50 => 10,  44 => 7,  40 => 5,  37 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Invitations'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/* <div id="content" style="min-height: 834px;">*/
/*     <div class="center_content_inner">*/
/*         {{ render(controller('EpluggFrontBundle:Default:leftSidebarConnected')) }}*/
/* */
/*         <div id="body_content">*/
/*             <div class="titre_plugg search">{{ 'Invitations'|trans }}</div>*/
/*             {% if invitations is empty %}*/
/*                 <div class="message">{{ 'Aucune invitation trouvée'|trans }}.</div>*/
/* */
/*             {% else %}*/
/*                 {% for invitation in invitations %}*/
/*                     <div class="bloc_user">*/
/*                         <a href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}" data-tooltip="#html-content{{ invitation.userOne.id }}" class="infobull_div tooltip"></a>*/
/*                         <div class="im_connais"><a href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}"><img width="37" height="37" alt="" src="{% if invitation.userOne.avatar is not empty %} {{ asset(invitation.userOne.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"><span></span></a></div>*/
/*                         <div class="des_connais">*/
/*                             <strong><a class="tooltip" data-tooltip="#html-content8" href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}">{{ invitation.userOne.firstName }} {{ invitation.userOne.lastName }}</a></strong>*/
/*                             {{ invitation.userOne.job }}*/
/*                         </div>*/
/*                         <div class="ferme_connais">*/
/*                             <a class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*                         </div>*/
/*                         <div class="clear5"></div>*/
/*                     </div>*/
/*                     <div id="html-content{{ invitation.userOne.id }}" style="display:none;">*/
/*                         <div onclick="window.location.href='{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}'" id="card_eplugg">*/
/*                             <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                             <div id="card_user">*/
/*                                 <div class="img_profil"><a href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}"><img width="48" height="48" alt="" src="{% if invitation.userOne.avatar is not empty %} {{ asset(invitation.userOne.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a></div>*/
/*                                 <div class="descp_card">*/
/*                                     <div class="name_user"><a href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}">{{ invitation.userOne.firstName }} {{ invitation.userOne.lastName }}</a></div>*/
/*                                     <div class="job_user">{{ invitation.userOne.job }}</div>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                             <div id="card_company">*/
/*                                 <div class="img_profil">*/
/*                                     <a href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}">*/
/*                                         <img width="51" height="51" src="{% if invitation.userOne.CompanyAvatar is not empty %} {{ asset(invitation.userOne.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="descp_card">*/
/*                                     <div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': invitation.userOne.id }) }}">{{ invitation.userOne.companyName }}</a> </div>*/
/*                                     <div class="tag_company">*/
/*                                         {{ invitation.userOne.getActivitiesFormatted }}*/
/*                                     </div>*/
/*                                     <div class="lieu_company">{{ invitation.userOne.companyAddress }}</div>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="plugg_link info_card">*/
/*                             <a href="{{ path('eplugg_accpet_invitation', {'uid': invitation.userOne.id, 'token': csrfToken }) }}" class="plugger-link" title="{{ 'Accepter l’invitation'|trans }}" data-id="8">{{ 'Accepter'|trans }}</a>*/
/* */
/*                             <a href="{{ path('eplugg_messages_user', {'uid': invitation.userOne.id } ) }}">{{ 'Message'|trans }}</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             {{ render(controller('EpluggFrontBundle:Suggestion:suggestedNotificationBlock', { 'blockNotification': false } )) }}*/
/* */
/*         </div>*/
/* */
/*         {% include "EpluggFrontBundle:logged_in:right_sidebar.html.twig" %}*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/

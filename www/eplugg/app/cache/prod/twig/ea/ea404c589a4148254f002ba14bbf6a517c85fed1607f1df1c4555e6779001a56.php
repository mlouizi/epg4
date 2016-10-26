<?php

/* EpluggFrontBundle:Suggestion:suggested_list_block.html.twig */
class __TwigTemplate_fbcc25f5619dbb0fafb57f77205becb0a3fcd88c957aa269d71e001273798c1e extends Twig_Template
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
        if ( !twig_test_empty((isset($context["suggestions"]) ? $context["suggestions"] : null))) {
            // line 2
            echo "    <div class=\"block-list-suggests\">
        <div class=\"suggests-title\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connaissez-vous"), "html", null, true);
            echo "?</div>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["suggestions"]) ? $context["suggestions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["suggestion"]) {
                // line 5
                echo "
            <div class=\"bloc_user\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()), "html", null, true);
                echo "\" class=\"infobull_div tooltip\"></a>
                <div class=\"im_connais\"><a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\"><img width=\"37\" height=\"37\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"><span></span></a></div>
                <div class=\"des_connais\">
                    <strong><a class=\"tooltip\" data-tooltip=\"#html-content8\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "lastName", array()), "html", null, true);
                echo "</a></strong>
                    ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "job", array()), "html", null, true);
                echo "
                </div>
                <div class=\"ferme_connais\">
                    <a class=\"nb_vue_\" title=\"0 ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
                echo "\"><span>0</span></a>
                </div>
                <div class=\"clear5\"></div>
            </div>
            <div id=\"html-content";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">
                <div onclick=\"window.location.href='";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
                echo "\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\"><img width=\"48\" height=\"48\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "lastName", array()), "html", null, true);
                echo "</a></div>
                            <div class=\"job_user\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "job", array()), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\">
                                <img width=\"51\" height=\"51\" src=\"";
                // line 32
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "CompanyAvatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
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
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "companyName", array()), "html", null, true);
                echo "</a> </div>
                            <div class=\"tag_company\">
                                ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "getActivitiesFormatted", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"lieu_company\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "companyAddress", array()), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_invite_user", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()), "token" => (isset($context["csrfToken"]) ? $context["csrfToken"] : null))), "html", null, true);
                echo "\" class=\"plugger plugger-link\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
                echo "</a>


                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute($context["suggestion"], "suggested", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
                echo "</a>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suggestion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Suggestion:suggested_list_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 53,  170 => 49,  160 => 46,  151 => 40,  146 => 38,  139 => 36,  125 => 32,  121 => 31,  112 => 25,  104 => 24,  90 => 22,  85 => 20,  81 => 19,  77 => 18,  70 => 14,  64 => 11,  56 => 10,  42 => 8,  36 => 7,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if suggestions is not empty %}*/
/*     <div class="block-list-suggests">*/
/*         <div class="suggests-title">{{ 'Connaissez-vous'|trans }}?</div>*/
/*         {% for suggestion in suggestions %}*/
/* */
/*             <div class="bloc_user">*/
/*                 <a href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}" data-tooltip="#html-content{{ suggestion.suggested.id }}" class="infobull_div tooltip"></a>*/
/*                 <div class="im_connais"><a href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}"><img width="37" height="37" alt="" src="{% if suggestion.suggested.avatar is not empty %} {{ asset(suggestion.suggested.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"><span></span></a></div>*/
/*                 <div class="des_connais">*/
/*                     <strong><a class="tooltip" data-tooltip="#html-content8" href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}">{{ suggestion.suggested.firstName }} {{ suggestion.suggested.lastName }}</a></strong>*/
/*                     {{ suggestion.suggested.job }}*/
/*                 </div>*/
/*                 <div class="ferme_connais">*/
/*                     <a class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*                 </div>*/
/*                 <div class="clear5"></div>*/
/*             </div>*/
/*             <div id="html-content{{ suggestion.suggested.id }}" style="display:none;">*/
/*                 <div onclick="window.location.href='{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}"><img width="48" height="48" alt="" src="{% if suggestion.suggested.avatar is not empty %} {{ asset(suggestion.suggested.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"><a href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}">{{ suggestion.suggested.firstName }} {{ suggestion.suggested.lastName }}</a></div>*/
/*                             <div class="job_user">{{ suggestion.suggested.job }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}">*/
/*                                 <img width="51" height="51" src="{% if suggestion.suggested.CompanyAvatar is not empty %} {{ asset(suggestion.suggested.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': suggestion.suggested.id }) }}">{{ suggestion.suggested.companyName }}</a> </div>*/
/*                             <div class="tag_company">*/
/*                                 {{ suggestion.suggested.getActivitiesFormatted }}*/
/*                             </div>*/
/*                             <div class="lieu_company">{{ suggestion.suggested.companyAddress }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a href="{{ path('eplugg_invite_user', {'uid': suggestion.suggested.id, 'token': csrfToken }) }}" class="plugger plugger-link" title="{{ 'Plugger'|trans }}">{{ 'Plugger'|trans }}</a>*/
/* */
/* */
/*                     <a href="{{ path('eplugg_messages_user', {'uid': suggestion.suggested.id } ) }}">{{ 'Message'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/

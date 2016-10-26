<?php

/* EpluggFrontBundle:Default:block_news.html.twig */
class __TwigTemplate_8e187fc99cb1bcc46a49e6317614384f4b0587f3b3e1bbc87ad396e59e95e125 extends Twig_Template
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
        if (twig_test_empty((isset($context["logs"]) ? $context["logs"] : null))) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Information privée"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 5
                echo "        <div class=\"item_infinity\">
            <div class=\"filter_date\">
                ";
                // line 7
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["log"], "created", array()), "m/d/Y") == twig_date_format_filter($this->env, "now", "m/d/Y"))) {
                    // line 8
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aujourd’hui"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 10
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "created", array()), "m-d-Y"), "html", null, true);
                    echo "
                ";
                }
                // line 12
                echo "            </div>
            <div style=\"width:85%\" class=\"content_date_bloc\">
                <div class=\"bloc_date_\">
                    <div class=\"branche\"><span>";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "created", array()), "H:i"), "html", null, true);
                echo "</span></div>
                    <div class=\"personne_prince\">
                        <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()), "html", null, true);
                echo "\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
                        <div class=\"img_prince\">
                            <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                <img width=\"60\" height=\"60\" alt=\"\" src=\"";
                // line 20
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["log"], "user", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "user", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\">
                            </a>
                        </div>
                        <div class=\"descp_prince\">
                            <strong><a data-tooltip=\"#html-content";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "lastName", array()), "html", null, true);
                echo " </a></strong>
                            ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "job", array()), "html", null, true);
                echo "
                        </div>
                    </div>
                    <div class=\"clear10\"></div>
                    <div class=\"infos_modif\">
                        ";
                // line 30
                if (($this->getAttribute($context["log"], "logType", array()) == "update_personal_informations")) {
                    // line 31
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Changed his Personal Informations"), "html", null, true);
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 32
$context["log"], "logType", array()) == "update_company_informations")) {
                    // line 33
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Changed his Professional Informations"), "html", null, true);
                    echo "
                        ";
                } elseif (($this->getAttribute(                // line 34
$context["log"], "logType", array()) == "update_profile_avatar")) {
                    // line 35
                    echo "                             ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Changed his Avatar"), "html", null, true);
                    echo "
                        ";
                }
                // line 37
                echo "                    </div>
                </div>
                <div class=\"clear10\"></div>
            </div>
            <div id=\"html-content";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">
                <div onclick=\"window.location.href='";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
                echo "\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"> <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "\"> <img width=\"48\" height=\"48\" alt=\"\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["log"], "user", array()), "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "user", array()), "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\"> </a> </div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "lastName", array()), "html", null, true);
                echo " </a></div>
                            <div class=\"job_user\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "job", array()), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "\"><img width=\"51\" height=\"51\" src=\"";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["log"], "user", array()), "CompanyAvatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "user", array()), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
                    echo " ";
                }
                echo "\"></a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute($context["log"], "user", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "companyName", array()), "html", null, true);
                echo "</a></div>
                            <div class=\"tag_company\">
                                ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "getActivitiesFormatted", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"lieu_company\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["log"], "user", array()), "companyAddress", array()), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:block_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 69,  202 => 61,  197 => 59,  190 => 57,  175 => 54,  166 => 48,  158 => 47,  144 => 45,  139 => 43,  135 => 42,  131 => 41,  125 => 37,  119 => 35,  117 => 34,  112 => 33,  110 => 32,  105 => 31,  103 => 30,  95 => 25,  85 => 24,  71 => 20,  67 => 19,  60 => 17,  55 => 15,  50 => 12,  44 => 10,  38 => 8,  36 => 7,  32 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if logs is empty  %}*/
/*     {{ 'Information privée'|trans }}*/
/* {% else %}*/
/*     {% for log in logs %}*/
/*         <div class="item_infinity">*/
/*             <div class="filter_date">*/
/*                 {% if log.created|date("m/d/Y") == "now"|date("m/d/Y")  %}*/
/*                     {{ 'Aujourd’hui'|trans }}*/
/*                 {% else %}*/
/*                     {{ log.created|date("m-d-Y") }}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div style="width:85%" class="content_date_bloc">*/
/*                 <div class="bloc_date_">*/
/*                     <div class="branche"><span>{{ log.created|date("H:i") }}</span></div>*/
/*                     <div class="personne_prince">*/
/*                         <a href="{{ path('eplugg_profile_page', {'uid': log.user.id }) }}" data-tooltip="#html-content{{ log.user.id }}" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*                         <div class="img_prince">*/
/*                             <a href="{{ path('eplugg_profile_page', {'uid': log.user.id }) }}">*/
/*                                 <img width="60" height="60" alt="" src="{% if log.user.avatar is not empty %} {{ asset(log.user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_prince">*/
/*                             <strong><a data-tooltip="#html-content{{ log.user.id }}" href="{{ path('eplugg_profile_page', {'uid': log.user.id }) }}"> {{ log.user.firstName }} {{ log.user.lastName }} </a></strong>*/
/*                             {{ log.user.job }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear10"></div>*/
/*                     <div class="infos_modif">*/
/*                         {% if log.logType == "update_personal_informations" %}*/
/*                             {{ 'Changed his Personal Informations'|trans }}*/
/*                         {% elseif log.logType == "update_company_informations" %}*/
/*                             {{ 'Changed his Professional Informations'|trans }}*/
/*                         {% elseif log.logType == "update_profile_avatar" %}*/
/*                              {{ 'Changed his Avatar'|trans }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clear10"></div>*/
/*             </div>*/
/*             <div id="html-content{{ log.user.id }}" style="display:none;">*/
/*                 <div onclick="window.location.href='{{ path('eplugg_profile_page', {'uid': log.user.id }) }}'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"> <a href="{{ path('eplugg_profile_page', {'uid': log.user.id }) }}"> <img width="48" height="48" alt="" src="{% if log.user.avatar is not empty %} {{ asset(log.user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"> </a> </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"><a href="{{ path('eplugg_profile_page', {'uid': log.user.id }) }}"> {{ log.user.firstName }} {{ log.user.lastName }} </a></div>*/
/*                             <div class="job_user">{{ log.user.job }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="{{ path('eplugg_profile_page', {'uid': log.user.id }) }}"><img width="51" height="51" src="{% if log.user.CompanyAvatar is not empty %} {{ asset(log.user.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}"></a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': log.user.id }) }}">{{ log.user.companyName }}</a></div>*/
/*                             <div class="tag_company">*/
/*                                 {{ log.user.getActivitiesFormatted }}*/
/*                             </div>*/
/*                             <div class="lieu_company">{{ log.user.companyAddress }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endif %}*/

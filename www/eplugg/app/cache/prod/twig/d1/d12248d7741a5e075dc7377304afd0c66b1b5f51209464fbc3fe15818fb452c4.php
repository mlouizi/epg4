<?php

/* EpluggFrontBundle:Suggestion:suggested_user.html.twig */
class __TwigTemplate_fb2b8f86b757bed42a00e05672f4e4c0d84b15a064e9b1887ad11d558b40a2de extends Twig_Template
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
        echo "<div id=\"block-suggest-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\" class=\"bloc_suggestion\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" data-tooltip=\"#html-content";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\" class=\"infobull_div tooltip\"></a>
    <div class=\"im_connais\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" data-tooltip=\"#html-content";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\" class=\"tooltip\">
            <img width=\"37\" height=\"37\" alt=\"\" src=\"";
        // line 5
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\">
        </a>
    </div>
    <div class=\"des_connais\">
        <strong> <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" data-tooltip=\"#html-content";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\" class=\"tooltip\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "lastName", array()), "html", null, true);
        echo "</a></strong>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "job", array()), "html", null, true);
        echo "
    </div>
    <div class=\"ferme_connais\">
        <div class=\"fermer_connais\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_ignore_user", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" class=\"ignore-user show-next\" data-id=\"#block-suggest-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">X</a></div>
        <a rel=\"mutual_friend\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_common_firends", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()), "iframe" => "true", "width" => "400")), "html", null, true);
        echo "\" class=\"nb_vue_\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), 1, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), 1, array(), "array"), "html", null, true);
        echo "</span></a>
    </div>
    <div class=\"clear5\"></div>
    <div id=\"html-content";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\" style=\"display:none;\">
        <div onclick=\"window.location.href='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "'\" id=\"card_eplugg\">
            <div class=\"yellow\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
        echo "\"></div>
            <div id=\"card_user\">
                <div class=\"img_profil\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\"><img width=\"48\" height=\"48\" alt=\"\" src=\"";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\"></a></div>
                <div class=\"descp_card\">
                    <div class=\"name_user\"> <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "lastName", array()), "html", null, true);
        echo "</a> </div>
                    <div class=\"job_user\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "job", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div id=\"card_company\">
                <div class=\"img_profil\">
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\">
                        <img width=\"51\" height=\"51\" src=\"";
        // line 31
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "CompanyAvatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "companyName", array()), "html", null, true);
        echo "</a></div>
                    <div class=\"tag_company\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "getActivitiesFormatted", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"lieu_company\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "companyAddress", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"plugg_link info_card\">
            <a onclick=\"Plugger(this, 0)\" data-id=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a>
        </div>
    </div>


</div>";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Suggestion:suggested_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 47,  168 => 45,  159 => 39,  154 => 37,  147 => 35,  133 => 31,  129 => 30,  120 => 24,  112 => 23,  98 => 21,  93 => 19,  89 => 18,  85 => 17,  73 => 14,  67 => 13,  61 => 10,  51 => 9,  37 => 5,  31 => 4,  24 => 2,  19 => 1,);
    }
}
/* <div id="block-suggest-{{ user[0].id }}" class="bloc_suggestion">*/
/*     <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}" data-tooltip="#html-content{{ user[0].id }}" class="infobull_div tooltip"></a>*/
/*     <div class="im_connais">*/
/*         <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}" data-tooltip="#html-content{{ user[0].id }}" class="tooltip">*/
/*             <img width="37" height="37" alt="" src="{% if user[0].avatar is not empty %} {{ asset(user[0].avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}">*/
/*         </a>*/
/*     </div>*/
/*     <div class="des_connais">*/
/*         <strong> <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}" data-tooltip="#html-content{{ user[0].id }}" class="tooltip">{{ user[0].firstName }} {{ user[0].lastName }}</a></strong>*/
/*         {{ user[0].job }}*/
/*     </div>*/
/*     <div class="ferme_connais">*/
/*         <div class="fermer_connais"><a href="{{ path('eplugg_ignore_user', {'uid': user[0].id }) }}" class="ignore-user show-next" data-id="#block-suggest-{{ user[0].id }}">X</a></div>*/
/*         <a rel="mutual_friend" href="{{ path('eplugg_common_firends', {'uid': user[0].id, 'iframe': 'true', 'width': '400'}) }}" class="nb_vue_" title="{{ user[1] }} {{ 'Contacts en commun'|trans }}"><span>{{ user[1] }}</span></a>*/
/*     </div>*/
/*     <div class="clear5"></div>*/
/*     <div id="html-content{{ user[0].id }}" style="display:none;">*/
/*         <div onclick="window.location.href='{{ path('eplugg_profile_page', {'uid': user[0].id }) }}'" id="card_eplugg">*/
/*             <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*             <div id="card_user">*/
/*                 <div class="img_profil"><a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}"><img width="48" height="48" alt="" src="{% if user[0].avatar is not empty %} {{ asset(user[0].avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a></div>*/
/*                 <div class="descp_card">*/
/*                     <div class="name_user"> <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">{{ user[0].firstName }} {{ user[0].lastName }}</a> </div>*/
/*                     <div class="job_user">{{ user[0].job }}</div>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*             <div id="card_company">*/
/*                 <div class="img_profil">*/
/*                     <a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">*/
/*                         <img width="51" height="51" src="{% if  user[0].CompanyAvatar is not empty %} {{ asset( user[0].CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}">*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="descp_card">*/
/*                     <div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">{{ user[0].companyName }}</a></div>*/
/*                     <div class="tag_company">*/
/*                         {{ user[0].getActivitiesFormatted }}*/
/*                     </div>*/
/*                     <div class="lieu_company">{{ user[0].companyAddress }}</div>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="plugg_link info_card">*/
/*             <a onclick="Plugger(this, 0)" data-id="{{ path('eplugg_profile_page', {'uid': user[0].id }) }}">{{ 'Plugger'|trans }}</a>*/
/* */
/*             <a href="{{ path('eplugg_messages_user', {'uid': user[0].id } ) }}">{{ 'Message'|trans }}</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* </div>*/

<?php

/* EpluggFrontBundle:logged_in:left_sidebar.html.twig */
class __TwigTemplate_484a5a9e5464417f7bcbd3cd5175c268c5a0b12b99893a6ccc589e5111d378f7 extends Twig_Template
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
        echo "<div id=\"left_content\">
    <div onclick=\"window.location.href='";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "'\" id=\"card_eplugg\">
        <div class=\"yellow\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
        echo "\"></div>
        <div id=\"card_user\">
            <div class=\"img_profil\">
                <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"><img width=\"48\" height=\"48\" alt=\"\" src=\"";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
            echo " ";
        }
        echo "\"></a>
            </div>
            <div class=\"descp_card\">
                <div class=\"name_user\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo "</a></div>
                <div class=\"job_user\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "job", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div id=\"card_company\">
            <div class=\"img_profil\">
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"><img width=\"51\" height=\"51\" src=\"";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "CompanyAvatar", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
            echo " ";
        }
        echo "\"></a>
            </div>
            <div class=\"descp_card\">
                <div class=\"company_user\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyName", array()), "html", null, true);
        echo "</a></div>
                <div class=\"tag_company\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getActivitiesFormatted", array()), "html", null, true);
        echo "</div>
                <div class=\"lieu_company\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "companyAddress", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    <div class=\"clear20\"></div>
    <div id=\"activity_bloc\">
        <div class=\"titre_plugg\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuaire d’activités"), "html", null, true);
        echo "</div>
        <div class=\"liste_annuaires\">
            <ul>

                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 33
            echo "
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_users_by_activity", array("id" => $this->getAttribute($context["activity"], "activity_id", array()))), "html", null, true);
            echo "\"
                           title=\"1 Contact\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "name", array()), "html", null, true);
            echo " <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "nbr_repeat_activity", array()), "html", null, true);
            echo " </span></a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("search_all_users_activities");
        echo "\" class=\"voire_to\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Afficher tout"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:logged_in:left_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  129 => 39,  118 => 36,  114 => 35,  110 => 33,  106 => 32,  99 => 28,  89 => 21,  85 => 20,  79 => 19,  64 => 16,  55 => 10,  47 => 9,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="left_content">*/
/*     <div onclick="window.location.href='{{ path('eplugg_profile_page', {'uid': user.id }) }}'" id="card_eplugg">*/
/*         <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*         <div id="card_user">*/
/*             <div class="img_profil">*/
/*                 <a href="{{ path('eplugg_profile_page', {'uid': user.id }) }}"><img width="48" height="48" alt="" src="{% if user.avatar is not empty %} {{ asset(user.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}"></a>*/
/*             </div>*/
/*             <div class="descp_card">*/
/*                 <div class="name_user"><a href="{{ path('eplugg_profile_page', {'uid': user.id }) }}">{{ user.firstName }} {{ user.lastName }}</a></div>*/
/*                 <div class="job_user">{{ user.job }}</div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div id="card_company">*/
/*             <div class="img_profil">*/
/*                 <a href="{{ path('eplugg_profile_page', {'uid': user.id }) }}"><img width="51" height="51" src="{% if user.CompanyAvatar is not empty %} {{ asset(user.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}"></a>*/
/*             </div>*/
/*             <div class="descp_card">*/
/*                 <div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': user.id }) }}">{{ user.companyName }}</a></div>*/
/*                 <div class="tag_company">{{ user.getActivitiesFormatted }}</div>*/
/*                 <div class="lieu_company">{{ user.companyAddress }}</div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clear20"></div>*/
/*     <div id="activity_bloc">*/
/*         <div class="titre_plugg">{{ 'Annuaire d’activités'|trans }}</div>*/
/*         <div class="liste_annuaires">*/
/*             <ul>*/
/* */
/*                 {% for activity in activities %}*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('search_users_by_activity', {'id': activity.activity_id }) }}"*/
/*                            title="1 Contact">{{ activity.name }} <span>{{ activity.nbr_repeat_activity }} </span></a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <a href="{{ path('search_all_users_activities') }}" class="voire_to">{{ 'Afficher tout'|trans }}</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/

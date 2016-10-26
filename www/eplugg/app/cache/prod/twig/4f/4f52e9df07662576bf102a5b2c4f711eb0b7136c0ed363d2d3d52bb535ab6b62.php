<?php

/* EpluggFrontBundle:Repertoire:Repertoire_bloc_friends.html.twig */
class __TwigTemplate_dcd25ec642df96379c0857af35b4dd588f52a3d6b052b410d2ecfc5dc9d6ff8b extends Twig_Template
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
        if (twig_test_empty((isset($context["annuaire"]) ? $context["annuaire"] : null))) {
            // line 2
            echo "    <div class=\"message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucun contact trouvé"), "html", null, true);
            echo ".</div>
";
        } else {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annuaire"]) ? $context["annuaire"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 5
                echo "        <div class=\"bloc_user\">
            <a class=\"infobull_div tooltip\" data-tooltip=\"#html-content";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "\"
               style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\"><a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "user_picture", array()), "html", null, true);
                echo "\"
                         width=\"37\" height=\"37\"
                         alt=\"\"><span></span></a></div>
            <div class=\"des_connais\">
                <strong><a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "\" class=\"tooltip\" data-tooltip=\"#html-content";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
                echo "\"
                           style=\"cursor: pointer;\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["friend"], "lastname", array())), "html", null, true);
                echo "</a></strong>
                ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "job", array()), "html", null, true);
                echo "
            </div>
            <div class=\"clear5\"></div>
            <div style=\"display:none;\" id=\"html-content";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
                echo "\">
                <div id=\"card_eplugg\" onclick=\"window.location.href='";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "'\">
                    <div class=\"yellow\"><img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
                echo "\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "\"><img
                                        src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "user_picture", array()), "html", null, true);
                echo "\" alt=\"\" width=\"48\" height=\"48\"></a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["friend"], "lastname", array())), "html", null, true);
                echo "</a></div>
                            <div class=\"job_user\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "job", array()), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "\"><img
                                        src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["friend"], "company_logo", array())), "html", null, true);
                echo "\"
                                        width=\"51\" height=\"51\"></a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "profile_url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "company_name", array()), "html", null, true);
                echo "</a></div>
                            <div class=\"tag_company\">
                            ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "company_activity", array()), "html", null, true);
                echo "
                            </div>
                            <div class=\"lieu_company\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "company_city", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "company_country", array()), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_suggest_user", array("uid" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "&amp;iframe=true&amp;width=400\" rel=\"suggerer\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suggérer"), "html", null, true);
                echo "</a>
                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_messages_user", array("uid" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
                echo "</a>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Repertoire:Repertoire_bloc_friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 54,  151 => 49,  145 => 48,  134 => 42,  129 => 40,  122 => 38,  115 => 34,  111 => 33,  102 => 27,  94 => 26,  88 => 23,  84 => 22,  79 => 20,  75 => 19,  71 => 18,  65 => 15,  59 => 14,  53 => 13,  46 => 9,  42 => 8,  35 => 6,  32 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if annuaire is empty %}*/
/*     <div class="message">{{ 'Aucun contact trouvé'|trans }}.</div>*/
/* {% else %}*/
/*     {% for friend in annuaire %}*/
/*         <div class="bloc_user">*/
/*             <a class="infobull_div tooltip" data-tooltip="#html-content{{ friend.id }}" href="{{ friend.profile_url }}"*/
/*                style="cursor: pointer;"></a>*/
/*             <div class="im_connais"><a href="{{ friend.profile_url }}">*/
/*                     <img src="{{ friend.user_picture }}"*/
/*                          width="37" height="37"*/
/*                          alt=""><span></span></a></div>*/
/*             <div class="des_connais">*/
/*                 <strong><a href="{{ friend.profile_url }}" class="tooltip" data-tooltip="#html-content{{ friend.id }}"*/
/*                            style="cursor: pointer;">{{ friend.firstname }} {{ friend.lastname|upper }}</a></strong>*/
/*                 {{ friend.job }}*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div style="display:none;" id="html-content{{ friend.id }}">*/
/*                 <div id="card_eplugg" onclick="window.location.href='{{ friend.profile_url }}'">*/
/*                     <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="{{ friend.profile_url }}"><img*/
/*                                         src="{{ friend.user_picture }}" alt="" width="48" height="48"></a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"><a href="{{ friend.profile_url }}"> {{ friend.firstname }} {{ friend.lastname|upper }}</a></div>*/
/*                             <div class="job_user">{{ friend.job }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="{{ friend.profile_url }}"><img*/
/*                                         src="{{ asset(friend.company_logo) }}"*/
/*                                         width="51" height="51"></a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="{{ friend.profile_url }}">{{ friend.company_name }}</a></div>*/
/*                             <div class="tag_company">*/
/*                             {{ friend.company_activity }}*/
/*                             </div>*/
/*                             <div class="lieu_company">{{ friend.company_city }} {{friend.company_country  }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a href="{{ path('eplugg_suggest_user', {'uid': friend.id }) }}&amp;iframe=true&amp;width=400" rel="suggerer">{{ 'Suggérer'|trans }}</a>*/
/*                     <a href="{{ path('eplugg_messages_user', {'uid': friend.id }) }}">{{ 'Message'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endif %}*/

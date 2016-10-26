<?php

/* EpluggFrontBundle:Default:index_login.html.twig */
class __TwigTemplate_17bd1efcd636b0a631d4b382ccfc770cae47c76fa7d0621e9a373a8da19b338c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base_logged_in.html.twig", "EpluggFrontBundle:Default:index_login.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"content\" style=\"min-height: 834px;\">
    <div class=\"center_content_inner\" style=\"min-height: 829px;\">
    <div id=\"left_content\"><div onclick=\"window.location.href='/user?id='\" id=\"card_eplugg\">
            <div class=\"yellow\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
        echo "\"></div>
            <div id=\"card_user\">
                <div class=\"img_profil\">
                    <a href=\"/user?id=\"><img width=\"48\" height=\"48\" alt=\"\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
        echo "\"></a>
                </div>
                <div class=\"descp_card\">
                    <div class=\"name_user\"><a href=\"/user?id=\"> </a></div>
                    <div class=\"job_user\"></div>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div id=\"card_company\">
                <div class=\"img_profil\">
                    <a href=\"/user?id=\"><img width=\"51\" height=\"51\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"></a>
                </div>
                <div class=\"descp_card\">
                    <div class=\"company_user\"><a href=\"/user?id=\"></a></div>
                    <div class=\"tag_company\">
                    </div>
                    <div class=\"lieu_company\"> - </div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear20\"></div><div id=\"activity_bloc\"><div class=\"titre_plugg\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuaire d’activités"), "html", null, true);
        echo "</div>
            <div class=\"liste_annuaires\">
                <ul>
                </ul>
                <a class=\"voire_to\" href=\"/activity\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Afficher tout"), "html", null, true);
        echo "</a>
            </div></div></div>
    <div id=\"body_content\">
        <div class=\"titre_plugg\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actualités"), "html", null, true);
        echo "</div>
        <div id=\"content_infinity\" class=\"content_center__\">

            <div class=\"clear10\"></div>
            <a href=\"?page=2\" id=\"next\"></a>
        </div>
    </div>
    <div id=\"right_content\">
    <div id=\"list_suggestions\">
    <div class=\"titre_plugg\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vous intéressent-ils"), "html", null, true);
        echo " ?</div>

    <div id=\"suggestion1488\" class=\"bloc_suggestion\">
        <a href=\"/user?id=1488\" data-tooltip=\"#html-content1488\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
        <div class=\"im_connais\">
            <a href=\"/user?id=1488\" data-tooltip=\"#html-content1488\" class=\"tooltip\" style=\"cursor: pointer;\">
                <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/429.jpg\">
            </a>
        </div>
        <div class=\"des_connais\">
            <strong> <a href=\"/user?id=1488\" data-tooltip=\"#html-content1488\" class=\"tooltip\" style=\"cursor: pointer;\">Céline SANCHEZ</a></strong>
            Infirmier        </div>
        <div class=\"ferme_connais\">
            <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1488\">X</a></div>
            <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1488&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
        </div>
        <div class=\"clear5\"></div>
        <div id=\"html-content1488\" style=\"display:none;\">
            <div onclick=\"window.location.href='/user?id=1488'\" id=\"card_eplugg\">
                <div class=\"yellow\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
        echo "\"></div>
                <div id=\"card_user\">
                    <div class=\"img_profil\"><a href=\"/user?id=1488\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/429.jpg\"></a></div>
                    <div class=\"descp_card\">
                        <div class=\"name_user\"> <a href=\"/user?id=1488\"> Céline SANCHEZ </a> </div>
                        <div class=\"job_user\">Infirmier</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div id=\"card_company\">
                    <div class=\"img_profil\">
                        <a href=\"/user?id=1488\">
                            <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                        </a>
                    </div>
                    <div class=\"descp_card\">
                        <div class=\"company_user\"><a href=\"/user?id=1488\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Purina"), "html", null, true);
        echo "</a></div>
                        <div class=\"tag_company\">
                            #paramédical #santé                         </div>
                        <div class=\"lieu_company\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les abymes"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("France"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"plugg_link info_card\">
                <a onclick=\"Plugger(this, 0)\" data-id=\"1488\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

                <a href=\"messages?uid=1488\">Message</a>
            </div>
        </div>


    </div>

    <div id=\"suggestion1489\" class=\"bloc_suggestion\">
        <a href=\"/user?id=1489\" data-tooltip=\"#html-content1489\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
        <div class=\"im_connais\">
            <a href=\"/user?id=1489\" data-tooltip=\"#html-content1489\" class=\"tooltip\" style=\"cursor: pointer;\">
                <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/430.jpg\">
            </a>
        </div>
        <div class=\"des_connais\">
            <strong> <a href=\"/user?id=1489\" data-tooltip=\"#html-content1489\" class=\"tooltip\" style=\"cursor: pointer;\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Charlène SARRA"), "html", null, true);
        echo " ...</a></strong>
            Infirmière puéricultrice        </div>
        <div class=\"ferme_connais\">
            <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1489\">X</a></div>
            <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1489&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
        </div>
        <div class=\"clear5\"></div>
        <div id=\"html-content1489\" style=\"display:none;\">
            <div onclick=\"window.location.href='/user?id=1489'\" id=\"card_eplugg\">
                <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                <div id=\"card_user\">
                    <div class=\"img_profil\"><a href=\"/user?id=1489\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/430.jpg\"></a></div>
                    <div class=\"descp_card\">
                        <div class=\"name_user\"> <a href=\"/user?id=1489\"> ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Charlène SARRA"), "html", null, true);
        echo " ... </a> </div>
                        <div class=\"job_user\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Infirmière puéricultrice"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div id=\"card_company\">
                    <div class=\"img_profil\">
                        <a href=\"/user?id=1489\">
                            <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                        </a>
                    </div>
                    <div class=\"descp_card\">
                        <div class=\"company_user\"><a href=\"/user?id=1489\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paul bocuse"), "html", null, true);
        echo "</a></div>
                        <div class=\"tag_company\">
                            #paramédical #santé                         </div>
                        <div class=\"lieu_company\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pessac"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("France"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"plugg_link info_card\">
                <a onclick=\"Plugger(this, 0)\" data-id=\"1489\">Plugger</a>

                <a href=\"messages?uid=1489\">Message</a>
            </div>
        </div>


    </div>

    <div id=\"suggestion1492\" class=\"bloc_suggestion\">
        <a href=\"/user?id=1492\" data-tooltip=\"#html-content1492\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
        <div class=\"im_connais\">
            <a href=\"/user?id=1492\" data-tooltip=\"#html-content1492\" class=\"tooltip\" style=\"cursor: pointer;\">
                <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/433.jpg\">
            </a>
        </div>
        <div class=\"des_connais\">
            <strong> <a href=\"/user?id=1492\" data-tooltip=\"#html-content1492\" class=\"tooltip\" style=\"cursor: pointer;\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chloé SAVARY"), "html", null, true);
        echo "a></strong>
            Opticien-lunetier        </div>
        <div class=\"ferme_connais\">
            <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1492\">X</a></div>
            <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1492&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
        </div>
        <div class=\"clear5\"></div>
        <div id=\"html-content1492\" style=\"display:none;\">
            <div onclick=\"window.location.href='/user?id=1492'\" id=\"card_eplugg\">
                <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                <div id=\"card_user\">
                    <div class=\"img_profil\"><a href=\"/user?id=1492\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/433.jpg\"></a></div>
                    <div class=\"descp_card\">
                        <div class=\"name_user\"> <a href=\"/user?id=1492\"> ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chloé SAVARY"), "html", null, true);
        echo " </a> </div>
                        <div class=\"job_user\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Opticien-lunetier"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div id=\"card_company\">
                    <div class=\"img_profil\">
                        <a href=\"/user?id=1492\">
                            <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                        </a>
                    </div>
                    <div class=\"descp_card\">
                        <div class=\"company_user\"><a href=\"/user?id=1492\">";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Renault"), "html", null, true);
        echo "</a></div>
                        <div class=\"tag_company\">
                            #paramédical #optique                         </div>
                        <div class=\"lieu_company\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Niort"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("France"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"plugg_link info_card\">
                <a onclick=\"Plugger(this, 0)\" data-id=\"1492\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

                <a href=\"messages?uid=1492\">";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a>
            </div>
        </div>


    </div>

    <div id=\"suggestion1480\" class=\"bloc_suggestion\">
        <a href=\"/user?id=1480\" data-tooltip=\"#html-content1480\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
        <div class=\"im_connais\">
            <a href=\"/user?id=1480\" data-tooltip=\"#html-content1480\" class=\"tooltip\" style=\"cursor: pointer;\">
                <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/420.jpg\">
            </a>
        </div>
        <div class=\"des_connais\">
            <strong> <a href=\"/user?id=1480\" data-tooltip=\"#html-content1480\" class=\"tooltip\" style=\"cursor: pointer;\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Brigitte ROUSSE"), "html", null, true);
        echo " ...</a></strong>
            Styliste        </div>
        <div class=\"ferme_connais\">
            <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1480\">X</a></div>
            <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1480&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
        </div>
        <div class=\"clear5\"></div>
        <div id=\"html-content1480\" style=\"display:none;\">
            <div onclick=\"window.location.href='/user?id=1480'\" id=\"card_eplugg\">
                <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                <div id=\"card_user\">
                    <div class=\"img_profil\"><a href=\"/user?id=1480\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/420.jpg\"></a></div>
                    <div class=\"descp_card\">
                        <div class=\"name_user\"> <a href=\"/user?id=1480\"> ";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Brigitte ROUSSE"), "html", null, true);
        echo " ... </a> </div>
                        <div class=\"job_user\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Styliste"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div id=\"card_company\">
                    <div class=\"img_profil\">
                        <a href=\"/user?id=1480\">
                            <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                        </a>
                    </div>
                    <div class=\"descp_card\">
                        <div class=\"company_user\"><a href=\"/user?id=1480\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ppr pour la dig"), "html", null, true);
        echo " ...</a></div>
                        <div class=\"tag_company\">
                            #mode #textile #stylisme                         </div>
                        <div class=\"lieu_company\">";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Valence"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("France"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"plugg_link info_card\">
                <a onclick=\"Plugger(this, 0)\" data-id=\"1480\">";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

                <a href=\"messages?uid=1480\">";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a>
            </div>
        </div>


    </div>

    <div id=\"suggestion1476\" class=\"bloc_suggestion\">
        <a href=\"/user?id=1476\" data-tooltip=\"#html-content1476\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
        <div class=\"im_connais\">
            <a href=\"/user?id=1476\" data-tooltip=\"#html-content1476\" class=\"tooltip\" style=\"cursor: pointer;\">
                <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/413.jpg\">
            </a>
        </div>
        <div class=\"des_connais\">
            <strong> <a href=\"/user?id=1476\" data-tooltip=\"#html-content1476\" class=\"tooltip\" style=\"cursor: pointer;\">";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anaëlle ROLAND"), "html", null, true);
        echo "</a></strong>
            Vétérinaire&lrm;        </div>
        <div class=\"ferme_connais\">
            <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1476\">X</a></div>
            <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1476&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
        </div>
        <div class=\"clear5\"></div>
        <div id=\"html-content1476\" style=\"display:none;\">
            <div onclick=\"window.location.href='/user?id=1476'\" id=\"card_eplugg\">
                <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                <div id=\"card_user\">
                    <div class=\"img_profil\"><a href=\"/user?id=1476\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/413.jpg\"></a></div>
                    <div class=\"descp_card\">
                        <div class=\"name_user\"> <a href=\"/user?id=1476\"> ";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anaëlle ROLAND"), "html", null, true);
        echo " </a> </div>
                        <div class=\"job_user\">";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vétérinaire"), "html", null, true);
        echo "&lrm;</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
                <div id=\"card_company\">
                    <div class=\"img_profil\">
                        <a href=\"/user?id=1476\">
                            <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                        </a>
                    </div>
                    <div class=\"descp_card\">
                        <div class=\"company_user\"><a href=\"/user?id=1476\">Pileje</a></div>
                        <div class=\"tag_company\">
                            #médical #médecine vétérinaire&lrm;                         </div>
                        <div class=\"lieu_company\">";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bourges"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("France"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"plugg_link info_card\">
                <a onclick=\"Plugger(this, 0)\" data-id=\"1476\">Plugger</a>

                <a href=\"messages?uid=1476\">Message</a>
            </div>
        </div>


    </div>

    </div>
    <ul style=\"display:none\" id=\"others_suggestions\">    <li>    <div id=\"suggestion1483\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1483\" data-tooltip=\"#html-content1483\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1483\" data-tooltip=\"#html-content1483\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/423.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1483\" data-tooltip=\"#html-content1483\" class=\"tooltip\" style=\"cursor: pointer;\">Carine ROUXEL</a></strong>
                Ambulancier        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1483\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1483&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1483\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1483'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1483\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/423.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1483\"> Carine ROUXEL </a> </div>
                            <div class=\"job_user\">Ambulancier</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1483\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1483\">Prieure de sain ...</a></div>
                            <div class=\"tag_company\">
                                #paramédical #santé                         </div>
                            <div class=\"lieu_company\">Antony - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1483\">Plugger</a>

                    <a href=\"messages?uid=1483\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1485\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1485\" data-tooltip=\"#html-content1485\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1485\" data-tooltip=\"#html-content1485\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/425.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1485\" data-tooltip=\"#html-content1485\" class=\"tooltip\" style=\"cursor: pointer;\">Carole anne ROY</a></strong>
                Audioprothésiste        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1485\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1485&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1485\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1485'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1485\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/425.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1485\"> Carole anne ROY </a> </div>
                            <div class=\"job_user\">Audioprothésiste</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1485\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1485\">Progreffe</a></div>
                            <div class=\"tag_company\">
                                #paramédical #santé                         </div>
                            <div class=\"lieu_company\">Troyes - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1485\">Plugger</a>

                    <a href=\"messages?uid=1485\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1490\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1490\" data-tooltip=\"#html-content1490\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1490\" data-tooltip=\"#html-content1490\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/431.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1490\" data-tooltip=\"#html-content1490\" class=\"tooltip\" style=\"cursor: pointer;\">Charline SAULNI ...</a></strong>
                Manipulateur en électroradiologie médicale        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1490\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1490&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1490\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1490'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1490\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/431.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1490\"> Charline SAULNI ... </a> </div>
                            <div class=\"job_user\">Manipulateur en électroradiol ...</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1490\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1490\">Ratp pour la ci ...</a></div>
                            <div class=\"tag_company\">
                                #paramédical #santé                         </div>
                            <div class=\"lieu_company\">Ivry-sur-seine - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1490\">Plugger</a>

                    <a href=\"messages?uid=1490\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1478\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1478\" data-tooltip=\"#html-content1478\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1478\" data-tooltip=\"#html-content1478\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/417.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1478\" data-tooltip=\"#html-content1478\" class=\"tooltip\" style=\"cursor: pointer;\">Bibiane ROSE</a></strong>
                Designer textile        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1478\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1478&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1478\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1478'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1478\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/417.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1478\"> Bibiane ROSE </a> </div>
                            <div class=\"job_user\">Designer textile</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1478\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1478\">Pour la dermati ...</a></div>
                            <div class=\"tag_company\">
                                #mode #textile #design                         </div>
                            <div class=\"lieu_company\">Levallois-perret - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1478\">Plugger</a>

                    <a href=\"messages?uid=1478\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1486\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1486\" data-tooltip=\"#html-content1486\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1486\" data-tooltip=\"#html-content1486\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/426.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1486\" data-tooltip=\"#html-content1486\" class=\"tooltip\" style=\"cursor: pointer;\">Caroline ROYER</a></strong>
                Auxiliaire de puériculture        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1486\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1486&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1486\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1486'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1486\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/426.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1486\"> Caroline ROYER </a> </div>
                            <div class=\"job_user\">Auxiliaire de puériculture</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1486\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1486\">Prometheus</a></div>
                            <div class=\"tag_company\">
                                #paramédical #santé                         </div>
                            <div class=\"lieu_company\">Vénissieux - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1486\">Plugger</a>

                    <a href=\"messages?uid=1486\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1479\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1479\" data-tooltip=\"#html-content1479\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1479\" data-tooltip=\"#html-content1479\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/419.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1479\" data-tooltip=\"#html-content1479\" class=\"tooltip\" style=\"cursor: pointer;\">Blandine ROUSSE ...</a></strong>
                Modéliste        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1479\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1479&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1479\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1479'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1479\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/419.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1479\"> Blandine ROUSSE ... </a> </div>
                            <div class=\"job_user\">Modéliste</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1479\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1479\">Poweo</a></div>
                            <div class=\"tag_company\">
                                #mode #textile #modélisme                         </div>
                            <div class=\"lieu_company\">Quimper - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1479\">Plugger</a>

                    <a href=\"messages?uid=1479\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1484\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1484\" data-tooltip=\"#html-content1484\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1484\" data-tooltip=\"#html-content1484\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/424.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1484\" data-tooltip=\"#html-content1484\" class=\"tooltip\" style=\"cursor: pointer;\">Carole ROUYER</a></strong>
                Assistant dentaire        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1484\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1484&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1484\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1484'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1484\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/424.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1484\"> Carole ROUYER </a> </div>
                            <div class=\"job_user\">Assistant dentaire</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1484\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1484\">Procter &amp; gambl ...</a></div>
                            <div class=\"tag_company\">
                                #paramédical #dentaire                         </div>
                            <div class=\"lieu_company\">Neuilly-sur-seine - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1484\">Plugger</a>

                    <a href=\"messages?uid=1484\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1491\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1491\" data-tooltip=\"#html-content1491\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1491\" data-tooltip=\"#html-content1491\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/432.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1491\" data-tooltip=\"#html-content1491\" class=\"tooltip\" style=\"cursor: pointer;\">Charlotte SAUNI ...</a></strong>
                Masseur-kinésithérapeute        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1491\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1491&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1491\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1491'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1491\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/432.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1491\"> Charlotte SAUNI ... </a> </div>
                            <div class=\"job_user\">Masseur-kinésithérapeute</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1491\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1491\">Real</a></div>
                            <div class=\"tag_company\">
                                #paramédical #kinésithérapie                         </div>
                            <div class=\"lieu_company\">Chambéry - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1491\">Plugger</a>

                    <a href=\"messages?uid=1491\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1482\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1482\" data-tooltip=\"#html-content1482\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1482\" data-tooltip=\"#html-content1482\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/422.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1482\" data-tooltip=\"#html-content1482\" class=\"tooltip\" style=\"cursor: pointer;\">Candice ROUX</a></strong>
                Aide-soignant        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1482\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1482&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1482\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1482'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1482\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/422.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1482\"> Candice ROUX </a> </div>
                            <div class=\"job_user\">Aide-soignant</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1482\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1482\">Pricewaterhouse ...</a></div>
                            <div class=\"tag_company\">
                                #paramédical #santé                         </div>
                            <div class=\"lieu_company\">La seyne-sur-mer - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1482\">Plugger</a>

                    <a href=\"messages?uid=1482\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1493\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1493\" data-tooltip=\"#html-content1493\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1493\" data-tooltip=\"#html-content1493\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/434.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1493\" data-tooltip=\"#html-content1493\" class=\"tooltip\" style=\"cursor: pointer;\">Christelle SCHM ...</a></strong>
                Orthophoniste        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1493\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1493&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1493\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1493'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1493\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/434.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1493\"> Christelle SCHM ... </a> </div>
                            <div class=\"job_user\">Orthophoniste</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1493\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1493\">Renault</a></div>
                            <div class=\"tag_company\">
                                #paramédical #orthophonie                         </div>
                            <div class=\"lieu_company\">Lorient - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1493\">Plugger</a>

                    <a href=\"messages?uid=1493\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1481\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1481\" data-tooltip=\"#html-content1481\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1481\" data-tooltip=\"#html-content1481\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/421.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1481\" data-tooltip=\"#html-content1481\" class=\"tooltip\" style=\"cursor: pointer;\">Camélia ROUSSE ...</a></strong>
                Technicien de fabrication        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1481\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1481&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 Contacts en commun\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1481\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1481'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1481\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/421.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1481\"> Camélia ROUSSE ... </a> </div>
                            <div class=\"job_user\">Technicien de fabrication</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1481\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1481\">Previade</a></div>
                            <div class=\"tag_company\">
                                #mode #textile                         </div>
                            <div class=\"lieu_company\">Noisy-le-grand - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1481\">Plugger</a>

                    <a href=\"messages?uid=1481\">Message</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1494\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1494\" data-tooltip=\"#html-content1494\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1494\" data-tooltip=\"#html-content1494\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/435.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1494\" data-tooltip=\"#html-content1494\" class=\"tooltip\" style=\"cursor: pointer;\">Christiane SCHM ...</a></strong>
                ";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Orthoptiste"), "html", null, true);
        echo "        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1494\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1494&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1494\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1494'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1494\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/435.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1494\"> Christiane SCHM ... </a> </div>
                            <div class=\"job_user\">";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Orthoptiste"), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1494\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1494\">";
        // line 898
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Renzo piano wor"), "html", null, true);
        echo " ...</a></div>
                            <div class=\"tag_company\">
                                #paramédical #orthoptie                         </div>
                            <div class=\"lieu_company\">Cergy - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1494\">";
        // line 907
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

                    <a href=\"messages?uid=1494\">";
        // line 909
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1475\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1475\" data-tooltip=\"#html-content1475\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1475\" data-tooltip=\"#html-content1475\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/411.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1475\" data-tooltip=\"#html-content1475\" class=\"tooltip\" style=\"cursor: pointer;\">Amandine RODRIG ...</a></strong>
                ";
        // line 925
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Toxicologue"), "html", null, true);
        echo "        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1475\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1475&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 928
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1475\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1475'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1475\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/411.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1475\"> Amandine RODRIG ... </a> </div>
                            <div class=\"job_user\">";
        // line 938
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Toxicologue"), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1475\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1475\">Petzl</a></div>
                            <div class=\"tag_company\">
                                #médical #toxicologie                         </div>
                            <div class=\"lieu_company\">Saint-nazaire - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1475\">";
        // line 958
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

                    <a href=\"messages?uid=1475\">";
        // line 960
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1487\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1487\" data-tooltip=\"#html-content1487\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1487\" data-tooltip=\"#html-content1487\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/428.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1487\" data-tooltip=\"#html-content1487\" class=\"tooltip\" style=\"cursor: pointer;\">Célestine SAMS ...</a></strong>
                ";
        // line 976
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ergothérapeute"), "html", null, true);
        echo "        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1487\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1487&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 979
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1487\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1487'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1487\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/428.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1487\"> Célestine SAMS ... </a> </div>
                            <div class=\"job_user\">";
        // line 989
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ergothérapeute"), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1487\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1487\">";
        // line 1000
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Psa peugeot cit"), "html", null, true);
        echo " ...</a></div>
                            <div class=\"tag_company\">
                                #paramédical #ergothérapie                         </div>
                            <div class=\"lieu_company\">Sarcelles - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1487\">";
        // line 1009
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

                    <a href=\"messages?uid=1487\">";
        // line 1011
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a>
                </div>
            </div>


        </div>
    </li>
    <li>    <div id=\"suggestion1477\" class=\"bloc_suggestion\">
            <a href=\"/user?id=1477\" data-tooltip=\"#html-content1477\" class=\"infobull_div tooltip\" style=\"cursor: pointer;\"></a>
            <div class=\"im_connais\">
                <a href=\"/user?id=1477\" data-tooltip=\"#html-content1477\" class=\"tooltip\" style=\"cursor: pointer;\">
                    <img width=\"37\" height=\"37\" alt=\"\" src=\"/uploads/users/men/416.jpg\">
                </a>
            </div>
            <div class=\"des_connais\">
                <strong> <a href=\"/user?id=1477\" data-tooltip=\"#html-content1477\" class=\"tooltip\" style=\"cursor: pointer;\">Bianca ROQUES</a></strong>
                ";
        // line 1027
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chef de produit"), "html", null, true);
        echo "        </div>
            <div class=\"ferme_connais\">
                <div class=\"fermer_connais\"><a onclick=\"getSuggestion(this)\" data-id=\"1477\">X</a></div>
                <a rel=\"mutual_friend\" href=\"/mutual_friend?uid=1477&amp;iframe=true&amp;width=400\" class=\"nb_vue_\" title=\"0 ";
        // line 1030
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contacts en commun"), "html", null, true);
        echo "\"><span>0</span></a>
            </div>
            <div class=\"clear5\"></div>
            <div id=\"html-content1477\" style=\"display:none;\">
                <div onclick=\"window.location.href='/user?id=1477'\" id=\"card_eplugg\">
                    <div class=\"yellow\"><img src=\"/images/arrow-yelow.png\"></div>
                    <div id=\"card_user\">
                        <div class=\"img_profil\"><a href=\"/user?id=1477\"><img width=\"48\" height=\"48\" alt=\"\" src=\"/uploads/users/men/416.jpg\"></a></div>
                        <div class=\"descp_card\">
                            <div class=\"name_user\"> <a href=\"/user?id=1477\"> Bianca ROQUES </a> </div>
                            <div class=\"job_user\">";
        // line 1040
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chef de produit"), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div id=\"card_company\">
                        <div class=\"img_profil\">
                            <a href=\"/user?id=1477\">
                                <img width=\"51\" height=\"51\" src=\"/uploads/logo/logo.png\">
                            </a>
                        </div>
                        <div class=\"descp_card\">
                            <div class=\"company_user\"><a href=\"/user?id=1477\">";
        // line 1051
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pour la connais"), "html", null, true);
        echo " ...</a></div>
                            <div class=\"tag_company\">
                                #mode #textile #marketing                         </div>
                            <div class=\"lieu_company\">Issy-les-moulineaux - France</div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"plugg_link info_card\">
                    <a onclick=\"Plugger(this, 0)\" data-id=\"1477\">";
        // line 1060
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plugger"), "html", null, true);
        echo "</a>

                    <a href=\"messages?uid=1477\">";
        // line 1062
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a>
                </div>
            </div>


        </div>
    </li>

    </ul>

    <div style=\"  margin-top: 20px; margin-left: 45px; float: left;\" class=\"right_search\">
        <a class=\"selected\" href=\"/search\">Toutes les suggestions </a>
    </div></div>
    <div class=\"clear\"></div>
    </div>
    <div class=\"clear25\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:index_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1285 => 1062,  1280 => 1060,  1268 => 1051,  1254 => 1040,  1241 => 1030,  1235 => 1027,  1216 => 1011,  1211 => 1009,  1199 => 1000,  1185 => 989,  1172 => 979,  1166 => 976,  1147 => 960,  1142 => 958,  1119 => 938,  1106 => 928,  1100 => 925,  1081 => 909,  1076 => 907,  1064 => 898,  1050 => 887,  1037 => 877,  1031 => 874,  440 => 288,  423 => 274,  419 => 273,  407 => 264,  400 => 260,  382 => 245,  377 => 243,  366 => 237,  360 => 234,  346 => 223,  342 => 222,  330 => 213,  323 => 209,  305 => 194,  300 => 192,  289 => 186,  283 => 183,  269 => 172,  265 => 171,  253 => 162,  246 => 158,  218 => 135,  212 => 132,  198 => 121,  194 => 120,  182 => 111,  175 => 107,  155 => 90,  144 => 84,  138 => 81,  119 => 65,  111 => 60,  94 => 46,  82 => 37,  76 => 34,  69 => 30,  55 => 19,  42 => 9,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base_logged_in.html.twig' %}*/
/* {% block body %}*/
/*     <div id="content" style="min-height: 834px;">*/
/*     <div class="center_content_inner" style="min-height: 829px;">*/
/*     <div id="left_content"><div onclick="window.location.href='/user?id='" id="card_eplugg">*/
/*             <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*             <div id="card_user">*/
/*                 <div class="img_profil">*/
/*                     <a href="/user?id="><img width="48" height="48" alt="" src="{{ asset('images/avatar.png') }}"></a>*/
/*                 </div>*/
/*                 <div class="descp_card">*/
/*                     <div class="name_user"><a href="/user?id="> </a></div>*/
/*                     <div class="job_user"></div>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*             <div id="card_company">*/
/*                 <div class="img_profil">*/
/*                     <a href="/user?id="><img width="51" height="51" src="{{ asset('images/logo.png') }}"></a>*/
/*                 </div>*/
/*                 <div class="descp_card">*/
/*                     <div class="company_user"><a href="/user?id="></a></div>*/
/*                     <div class="tag_company">*/
/*                     </div>*/
/*                     <div class="lieu_company"> - </div>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="clear20"></div><div id="activity_bloc"><div class="titre_plugg">{{ 'Annuaire d’activités'|trans }}</div>*/
/*             <div class="liste_annuaires">*/
/*                 <ul>*/
/*                 </ul>*/
/*                 <a class="voire_to" href="/activity">{{ 'Afficher tout'|trans }}</a>*/
/*             </div></div></div>*/
/*     <div id="body_content">*/
/*         <div class="titre_plugg">{{ 'Actualités'|trans }}</div>*/
/*         <div id="content_infinity" class="content_center__">*/
/* */
/*             <div class="clear10"></div>*/
/*             <a href="?page=2" id="next"></a>*/
/*         </div>*/
/*     </div>*/
/*     <div id="right_content">*/
/*     <div id="list_suggestions">*/
/*     <div class="titre_plugg">{{ 'Vous intéressent-ils'|trans }} ?</div>*/
/* */
/*     <div id="suggestion1488" class="bloc_suggestion">*/
/*         <a href="/user?id=1488" data-tooltip="#html-content1488" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*         <div class="im_connais">*/
/*             <a href="/user?id=1488" data-tooltip="#html-content1488" class="tooltip" style="cursor: pointer;">*/
/*                 <img width="37" height="37" alt="" src="/uploads/users/men/429.jpg">*/
/*             </a>*/
/*         </div>*/
/*         <div class="des_connais">*/
/*             <strong> <a href="/user?id=1488" data-tooltip="#html-content1488" class="tooltip" style="cursor: pointer;">Céline SANCHEZ</a></strong>*/
/*             Infirmier        </div>*/
/*         <div class="ferme_connais">*/
/*             <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1488">X</a></div>*/
/*             <a rel="mutual_friend" href="/mutual_friend?uid=1488&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*         </div>*/
/*         <div class="clear5"></div>*/
/*         <div id="html-content1488" style="display:none;">*/
/*             <div onclick="window.location.href='/user?id=1488'" id="card_eplugg">*/
/*                 <div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>*/
/*                 <div id="card_user">*/
/*                     <div class="img_profil"><a href="/user?id=1488"><img width="48" height="48" alt="" src="/uploads/users/men/429.jpg"></a></div>*/
/*                     <div class="descp_card">*/
/*                         <div class="name_user"> <a href="/user?id=1488"> Céline SANCHEZ </a> </div>*/
/*                         <div class="job_user">Infirmier</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div id="card_company">*/
/*                     <div class="img_profil">*/
/*                         <a href="/user?id=1488">*/
/*                             <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="descp_card">*/
/*                         <div class="company_user"><a href="/user?id=1488">{{ 'Purina'|trans }}</a></div>*/
/*                         <div class="tag_company">*/
/*                             #paramédical #santé                         </div>*/
/*                         <div class="lieu_company">{{ 'Les abymes'|trans }} - {{ 'France'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="plugg_link info_card">*/
/*                 <a onclick="Plugger(this, 0)" data-id="1488">{{ 'Plugger'|trans }}</a>*/
/* */
/*                 <a href="messages?uid=1488">Message</a>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/*     <div id="suggestion1489" class="bloc_suggestion">*/
/*         <a href="/user?id=1489" data-tooltip="#html-content1489" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*         <div class="im_connais">*/
/*             <a href="/user?id=1489" data-tooltip="#html-content1489" class="tooltip" style="cursor: pointer;">*/
/*                 <img width="37" height="37" alt="" src="/uploads/users/men/430.jpg">*/
/*             </a>*/
/*         </div>*/
/*         <div class="des_connais">*/
/*             <strong> <a href="/user?id=1489" data-tooltip="#html-content1489" class="tooltip" style="cursor: pointer;">{{ 'Charlène SARRA'|trans }} ...</a></strong>*/
/*             Infirmière puéricultrice        </div>*/
/*         <div class="ferme_connais">*/
/*             <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1489">X</a></div>*/
/*             <a rel="mutual_friend" href="/mutual_friend?uid=1489&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*         </div>*/
/*         <div class="clear5"></div>*/
/*         <div id="html-content1489" style="display:none;">*/
/*             <div onclick="window.location.href='/user?id=1489'" id="card_eplugg">*/
/*                 <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                 <div id="card_user">*/
/*                     <div class="img_profil"><a href="/user?id=1489"><img width="48" height="48" alt="" src="/uploads/users/men/430.jpg"></a></div>*/
/*                     <div class="descp_card">*/
/*                         <div class="name_user"> <a href="/user?id=1489"> {{ 'Charlène SARRA'|trans }} ... </a> </div>*/
/*                         <div class="job_user">{{ 'Infirmière puéricultrice'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div id="card_company">*/
/*                     <div class="img_profil">*/
/*                         <a href="/user?id=1489">*/
/*                             <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="descp_card">*/
/*                         <div class="company_user"><a href="/user?id=1489">{{ 'Paul bocuse'|trans }}</a></div>*/
/*                         <div class="tag_company">*/
/*                             #paramédical #santé                         </div>*/
/*                         <div class="lieu_company">{{ 'Pessac'|trans }} - {{ 'France'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="plugg_link info_card">*/
/*                 <a onclick="Plugger(this, 0)" data-id="1489">Plugger</a>*/
/* */
/*                 <a href="messages?uid=1489">Message</a>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/*     <div id="suggestion1492" class="bloc_suggestion">*/
/*         <a href="/user?id=1492" data-tooltip="#html-content1492" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*         <div class="im_connais">*/
/*             <a href="/user?id=1492" data-tooltip="#html-content1492" class="tooltip" style="cursor: pointer;">*/
/*                 <img width="37" height="37" alt="" src="/uploads/users/men/433.jpg">*/
/*             </a>*/
/*         </div>*/
/*         <div class="des_connais">*/
/*             <strong> <a href="/user?id=1492" data-tooltip="#html-content1492" class="tooltip" style="cursor: pointer;">{{ 'Chloé SAVARY'|trans }}a></strong>*/
/*             Opticien-lunetier        </div>*/
/*         <div class="ferme_connais">*/
/*             <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1492">X</a></div>*/
/*             <a rel="mutual_friend" href="/mutual_friend?uid=1492&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*         </div>*/
/*         <div class="clear5"></div>*/
/*         <div id="html-content1492" style="display:none;">*/
/*             <div onclick="window.location.href='/user?id=1492'" id="card_eplugg">*/
/*                 <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                 <div id="card_user">*/
/*                     <div class="img_profil"><a href="/user?id=1492"><img width="48" height="48" alt="" src="/uploads/users/men/433.jpg"></a></div>*/
/*                     <div class="descp_card">*/
/*                         <div class="name_user"> <a href="/user?id=1492"> {{ 'Chloé SAVARY'|trans }} </a> </div>*/
/*                         <div class="job_user">{{ 'Opticien-lunetier'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div id="card_company">*/
/*                     <div class="img_profil">*/
/*                         <a href="/user?id=1492">*/
/*                             <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="descp_card">*/
/*                         <div class="company_user"><a href="/user?id=1492">{{ 'Renault'|trans }}</a></div>*/
/*                         <div class="tag_company">*/
/*                             #paramédical #optique                         </div>*/
/*                         <div class="lieu_company">{{ 'Niort'|trans }} - {{ 'France'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="plugg_link info_card">*/
/*                 <a onclick="Plugger(this, 0)" data-id="1492">{{ 'Plugger'|trans }}</a>*/
/* */
/*                 <a href="messages?uid=1492">{{ 'Message'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/*     <div id="suggestion1480" class="bloc_suggestion">*/
/*         <a href="/user?id=1480" data-tooltip="#html-content1480" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*         <div class="im_connais">*/
/*             <a href="/user?id=1480" data-tooltip="#html-content1480" class="tooltip" style="cursor: pointer;">*/
/*                 <img width="37" height="37" alt="" src="/uploads/users/men/420.jpg">*/
/*             </a>*/
/*         </div>*/
/*         <div class="des_connais">*/
/*             <strong> <a href="/user?id=1480" data-tooltip="#html-content1480" class="tooltip" style="cursor: pointer;">{{ 'Brigitte ROUSSE'|trans }} ...</a></strong>*/
/*             Styliste        </div>*/
/*         <div class="ferme_connais">*/
/*             <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1480">X</a></div>*/
/*             <a rel="mutual_friend" href="/mutual_friend?uid=1480&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*         </div>*/
/*         <div class="clear5"></div>*/
/*         <div id="html-content1480" style="display:none;">*/
/*             <div onclick="window.location.href='/user?id=1480'" id="card_eplugg">*/
/*                 <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                 <div id="card_user">*/
/*                     <div class="img_profil"><a href="/user?id=1480"><img width="48" height="48" alt="" src="/uploads/users/men/420.jpg"></a></div>*/
/*                     <div class="descp_card">*/
/*                         <div class="name_user"> <a href="/user?id=1480"> {{ 'Brigitte ROUSSE'|trans }} ... </a> </div>*/
/*                         <div class="job_user">{{ 'Styliste'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div id="card_company">*/
/*                     <div class="img_profil">*/
/*                         <a href="/user?id=1480">*/
/*                             <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="descp_card">*/
/*                         <div class="company_user"><a href="/user?id=1480">{{ 'Ppr pour la dig'|trans }} ...</a></div>*/
/*                         <div class="tag_company">*/
/*                             #mode #textile #stylisme                         </div>*/
/*                         <div class="lieu_company">{{ 'Valence'|trans }} - {{ 'France'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="plugg_link info_card">*/
/*                 <a onclick="Plugger(this, 0)" data-id="1480">{{ 'Plugger'|trans }}</a>*/
/* */
/*                 <a href="messages?uid=1480">{{ 'Message'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/*     <div id="suggestion1476" class="bloc_suggestion">*/
/*         <a href="/user?id=1476" data-tooltip="#html-content1476" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*         <div class="im_connais">*/
/*             <a href="/user?id=1476" data-tooltip="#html-content1476" class="tooltip" style="cursor: pointer;">*/
/*                 <img width="37" height="37" alt="" src="/uploads/users/men/413.jpg">*/
/*             </a>*/
/*         </div>*/
/*         <div class="des_connais">*/
/*             <strong> <a href="/user?id=1476" data-tooltip="#html-content1476" class="tooltip" style="cursor: pointer;">{{ 'Anaëlle ROLAND'|trans }}</a></strong>*/
/*             Vétérinaire&lrm;        </div>*/
/*         <div class="ferme_connais">*/
/*             <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1476">X</a></div>*/
/*             <a rel="mutual_friend" href="/mutual_friend?uid=1476&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*         </div>*/
/*         <div class="clear5"></div>*/
/*         <div id="html-content1476" style="display:none;">*/
/*             <div onclick="window.location.href='/user?id=1476'" id="card_eplugg">*/
/*                 <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                 <div id="card_user">*/
/*                     <div class="img_profil"><a href="/user?id=1476"><img width="48" height="48" alt="" src="/uploads/users/men/413.jpg"></a></div>*/
/*                     <div class="descp_card">*/
/*                         <div class="name_user"> <a href="/user?id=1476"> {{ 'Anaëlle ROLAND'|trans }} </a> </div>*/
/*                         <div class="job_user">{{ 'Vétérinaire'|trans }}&lrm;</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*                 <div id="card_company">*/
/*                     <div class="img_profil">*/
/*                         <a href="/user?id=1476">*/
/*                             <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="descp_card">*/
/*                         <div class="company_user"><a href="/user?id=1476">Pileje</a></div>*/
/*                         <div class="tag_company">*/
/*                             #médical #médecine vétérinaire&lrm;                         </div>*/
/*                         <div class="lieu_company">{{ 'Bourges'|trans }} - {{ 'France'|trans }}</div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="plugg_link info_card">*/
/*                 <a onclick="Plugger(this, 0)" data-id="1476">Plugger</a>*/
/* */
/*                 <a href="messages?uid=1476">Message</a>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/*     </div>*/
/*     <ul style="display:none" id="others_suggestions">    <li>    <div id="suggestion1483" class="bloc_suggestion">*/
/*             <a href="/user?id=1483" data-tooltip="#html-content1483" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1483" data-tooltip="#html-content1483" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/423.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1483" data-tooltip="#html-content1483" class="tooltip" style="cursor: pointer;">Carine ROUXEL</a></strong>*/
/*                 Ambulancier        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1483">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1483&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1483" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1483'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1483"><img width="48" height="48" alt="" src="/uploads/users/men/423.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1483"> Carine ROUXEL </a> </div>*/
/*                             <div class="job_user">Ambulancier</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1483">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1483">Prieure de sain ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #santé                         </div>*/
/*                             <div class="lieu_company">Antony - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1483">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1483">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1485" class="bloc_suggestion">*/
/*             <a href="/user?id=1485" data-tooltip="#html-content1485" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1485" data-tooltip="#html-content1485" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/425.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1485" data-tooltip="#html-content1485" class="tooltip" style="cursor: pointer;">Carole anne ROY</a></strong>*/
/*                 Audioprothésiste        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1485">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1485&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1485" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1485'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1485"><img width="48" height="48" alt="" src="/uploads/users/men/425.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1485"> Carole anne ROY </a> </div>*/
/*                             <div class="job_user">Audioprothésiste</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1485">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1485">Progreffe</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #santé                         </div>*/
/*                             <div class="lieu_company">Troyes - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1485">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1485">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1490" class="bloc_suggestion">*/
/*             <a href="/user?id=1490" data-tooltip="#html-content1490" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1490" data-tooltip="#html-content1490" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/431.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1490" data-tooltip="#html-content1490" class="tooltip" style="cursor: pointer;">Charline SAULNI ...</a></strong>*/
/*                 Manipulateur en électroradiologie médicale        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1490">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1490&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1490" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1490'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1490"><img width="48" height="48" alt="" src="/uploads/users/men/431.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1490"> Charline SAULNI ... </a> </div>*/
/*                             <div class="job_user">Manipulateur en électroradiol ...</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1490">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1490">Ratp pour la ci ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #santé                         </div>*/
/*                             <div class="lieu_company">Ivry-sur-seine - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1490">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1490">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1478" class="bloc_suggestion">*/
/*             <a href="/user?id=1478" data-tooltip="#html-content1478" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1478" data-tooltip="#html-content1478" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/417.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1478" data-tooltip="#html-content1478" class="tooltip" style="cursor: pointer;">Bibiane ROSE</a></strong>*/
/*                 Designer textile        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1478">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1478&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1478" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1478'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1478"><img width="48" height="48" alt="" src="/uploads/users/men/417.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1478"> Bibiane ROSE </a> </div>*/
/*                             <div class="job_user">Designer textile</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1478">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1478">Pour la dermati ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #mode #textile #design                         </div>*/
/*                             <div class="lieu_company">Levallois-perret - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1478">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1478">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1486" class="bloc_suggestion">*/
/*             <a href="/user?id=1486" data-tooltip="#html-content1486" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1486" data-tooltip="#html-content1486" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/426.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1486" data-tooltip="#html-content1486" class="tooltip" style="cursor: pointer;">Caroline ROYER</a></strong>*/
/*                 Auxiliaire de puériculture        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1486">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1486&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1486" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1486'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1486"><img width="48" height="48" alt="" src="/uploads/users/men/426.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1486"> Caroline ROYER </a> </div>*/
/*                             <div class="job_user">Auxiliaire de puériculture</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1486">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1486">Prometheus</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #santé                         </div>*/
/*                             <div class="lieu_company">Vénissieux - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1486">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1486">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1479" class="bloc_suggestion">*/
/*             <a href="/user?id=1479" data-tooltip="#html-content1479" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1479" data-tooltip="#html-content1479" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/419.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1479" data-tooltip="#html-content1479" class="tooltip" style="cursor: pointer;">Blandine ROUSSE ...</a></strong>*/
/*                 Modéliste        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1479">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1479&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1479" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1479'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1479"><img width="48" height="48" alt="" src="/uploads/users/men/419.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1479"> Blandine ROUSSE ... </a> </div>*/
/*                             <div class="job_user">Modéliste</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1479">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1479">Poweo</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #mode #textile #modélisme                         </div>*/
/*                             <div class="lieu_company">Quimper - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1479">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1479">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1484" class="bloc_suggestion">*/
/*             <a href="/user?id=1484" data-tooltip="#html-content1484" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1484" data-tooltip="#html-content1484" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/424.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1484" data-tooltip="#html-content1484" class="tooltip" style="cursor: pointer;">Carole ROUYER</a></strong>*/
/*                 Assistant dentaire        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1484">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1484&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1484" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1484'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1484"><img width="48" height="48" alt="" src="/uploads/users/men/424.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1484"> Carole ROUYER </a> </div>*/
/*                             <div class="job_user">Assistant dentaire</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1484">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1484">Procter &amp; gambl ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #dentaire                         </div>*/
/*                             <div class="lieu_company">Neuilly-sur-seine - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1484">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1484">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1491" class="bloc_suggestion">*/
/*             <a href="/user?id=1491" data-tooltip="#html-content1491" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1491" data-tooltip="#html-content1491" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/432.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1491" data-tooltip="#html-content1491" class="tooltip" style="cursor: pointer;">Charlotte SAUNI ...</a></strong>*/
/*                 Masseur-kinésithérapeute        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1491">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1491&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1491" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1491'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1491"><img width="48" height="48" alt="" src="/uploads/users/men/432.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1491"> Charlotte SAUNI ... </a> </div>*/
/*                             <div class="job_user">Masseur-kinésithérapeute</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1491">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1491">Real</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #kinésithérapie                         </div>*/
/*                             <div class="lieu_company">Chambéry - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1491">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1491">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1482" class="bloc_suggestion">*/
/*             <a href="/user?id=1482" data-tooltip="#html-content1482" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1482" data-tooltip="#html-content1482" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/422.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1482" data-tooltip="#html-content1482" class="tooltip" style="cursor: pointer;">Candice ROUX</a></strong>*/
/*                 Aide-soignant        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1482">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1482&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1482" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1482'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1482"><img width="48" height="48" alt="" src="/uploads/users/men/422.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1482"> Candice ROUX </a> </div>*/
/*                             <div class="job_user">Aide-soignant</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1482">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1482">Pricewaterhouse ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #santé                         </div>*/
/*                             <div class="lieu_company">La seyne-sur-mer - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1482">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1482">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1493" class="bloc_suggestion">*/
/*             <a href="/user?id=1493" data-tooltip="#html-content1493" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1493" data-tooltip="#html-content1493" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/434.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1493" data-tooltip="#html-content1493" class="tooltip" style="cursor: pointer;">Christelle SCHM ...</a></strong>*/
/*                 Orthophoniste        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1493">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1493&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1493" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1493'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1493"><img width="48" height="48" alt="" src="/uploads/users/men/434.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1493"> Christelle SCHM ... </a> </div>*/
/*                             <div class="job_user">Orthophoniste</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1493">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1493">Renault</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #orthophonie                         </div>*/
/*                             <div class="lieu_company">Lorient - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1493">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1493">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1481" class="bloc_suggestion">*/
/*             <a href="/user?id=1481" data-tooltip="#html-content1481" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1481" data-tooltip="#html-content1481" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/421.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1481" data-tooltip="#html-content1481" class="tooltip" style="cursor: pointer;">Camélia ROUSSE ...</a></strong>*/
/*                 Technicien de fabrication        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1481">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1481&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 Contacts en commun"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1481" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1481'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1481"><img width="48" height="48" alt="" src="/uploads/users/men/421.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1481"> Camélia ROUSSE ... </a> </div>*/
/*                             <div class="job_user">Technicien de fabrication</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1481">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1481">Previade</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #mode #textile                         </div>*/
/*                             <div class="lieu_company">Noisy-le-grand - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1481">Plugger</a>*/
/* */
/*                     <a href="messages?uid=1481">Message</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1494" class="bloc_suggestion">*/
/*             <a href="/user?id=1494" data-tooltip="#html-content1494" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1494" data-tooltip="#html-content1494" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/435.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1494" data-tooltip="#html-content1494" class="tooltip" style="cursor: pointer;">Christiane SCHM ...</a></strong>*/
/*                 {{ 'Orthoptiste'|trans }}        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1494">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1494&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1494" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1494'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1494"><img width="48" height="48" alt="" src="/uploads/users/men/435.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1494"> Christiane SCHM ... </a> </div>*/
/*                             <div class="job_user">{{ 'Orthoptiste'|trans }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1494">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1494">{{ 'Renzo piano wor'|trans }} ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #orthoptie                         </div>*/
/*                             <div class="lieu_company">Cergy - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1494">{{ 'Plugger'|trans }}</a>*/
/* */
/*                     <a href="messages?uid=1494">{{ 'Message'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1475" class="bloc_suggestion">*/
/*             <a href="/user?id=1475" data-tooltip="#html-content1475" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1475" data-tooltip="#html-content1475" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/411.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1475" data-tooltip="#html-content1475" class="tooltip" style="cursor: pointer;">Amandine RODRIG ...</a></strong>*/
/*                 {{ 'Toxicologue'|trans }}        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1475">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1475&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1475" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1475'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1475"><img width="48" height="48" alt="" src="/uploads/users/men/411.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1475"> Amandine RODRIG ... </a> </div>*/
/*                             <div class="job_user">{{ 'Toxicologue'|trans }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1475">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1475">Petzl</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #médical #toxicologie                         </div>*/
/*                             <div class="lieu_company">Saint-nazaire - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1475">{{ 'Plugger'|trans }}</a>*/
/* */
/*                     <a href="messages?uid=1475">{{ 'Message'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1487" class="bloc_suggestion">*/
/*             <a href="/user?id=1487" data-tooltip="#html-content1487" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1487" data-tooltip="#html-content1487" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/428.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1487" data-tooltip="#html-content1487" class="tooltip" style="cursor: pointer;">Célestine SAMS ...</a></strong>*/
/*                 {{ 'Ergothérapeute'|trans }}        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1487">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1487&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1487" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1487'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1487"><img width="48" height="48" alt="" src="/uploads/users/men/428.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1487"> Célestine SAMS ... </a> </div>*/
/*                             <div class="job_user">{{ 'Ergothérapeute'|trans }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1487">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1487">{{ 'Psa peugeot cit'|trans }} ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #paramédical #ergothérapie                         </div>*/
/*                             <div class="lieu_company">Sarcelles - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1487">{{ 'Plugger'|trans }}</a>*/
/* */
/*                     <a href="messages?uid=1487">{{ 'Message'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/*     <li>    <div id="suggestion1477" class="bloc_suggestion">*/
/*             <a href="/user?id=1477" data-tooltip="#html-content1477" class="infobull_div tooltip" style="cursor: pointer;"></a>*/
/*             <div class="im_connais">*/
/*                 <a href="/user?id=1477" data-tooltip="#html-content1477" class="tooltip" style="cursor: pointer;">*/
/*                     <img width="37" height="37" alt="" src="/uploads/users/men/416.jpg">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="des_connais">*/
/*                 <strong> <a href="/user?id=1477" data-tooltip="#html-content1477" class="tooltip" style="cursor: pointer;">Bianca ROQUES</a></strong>*/
/*                 {{ 'Chef de produit'|trans }}        </div>*/
/*             <div class="ferme_connais">*/
/*                 <div class="fermer_connais"><a onclick="getSuggestion(this)" data-id="1477">X</a></div>*/
/*                 <a rel="mutual_friend" href="/mutual_friend?uid=1477&amp;iframe=true&amp;width=400" class="nb_vue_" title="0 {{ 'Contacts en commun'|trans }}"><span>0</span></a>*/
/*             </div>*/
/*             <div class="clear5"></div>*/
/*             <div id="html-content1477" style="display:none;">*/
/*                 <div onclick="window.location.href='/user?id=1477'" id="card_eplugg">*/
/*                     <div class="yellow"><img src="/images/arrow-yelow.png"></div>*/
/*                     <div id="card_user">*/
/*                         <div class="img_profil"><a href="/user?id=1477"><img width="48" height="48" alt="" src="/uploads/users/men/416.jpg"></a></div>*/
/*                         <div class="descp_card">*/
/*                             <div class="name_user"> <a href="/user?id=1477"> Bianca ROQUES </a> </div>*/
/*                             <div class="job_user">{{ 'Chef de produit'|trans }}</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <div id="card_company">*/
/*                         <div class="img_profil">*/
/*                             <a href="/user?id=1477">*/
/*                                 <img width="51" height="51" src="/uploads/logo/logo.png">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="descp_card">*/
/*                             <div class="company_user"><a href="/user?id=1477">{{ 'Pour la connais'|trans }} ...</a></div>*/
/*                             <div class="tag_company">*/
/*                                 #mode #textile #marketing                         </div>*/
/*                             <div class="lieu_company">Issy-les-moulineaux - France</div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="plugg_link info_card">*/
/*                     <a onclick="Plugger(this, 0)" data-id="1477">{{ 'Plugger'|trans }}</a>*/
/* */
/*                     <a href="messages?uid=1477">{{ 'Message'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </li>*/
/* */
/*     </ul>*/
/* */
/*     <div style="  margin-top: 20px; margin-left: 45px; float: left;" class="right_search">*/
/*         <a class="selected" href="/search">Toutes les suggestions </a>*/
/*     </div></div>*/
/*     <div class="clear"></div>*/
/*     </div>*/
/*     <div class="clear25"></div>*/
/*     </div>*/
/* {% endblock %}*/

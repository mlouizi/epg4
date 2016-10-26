<?php

/* EpluggFrontBundle:Default:index.html.twig */
class __TwigTemplate_2a6527a4d00bedae7b7a7b075a7f30f89af12b050c33629bc63a8622a2b51945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpluggFrontBundle::base.html.twig", "EpluggFrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
            'after_footer' => array($this, 'block_after_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpluggFrontBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16d1137ea2d539677ba37e1abafea013d084b37c668031faf54eb73237f77f41 = $this->env->getExtension("native_profiler");
        $__internal_16d1137ea2d539677ba37e1abafea013d084b37c668031faf54eb73237f77f41->enter($__internal_16d1137ea2d539677ba37e1abafea013d084b37c668031faf54eb73237f77f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpluggFrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d1137ea2d539677ba37e1abafea013d084b37c668031faf54eb73237f77f41->leave($__internal_16d1137ea2d539677ba37e1abafea013d084b37c668031faf54eb73237f77f41_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e94c3d1f71b312aa50bfeba6d72d254b2eba68474ee5758a757732a9848116b = $this->env->getExtension("native_profiler");
        $__internal_0e94c3d1f71b312aa50bfeba6d72d254b2eba68474ee5758a757732a9848116b->enter($__internal_0e94c3d1f71b312aa50bfeba6d72d254b2eba68474ee5758a757732a9848116b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mapplic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mapplic-ie.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <!--[if IE]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ie.css"), "html", null, true);
        echo "\" />
    <![endif]-->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsivehome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_0e94c3d1f71b312aa50bfeba6d72d254b2eba68474ee5758a757732a9848116b->leave($__internal_0e94c3d1f71b312aa50bfeba6d72d254b2eba68474ee5758a757732a9848116b_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_35f22d8789d07f7c1858759774a3e9f88fbf9e275fceea4fb5859cfc8ec50dfb = $this->env->getExtension("native_profiler");
        $__internal_35f22d8789d07f7c1858759774a3e9f88fbf9e275fceea4fb5859cfc8ec50dfb->enter($__internal_35f22d8789d07f7c1858759774a3e9f88fbf9e275fceea4fb5859cfc8ec50dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil"), "html", null, true);
        
        $__internal_35f22d8789d07f7c1858759774a3e9f88fbf9e275fceea4fb5859cfc8ec50dfb->leave($__internal_35f22d8789d07f7c1858759774a3e9f88fbf9e275fceea4fb5859cfc8ec50dfb_prof);

    }

    // line 18
    public function block_login($context, array $blocks = array())
    {
        $__internal_69e285e6a22602f52620bed1eb4a0e502557b0c9302a13de9e196dd3537e9c93 = $this->env->getExtension("native_profiler");
        $__internal_69e285e6a22602f52620bed1eb4a0e502557b0c9302a13de9e196dd3537e9c93->enter($__internal_69e285e6a22602f52620bed1eb4a0e502557b0c9302a13de9e196dd3537e9c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 19
        echo "<div class=\"login\">
    <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" id=\"signinform\" method=\"post\">
        <input type=\"text\" class=\"\" name=\"_username\" required=\"required\"  placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Adresse e-mail"), "html", null, true);
        echo "\"   />
        <input type=\"password\" class=\"\" name=\"_password\" required=\"required\" autocomplete=\"off\"  placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe"), "html", null, true);
        echo "\" />
        <input id=\"userLang\" type=\"hidden\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\" name=\"lang\">
        <button class=\"submit_header\" type=\"submit\" ></button>
        <div class=\"cat_search\">
            <a data-url='' id=\"lang_link\"><span id=\"cat_label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("en"), "html", null, true);
        echo " </span></a>
            <a id=\"btn_cat\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
            <div class=\"souscat\">
                <ul>
                    <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\" data-lang='en'>en</a></li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\" data-lang='fr'>fr</a></li>
                </ul>
            </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
        <a id=\"connex\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié"), "html", null, true);
        echo "?</a>
    </form>

</div>
<div class=\"clear10\"></div>
";
        
        $__internal_69e285e6a22602f52620bed1eb4a0e502557b0c9302a13de9e196dd3537e9c93->leave($__internal_69e285e6a22602f52620bed1eb4a0e502557b0c9302a13de9e196dd3537e9c93_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbf3f5de25def45fd295bdf1b4389247a9f04d053ad61f6834b95c2e1534a140 = $this->env->getExtension("native_profiler");
        $__internal_bbf3f5de25def45fd295bdf1b4389247a9f04d053ad61f6834b95c2e1534a140->enter($__internal_bbf3f5de25def45fd295bdf1b4389247a9f04d053ad61f6834b95c2e1534a140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "<div class=\"center_content\" style=\"position:relative\"> <div class=\"home_full\">
<form id=\"msform\" method=\"post\" action=\"/eplugg\">
<fieldset>
<div class=\"form_home\">
<div class=\"card_user-search\">
    <div class=\"select_div\">
        <label  class=\"custom_gendre\">
            <select name=\"gendre\" class=\"type1\" id=\"gendre\">
                <option value=\"\"></option>
                civilities
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["civilities"]) ? $context["civilities"] : $this->getContext($context, "civilities")));
        foreach ($context['_seq'] as $context["key"] => $context["civility"]) {
            // line 54
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $context["civility"], "html", null, true);
            echo " </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['civility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </select>
        </label>
    </div>
    <div class=\"half_div\"><input id=\"firstname\" name=\"firstname\" type=\"text\"  placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Prénom"), "html", null, true);
        echo "\" value=\"\" /></div>
    <div class=\"half_div\"><input id=\"lastname\" name=\"lastname\" type=\"text\"  placeholder=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom"), "html", null, true);
        echo "\" value=\"\"   /></div>
    <div class=\"inputfile\"><input id=\"job\" name=\"job\" type=\"text\"  placeholder=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Métier"), "html", null, true);
        echo "\" value=\"\"   /></div>
    <div style=\"width:30%; float:left;text-align:left; margin-left: 10px\">
        <select id=\"birthday\" name=\"birthday\" >
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 65
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
        </select>
    </div>
    <div style=\"width:30%; float:left;text-align:left; margin-left: 8px\">
        <select id=\"birthmonth\" name=\"birthmonth\" >
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dateSelect"]) ? $context["dateSelect"] : $this->getContext($context, "dateSelect")), "mounths", array()));
        foreach ($context['_seq'] as $context["key"] => $context["mounth"]) {
            // line 73
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $context["mounth"], "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['mounth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </select>
    </div>
    <div style=\"width:30%; float:left;text-align:left; margin-left: 10px\">
        <select id=\"birthyear\" name=\"birthyear\">
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($this->getAttribute((isset($context["dateSelect"]) ? $context["dateSelect"] : $this->getContext($context, "dateSelect")), "years", array()), "start", array()), $this->getAttribute($this->getAttribute((isset($context["dateSelect"]) ? $context["dateSelect"] : $this->getContext($context, "dateSelect")), "years", array()), "end", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 80
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </select>
    </div>
</div>
<div class=\"card_company-search\">
<div  class=\"inputfile\"><input id=\"company_name\" name=\"company_name\" type=\"text\"  placeholder=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Établissement"), "html", null, true);
        echo "\" value=\"\"   /></div>
<div style=\"position:relative\"  class=\"inputfile\">
    <input id='company_activity' name=\"company_activity\" type=\"text\"  placeholder=\"Activities\" value=\"\"    />
    <a id=\"pAddAct\" class=\"addSep hotspot\" onmouseover=\"tooltip.show('";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter une activité"), "html", null, true);
        echo "');\" onmouseout=\"tooltip.hide();\"></a>
</div>
<div class=\"inputfile2\">
<div class=\"half_div\">
<label  class=\"custom_country\">
<select name=\"company_country\"  id=\"company_country\">
    <option value=\"\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pays"), "html", null, true);
        echo "</option>
    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        foreach ($context['_seq'] as $context["key"] => $context["country"]) {
            // line 97
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
            echo " </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</select>
</label>
</div>
<div class=\"half_div\">
    <input id=\"company_city\" name=\"company_city\" type=\"text\"  placeholder=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ville"), "html", null, true);
        echo "\" value=\"\" />
</div>
</div>
</div>
</div>
<input type=\"hidden\" value=\"1\" name=\"advancedSearch\">
<div class=\"bloc_btn_home\">
    <button type=\"button\" class=\"signup\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’inscrire"), "html", null, true);
        echo "</button>
    <button  class=\"homeSearch\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Rechercher"), "html", null, true);
        echo "</button>   </div>
</fieldset>
<div style=\"clear:both\"></div>
</form>


</div><div style=\"clear:both\"></div></div><div class=\"slogan\">
    <div class=\"top_slogan\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The first library"), "html", null, true);
        echo " </div>
    <div class=\"bottom_slogan\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("For virtual business cards"), "html", null, true);
        echo "</div>
</div>

<div style=\"display:none\" id=\"cnx_config\"  data-validationUrl = \"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("eplugg_front_checkmail");
        echo "\">
    <div class=\"titre_plugg\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’inscrire"), "html", null, true);
        echo "</div>
    ";
        // line 124
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 125
        echo "
</div>
<div class=\"ombre\"  ></div>

";
        
        $__internal_bbf3f5de25def45fd295bdf1b4389247a9f04d053ad61f6834b95c2e1534a140->leave($__internal_bbf3f5de25def45fd295bdf1b4389247a9f04d053ad61f6834b95c2e1534a140_prof);

    }

    // line 130
    public function block_after_footer($context, array $blocks = array())
    {
        $__internal_6fcc294fb6a1fb2b039fbe9f7604660d8af01b89963ced3a36ff9b7446a17e01 = $this->env->getExtension("native_profiler");
        $__internal_6fcc294fb6a1fb2b039fbe9f7604660d8af01b89963ced3a36ff9b7446a17e01->enter($__internal_6fcc294fb6a1fb2b039fbe9f7604660d8af01b89963ced3a36ff9b7446a17e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "after_footer"));

        // line 131
        echo "    <div class=\"map-container\"><div id=\"mapplic\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("eplugg_mapclic");
        echo "\"></div></div>
";
        
        $__internal_6fcc294fb6a1fb2b039fbe9f7604660d8af01b89963ced3a36ff9b7446a17e01->leave($__internal_6fcc294fb6a1fb2b039fbe9f7604660d8af01b89963ced3a36ff9b7446a17e01_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_770c1d1f5ceb80403bba536798d0b9dd87691869ce8ea6dab0021471f19edce9 = $this->env->getExtension("native_profiler");
        $__internal_770c1d1f5ceb80403bba536798d0b9dd87691869ce8ea6dab0021471f19edce9->enter($__internal_770c1d1f5ceb80403bba536798d0b9dd87691869ce8ea6dab0021471f19edce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.caret.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" >
        var invalide_email_error = \"Invalid email address.\" ;
        var password_error = \"Password must be a minimum of 6 characters string.\" ;
        var confirm_password_error = \"The two passwords must be identical.\" ;
        jQuery( document ).ready(function() {
            jQuery( \".homeSearch\" ).click(function(event) {
                event.preventDefault();
                window.location.href = \"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("eplugg_all_users");
        echo "\"
            });
        });


    </script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/steps.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_770c1d1f5ceb80403bba536798d0b9dd87691869ce8ea6dab0021471f19edce9->leave($__internal_770c1d1f5ceb80403bba536798d0b9dd87691869ce8ea6dab0021471f19edce9_prof);

    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 154,  437 => 148,  426 => 140,  422 => 139,  418 => 138,  414 => 137,  410 => 136,  406 => 135,  401 => 134,  395 => 133,  385 => 131,  379 => 130,  368 => 125,  366 => 124,  362 => 123,  358 => 122,  352 => 119,  348 => 118,  338 => 111,  334 => 110,  324 => 103,  318 => 99,  307 => 97,  303 => 96,  299 => 95,  290 => 89,  284 => 86,  278 => 82,  267 => 80,  263 => 79,  257 => 75,  246 => 73,  242 => 72,  235 => 67,  224 => 65,  220 => 64,  214 => 61,  210 => 60,  206 => 59,  201 => 56,  190 => 54,  186 => 53,  174 => 43,  168 => 42,  153 => 36,  149 => 35,  142 => 31,  138 => 30,  132 => 27,  128 => 26,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  107 => 19,  101 => 18,  87 => 16,  78 => 14,  73 => 12,  67 => 9,  63 => 8,  58 => 6,  54 => 5,  50 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'EpluggFrontBundle::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/home.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/mapplic.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">*/
/*     <!--[if lt IE 9]>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/mapplic-ie.css') }}" />*/
/*     <script type="text/javascript" src="{{ asset('js/html5shiv.js') }}"></script>*/
/*     <![endif]-->*/
/*     <!--[if IE]>*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/ie.css') }}" />*/
/*     <![endif]-->*/
/*     <link href="{{ asset('css/responsivehome.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block title %}{{ 'Eplugg'|trans }} - {{ 'Accueil'|trans }}{% endblock %}*/
/* */
/* {% block login %}*/
/* <div class="login">*/
/*     <form action="{{ path("fos_user_security_check") }}" id="signinform" method="post">*/
/*         <input type="text" class="" name="_username" required="required"  placeholder="{{ 'Adresse e-mail'|trans }}"   />*/
/*         <input type="password" class="" name="_password" required="required" autocomplete="off"  placeholder="{{ 'Mot de passe'|trans }}" />*/
/*         <input id="userLang" type="hidden" value="{{ app.request.locale }}" name="lang">*/
/*         <button class="submit_header" type="submit" ></button>*/
/*         <div class="cat_search">*/
/*             <a data-url='' id="lang_link"><span id="cat_label">{{ 'en'|trans }} </span></a>*/
/*             <a id="btn_cat"><img src="{{ asset('images/arrow.png') }}" alt="" /></a>*/
/*             <div class="souscat">*/
/*                 <ul>*/
/*                     <li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}" data-lang='en'>en</a></li>*/
/*                     <li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}" data-lang='fr'>fr</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*         <a id="connex" href="{{ path('fos_user_resetting_request') }}">{{ 'Mot de passe oublié'|trans }}?</a>*/
/*     </form>*/
/* */
/* </div>*/
/* <div class="clear10"></div>*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="center_content" style="position:relative"> <div class="home_full">*/
/* <form id="msform" method="post" action="/eplugg">*/
/* <fieldset>*/
/* <div class="form_home">*/
/* <div class="card_user-search">*/
/*     <div class="select_div">*/
/*         <label  class="custom_gendre">*/
/*             <select name="gendre" class="type1" id="gendre">*/
/*                 <option value=""></option>*/
/*                 civilities*/
/*                 {% for key,civility in civilities %}*/
/*                     <option value="{{ key }}" > {{ civility }} </option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </label>*/
/*     </div>*/
/*     <div class="half_div"><input id="firstname" name="firstname" type="text"  placeholder="{{ 'Prénom'|trans }}" value="" /></div>*/
/*     <div class="half_div"><input id="lastname" name="lastname" type="text"  placeholder="{{ 'Nom'|trans }}" value=""   /></div>*/
/*     <div class="inputfile"><input id="job" name="job" type="text"  placeholder="{{ 'Métier'|trans }}" value=""   /></div>*/
/*     <div style="width:30%; float:left;text-align:left; margin-left: 10px">*/
/*         <select id="birthday" name="birthday" >*/
/*             {% for day in 1..31 %}*/
/*                 <option value="{{ day }}" > {{ day }} </option>*/
/*             {% endfor %}*/
/* */
/*         </select>*/
/*     </div>*/
/*     <div style="width:30%; float:left;text-align:left; margin-left: 8px">*/
/*         <select id="birthmonth" name="birthmonth" >*/
/*             {% for key,mounth in dateSelect.mounths %}*/
/*                 <option value="{{ key }}" > {{ mounth }} </option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/*     <div style="width:30%; float:left;text-align:left; margin-left: 10px">*/
/*         <select id="birthyear" name="birthyear">*/
/*             {% for year in dateSelect.years.start..dateSelect.years.end %}*/
/*                 <option value="{{ year }}" > {{ year }} </option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/* </div>*/
/* <div class="card_company-search">*/
/* <div  class="inputfile"><input id="company_name" name="company_name" type="text"  placeholder="{{ 'Établissement'|trans }}" value=""   /></div>*/
/* <div style="position:relative"  class="inputfile">*/
/*     <input id='company_activity' name="company_activity" type="text"  placeholder="Activities" value=""    />*/
/*     <a id="pAddAct" class="addSep hotspot" onmouseover="tooltip.show('{{ "Ajouter une activité"|trans }}');" onmouseout="tooltip.hide();"></a>*/
/* </div>*/
/* <div class="inputfile2">*/
/* <div class="half_div">*/
/* <label  class="custom_country">*/
/* <select name="company_country"  id="company_country">*/
/*     <option value="">{{ 'Pays'|trans }}</option>*/
/*     {% for key,country in countries %}*/
/*         <option value="{{ key }}" > {{ country }} </option>*/
/*     {% endfor %}*/
/* </select>*/
/* </label>*/
/* </div>*/
/* <div class="half_div">*/
/*     <input id="company_city" name="company_city" type="text"  placeholder="{{ 'Ville'|trans }}" value="" />*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <input type="hidden" value="1" name="advancedSearch">*/
/* <div class="bloc_btn_home">*/
/*     <button type="button" class="signup">{{ 'S’inscrire'|trans }}</button>*/
/*     <button  class="homeSearch">{{ 'Rechercher'|trans }}</button>   </div>*/
/* </fieldset>*/
/* <div style="clear:both"></div>*/
/* </form>*/
/* */
/* */
/* </div><div style="clear:both"></div></div><div class="slogan">*/
/*     <div class="top_slogan">{{ 'The first library'|trans }} </div>*/
/*     <div class="bottom_slogan">{{ 'For virtual business cards'|trans }}</div>*/
/* </div>*/
/* */
/* <div style="display:none" id="cnx_config"  data-validationUrl = "{{ path('eplugg_front_checkmail') }}">*/
/*     <div class="titre_plugg">{{ 'S’inscrire'|trans }}</div>*/
/*     {% render url('fos_user_registration_register') %}*/
/* */
/* </div>*/
/* <div class="ombre"  ></div>*/
/* */
/* {% endblock body %}*/
/* {% block after_footer %}*/
/*     <div class="map-container"><div id="mapplic" data-url="{{ path('eplugg_mapclic') }}"></div></div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/jquery.caret.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" >*/
/*         var invalide_email_error = "Invalid email address." ;*/
/*         var password_error = "Password must be a minimum of 6 characters string." ;*/
/*         var confirm_password_error = "The two passwords must be identical." ;*/
/*         jQuery( document ).ready(function() {*/
/*             jQuery( ".homeSearch" ).click(function(event) {*/
/*                 event.preventDefault();*/
/*                 window.location.href = "{{ path('eplugg_all_users') }}"*/
/*             });*/
/*         });*/
/* */
/* */
/*     </script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('js/steps.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */

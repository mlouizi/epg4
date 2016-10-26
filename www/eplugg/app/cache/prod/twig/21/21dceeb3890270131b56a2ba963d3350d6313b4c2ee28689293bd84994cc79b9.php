<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_11b69d77387ec19b2559b299e56914fc4f15069ef1b9f9370efc63d18b5bbcdb extends Twig_Template
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
        // line 2
        echo "<div class=\"login-sys\">
    <div class=\"titre_plugg\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe oublié", array(), "FOSUserBundle"), "html", null, true);
        echo "?</div>
    <div class=\"login_inner\">
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
            ";
        // line 6
        if (array_key_exists("invalid_username", $context)) {
            // line 7
            echo "                <div class=\"message error\">
                    <strong>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("L’adresse e-mail que vous avez entré n’est pas associée à un compte", array(), "FOSUserBundle"), "html", null, true);
            echo ".</strong>
                </div>
            ";
        }
        // line 11
        echo "            <input placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Adresse e-mail", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
            <div>
                <span class=\"login_span\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"connex\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’identifier", array(), "FOSUserBundle"), "html", null, true);
        echo "</a><br>
                </span>
                <span class=\"button_span\">
                    <button class=\"submit\" type=\"submit\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S’identifier", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                </span>
                <div class=\"clear\"></div>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  49 => 14,  42 => 11,  36 => 8,  33 => 7,  31 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="login-sys">*/
/*     <div class="titre_plugg">{{ 'Mot de passe oublié'|trans }}?</div>*/
/*     <div class="login_inner">*/
/*         <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*             {% if invalid_username is defined %}*/
/*                 <div class="message error">*/
/*                     <strong>{{ 'L’adresse e-mail que vous avez entré n’est pas associée à un compte'|trans }}.</strong>*/
/*                 </div>*/
/*             {% endif %}*/
/*             <input placeholder="{{ 'Adresse e-mail'|trans }}" type="text" id="username" name="username" required="required" />*/
/*             <div>*/
/*                 <span class="login_span">*/
/*                     <a href="{{ path('fos_user_security_login') }}" class="connex">{{ 'S’identifier'|trans }}</a><br>*/
/*                 </span>*/
/*                 <span class="button_span">*/
/*                     <button class="submit" type="submit">{{ 'S’identifier'|trans }}</button>*/
/*                 </span>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */

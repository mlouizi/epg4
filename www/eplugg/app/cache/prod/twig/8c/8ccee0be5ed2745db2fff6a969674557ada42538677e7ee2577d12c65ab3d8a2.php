<?php

/* EpluggFrontBundle::base_logged_in.html.twig */
class __TwigTemplate_86cbfc6c8841e094f0a3c797dc96987bdb7f79bb5d513fbf0ad389a0794f5fc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'og' => array($this, 'block_og'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'more_stylesheets' => array($this, 'block_more_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'chat' => array($this, 'block_chat'),
            'alertMessage' => array($this, 'block_alertMessage'),
            'advancedSearch' => array($this, 'block_advancedSearch'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'after_footer' => array($this, 'block_after_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'js_chat' => array($this, 'block_js_chat'),
            'js_geolocalization' => array($this, 'block_js_geolocalization'),
            'more_javascripts' => array($this, 'block_more_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html prefix=\"og: http://ogp.me/ns#\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('og', $context, $blocks);
        // line 7
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('more_stylesheets', $context, $blocks);
        // line 21
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no\" />
    <script>(function(e,t,n){var r=e.querySelectorAll(\"html\")[0];r.className=r.className.replace(/(^|\\s)no-js(\\s|\$)/,\"\$1js\$2\")})(document,window,0);</script>
</head>
<body>
";
        // line 26
        $this->displayBlock('nav', $context, $blocks);
        // line 47
        $this->displayBlock('chat', $context, $blocks);
        // line 77
        echo "<div id=\"eplugg\">
    ";
        // line 78
        $this->displayBlock('alertMessage', $context, $blocks);
        // line 87
        echo "    ";
        $this->displayBlock('advancedSearch', $context, $blocks);
        // line 90
        echo "
    ";
        // line 91
        $this->displayBlock('header', $context, $blocks);
        // line 94
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 111
        echo "    ";
        $this->displayBlock('after_footer', $context, $blocks);
        // line 113
        echo "</div>
";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 182
        $this->displayBlock('js_chat', $context, $blocks);
        // line 363
        $this->displayBlock('js_geolocalization', $context, $blocks);
        // line 393
        $this->displayBlock('more_javascripts', $context, $blocks);
        // line 395
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
    }

    // line 6
    public function block_og($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/sizzle.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cupertino/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/darktooltip.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jautocomplete.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popModal.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/steps.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("chat/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 19
    public function block_more_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    // line 26
    public function block_nav($context, array $blocks = array())
    {
        // line 27
        echo "
    <nav class=\"pushy pushy-left\">

        <div class=\"profil_bloc\">
            <div class=\"img_prince\"><a href=\"/user?id=\"><img width=\"35\" height=\"33\" alt=\"\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
        echo "\"></a></div>
            <div class=\"descp_prince\">
                <strong><a href=\"/user?id=\"> </a></strong>
            </div>
        </div>
        <ul>
            <li><a href=\"/\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/news.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actualité"), "html", null, true);
        echo "</a></li>
            <li><a href=\"/directory\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/directory.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Répertoire"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("eplugg_messages");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/msg_menu.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Message"), "html", null, true);
        echo "</a></li>
            <li><a href=\"/invitations\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/invitation2.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Invitation"), "html", null, true);
        echo "</a></li>
            <!-- <li><a href=\"#\"><img src=\"/images/search_menu.png\" /> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche"), "html", null, true);
        echo "</a></li>-->
            <li><a href=\"/logout\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logout2.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Déconnexion"), "html", null, true);
        echo "</a></li>
        </ul>
    </nav>
    <div class=\"site-overlay\"></div>
";
    }

    // line 47
    public function block_chat($context, array $blocks = array())
    {
        // line 48
        echo "    <div id=\"list_friends\" style=\"z-index: 15;\"> <!-- LIST CONTACT -->
        <div id=\"infomrations_account_status\">
            <div id=\"infos_account\" class=\"label friend-num-connected ";
        // line 50
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "status", array()) == 1)) {
            echo "label-online";
        } else {
            echo "label-offline";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bienvenue"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</div>
        </div><br/><br/><br/><hr/><br/>

        <div id=\"status-search\">
            <div id=\"change-status\"><!-- change in status bar -->
                <a class=\"href_dyn\" data-status=\"label-online\" href=\"\"><div id=\"online-status\" data-status=\"Online\" class=\"case-status  first-case-status\"><div class=\"icon_status\"></div></div></a>
                <a class=\"href_dyn\" data-status=\"label-offline\" href=\"\"><div id=\"offline-status\" data-status=\"Offline\" class=\"case-status last-case-status\"><div class=\"icon_status\"></div></div></a>
            </div>
        </div>
        <br/><br/>
        <div>
            <input type=\"text\" name=\"search\" id=\"search\" />
        </div>
        <br/><br/>

        <audio id=\"bip-sound\" style=\"display:none;\" controls preload=\"auto\"> <!-- Sound reception of a message  -->
            <source src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("chat/sound/bip.mp3"), "html", null, true);
        echo "\" controls></source>
            <source src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("chat/sound/bip.ogg"), "html", null, true);
        echo "\" controls></source>
        </audio><hr/><br/>

        <div id=\"list_friends_into\">
        </div>
    </div>

    <div id=\"content_msg_box\">  <!-- List of contact -->
    </div>
";
    }

    // line 78
    public function block_alertMessage($context, array $blocks = array())
    {
        // line 79
        echo "        <div class=\"menu-btn\"></div>
        <div id=\"get_message\" style=\"display:none\">
            <div class=\"titre_plugg\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Notification"), "html", null, true);
        echo "</div>
            <div class=\"msg_glob\">
                <div id=\"alertmsg\" class=\"alertmsg\"></div>
            </div>
        </div>
    ";
    }

    // line 87
    public function block_advancedSearch($context, array $blocks = array())
    {
        // line 88
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Search:advancedSearchBlock"));
        echo "
    ";
    }

    // line 91
    public function block_header($context, array $blocks = array())
    {
        // line 92
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EpluggFrontBundle:Default:headerConnected", array("originalRequest" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()))));
        echo "
    ";
    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        // line 96
        echo "
        <div id=\"footer\">
            <div class=\"center_content\">
                <div id=\"menu_footer\">
                    <ul>
                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["MenuFooter"]) ? $context["MenuFooter"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 102
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_front_page", array("slug" => $this->getAttribute($context["link"], "slug", array()))), "html", null, true);
            echo "\">";
            if ( !twig_test_empty($this->getAttribute($context["link"], "menuTitle", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "menuTitle", array()), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
                echo " ";
            }
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    </ul>

                </div>
                <div id=\"copyright\"><img alt=\"Corporation\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo_footer.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Corporation"), "html", null, true);
        echo " &copy; 2016</div>
            </div>
        </div>
    ";
    }

    // line 111
    public function block_after_footer($context, array $blocks = array())
    {
        // line 112
        echo "    ";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.easing.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.darktooltip.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jsrender.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jautocomplete.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery.caret.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/popModal.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/menuphone/vendor/modernizr.custom.71422.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?key=AIzaSyDz_cFGBeygOAl5p8xKn-njVduhYuXOiFw\"></script>

    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/menuphone/pushy.min.js"), "html", null, true);
        echo "\">

        /*! Pushy - v0.9.1 - 2013-9-16
         * Pushy is a responsive off-canvas navigation menu using CSS transforms & transitions.
         * https://github.com/christophery/pushy/
         * by Christopher Yee */
    \$ (function(){function h(){t.toggleClass(o);e.toggleClass(s);n.toggleClass(u);r.toggleClass(a)}function p(){t.addClass(o);e.animate({left:\"0px\"},l);n.animate({left:c},l);r.animate({left:c},l)}function d(){t.removeClass(o);e.animate({left:\"-\"+c},l);n.animate({left:\"0px\"},l);r.animate({left:\"0px\"},l)}var e=\$(\".pushy\"),t=\$(\"body\"),n=\$(\"#eplugg\"),r=\$(\".push\"),i=\$(\".site-overlay\"),s=\"pushy-left pushy-open\",o=\"pushy-active\",u=\"container-push\",a=\"push-push\",f=\$(\".menu-btn, .pushy a\"),l=200,c=e.width()+\"px\";if(Modernizr.csstransforms3d){f.click(function(){h()});i.click(function(){h()})}else{e.css({left:\"-\"+c});n.css({\"overflow-x\":\"hidden\"});var v=!0;f.click(function(){if(v){p();v=!1}else{d();v=!0}});i.click(function(){if(v){p();v=!1}else{d();v=!0}})}});
    </script>
    <script type=\"text/javascript\">
/*
    By Osvaldas Valutis, www.osvaldas.info
    Available for use under the MIT License
*/

'use strict';

( function ( document, window, index )
{
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label    = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\\\' ).pop();

            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });

        // Firefox bug fix
        input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
        input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
    });
}( document, window, 0 ));
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/step.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() { \$('input, textarea').placeholder(); });
    </script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>

";
    }

    // line 182
    public function block_js_chat($context, array $blocks = array())
    {
        // line 183
        echo "    <script type=\"text/javascript\">

        function msg_read(sender){ // Read message is ok
            \$('#' + sender + ' .top_message_box').css('background', '#fff');
            \$.get(\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_read_approved");
        echo "\", {usertwo: sender}, function(data) {});
        }

        function addMsgBox(id){ // New box chat
            var html_ex = \$('#content_msg_box').html();

            msg_read(id);

            \$.post(\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_get_msg_box");
        echo "\",{usertwo: id}, function(data) { // Script make box caht
                \$('#content_msg_box').html(html_ex + data);
            });

        }

        function refreshTimer(){
            \$.post(\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_refresh_timer_status");
        echo "\",
                    function(data) {
                        \$('#infos_account').removeClass('label-online');
                        \$('#infos_account').removeClass('label-offline');
                        if(data == 1){
                            \$('#infos_account').addClass('label-online');
                        }
                        else if(data==0){
                            \$('#infos_account').addClass('label-offline');
                        }
                    }
            );
            setTimeout('refreshTimer()',2500);
        }

        function addBoxAuto(id_box){

            if(\$('#' + id_box).height() == 23){ // If box is already create and if the box is lowered
                \$('#' + id_box).css('height', '374px').css('margin-top', '0px');

                // Show elements
                \$('#box_msg_' + id_box).show();
                \$('#write_msg_' + id_box).show();
                \$('#box_msg_' + id_box).show();
            }

            if(\$('#' + id_box).length <= 0){ // If the box not exist

                var large_dispo = \$(\"html\").width() - \$('#list_friends').width();
                var nb_max_box = large_dispo / 350;
                nb_max_box = Math.round(nb_max_box-1);

                if(\$('.message_box').size() < nb_max_box){ // Test if the box chat number is maximum
                    addMsgBox(id_box);
                }
            }

        }


        function reloadMembers(){ // View contact
            if(\$(\"#search\").val()==\"\"){
                \$.post(\"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_get_users");
        echo "\",
                        function(data, status) {
                            users = '';
                            for(i=0;i<data.length;i++){
                                img = \"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\"+data[i].image;
                                users =' <div class=\"line_friend\" data-box=\"'+data[i].id+'\">'+
                                '<div class=\"img_friend\">'+
                                '<img width=\"36\" height=\"34\" src=\"'+img+'\">'+
                                '</div>'+
                                '<span>'+data[i].username+'</span> '+data[i].statusMsg+
                                '<a class=\"tooltip tooltip-left-message left-icon-tooltip\" data-tooltip=\"\">'+
                                '<div class=\"icon_status_friend status-friend '+data[i].status+'\"></div>'+
                                '</a>'+
                                '</div>' + users;
                                if(data[i].statusMsg != ''){
                                    addBoxAuto(data[i].id);
                                }
                            }
                            \$('#list_friends_into').html(users);
                        });
                setTimeout('reloadMembers()',5000);
            }
        }

        \$(document).ready(function(){
            \$('.souscat a').click(function(){
                _this = \$(this) ;
                \$('#userLang').val(_this.data('lang')) ;
                \$('#lang_link').html(_this.html()) ;
                \$('.souscat').animate({height: ['hide', 'swing'],opacity: 'hide'}, 500, 'linear');
            });
            \$('#btn_cat, #lang_link').click(function(){
                \$(\".souscat\").animate({
                    height: [\"toggle\", \"swing\"],
                    opacity: \"toggle\"
                }, 500, \"linear\")
            });

            \$('body').on( \"click\",\".line_friend\", function(){ // Line contact for create box chat
                var id_box = \$(this).attr('data-box');

                if(\$('#' + id_box).height() == 23){ // If box is already create and if the box is lowered
                    \$('#' + id_box).css('height', '374px').css('margin-top', '0px');

                    // Show elements
                    \$('#box_msg_' + id_box).show();
                    \$('#write_msg_' + id_box).show();
                    \$('#box_msg_' + id_box).show();
                }

                if(\$('#' + id_box).length <= 0){ // If the box not exist

                    var large_dispo = \$(\"html\").width() - \$('#list_friends').width();
                    var nb_max_box = large_dispo / 350;
                    nb_max_box = Math.round(nb_max_box-1);

                    if(\$('.message_box').size() < nb_max_box){ // Test if the box chat number is maximum
                        addMsgBox(id_box);
                    }
                }
            });

            \$('.href_dyn').on(\"click\", function () { // Change statustop bar

                \$.get(\$(this).attr(\"href\"));

                // Remove class button
                \$('#infos_account').removeClass('label-online');
                \$('#infos_account').removeClass('label-offline');

                // Set new status
                var StatusNew = \$(this).attr('data-status');


                // Add class - is selected
                \$('#infos_account').addClass(StatusNew);

                if(StatusNew == 'label-online'){ s = 1; } else{ s = 0; }

                \$.post(\"";
        // line 323
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_update_my_status");
        echo "\", { status: s } );

                // Reset timer for change status

                return false;
            });

            \$(\"#search\").on(\"keyup\",function() {
                \$.post(\"";
        // line 331
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_search_friend");
        echo "\",
                        {search: \$(this).val()},
                        function(data, status) {
                            users = '';
                            for(i=0;i<data.length;i++){
                                img = \"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\"+data[i].image;
                                users =' <div class=\"line_friend\" data-box=\"'+data[i].id+'\">'+
                                '<div class=\"img_friend\">'+
                                '<img width=\"36\" height=\"34\" src=\"'+img+'\">'+
                                '</div>'+
                                '<span>'+data[i].username+'</span> '+data[i].statusMsg+
                                '<a class=\"tooltip tooltip-left-message left-icon-tooltip\" data-tooltip=\"\">'+
                                '<div class=\"icon_status_friend status-friend '+data[i].status+'\"></div>'+
                                '</a>'+
                                '</div>' + users;
                                if(data[i].statusMsg != ''){
                                    addBoxAuto(data[i].id);
                                }
                            }
                            \$('#list_friends_into').html(users);
                        }
                );
            });



            refreshTimer();
            reloadMembers();

        }) ;
    </script>
";
    }

    // line 363
    public function block_js_geolocalization($context, array $blocks = array())
    {
        // line 364
        echo "<script type=\"text/javascript\">
    if (navigator.geolocation) {
        var watchId = navigator.geolocation.watchPosition(successCallbackGeolocalization, null, {enableHighAccuracy:true});

    }
    else {
           
        \$.ajax({
           url: \"";
        // line 372
        echo $this->env->getExtension('routing')->getPath("eplugg_update_coordinations");
        echo "\",
           type: \"GET\", 
           data: \"geo=false\",
           success : function (result) {
           }
        });
    }

    function successCallbackGeolocalization(position){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;    
       \$.ajax({
           url : \"";
        // line 384
        echo $this->env->getExtension('routing')->getPath("eplugg_update_coordinations");
        echo "\",
           type : \"GET\",
           data : \"geo=true&lat=\" + latitude + \"&lon=\"+ longitude,
           success : function (result) {
           }
        });
    };
</script>
";
    }

    // line 393
    public function block_more_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle::base_logged_in.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 393,  735 => 384,  720 => 372,  710 => 364,  707 => 363,  676 => 336,  668 => 331,  657 => 323,  579 => 248,  572 => 244,  527 => 202,  517 => 195,  506 => 187,  500 => 183,  497 => 182,  490 => 179,  483 => 175,  479 => 174,  432 => 130,  426 => 127,  421 => 125,  417 => 124,  413 => 123,  409 => 122,  405 => 121,  401 => 120,  397 => 119,  393 => 118,  389 => 117,  385 => 116,  380 => 115,  377 => 114,  373 => 112,  370 => 111,  360 => 107,  355 => 104,  336 => 102,  332 => 101,  325 => 96,  322 => 95,  317 => 94,  310 => 92,  307 => 91,  300 => 88,  297 => 87,  287 => 81,  283 => 79,  280 => 78,  266 => 67,  262 => 66,  235 => 50,  231 => 48,  228 => 47,  217 => 42,  213 => 41,  207 => 40,  199 => 39,  193 => 38,  187 => 37,  178 => 31,  172 => 27,  169 => 26,  165 => 20,  162 => 19,  156 => 17,  152 => 16,  148 => 15,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 10,  124 => 9,  119 => 8,  116 => 7,  111 => 6,  105 => 5,  99 => 395,  97 => 393,  95 => 363,  93 => 182,  91 => 114,  88 => 113,  85 => 111,  82 => 95,  79 => 94,  77 => 91,  74 => 90,  71 => 87,  69 => 78,  66 => 77,  64 => 47,  62 => 26,  53 => 21,  50 => 19,  47 => 7,  45 => 6,  41 => 5,  35 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html prefix="og: http://ogp.me/ns#">*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}{{ 'Eplugg'|trans }}{% endblock %}</title>*/
/*     {% block og %}{% endblock %}*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/sizzle.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/cupertino/jquery-ui-1.10.4.custom.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/prettyPhoto.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/darktooltip.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/jautocomplete.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/popModal.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet">*/
/*         <link href="{{ asset('css/steps.css') }}" type="text/css" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('chat/css/style.css') }}" type="text/css" />*/
/*     {% endblock %}*/
/*     {% block more_stylesheets %}*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />*/
/*     <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>*/
/* </head>*/
/* <body>*/
/* {% block nav %}*/
/* */
/*     <nav class="pushy pushy-left">*/
/* */
/*         <div class="profil_bloc">*/
/*             <div class="img_prince"><a href="/user?id="><img width="35" height="33" alt="" src="{{ asset('images/avatar.png') }}"></a></div>*/
/*             <div class="descp_prince">*/
/*                 <strong><a href="/user?id="> </a></strong>*/
/*             </div>*/
/*         </div>*/
/*         <ul>*/
/*             <li><a href="/"><img src="{{ asset('images/news.png') }}"> {{'Actualité'|trans }}</a></li>*/
/*             <li><a href="/directory"><img src="{{ asset('images/directory.png') }}"> {{'Répertoire'|trans }}</a></li>*/
/*             <li><a href="{{ path('eplugg_messages') }}"><img src="{{ asset('images/msg_menu.png') }}"> {{'Message'|trans }}</a></li>*/
/*             <li><a href="/invitations"><img src="{{ asset('images/invitation2.png') }}"> {{'Invitation'|trans }}</a></li>*/
/*             <!-- <li><a href="#"><img src="/images/search_menu.png" /> {{'Recherche'|trans }}</a></li>-->*/
/*             <li><a href="/logout"><img src="{{ asset('images/logout2.png') }}"> {{'Déconnexion'|trans }}</a></li>*/
/*         </ul>*/
/*     </nav>*/
/*     <div class="site-overlay"></div>*/
/* {% endblock nav %}*/
/* {% block chat %}*/
/*     <div id="list_friends" style="z-index: 15;"> <!-- LIST CONTACT -->*/
/*         <div id="infomrations_account_status">*/
/*             <div id="infos_account" class="label friend-num-connected {% if app.user.status == 1 %}label-online{% else %}label-offline{% endif %}">{{'Bienvenue'|trans}}, {{ app.user.username }}</div>*/
/*         </div><br/><br/><br/><hr/><br/>*/
/* */
/*         <div id="status-search">*/
/*             <div id="change-status"><!-- change in status bar -->*/
/*                 <a class="href_dyn" data-status="label-online" href=""><div id="online-status" data-status="Online" class="case-status  first-case-status"><div class="icon_status"></div></div></a>*/
/*                 <a class="href_dyn" data-status="label-offline" href=""><div id="offline-status" data-status="Offline" class="case-status last-case-status"><div class="icon_status"></div></div></a>*/
/*             </div>*/
/*         </div>*/
/*         <br/><br/>*/
/*         <div>*/
/*             <input type="text" name="search" id="search" />*/
/*         </div>*/
/*         <br/><br/>*/
/* */
/*         <audio id="bip-sound" style="display:none;" controls preload="auto"> <!-- Sound reception of a message  -->*/
/*             <source src="{{ asset('chat/sound/bip.mp3') }}" controls></source>*/
/*             <source src="{{ asset('chat/sound/bip.ogg') }}" controls></source>*/
/*         </audio><hr/><br/>*/
/* */
/*         <div id="list_friends_into">*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="content_msg_box">  <!-- List of contact -->*/
/*     </div>*/
/* {% endblock %}*/
/* <div id="eplugg">*/
/*     {% block alertMessage %}*/
/*         <div class="menu-btn"></div>*/
/*         <div id="get_message" style="display:none">*/
/*             <div class="titre_plugg">{{ 'Notification'|trans }}</div>*/
/*             <div class="msg_glob">*/
/*                 <div id="alertmsg" class="alertmsg"></div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock alertMessage %}*/
/*     {% block advancedSearch %}*/
/*         {{ render(controller('EpluggFrontBundle:Search:advancedSearchBlock')) }}*/
/*     {% endblock advancedSearch  %}*/
/* */
/*     {% block header %}*/
/*         {{ render(controller('EpluggFrontBundle:Default:headerConnected', {'originalRequest': app.request })) }}*/
/*     {% endblock %}*/
/*     {% block body %}{% endblock %}*/
/*     {% block footer %}*/
/* */
/*         <div id="footer">*/
/*             <div class="center_content">*/
/*                 <div id="menu_footer">*/
/*                     <ul>*/
/*                         {% for link in MenuFooter %}*/
/*                             <li><a href="{{ path('eplugg_front_page', {'slug': link.slug }) }}">{% if link.menuTitle is not empty %} {{ link.menuTitle }} {% else %} {{ link.title }} {% endif %}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*                 <div id="copyright"><img alt="Corporation" src="{{ asset('images/logo_footer.png') }}"> {{ 'Corporation'|trans }} &copy; 2016</div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/*     {% block after_footer %}*/
/*     {% endblock %}*/
/* </div>*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('/js/jquery-1.10.2.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jquery-ui-1.10.4.custom.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jquery.easing.min.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jquery.prettyPhoto.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jquery.cookie.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jquery.darktooltip.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jsrender.min.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jautocomplete.min.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/jquery.caret.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/popModal.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="{{ asset('/js/scripts.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>*/
/*     <script src="{{ asset('/js/menuphone/vendor/modernizr.custom.71422.js') }}"></script>*/
/*     <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDz_cFGBeygOAl5p8xKn-njVduhYuXOiFw"></script>*/
/* */
/*     <script src="{{ asset('/js/menuphone/pushy.min.js') }}">*/
/* */
/*         /*! Pushy - v0.9.1 - 2013-9-16*/
/*          * Pushy is a responsive off-canvas navigation menu using CSS transforms & transitions.*/
/*          * https://github.com/christophery/pushy/*/
/*          * by Christopher Yee *//* */
/*     $ (function(){function h(){t.toggleClass(o);e.toggleClass(s);n.toggleClass(u);r.toggleClass(a)}function p(){t.addClass(o);e.animate({left:"0px"},l);n.animate({left:c},l);r.animate({left:c},l)}function d(){t.removeClass(o);e.animate({left:"-"+c},l);n.animate({left:"0px"},l);r.animate({left:"0px"},l)}var e=$(".pushy"),t=$("body"),n=$("#eplugg"),r=$(".push"),i=$(".site-overlay"),s="pushy-left pushy-open",o="pushy-active",u="container-push",a="push-push",f=$(".menu-btn, .pushy a"),l=200,c=e.width()+"px";if(Modernizr.csstransforms3d){f.click(function(){h()});i.click(function(){h()})}else{e.css({left:"-"+c});n.css({"overflow-x":"hidden"});var v=!0;f.click(function(){if(v){p();v=!1}else{d();v=!0}});i.click(function(){if(v){p();v=!1}else{d();v=!0}})}});*/
/*     </script>*/
/*     <script type="text/javascript">*/
/* /**/
/*     By Osvaldas Valutis, www.osvaldas.info*/
/*     Available for use under the MIT License*/
/* *//* */
/* */
/* 'use strict';*/
/* */
/* ( function ( document, window, index )*/
/* {*/
/*     var inputs = document.querySelectorAll( '.inputfile' );*/
/*     Array.prototype.forEach.call( inputs, function( input )*/
/*     {*/
/*         var label    = input.nextElementSibling,*/
/*             labelVal = label.innerHTML;*/
/* */
/*         input.addEventListener( 'change', function( e )*/
/*         {*/
/*             var fileName = '';*/
/*             if( this.files && this.files.length > 1 )*/
/*                 fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );*/
/*             else*/
/*                 fileName = e.target.value.split( '\\' ).pop();*/
/* */
/*             if( fileName )*/
/*                 label.querySelector( 'span' ).innerHTML = fileName;*/
/*             else*/
/*                 label.innerHTML = labelVal;*/
/*         });*/
/* */
/*         // Firefox bug fix*/
/*         input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });*/
/*         input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });*/
/*     });*/
/* }( document, window, 0 ));*/
/*     </script>*/
/*     <script type="text/javascript" src="{{ asset('/js/step.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery.placeholder.js') }}"></script>*/
/*     <script>*/
/*         $(function() { $('input, textarea').placeholder(); });*/
/*     </script>*/
/*     <script src="{{ asset('js/script.js') }}" language="javascript" type="text/javascript"></script>*/
/* */
/* {% endblock %}*/
/* {% block js_chat %}*/
/*     <script type="text/javascript">*/
/* */
/*         function msg_read(sender){ // Read message is ok*/
/*             $('#' + sender + ' .top_message_box').css('background', '#fff');*/
/*             $.get("{{ path('eplugg_chat_read_approved') }}", {usertwo: sender}, function(data) {});*/
/*         }*/
/* */
/*         function addMsgBox(id){ // New box chat*/
/*             var html_ex = $('#content_msg_box').html();*/
/* */
/*             msg_read(id);*/
/* */
/*             $.post("{{ path('eplugg_chat_get_msg_box') }}",{usertwo: id}, function(data) { // Script make box caht*/
/*                 $('#content_msg_box').html(html_ex + data);*/
/*             });*/
/* */
/*         }*/
/* */
/*         function refreshTimer(){*/
/*             $.post("{{ path('eplugg_chat_refresh_timer_status') }}",*/
/*                     function(data) {*/
/*                         $('#infos_account').removeClass('label-online');*/
/*                         $('#infos_account').removeClass('label-offline');*/
/*                         if(data == 1){*/
/*                             $('#infos_account').addClass('label-online');*/
/*                         }*/
/*                         else if(data==0){*/
/*                             $('#infos_account').addClass('label-offline');*/
/*                         }*/
/*                     }*/
/*             );*/
/*             setTimeout('refreshTimer()',2500);*/
/*         }*/
/* */
/*         function addBoxAuto(id_box){*/
/* */
/*             if($('#' + id_box).height() == 23){ // If box is already create and if the box is lowered*/
/*                 $('#' + id_box).css('height', '374px').css('margin-top', '0px');*/
/* */
/*                 // Show elements*/
/*                 $('#box_msg_' + id_box).show();*/
/*                 $('#write_msg_' + id_box).show();*/
/*                 $('#box_msg_' + id_box).show();*/
/*             }*/
/* */
/*             if($('#' + id_box).length <= 0){ // If the box not exist*/
/* */
/*                 var large_dispo = $("html").width() - $('#list_friends').width();*/
/*                 var nb_max_box = large_dispo / 350;*/
/*                 nb_max_box = Math.round(nb_max_box-1);*/
/* */
/*                 if($('.message_box').size() < nb_max_box){ // Test if the box chat number is maximum*/
/*                     addMsgBox(id_box);*/
/*                 }*/
/*             }*/
/* */
/*         }*/
/* */
/* */
/*         function reloadMembers(){ // View contact*/
/*             if($("#search").val()==""){*/
/*                 $.post("{{ path('eplugg_chat_get_users') }}",*/
/*                         function(data, status) {*/
/*                             users = '';*/
/*                             for(i=0;i<data.length;i++){*/
/*                                 img = "{{ asset('uploads/pictures/') }}"+data[i].image;*/
/*                                 users =' <div class="line_friend" data-box="'+data[i].id+'">'+*/
/*                                 '<div class="img_friend">'+*/
/*                                 '<img width="36" height="34" src="'+img+'">'+*/
/*                                 '</div>'+*/
/*                                 '<span>'+data[i].username+'</span> '+data[i].statusMsg+*/
/*                                 '<a class="tooltip tooltip-left-message left-icon-tooltip" data-tooltip="">'+*/
/*                                 '<div class="icon_status_friend status-friend '+data[i].status+'"></div>'+*/
/*                                 '</a>'+*/
/*                                 '</div>' + users;*/
/*                                 if(data[i].statusMsg != ''){*/
/*                                     addBoxAuto(data[i].id);*/
/*                                 }*/
/*                             }*/
/*                             $('#list_friends_into').html(users);*/
/*                         });*/
/*                 setTimeout('reloadMembers()',5000);*/
/*             }*/
/*         }*/
/* */
/*         $(document).ready(function(){*/
/*             $('.souscat a').click(function(){*/
/*                 _this = $(this) ;*/
/*                 $('#userLang').val(_this.data('lang')) ;*/
/*                 $('#lang_link').html(_this.html()) ;*/
/*                 $('.souscat').animate({height: ['hide', 'swing'],opacity: 'hide'}, 500, 'linear');*/
/*             });*/
/*             $('#btn_cat, #lang_link').click(function(){*/
/*                 $(".souscat").animate({*/
/*                     height: ["toggle", "swing"],*/
/*                     opacity: "toggle"*/
/*                 }, 500, "linear")*/
/*             });*/
/* */
/*             $('body').on( "click",".line_friend", function(){ // Line contact for create box chat*/
/*                 var id_box = $(this).attr('data-box');*/
/* */
/*                 if($('#' + id_box).height() == 23){ // If box is already create and if the box is lowered*/
/*                     $('#' + id_box).css('height', '374px').css('margin-top', '0px');*/
/* */
/*                     // Show elements*/
/*                     $('#box_msg_' + id_box).show();*/
/*                     $('#write_msg_' + id_box).show();*/
/*                     $('#box_msg_' + id_box).show();*/
/*                 }*/
/* */
/*                 if($('#' + id_box).length <= 0){ // If the box not exist*/
/* */
/*                     var large_dispo = $("html").width() - $('#list_friends').width();*/
/*                     var nb_max_box = large_dispo / 350;*/
/*                     nb_max_box = Math.round(nb_max_box-1);*/
/* */
/*                     if($('.message_box').size() < nb_max_box){ // Test if the box chat number is maximum*/
/*                         addMsgBox(id_box);*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             $('.href_dyn').on("click", function () { // Change statustop bar*/
/* */
/*                 $.get($(this).attr("href"));*/
/* */
/*                 // Remove class button*/
/*                 $('#infos_account').removeClass('label-online');*/
/*                 $('#infos_account').removeClass('label-offline');*/
/* */
/*                 // Set new status*/
/*                 var StatusNew = $(this).attr('data-status');*/
/* */
/* */
/*                 // Add class - is selected*/
/*                 $('#infos_account').addClass(StatusNew);*/
/* */
/*                 if(StatusNew == 'label-online'){ s = 1; } else{ s = 0; }*/
/* */
/*                 $.post("{{ path('eplugg_chat_update_my_status') }}", { status: s } );*/
/* */
/*                 // Reset timer for change status*/
/* */
/*                 return false;*/
/*             });*/
/* */
/*             $("#search").on("keyup",function() {*/
/*                 $.post("{{ path('eplugg_chat_search_friend') }}",*/
/*                         {search: $(this).val()},*/
/*                         function(data, status) {*/
/*                             users = '';*/
/*                             for(i=0;i<data.length;i++){*/
/*                                 img = "{{ asset('uploads/pictures/') }}"+data[i].image;*/
/*                                 users =' <div class="line_friend" data-box="'+data[i].id+'">'+*/
/*                                 '<div class="img_friend">'+*/
/*                                 '<img width="36" height="34" src="'+img+'">'+*/
/*                                 '</div>'+*/
/*                                 '<span>'+data[i].username+'</span> '+data[i].statusMsg+*/
/*                                 '<a class="tooltip tooltip-left-message left-icon-tooltip" data-tooltip="">'+*/
/*                                 '<div class="icon_status_friend status-friend '+data[i].status+'"></div>'+*/
/*                                 '</a>'+*/
/*                                 '</div>' + users;*/
/*                                 if(data[i].statusMsg != ''){*/
/*                                     addBoxAuto(data[i].id);*/
/*                                 }*/
/*                             }*/
/*                             $('#list_friends_into').html(users);*/
/*                         }*/
/*                 );*/
/*             });*/
/* */
/* */
/* */
/*             refreshTimer();*/
/*             reloadMembers();*/
/* */
/*         }) ;*/
/*     </script>*/
/* {% endblock %}*/
/* {% block js_geolocalization %}*/
/* <script type="text/javascript">*/
/*     if (navigator.geolocation) {*/
/*         var watchId = navigator.geolocation.watchPosition(successCallbackGeolocalization, null, {enableHighAccuracy:true});*/
/* */
/*     }*/
/*     else {*/
/*            */
/*         $.ajax({*/
/*            url: "{{ path('eplugg_update_coordinations') }}",*/
/*            type: "GET", */
/*            data: "geo=false",*/
/*            success : function (result) {*/
/*            }*/
/*         });*/
/*     }*/
/* */
/*     function successCallbackGeolocalization(position){*/
/*         var latitude = position.coords.latitude;*/
/*         var longitude = position.coords.longitude;    */
/*        $.ajax({*/
/*            url : "{{ path('eplugg_update_coordinations') }}",*/
/*            type : "GET",*/
/*            data : "geo=true&lat=" + latitude + "&lon="+ longitude,*/
/*            success : function (result) {*/
/*            }*/
/*         });*/
/*     };*/
/* </script>*/
/* {% endblock %}*/
/* {% block more_javascripts %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */

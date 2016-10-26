<?php

/* EpluggFrontBundle:Localization:map_localization.html.twig */
class __TwigTemplate_61fa2ddbe0ca30c7c8434fa701a909f5bfd056e6344393b147d5141c2479ebbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

    <style type=\"text/css\">
        html { height: 100% }
        body { height: 100%; margin: 0px; padding: 0px }
        #map_canvas { height: 100% ; width:100%;}
    </style>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/gmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\" language=\"javascript\"></script>
    <script type=\"text/javascript\">

   
        function initialize() {
            centred = false;
            map = new google.maps.Map(document.getElementById(\"map_canvas\"), {
                zoom: 19,
                center: new google.maps.LatLng(";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "latitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "longitude", array()), "html", null, true);
        echo "),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        }

        if (navigator.geolocation) {
            var watchId = navigator.geolocation.watchPosition(successCallback, null, {enableHighAccuracy:true});


        }
        else {
             \$.ajax({
               url: \"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("eplugg_update_coordinations");
        echo "\",
               type: \"GET\", 
               data: \"geo=false\",
               success : function (result) {
               }
            });
            alert(\"Votre navigateur ne prend pas en compte la géolocalisation HTML5\");
            
        }

        function successCallback(position){
            if(!centred) {
                 map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));

            }
               var latitude = position.coords.latitude;
               var longitude = position.coords.longitude;  
               \$.ajax({
                   url : \"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("eplugg_update_coordinations");
        echo "\",
                   type : \"GET\",
                   data : \"geo=true&lat=\" + latitude + \"&lon=\"+ longitude,
                   success : function (result) {
                   }
                });
            var bounds = new google.maps.LatLngBounds();
            var markers = [
                [\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mon position"), "html", null, true);
        echo "\", position.coords.latitude, position.coords.longitude, \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/red-marker.ico"), "html", null, true);
        echo "\"],
                ";
        // line 63
        if ( !twig_test_empty((isset($context["friendsOnline"]) ? $context["friendsOnline"] : null))) {
            // line 64
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friendsOnline"]) ? $context["friendsOnline"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 65
                echo "                        [' ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["friend"], "lastname", array())), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "latitude", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "longitude", array()), "html", null, true);
                echo ", \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/blue-marker.ico"), "html", null, true);
                echo "\"],
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                ";
        }
        // line 68
        echo "            ];
                var infoWindowContent = [
                ['<div class=\"info_content\">' +
                '<h3>London Eye</h3>' +
                '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
                ";
        // line 73
        if ( !twig_test_empty((isset($context["friendsOnline"]) ? $context["friendsOnline"] : null))) {
            // line 74
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friendsOnline"]) ? $context["friendsOnline"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 75
                echo "                        [
                        '<div id=\"card_eplugg\" >'+ 
                            '<div class=\"yellow\"><img src=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrow-yelow.png"), "html", null, true);
                echo "\"></div>'+
                            '<div id=\"card_user\">'+
                                '<div class=\"img_profil\">'+
                                    '<a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                if ( !twig_test_empty($this->getAttribute($context["friend"], "avatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["friend"], "avatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar.png"), "html", null, true);
                    echo " ";
                }
                echo "\" alt=\"\" width=\"48\" height=\"48\"></a>'+
                                '</div>'+
                                '<div class=\"descp_card\">'+
                                    '<div class=\"name_user\"><a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["friend"], "lastname", array())), "html", null, true);
                echo "</a></div>'+
                                    '<div class=\"job_user\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "job", array()), "html", null, true);
                echo "</div>'+
                                '</div>'+
                                '<div class=\"clear\"></div>'+
                            '</div>'+
                            '<div id=\"card_company\">'+
                                '<div class=\"img_profil\">'+
                                    '<a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                if ( !twig_test_empty($this->getAttribute($context["friend"], "CompanyAvatar", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["friend"], "CompanyAvatar", array()), "croppedWebPath", array())), "html", null, true);
                    echo " ";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-company.png"), "html", null, true);
                    echo " ";
                }
                echo "\" width=\"51\" height=\"51\"></a>'+
                                '</div>'+
                                '<div class=\"descp_card\">'+
                                    '<div class=\"company_user\"><a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "companyName", array()), "html", null, true);
                echo "</a></div>'+
                                    '<div class=\"tag_company\">";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getActivitiesFormatted", array()), "html", null, true);
                echo "</div>'+
                                '<div class=\"lieu_company\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "companyAddress", array()), "html", null, true);
                echo "</div>'+
                            '</div>'+
                            '<div class=\"clear\"></div>'+
                        '</div>'
                        ],
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                ";
        }
        // line 102
        echo "            ];
            var infoWindow = new google.maps.InfoWindow(), marker, i;
            
                var Myposition = new google.maps.LatLng(markers[0][1], markers[0][2]);
                bounds.extend(Myposition);
            
            // Loop through our array of markers & place each one on the map  
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);

                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0],
                    icon: markers[i][3]
                });
                
                // Allow each marker to have an info window    
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                if(!centred) {
                    map.fitBounds(bounds);

                }
            }
  
            centred = true;

        };


    </script>
</head>

<body onload=\"initialize()\">
<div id=\"map_canvas\"></div>
</body>

</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Eplugg"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Localization"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Localization:map_localization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 4,  235 => 102,  232 => 101,  220 => 95,  216 => 94,  210 => 93,  195 => 90,  186 => 84,  178 => 83,  163 => 80,  157 => 77,  153 => 75,  148 => 74,  146 => 73,  139 => 68,  136 => 67,  119 => 65,  114 => 64,  112 => 63,  106 => 62,  95 => 54,  74 => 36,  57 => 24,  46 => 16,  41 => 14,  31 => 7,  25 => 4,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% block title %}{{ 'Eplugg'|trans }} - {{ 'Localization'|trans }}{% endblock %}</title>*/
/* */
/*     <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />*/
/*     <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet">*/
/* */
/*     <style type="text/css">*/
/*         html { height: 100% }*/
/*         body { height: 100%; margin: 0px; padding: 0px }*/
/*         #map_canvas { height: 100% ; width:100%;}*/
/*     </style>*/
/*         <script src="{{ asset('/js/jquery-1.10.2.js') }}" type="text/javascript" language="javascript"></script>*/
/* */
/*     <script src="{{ asset('/js/gmap.js') }}" type="text/javascript" language="javascript"></script>*/
/*     <script type="text/javascript">*/
/* */
/*    */
/*         function initialize() {*/
/*             centred = false;*/
/*             map = new google.maps.Map(document.getElementById("map_canvas"), {*/
/*                 zoom: 19,*/
/*                 center: new google.maps.LatLng({{currentUser.latitude}}, {{currentUser.longitude}}),*/
/*                 mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*             });*/
/*         }*/
/* */
/*         if (navigator.geolocation) {*/
/*             var watchId = navigator.geolocation.watchPosition(successCallback, null, {enableHighAccuracy:true});*/
/* */
/* */
/*         }*/
/*         else {*/
/*              $.ajax({*/
/*                url: "{{ path('eplugg_update_coordinations') }}",*/
/*                type: "GET", */
/*                data: "geo=false",*/
/*                success : function (result) {*/
/*                }*/
/*             });*/
/*             alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");*/
/*             */
/*         }*/
/* */
/*         function successCallback(position){*/
/*             if(!centred) {*/
/*                  map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));*/
/* */
/*             }*/
/*                var latitude = position.coords.latitude;*/
/*                var longitude = position.coords.longitude;  */
/*                $.ajax({*/
/*                    url : "{{ path('eplugg_update_coordinations') }}",*/
/*                    type : "GET",*/
/*                    data : "geo=true&lat=" + latitude + "&lon="+ longitude,*/
/*                    success : function (result) {*/
/*                    }*/
/*                 });*/
/*             var bounds = new google.maps.LatLngBounds();*/
/*             var markers = [*/
/*                 ["{{ 'mon position'|trans }}", position.coords.latitude, position.coords.longitude, "{{ asset('/images/red-marker.ico') }}"],*/
/*                 {% if friendsOnline is not empty  %}*/
/*                     {% for friend in friendsOnline %}*/
/*                         [' {{ friend.firstname }} {{ friend.lastname|upper }}', {{ friend.latitude }}, {{ friend.longitude }}, "{{ asset('/images/blue-marker.ico') }}"],*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             ];*/
/*                 var infoWindowContent = [*/
/*                 ['<div class="info_content">' +*/
/*                 '<h3>London Eye</h3>' +*/
/*                 '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],*/
/*                 {% if friendsOnline is not empty  %}*/
/*                     {% for friend in friendsOnline %}*/
/*                         [*/
/*                         '<div id="card_eplugg" >'+ */
/*                             '<div class="yellow"><img src="{{ asset('images/arrow-yelow.png') }}"></div>'+*/
/*                             '<div id="card_user">'+*/
/*                                 '<div class="img_profil">'+*/
/*                                     '<a href="{{ path('eplugg_profile_page', {'uid': friend.id }) }}"><img src="{% if friend.avatar is not empty %} {{ asset(friend.avatar.croppedWebPath) }} {% else %}{{ asset('images/avatar.png') }} {% endif %}" alt="" width="48" height="48"></a>'+*/
/*                                 '</div>'+*/
/*                                 '<div class="descp_card">'+*/
/*                                     '<div class="name_user"><a href="{{ path('eplugg_profile_page', {'uid': friend.id }) }}"> {{ friend.firstname }} {{ friend.lastname|upper }}</a></div>'+*/
/*                                     '<div class="job_user">{{ friend.job }}</div>'+*/
/*                                 '</div>'+*/
/*                                 '<div class="clear"></div>'+*/
/*                             '</div>'+*/
/*                             '<div id="card_company">'+*/
/*                                 '<div class="img_profil">'+*/
/*                                     '<a href="{{ path('eplugg_profile_page', {'uid': friend.id }) }}"><img src="{% if friend.CompanyAvatar is not empty %} {{ asset(friend.CompanyAvatar.croppedWebPath) }} {% else %}{{ asset('images/avatar-company.png') }} {% endif %}" width="51" height="51"></a>'+*/
/*                                 '</div>'+*/
/*                                 '<div class="descp_card">'+*/
/*                                     '<div class="company_user"><a href="{{ path('eplugg_profile_page', {'uid': friend.id }) }}">{{ friend.companyName }}</a></div>'+*/
/*                                     '<div class="tag_company">{{ friend.getActivitiesFormatted }}</div>'+*/
/*                                 '<div class="lieu_company">{{ friend.companyAddress }}</div>'+*/
/*                             '</div>'+*/
/*                             '<div class="clear"></div>'+*/
/*                         '</div>'*/
/*                         ],*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             ];*/
/*             var infoWindow = new google.maps.InfoWindow(), marker, i;*/
/*             */
/*                 var Myposition = new google.maps.LatLng(markers[0][1], markers[0][2]);*/
/*                 bounds.extend(Myposition);*/
/*             */
/*             // Loop through our array of markers & place each one on the map  */
/*             for( i = 0; i < markers.length; i++ ) {*/
/*                 var position = new google.maps.LatLng(markers[i][1], markers[i][2]);*/
/* */
/*                 marker = new google.maps.Marker({*/
/*                     position: position,*/
/*                     map: map,*/
/*                     title: markers[i][0],*/
/*                     icon: markers[i][3]*/
/*                 });*/
/*                 */
/*                 // Allow each marker to have an info window    */
/*                 google.maps.event.addListener(marker, 'click', (function(marker, i) {*/
/*                     return function() {*/
/*                         infoWindow.setContent(infoWindowContent[i][0]);*/
/*                         infoWindow.open(map, marker);*/
/*                     }*/
/*                 })(marker, i));*/
/* */
/*                 // Automatically center the map fitting all markers on the screen*/
/*                 if(!centred) {*/
/*                     map.fitBounds(bounds);*/
/* */
/*                 }*/
/*             }*/
/*   */
/*             centred = true;*/
/* */
/*         };*/
/* */
/* */
/*     </script>*/
/* </head>*/
/* */
/* <body onload="initialize()">*/
/* <div id="map_canvas"></div>*/
/* </body>*/
/* */
/* </html>*/

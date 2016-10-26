<?php

/* EpluggFrontBundle:Messages:msg_box_chat.html.twig */
class __TwigTemplate_ace6dbb3f4f9ae2a8f216bd258c51bbc96f55622cac7a84b2eb889a634378033 extends Twig_Template
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
        echo "<div class=\"message_box\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\" style=\"z-index: 20;\">
\t<script type=\"text/javascript\">

\t\t\$(document).ready(function() {
\t\t\t\$('#";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "').scrollTop(\$('#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "').height()); // Scrolltop Message box
\t\t\treloadMembers";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "(); 
\t\t\t//reloadStatusPl";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo ");
\t\t});
\t\t
\t\t\tfunction reloadmsg(key1, key2, box){ // Reload message for box contact
\t\t\t\tvar ancien_script = \$('#' + key2 + key1).html().length;

\t\t\t\t\$.post(\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_reload_Messages");
        echo "\", {usertwo: key2}, function(data) { 
\t\t\t\t\tvar nbCNewt = data.length;
\t\t\t\t\t//var nbCNew = data.length;
\t\t\t\t\tif((ancien_script - 10) < nbCNewt && nbCNewt > (ancien_script + 10)){
\t\t\t\t\t\t\$('#' + key2 + key1).html(data); 
\t\t\t\t\t\t\$('#' + key2 + key1).scrollTop(\$('#' + key2 + key1).height() + 5000000000000);
\t\t\t\t\t}
\t\t\t\t });
\t\t\t}
\t\t
\t\tfunction reloadMembers";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "(){ 

\t\t\tvar id_box = ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo ";
\t\t\tif(\$('#' + id_box).height() != 23){ 
\t\t\t\treloadmsg(\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "\", '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "');
\t\t\t}
\t\t\tvar name = ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "; 
\t\t\tsetTimeout('reloadMembers' + name + '()',2000); // Set every '2' secondes - Reload message

\t\t}
\t\t
\t\t/*
\t\tfunction reloadStatusPl";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "(key){
\t\t\t\$.get('scripts/load/StatusAccount.php?format=2&key=' + key, function(data) { 
\t\t\t\t\$('#reloadReceiver_' + ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo ").html(data); 

\t\t\t});
\t\t\tsetTimeout('reloadStatusPl' + ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo " + '(' + key + ')', 2000); // Reload data every 2 sec
\t\t}
\t\t*/
\t\t
\t\tfunction msg_read(sender){ // Read message is ok
\t\t\t\$('#' + sender + ' .top_message_box').css('background', '#fff');
\t\t\t\$.get(\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_read_approved");
        echo "\", {usertwo: sender}, function(data) {});
\t\t}
\t\t
\t\t\$('.message_box').on('click', function(){ // Click box, select text for write an message more easy
\t\t\tvar id_box = \$(this).attr('id'); 
\t\t\t\$('#text_' + id_box).focus();

\t\t\tmsg_read(id_box);

\t\t});
\t\t
\t\t\$(\".form_add_msg\").on(\"submit\", function () { // Action message for write an new message
\t\t\tvar id_box = \$(this).attr('data');
\t\t\tmsg_read(id_box);
\t\t\t\$.post(\$(this).attr(\"action\"), \$(this).serialize(), function (data) { 
\t\t\t\t\$('#text_' + id_box).val(''); 
\t\t\t});

\t\t\t // Resest function for change status abscent

\t\t\treturn false;
\t\t});
\t\t
\t\t\$('.icon_close').on(\"click\", function(){ // Function for close box
\t\t\tvar id_box = \$(this).attr('data');
\t\t\t\$('#' + id_box).remove(); 
\t\t});
\t\t
\t\t\$('.resize_box').on(\"click\", function(){ // Resize box for button

\t\t\tvar id_box = \$(this).attr('data');
\t\t\tvar height_box = \$('#' + id_box).height();

\t\t\tif(height_box == 23){ // Test if the box is already lowered
\t\t\t\t\$('#' + id_box).css('height', '374px').css('margin-top', '0px');
\t\t\t\t\$(this).removeClass('icon_fsize').addClass('icon_risize');

\t\t\t\t// Show elements
\t\t\t\t\$('#box_msg_' + id_box).show();
\t\t\t\t\$('#write_msg_' + id_box).show();
\t\t\t\t\$('#box_msg_' + id_box).show();

\t\t\t}
\t\t\telse { // Else lowered the box
\t\t\t\t\$('#' + id_box).css('height', '23px').css('margin-top', '351px');
\t\t\t\t\$(this).removeClass('icon_risize').addClass('icon_fsize');

\t\t\t\t// Hide elements
\t\t\t\t\$('#box_msg_' + id_box).hide();
\t\t\t\t\$('#write_msg_' + id_box).hide();
\t\t\t\t\$('#box_msg_' + id_box).hide();
\t\t\t}

\t\t\tfriendResize();

\t\t});
\t
\t</script>
\t<div class=\"top_message_box\" data-box=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\"> <!-- Message box -->
\t\t<div class=\"reloadReceiverStatus\" id=\"reloadReceiver_";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t<div class=\"status_message_box ";
        // line 106
        if ((($this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "status", array()) == 1) && (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) - $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "timer", array())) < 5))) {
            echo "online-small-status";
        } else {
            echo "offline-status";
        }
        echo "\"></div> 
\t\t\t<a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eplugg_profile_page", array("uid" => $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "lastName", array()), "html", null, true);
        echo "</a>
\t\t</div>
\t\t<div class=\"icon_message_box\"> <!-- Icon box -->
\t\t\t<div data=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\" class=\"icon_message_box_modal resize_box icon_risize\"></div>
\t\t\t<div data=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\" class=\"icon_message_box_modal icon_close\"></div>
\t\t</div>
\t</div>
\t<div class=\"reload_box\" id=\"box_msg_";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\"> 
\t\t<div class=\"msg_content_all\" id=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "\"> <!-- Reception messages here -->
\t\t
\t\t</div>
\t\t<div id=\"write_msg_";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\" class=\"write_msg\"> <!-- Written box -->
\t\t\t<form class=\"form_add_msg\" data=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\" dataTo=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()), "html", null, true);
        echo "\" action=\"";
        echo $this->env->getExtension('routing')->getPath("eplugg_chat_send_message");
        echo "\" method=\"post\">
\t\t\t\t<input type=\"hidden\" style=\"display:none;\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\" name=\"usertwo\"/> 
\t\t\t\t<input id=\"text_";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destination"]) ? $context["destination"] : null), "id", array()), "html", null, true);
        echo "\" name=\"message\" placeholder=\"Your message ...\" type=\"text\" autocomplete=\"off\" />
\t\t\t\t<input style=\"left:-999em; position:absolute; top:-999em;\" type=\"submit\"/>
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "EpluggFrontBundle:Messages:msg_box_chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 121,  240 => 120,  231 => 119,  227 => 118,  220 => 115,  216 => 114,  210 => 111,  206 => 110,  196 => 107,  188 => 106,  184 => 105,  180 => 104,  119 => 46,  109 => 40,  103 => 37,  97 => 35,  87 => 29,  76 => 27,  71 => 25,  65 => 23,  52 => 13,  40 => 7,  35 => 6,  27 => 5,  19 => 1,);
    }
}
/* <div class="message_box" id="{{ destination.id }}" style="z-index: 20;">*/
/* 	<script type="text/javascript">*/
/* */
/* 		$(document).ready(function() {*/
/* 			$('#{{ destination.id }}{{ currentUser.id }}').scrollTop($('#{{ destination.id }}{{ currentUser.id }}').height()); // Scrolltop Message box*/
/* 			reloadMembers{{ destination.id }}{{ currentUser.id }}(); */
/* 			//reloadStatusPl{{ destination.id }}{{ currentUser.id }}({{ destination.id }});*/
/* 		});*/
/* 		*/
/* 			function reloadmsg(key1, key2, box){ // Reload message for box contact*/
/* 				var ancien_script = $('#' + key2 + key1).html().length;*/
/* */
/* 				$.post("{{ path('eplugg_chat_reload_Messages') }}", {usertwo: key2}, function(data) { */
/* 					var nbCNewt = data.length;*/
/* 					//var nbCNew = data.length;*/
/* 					if((ancien_script - 10) < nbCNewt && nbCNewt > (ancien_script + 10)){*/
/* 						$('#' + key2 + key1).html(data); */
/* 						$('#' + key2 + key1).scrollTop($('#' + key2 + key1).height() + 5000000000000);*/
/* 					}*/
/* 				 });*/
/* 			}*/
/* 		*/
/* 		function reloadMembers{{ destination.id }}{{ currentUser.id }}(){ */
/* */
/* 			var id_box = {{ destination.id }};*/
/* 			if($('#' + id_box).height() != 23){ */
/* 				reloadmsg("{{ currentUser.id }}", '{{ destination.id }}', '{{ destination.id }}#{{ currentUser.id }}');*/
/* 			}*/
/* 			var name = {{ destination.id }}{{ currentUser.id }}; */
/* 			setTimeout('reloadMembers' + name + '()',2000); // Set every '2' secondes - Reload message*/
/* */
/* 		}*/
/* 		*/
/* 		/**/
/* 		function reloadStatusPl{{ destination.id }}{{ currentUser.id }}(key){*/
/* 			$.get('scripts/load/StatusAccount.php?format=2&key=' + key, function(data) { */
/* 				$('#reloadReceiver_' + {{ destination.id }}).html(data); */
/* */
/* 			});*/
/* 			setTimeout('reloadStatusPl' + {{ destination.id }}{{ currentUser.id }} + '(' + key + ')', 2000); // Reload data every 2 sec*/
/* 		}*/
/* 		*//* */
/* 		*/
/* 		function msg_read(sender){ // Read message is ok*/
/* 			$('#' + sender + ' .top_message_box').css('background', '#fff');*/
/* 			$.get("{{ path('eplugg_chat_read_approved') }}", {usertwo: sender}, function(data) {});*/
/* 		}*/
/* 		*/
/* 		$('.message_box').on('click', function(){ // Click box, select text for write an message more easy*/
/* 			var id_box = $(this).attr('id'); */
/* 			$('#text_' + id_box).focus();*/
/* */
/* 			msg_read(id_box);*/
/* */
/* 		});*/
/* 		*/
/* 		$(".form_add_msg").on("submit", function () { // Action message for write an new message*/
/* 			var id_box = $(this).attr('data');*/
/* 			msg_read(id_box);*/
/* 			$.post($(this).attr("action"), $(this).serialize(), function (data) { */
/* 				$('#text_' + id_box).val(''); */
/* 			});*/
/* */
/* 			 // Resest function for change status abscent*/
/* */
/* 			return false;*/
/* 		});*/
/* 		*/
/* 		$('.icon_close').on("click", function(){ // Function for close box*/
/* 			var id_box = $(this).attr('data');*/
/* 			$('#' + id_box).remove(); */
/* 		});*/
/* 		*/
/* 		$('.resize_box').on("click", function(){ // Resize box for button*/
/* */
/* 			var id_box = $(this).attr('data');*/
/* 			var height_box = $('#' + id_box).height();*/
/* */
/* 			if(height_box == 23){ // Test if the box is already lowered*/
/* 				$('#' + id_box).css('height', '374px').css('margin-top', '0px');*/
/* 				$(this).removeClass('icon_fsize').addClass('icon_risize');*/
/* */
/* 				// Show elements*/
/* 				$('#box_msg_' + id_box).show();*/
/* 				$('#write_msg_' + id_box).show();*/
/* 				$('#box_msg_' + id_box).show();*/
/* */
/* 			}*/
/* 			else { // Else lowered the box*/
/* 				$('#' + id_box).css('height', '23px').css('margin-top', '351px');*/
/* 				$(this).removeClass('icon_risize').addClass('icon_fsize');*/
/* */
/* 				// Hide elements*/
/* 				$('#box_msg_' + id_box).hide();*/
/* 				$('#write_msg_' + id_box).hide();*/
/* 				$('#box_msg_' + id_box).hide();*/
/* 			}*/
/* */
/* 			friendResize();*/
/* */
/* 		});*/
/* 	*/
/* 	</script>*/
/* 	<div class="top_message_box" data-box="{{ destination.id }}"> <!-- Message box -->*/
/* 		<div class="reloadReceiverStatus" id="reloadReceiver_{{ destination.id }}">*/
/* 			<div class="status_message_box {% if destination.status == 1 and date().timestamp - destination.timer < 5 %}online-small-status{% else %}offline-status{% endif %}"></div> */
/* 			<a href="{{ path('eplugg_profile_page', { 'uid': destination.id }) }}">{{ destination.firstName }} {{ destination.lastName }}</a>*/
/* 		</div>*/
/* 		<div class="icon_message_box"> <!-- Icon box -->*/
/* 			<div data="{{ destination.id }}" class="icon_message_box_modal resize_box icon_risize"></div>*/
/* 			<div data="{{ destination.id }}" class="icon_message_box_modal icon_close"></div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="reload_box" id="box_msg_{{ destination.id }}"> */
/* 		<div class="msg_content_all" id="{{ destination.id }}{{ currentUser.id }}"> <!-- Reception messages here -->*/
/* 		*/
/* 		</div>*/
/* 		<div id="write_msg_{{ destination.id }}" class="write_msg"> <!-- Written box -->*/
/* 			<form class="form_add_msg" data="{{ destination.id }}" dataTo="{{ destination.id }}{{ currentUser.id }}" action="{{ path('eplugg_chat_send_message') }}" method="post">*/
/* 				<input type="hidden" style="display:none;" value="{{ destination.id }}" name="usertwo"/> */
/* 				<input id="text_{{ destination.id }}" name="message" placeholder="Your message ..." type="text" autocomplete="off" />*/
/* 				<input style="left:-999em; position:absolute; top:-999em;" type="submit"/>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/

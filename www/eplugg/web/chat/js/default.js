//****************************//
//**** JAVASCRIPT PAGE
//****************************//

$(document).ready(function() {

	// Function start
	friendResize(); // Height for right bar contact
	NewMsg(); // Sound icon new message not ready
	updateTime(); // Change time for the status
	GetStatusTop();

	$(window).resize(friendResize); // Right bar contact risize

	$('.case-status').click(function(){ // Change status header notification

		var clicked_status = $(this).attr('data-status');
		var clicked_id = $(this).attr('id');

		// Change status header view
			$('#online-status').removeClass('status-inc');
			$('#abs-status').removeClass('status-inc');
			$('#occuped-status').removeClass('status-inc');
			$('#offline-status').removeClass('status-inc');

			$('#' + clicked_id).addClass('status-inc');

	});

	$('.resize_box').live("click", function(){ // Resize box for button

		var id_box = $(this).attr('data');
		var height_box = $('#' + id_box).height();

		if(height_box == 23){ // Test if the box is already lowered
			$('#' + id_box).css('height', '374px').css('margin-top', '0px');
			$(this).removeClass('icon_fsize').addClass('icon_risize');

			// Show elements
			$('#box_msg_' + id_box).show();
			$('#write_msg_' + id_box).show();
			$('#box_msg_' + id_box).show();

		}
		else { // Else lowered the box
			$('#' + id_box).css('height', '23px').css('margin-top', '351px');
			$(this).removeClass('icon_risize').addClass('icon_fsize');

			// Hide elements
			$('#box_msg_' + id_box).hide();
			$('#write_msg_' + id_box).hide();
			$('#box_msg_' + id_box).hide();
		}

		friendResize();

	});

	$('.box_list_smiley img').live('click', function(){ // When user click smiley
		var idbox = $(this).parent().attr('data-box');
		var symbol = $(this).attr('data-icon');
		$('#text_' + idbox).val($('#text_' + idbox).val() + ' ' + symbol);
		$('#smileybox' + idbox).hide();
	});

	$('.message_box').live('click', function(){ // Click box, select text for write an message more easy
		var id_box = $(this).attr('id'); 
		$('#text_' + id_box).focus();

		msg_read(id_box);

	});

	$('.btn_open_box_smiley').live('click', function(){ // Open box smiley
		var boxParent = $(this).parent().attr('class');
		var box = $(this).parent().attr('data');
		$('.' + boxParent + ' #smileybox' + box).toggle();
	});

	$('.icon_close').live("click", function(){ // Function for close box
		var id_box = $(this).attr('data');
		$('#' + id_box).remove(); 
	});

	$('.line_friend').live("click", function(){ // Line contact for create box chat
		var id_box = $(this).attr('data-box'); 

		if($('#' + id_box).height() == 23){ // If box is already create and if the box is lowered
			$('#' + id_box).css('height', '374px').css('margin-top', '0px');

			// Show elements
			$('#box_msg_' + id_box).show();
			$('#write_msg_' + id_box).show();
			$('#box_msg_' + id_box).show();
		}

		if($('#' + id_box).length <= 0){ // If the box not exist

			var large_dispo = $("html").width() - $('#list_friends').width(); 
			var nb_max_box = large_dispo / 350; 
			nb_max_box = Math.round(nb_max_box-1); 

			if($('.message_box').size() < nb_max_box){ // Test if the box chat number is maximum
				addMsgBox(id_box);
			}
		} 
	});

	if($('.friend-num-connected').size() > 0){ // Test if the login is ok
		firstReloadMembers();
	}


	$('#btn_showloginregister').live('click', function(){ // Button register or login
		$('.btn_registerorlogin').fadeOut('fast');
		$('.login_box').delay(200).fadeIn();
	});

	$(".form_add_msg").live("submit", function () { // Action message for write an new message
		var id_box = $(this).attr('data');
		msg_read(id_box);
	    $.post($(this).attr("action"), $(this).serialize(), function (data) { 
	    	$('#text_' + id_box).val(''); 
	    });

	     // Resest function for change status abscent

	    return false;
	});

	$('.href_dyn').live("click", function () { // Change statustop bar

	    $.get($(this).attr("href"));

	    // Remove class button
	    $('#infos_account').removeClass('label-online');
		$('#infos_account').removeClass('label-abs');
		$('#infos_account').removeClass('label-occuped');
		$('#infos_account').removeClass('label-offline');

		// Set new status
		var StatusNew = $(this).attr('data-status');

		// Add class - is selected
		$('#infos_account').addClass(StatusNew);

		 // Reset timer for change status

	    return false;
    });

    $('#actionsRegister').live('submit', function(){ // Register for AJAX
    	$.post($(this).attr("action"), $(this).serialize(), function (data) { 
	    	if(data == '1'){ // If register is success
	    		$('#actionsRegister').hide();
	    		$('.announceRegisterOk').fadeIn('fast');
	    	}
	    	else { // If the informations connect is false
	    		$('.announceRegister').html(data);
    			return false;
	    	}
	    });
	    return false;
	});

	$('#actionsLogin').live('submit', function(){ // Login for AJAX
    	$.post($(this).attr("action"), $(this).serialize(), function (data) { 
	    	if(data == '1'){ 
	    		location.reload(); // Reload this page
	    	}
	    	else { // If the informations connect is false
	    		$('.announceLogin').html(data); 
    			return false;
	    	}
	    });
	    return false;
	});

	///////// FUNCTION ///////
	function friendResize() { // Function resize right bar contact
	    var newHeight = $("html").height() - $("#top_nav").height() - 1;
	    $("#list_friends").css("height", newHeight + 'px');

	    if($('#infos_account').is(':visible')){
	    	$('#list_friends_into').css('height', newHeight - 56 + 'px');
	    }
	}


});

	/////////   VAR    ///////
	var timer = 0; // Timer abscent
	var timer_2 = 0; // Timer offline

	$(document).mousemove(function(){ // If the user move the Mouse
		timer = 0; 
		timer_2 = 0;
	});
	
	///////// FUNCTION ///////
	function msg_read(sender){ // Read message is ok
		$('#' + sender + ' .top_message_box').css('background', '#fff');
		$.get('scripts/actions/ReadApproved.php?sender=' + sender, function(data) {});
	}

	function firstReloadMembers(){ // Test if the connect is true
		$('.login_or_register').remove();
		$('.btn_registerorlogin').remove();
		$('.login_box').remove();

		$('.loader').fadeIn('fast');
		setTimeout(reloadMembers, 1000);

	}

	function reloadMembers(){ // View contact
		$.get('scripts/load/members.php', function(data) { 
		  $('#list_friends_into').html(data);
		});
		setTimeout('reloadMembers()',2000); 
	}

	function reloadmsg(key1, key2, box){ // Reload message for box contact
		var ancien_script = $('#' + key2 + key1).html().length;

		$.get('scripts/actions/messages.php?to=' + key2, function(data) { 
			var nbCNewt = data.length;
			//var nbCNew = data.length;
		   	if((ancien_script - 10) < nbCNewt && nbCNewt > (ancien_script + 10)){
		   		$('#' + key2 + key1).html(data); 
		   		$('#' + key2 + key1).scrollTop($('#' + key2 + key1).height() + 5000000000000);
		  	}
		 });
	}

	function addMsgBox(id){ // New box chat
		var html_ex = $('#content_msg_box').html(); 

		msg_read(id); 

		$.get('scripts/actions/MakeBox.php?id=' + id, function(data) { // Script make box caht
		  $('#content_msg_box').html(html_ex + data); 
		});

	}

	function NewMsg(){ // Sound message
		
		if($('.new-message').length >= 1){ 
			var onSound = $('.new-message').attr('data');
			var idBox = $('.new-message').attr('data-contact');
			if(onSound == 'on'){ 
				CreateSound();
				$("#" + idBox + ' .top_message_box').css('background', '#f0f0f0').effect("highlight", {color:"#f6f6f6"}, 400);
				$('.new-message').removeAttr('data'); 
			}
		}

		setTimeout('NewMsg()',6000); // Time message not read

	}

	function CreateSound(){ // Sound create
		var bip_sound = $("#bip-sound")[0]; 
		bip_sound.volume = 0.2;
		bip_sound.pause(); 
		bip_sound.play(); 
	}

	function resetTimer(){ // Reset timer
		timer = 0;
		timer_2 = 0;
	}

	function UpdateStatus(nb){ // Update status
		$.get('scripts/actions/StatusChange.php?nb=' + nb, function() {}); // Change status
	}

	function updateTime(){ // Update time

		var status = $('.status-inc').attr('data-status'); // Status current

		timer_2++; 

		if(status == 'Online'){ 
			if(timer == '120'){ 
				status = 'abs'; 
				UpdateStatus('2');
			} 
			timer++; 
		}
		
		setTimeout('updateTime()',1000); // Set function updateTime every 1 sec
	}

	function GetStatusTop(){ // Status top header right bar members
		$.get('scripts/load/StatusAccount.php?format=1', function(data) { 
			$('#infomrations_account_status').html(data);
		});
		setTimeout(GetStatusTop, 2000); 
	}

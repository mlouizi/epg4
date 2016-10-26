var current_fs, next_fs, previous_fs; 
var left, opacity, scale; 
var animating; 
(function($, undefined) {  
	$.fn.getCursorPosition = function() {  
		var el = $(this).get(0);  
		var pos = 0;  
		if ('selectionStart' in el) {  
			pos = el.selectionStart;  
		} else if ('selection' in document) {  
			el.focus();  
			var Sel = document.selection.createRange();  
			var SelLength = document.selection.createRange().text.length;  
			Sel.moveStart('character', -el.value.length);  
			pos = Sel.text.length - SelLength;  
		}  
		return pos;  
	}  
})(jQuery);  
function validateEmail(_this){	
	_this.removeClass("error");	 
	var verif = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}$/ ;
	var verif1 =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z-]{2,}[.][a-zA-Z]{2,3}$/ ;	
	valide = true ;	
	max_length = 100 ;
	if(typeof _this.data('max') !== typeof undefined) max_length = parseInt(_this.data('max'));	
	if(_this.val().length > max_length){
		_this.addClass("error");
		valide = false;
	}
	emails = _this.val().split('|') ;
	emails.forEach(function(email) {
		if ((verif.exec(email) == null) && (verif1.exec(email) == null) && email!='' ){
			_this.addClass("error");
			valide = false;
		}	
	});	
	return valide ;		
}
function validateUrls(_this){	
	_this.removeClass("error");	 
	var myRegExp =/^(?:(?:https?|ftp):\/\/)?(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;	
	valide = true ;	
	max_length = 100 ;
	if(typeof _this.data('max') !== typeof undefined) max_length = parseInt(_this.data('max'));	
	if(_this.val().length > max_length){
		_this.addClass("error");
		valide = false;
	}
	emails = _this.val().split('|') ;
	emails.forEach(function(urlToValidate) {
		if (!myRegExp.test(urlToValidate) && urlToValidate!=''){
			_this.addClass("error");
			valide = false;
		}	
	});	
	return valide ;		
}
function validatePhone(_this)  {  
	_this.removeClass("error");
  	valide = true ;
	var phoneno1 = /^\(?\+??([0-9]{2,})\)?([0-9-. ]{2,})$/;	
	max_length = 75 ;
	if(typeof _this.data('max') !== typeof undefined) max_length = parseInt(_this.data('max'));	
	if(_this.val().length > max_length){
		_this.addClass("error");
		valide = false;
	}
	phones = _this.val().split('|') ;	
	phones.forEach(function(entry) {		
		if((entry.match(phoneno1)) || entry=='') { 			
		} else {			
			_this.addClass("error");
			valide = false ;		
		}		
	});	
	return valide ;
}
function validateUrl(_this){
	var myRegExp =/^(?:(?:https?|ftp):\/\/)?(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
	var urlToValidate = _this.val();
	if (!myRegExp.test(urlToValidate) && urlToValidate!=''){
		_this.addClass("error");
		return false;
	}else{
		_this.removeClass("error");
		return true;
	}
}
function validateString(_this){
	max_length = 75 ;
	if(typeof _this.data('max') !== typeof undefined) max_length = parseInt(_this.data('max'));	
	if(_this.val().length > 1 && _this.val().length < max_length){
		_this.removeClass("error");
		return true;
	} else {
		_this.addClass("error");
		return false;
	}
}
function validateString1(_this){	
	max_length = 75 ;
	if(typeof _this.data('max') !== typeof undefined) max_length = parseInt(_this.data('max'));	
	var verif = /[&\?!:\.;,#~"^¨@\%\$£²¤§\\\*_=+<>|()\[\]\{\}/`']{1,}$/ ;	
	if (verif.exec(_this.val()) != null || _this.val().length < 3 || _this.val().length > max_length){
		_this.addClass("error");
		return false;
	} else {
		_this.removeClass("error");
		return true;
	}
}
function validatePassword(){
	var pass1 = $("#password");
	if(pass1.val().length <5){
		pass1.addClass("error");
		return false;
	} else {			
		pass1.removeClass("error");
		return true;
	}
}
function validatePpasswordAgain(){
	var pass1 = $("#password");
	var pass2 = $("#password_again");	
	if( pass1.val() != pass2.val() ){
		pass2.addClass("error");
		return false;
	} else {
		pass2.removeClass("error");
		return true;
	}
}
function getCompany(){
	validate = true ;
	if($('#perPhone').val()!='') validate = validatePhone($('#perPhone')) ;
	if($('#perMobile').val()!='' && !validatePhone($('#perMobile'))) validate = false ;	
	if($('#perEmail').val()!='' && !validateEmail($('#perEmail'))) validate = false ;
	if($('#perSociaux').val()!='' && !validateUrls($('#perSociaux'))) validate = false ;
	if(validate) {
		$('#cmpnPerPhone, #cfmPerPhone').html($('#perPhone').val()) ;
		$('#cmpnPerMobile, #cfmPerMobile').html($('#perMobile').val()) ;
		$('#cmpnPerEmail, #cfmPerEmail').html($('#perEmail').val()) ;	
		$('#cmpnPerSociaux, #cfmPerSociaux').html($('#perSociaux').val()) ;	
		$('.cache').animate({top: 0}, 1000, 'linear');
		$('#previousStep').removeAttr('disabled').attr('onclick','getPrevious1()');
		$('#nextStep').attr('onclick','getConfirm()');
		$('#step1, #step3').removeClass('active');
		$('#step2').addClass('active'); 
	}
}
function getPrevious1(){
	$('.cache').animate({top: 220}, 1000, 'linear');
	$('#previousStep').attr('disabled', 'disabled').removeAttr('onclick');
	$('#nextStep').attr('onclick','getCompany()');
	$('#step2, #step3').removeClass('active');
	$('#step1').addClass('active');
}
function getConfirm(){	
	validate = true ;
	if($('#cmpnPhone').val()!='') validate = validatePhone($('#cmpnPhone')) ;
	if($('#cmpnFax').val()!='' && !validatePhone($('#cmpnFax'))) validate = false ;	
	if($('#cmpnSite').val()!='' && !validateUrls($('#cmpnSite'))) validate = false ;
	if(validate) {
		$('#cfmCmpnPhone').html($('#cmpnPhone').val()) ;
		$('#cfmCmpnFax').html($('#cmpnFax').val()) ;
		$('#cfmCmpnSite').html($('#cmpnSite').val()) ;	
		$('#cfmCmpnAddress').html($('#cmpnAddress').val()) ;
		if(animating) return false;
		animating = true;	
		current_fs = $('#fieldsetStep1');
		next_fs = $('#fieldsetStep2');
		$('#step1, #step2').removeClass('active');
		$('#step3').addClass('active');
		next_fs.show(); 
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				scale = 1 - (1 - now) * 0.2;
				left = (now * 50)+"%";
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){ current_fs.hide(); animating = false; },
			easing: 'easeInOutBack'
		});
	}
}
function getPrevious2(){	
	$('.cache').animate({top: 0}, 1000, 'linear');
	$('#previousStep').removeAttr('disabled').attr('onclick','getPrevious1()');
	$('#nextStep').attr('onclick','getConfirm()');
	$('#step1, #step3').removeClass('active');
	$('#step2').addClass('active'); 
	current_fs = $('#fieldsetStep2');
	previous_fs = $('#fieldsetStep1');
	previous_fs.show(); 
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			scale = 0.8 + (1 - now) * 0.2;
			left = ((1-now) * 50)+"%";
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){ current_fs.hide(); animating = false; }, 
		easing: 'easeInOutBack'
	});
}
$(document).ready(function(){	
	$('#perPhone, #perMobile, #perEmail, #cmpnPhone, #cmpnFax').keyup(function(){
		_this = $(this); 		
		_this.val(_this.val().replace('||', '|').replace(' |', '|').replace('| ', '|'));
	});
	$('.addSep').click(function(){
		_this = $(this) ;
		element = _this.parent().children('input') ;		
		txt = element.val() ;
		if(txt.length>0) {
			if(element.getCursorPosition()==0) position = txt.length ; else position = element.getCursorPosition() ;
			element.val(txt.replace(txt.slice(0, position), txt.slice(0, position) + '|')) ;
			element.val(element.val().replace('||', '|').replace(' |', '|').replace('| ', '|'));
			element.caret(position + 1);
		}
		element.focus();
	});

	$("form :input").on("keypress", function(e) {
	    return e.keyCode != 13;
	});
});
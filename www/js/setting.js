function validateEmail(_this){
	_this.removeClass("error");
	var email = _this.val();
	var verif = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}$/ ;
	var verif1 =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z-]{2,}[.][a-zA-Z]{2,3}$/ ;	
	if ((verif.exec(email) == null) && (verif1.exec(email) == null)){
		_this.addClass("error");
		return false;
	} else {		
		return true;
	}
}
function validateString(_this){
	if(_this.val().length < 3){
		_this.addClass("error");
		$('#registerMsg').append("<div> "+ current_password_error + "</div>") ;	 	
		return false;
	} else {
		_this.removeClass("error");
		return true;
	}
}
function validatePassword(){
	var pass1 = $("#password");
	if(pass1.val().length <6){
		pass1.addClass("error");
		$('#registerMsg').append("<div> "+ password_error + "</div>") ;	 	
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
		$('#registerMsg').append("<div>" + confirm_password_error + "</div>") ;
		return false;
	} else {
		pass2.removeClass("error");
		return true;
	}
}		
$(".submitSetting").click(function(){	
	if(validateString($('#current_password')) & validatePassword() & validatePpasswordAgain()) {
		return true ;
	} else {
		if($('#registerMsg').html()!='') { 
			$('#extendedMedia').show('slow');
			$('#registerMsg').css('margin-top', '-' + String(parseInt($('#registerMsg').height()/2)) + 'px');
			setTimeout( function(){ 
				$('#extendedMedia').hide('slow', function(){ $('#registerMsg').html(''); }); 				
			}, 5000 ) ;
		} else {
			$('#extendedMedia').hide(1000);
		}
		return false ;
	}
});
$(document).ready(function(){
	if(has_error==1){
		$('#extendedMedia').show('slow');
		$('#registerMsg').css('margin-top', '-' + String(parseInt($('#registerMsg').height()/2)) + 'px');
		setTimeout( function(){  $('#extendedMedia').hide('slow', function(){ $('#registerMsg').html(''); }); }, 5000 ) ;
	}
}) ;
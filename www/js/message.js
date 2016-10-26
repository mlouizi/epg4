function validateString(_this){
	if(_this.val().length < 1){
		_this.addClass("error");
		return false;
	} else {
		_this.removeClass("error");
		return true;
	}
}
$(document).ready(function(){	
	$("#submitMessage").click(function(){		
		validate = validateString($('#messageText')) ;
		console.log(validate) ;
		return validate ;
	});
});
function validateString(_this){
	if(_this.val().length < 3){
		_this.addClass("error");
		return false;
	} else {
		_this.removeClass("error");
		return true;
	}
}
function CompareDate() {	
  	validateDate = true ;
	var arr_one = $('#from_date').val().split('-') ;
	var dateOne = new Date(arr_one[2], arr_one[1]-1, arr_one[0]);
	var arr_two = $('#to_date').val().split('-') ;
	var dateTwo = new Date(arr_two[2], arr_two[1]-1, arr_two[0]);
	var today = new Date() ;
	if(dateOne.toString()=='Invalid Date') { 
		$('#from_date').addClass("error"); validate = false ; 
	}
	if(dateTwo.toString()=='Invalid Date') { 
		$('#to_date').addClass("error"); validate = false ; 
	}
	if (dateOne > today) { 
		$('#cvMsgError').append('<div>' + cv_startDdate_error + '</div>') ;
		$('#from_date').addClass("error"); 		
		validateDate = false ; 
	}
	if (dateTwo > today) { 
		$('#cvMsgError').append('<div>'+ cv_endDdate_error + '</div>') ;
		$('#to_date').addClass("error");
		validateDate = false ; 
	}
	if(validateDate && dateOne > dateTwo){
		$('#cvMsgError').append("<div>"+ cv_dates_error +"</div>") ; 
		$('#to_date').addClass("error");
		validateDate = false ; 
	}
	return validateDate ;
}
$(document).ready(function(){	
	if(user_lang=='fr') {
		_monthNames = [ "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" ];
		_dayNamesMin = [ "Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa" ];
	} else {
		_monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
		_dayNamesMin = [ "Su", "Mo", "Tu", "We", "Th", "Fr", "Sa" ];					
	}	
	$( "#from_date, #to_date" ).datepicker({ dateFormat: 'dd-mm-yy', monthNames: _monthNames, dayNamesMin : _dayNamesMin });
	$.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );
	$(".submit").click(function(){
		validate = true ;
		validate = validateString($('#company')) ;
		if(!validateString($('#work_status'))) validate = false ;
		if(!validateString($('#place'))) validate = false ;	
		if(!CompareDate()) validate = false ;	
		if(validate) {
			return true;
		} else {	
			if($('#cvMsgError').html()!='') { 
				$('#extendedMedia').show('slow');
				$('#cvMsgError').css('margin-top', '-' + String(parseInt($('#cvMsgError').height()/2)) + 'px');
				setTimeout( function(){ 
					$('#extendedMedia').hide('slow', function(){ $('#cvMsgError').html(''); }); 				
				}, 5000 ) ;
			} else {
				$('#extendedMedia').hide(1000);
			}	
			return false;			
		}	
	});	
});
$(document).ready(function(){
	$("#login_form").submit(function( event ) {
		// get form fields (email & password)
		var email = $(this).find('#login_email').val();
		var password = $(this).find('#login_password').val();
		// check if they are valid using a function
		if (isValid(email,password)) {
			alert('Datele introduse sunt valide');
		}
		
		event.preventDefault();
	});
	// validation logic
	function isValid(email, password) {
		
		var lowerCase = new RegExp('[a-z]');
		var upperCase = new RegExp('[A-Z]');
		var numbers   = new RegExp('[0-9]');
		
		var validCondition = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		
		if (validCondition.test(email)) 
		{
			if(password.match(upperCase) && password.match(lowerCase) && password.match(numbers)) 
			{
				return true;
			}
		}
		
		alert('Datele introduse nu sunt valide')
	}
});
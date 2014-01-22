$(function() {
	$('input').not('[type=submit]').jqBootstrapValidation();

	var $signupBtn = $('#devconSignupBtn'),
		$emailInput = $('#inputEmail'),
		$firstNameInput = $('#inputFirstName'),
		$lastNameInput = $('#inputLastName'),
		$messageInput = $('#inputMessage');

	function signup(e) {
		var email = $emailInput.val(),
			firstName = $firstNameInput.val(),
			lastName = $lastNameInput.val(),
			message = $messageInput.val();

		if ( email != null && validateEmail(email) && firstName != null && lastName != null ) {
			$.ajax({
				type: "POST",
				url: "lib/devcon_signup.php",
				data: { 
					email: email,
					firstName: firstName,
					lastName: lastName,
					message: message
				}
			}).done(function(result) {
				var resultObject = JSON.parse(result);
				if ( typeof resultObject.error == 'undefined' ) {
					$('#devconSignupForm').hide();
					$('#invoiceFrame>iframe').attr('src',resultObject.url + '&view=iframe');
					$('#invoiceFrame').show();
				}
			});
		}

		e.preventDefault();
		//return false;
	}

	$signupBtn.on('click', signup)
});

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
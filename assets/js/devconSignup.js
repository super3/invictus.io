$(function() {
	$('input').not('[type=submit]').jqBootstrapValidation();

	var $signupBtn = $('#devconSignupBtn'),
		$emailInput = $('#inputEmail'),
		$firstNameInput = $('#inputFirstName'),
		$lastNameInput = $('#inputLastName'),
		$messageInput = $('#inputMessage'),
		$loadingOverlay = $('#devconSignupForm .loading-overlay');

	function signup(e) {
		var email = $emailInput.val(),
			firstName = $firstNameInput.val(),
			lastName = $lastNameInput.val(),
			message = $messageInput.val();

		if ( email != null && validateEmail(email) && firstName != null && lastName != null ) {
			$loadingOverlay.show();
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
				console.log(result);
				try {
					var resultObject = JSON.parse(result);
				} catch (e) {
					alert('Sorry, something went wrong there, please try it again!')
				}
				if ( typeof resultObject.error == 'undefined' ) {
					$('#invoiceFrame>iframe').attr('src',resultObject.url + '&view=iframe');
					$('#invoiceFrame>iframe').load(function() {
						$('#devconSignupForm').hide();
						$loadingOverlay.hide();
						$('#invoiceFrame').show();
					});
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
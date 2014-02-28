$(function() {
	$('input').not('[type=submit]').jqBootstrapValidation();

	var $signupBtn = $('#devconSignupBtn'),
		$emailInput = $('#inputEmail'),
		$firstNameInput = $('#inputFirstName'),
		$lastNameInput = $('#inputLastName'),
		$messageInput = $('#inputMessage'),
		$priceField = $('#priceField'),
		$promoCode = $('#promoCode'),
		$promoCodeStatus = $('#promoCodeStatus'),
		$loadingOverlay = $('#devconSignupForm>.loading-overlay');

	function signup(e) {
		var email = $emailInput.val(),
			firstName = $firstNameInput.val(),
			lastName = $lastNameInput.val(),
			promoCode = $promoCode.val(),
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
					message: message,
					promoCode: promoCode
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
	};

	var toEvalPC = undefined;
	function promoCodeKeyDown(e) {
		if ( toEvalPC ) {
			clearTimeout(toEvalPC);
		}

		toEvalPC = setTimeout(evalPromoCode, 500);
	};

	function evalPromoCode(e) {
		$promoCodeStatus.find('.loading-overlay').show();

		$.ajax({
			type: "POST",
			url: "lib/promocode_status.php",
			data: { 
				id: $promoCode.val()
			}
		}).done(function(result) {
			var message = "";
			try {
				var resultObject = JSON.parse(result);
			} catch (e) {
				alert('Sorry, something went wrong there, please try it again!')
			}
			if ( typeof resultObject.error == 'undefined' ) {
				$promoCodeStatus.removeClass('alert-danger').removeClass('alert-info').addClass('alert-success');
				var delta = 279 - resultObject.price;
				message = "The code '" + resultObject.code + "' will apply a $" + delta + " rebate.";
				$priceField.html('<del>$279.00</del> <ins>$'+resultObject.price+'</ins>')
			} else {
				$promoCodeStatus.removeClass('alert-success').removeClass('alert-info').addClass('alert-danger');
				if ( resultObject.error == 'code_expired' ) {
					var start = new Date(resultObject.start);
					var end = new Date(resultObject.end);
					var format = 'MMMM Do';
					message = "This code is only valid from <strong>" + moment(start).format(format) + "</strong> to <strong>" + moment(end).format(format) + "</strong>.";
				} else if ( resultObject.error == 'code_redeemed' ) {
					message = "Sorry, all available uses for this code have been redeemed.";
				} else {
					message = "The code you entered is not a valid promo code.";
				}
				$priceField.html('$279.00');
			}
			$promoCodeStatus.find('span').html(message);
			$promoCodeStatus.find('.loading-overlay').hide();
		});
	};

	$signupBtn.on('click', signup);
	$promoCode.on('keydown', promoCodeKeyDown);
	//$promoCode.on('blur', evalPromoCode);
});

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
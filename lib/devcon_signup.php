<?php
	require_once 'mongolab/mongoapi.class.php';
	require_once 'bitpay/bp_lib.php';

	$key = "SgV0AGhTRED9mNKPoS0Ev4e3mVtANTlZ";
	$db = "devcon_signups";
	$mongo = new MongoAPI($db, $key);

	$mongoCollection = $mongo->Signups;

	$row = array(
		"firstName"=>"Olaf",
		"lastName"=>"Horstmann",
		"email"=>"pure.onh@gmail.com",
		"status"=>"new"
	);

	$inserted_id = $mongoCollection->insert($row);
	print $inserted_id."<br/>";

	if ( isset($_POST['email']) AND isset($_POST['firstName']) AND isset($_POST['lastName']) ) {
		$options = array(
			"buyerEmail" => $_POST['email'],
			"buyerName" => $_POST['firstName'] . " " . $_POST['lastName'],
			"itemDesc" => "Signup-fee for the Bitshares Developers Conference in Las Vegas: July 12-14",
			"currency" => "USD"
		);
		$invoice = bpCreateInvoice(1, 0.01, "test_data_x", $options);

		print json_encode($invoice);
	} else {
		print "{\"error\":{\"type\":\"missingParameters\",\"message\":\"The request is missing either the email, first or last name.\"}} ";
	}
?>
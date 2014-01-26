<?php
	require_once 'bitpay/bp_lib.php';

	function check_open_invoices($mysqli) {
		$time = time();
		$sql = "SELECT * FROM signups WHERE status = 'new' AND expirationtime < ".$time;

		$stmt = $mysqli->prepare($sql);
		$stmt->execute();
		$result=$stmt->get_result();
		$unredeemedCodes = array();
		while ( $signup = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
			$invoice = bpGetInvoice($signup['invoiceid']);
			if ( array_key_exists('status', $invoice) ) {
				$status = $invoice['status'];
				// check if a promocode was involved and should be reset because it wasn't redeemed
				if ( $signup['promocode'] != NULL && ( $status == 'expired' || $status == 'invalid' ) ) {
					if ( !array_key_exists($signup['promocode'], $unredeemedCodes) ) {
						$unredeemedCodes[$signup['promocode']] = 1;
					} else {
						$unredeemedCodes[$signup['promocode']]++;
					}
				}

				// update the signup status
				$id = $signup['id'];
				$sql = "UPDATE
			                signups
			            SET
			                status = '$status'
			            WHERE
			            	id = $id";
			    $mysqli->query($sql);
			}
		}
		$stmt->close();

		// now decrease all codes according to the unused codes in unpaid invoices
		foreach ($unredeemedCodes as $code => $invalidate) {
		    $sql = "UPDATE
		    			promocodes
		    		SET
		    			amount_invalidated = amount_invalidated + $invalidate
		    		WHERE
		    			code = '$code'";
		    $mysqli->query($sql);
		}
	}
?>
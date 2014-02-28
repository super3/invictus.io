<?php
	require_once 'db_config.php';
	require_once 'check_open_invoices.php';

	//connect to mysql server
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
	//$mysqli->report_mode = MYSQLI_REPORT_ALL;
	check_open_invoices($mysqli);

	// default message(is changed is a code is found)
	$return = array('error'=>'no_such_code');

	if ( isset($_REQUEST['id']) ) {
		$sql = "SELECT * FROM promocodes WHERE code = ?";

		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("s", $_REQUEST['id']);

		$stmt->execute();
		$result=$stmt->get_result();
		$pCode = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$stmt->close();
		if ( $pCode ) {
			$time = time() * 1000;
			if ( $pCode['amount_total'] - $pCode['amount_redeemed'] + $pCode['amount_invalidated'] <= 0 ) {
				$return = array('error'=>'code_redeemed');
			} else if ( $pCode['start'] > $time || $pCode['end'] < $time ) {
				$return = array('error'=>'code_expired', 'start'=>$pCode['start'], 'end'=>$pCode['end']);
			} else {
				$return = array('code'=>$pCode['code'],'price'=>$pCode['price']);
			}
		}
	}

	print json_encode($return);
?>
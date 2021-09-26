<?php

/*

* This page updates ststus.
*/

/**
* This ("identification.php") file contains User Authentication code.
* This ("identification.php") file contains Database Connection code.
* It checks the user existency in database .
*/
require_once '../../../control/identification.php';

if(isset($_REQUEST['paid_id']) && isset($_REQUEST['paid_status'])){
	$paid_id = $_REQUEST['paid_id'];
	$paid_status = $_REQUEST['paid_status'];
	if($paid_status==0)
		$paid_status=1;
	else
		$paid_status=0;
	
	// Setting up the timezone.
	date_default_timezone_set('Asia/Calcutta');
	$date=date("d M Y")." ".date("H:i A");
	
	$status_update = "update paid_unpaid set paid_status='$paid_status', paid_date='$date' where paid_id=$paid_id";
	if(mysqli_query($conn, $status_update)){
		echo "
		<script> 
			alert('Successfully Updated');
			window.location.href='action.php';
		</script>
		";
	}else{
		echo "
		<script> 
			alert('Not Updated, Please Try Again');
			window.location.href='action.php';
		</script>
		";
	}
}
?>
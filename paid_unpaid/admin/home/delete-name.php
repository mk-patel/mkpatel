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

if(isset($_REQUEST['paid_id'])){
	$paid_id = $_REQUEST['paid_id'];
	
	$name_delete = "delete from paid_unpaid where paid_id=$paid_id";
	if(mysqli_query($conn, $name_delete)){
		echo "
		<script> 
			alert('Successfully Deleted');
			window.location.href='action.php';
		</script>
		";
	}else{
		echo "
		<script> 
			alert('Not Deleted, Please Try Again.');
			window.location.href='action.php';
		</script>
		";
	}
}
?>
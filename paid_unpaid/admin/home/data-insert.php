		<?php
			// This ("db.php") file contains Database Connection code.
			require_once '../../../control/db.php';
			
			// on submit button clicked.
			if(isset($_POST["paid_name"])){
				$paid_name =  mysqli_real_escape_string($conn, $_POST['paid_name']);
				$paid_mobile = mysqli_real_escape_string($conn, $_POST['paid_mobile']);
				$paid_amount = mysqli_real_escape_string($conn, $_POST['paid_amount']);
				$paid_status = mysqli_real_escape_string($conn, $_POST['paid_status']);
				
				// Setting up the timezone.
				date_default_timezone_set('Asia/Calcutta');
				$date=date("d M Y")." ".date("H:i A");
				
				if(empty($paid_name) && empty($paid_status)){
					echo "You haven't filled some of the input boxes.";
				}else{
					$data_insert = "insert into paid_unpaid (paid_name, paid_mobile, paid_amount, paid_status, paid_date) values ('$paid_name','$paid_mobile','$paid_amount','$paid_status','$date')";
					if(mysqli_query($conn, $data_insert)){
						echo "Inserted Successfull";
					}else{
						echo "Unsuccessful, Please Try Again.";
					}
				}
			}
				
			?>
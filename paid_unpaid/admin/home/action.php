<?php

/*

* This page shows all the data.
*/


// Starting the session to keep the user logged in.
session_start();

// This ("db.php") file contains Database Connection code.
require_once '../../../control/db.php';

/**
* Taking username and password from session.
* Validating the user.
*/
$user_email = $_SESSION["user_email"];
$password = $_SESSION["password"];
$query = "select user_id,user_email,password from user where user_email='$user_email' and password='$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$mid = $row["user_id"];
if(empty($user_email) || empty($password)){
	header("location: ../login.php");
	exit();
	}
else if($_SESSION["user_email"] != $row["user_email"]){
	header("location: ../login.php");
	exit();
}
else if($password != $row["password"]){
	header("location: ../login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
		<title>Manish Patel</title>
		<meta property="og:title" content="Manish Patel">
		<meta name="description" content="It is only showing the table datas">
		<meta property="og:description" content="It is only showing the table datas">
		<meta name="keywords" content="Manish Patel">
		<meta name="author" content="Manish Patel">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
	body{
		background:#fcd9f9;
	}
	h5{
		color:white;
		background:#7d0577;
	}
	.form{
		width:50%;
	}
	table{
		font-size:13px;
		
	}
	table, th, td{
		border : 2px solid white;
	}
	.btn-action{
		font-size:12px;
		padding:3px;
	}
	@media screen and (max-width: 1000px) {
		.form{
			width:90%;
		}
	}
	</style>
	</head>
	<body>
	<h5 class="p-3 pb-4 mb-4">Maa Shitla Samita, Boriya</h5>
		<div class="container">
			<table id="example" class="table table-striped " style="width:100%">
				<thead>
					<tr>
						<th>Sr No</th>
						<th>Name</th>
						<th>Amount</th>
						<th>Mobile</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$data_select = "select paid_id, paid_name, paid_amount, paid_mobile, paid_status, paid_date from paid_unpaid";
					$data_result = mysqli_query($conn, $data_select);
					if(mysqli_num_rows($data_result) <= 0 ){
						echo "<tr>
								<td>No Data</td>
								<td>No Data</td>
								<td>No Data</td>
								<td>No Data</td>
								<td>No Data</td>
								<td>No Data</td>
							</tr>";
					}else{
						$i=1;
						while($data_row = mysqli_fetch_assoc($data_result)){
							if($data_row['paid_status']==0){
								$paid_status = "Unpaid";
								$paid_status_r = "Paid";
							}
							else{
								$paid_status = "Paid";
								$paid_status_r = "Unaid";
							}
				?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $data_row['paid_name'];?></td>
						<td><?php echo $data_row['paid_amount'];?></td>
						<td><?php echo $data_row['paid_mobile'];?></td>
						<td><?php echo $paid_status;?> &nbsp;<a href="update-status.php?paid_id=<?php echo $data_row['paid_id'];?>&paid_status=<?php echo $data_row['paid_status'];?>"><button class=" btn btn-action paid_status bg-primary text-light rounded"><?php echo $paid_status_r;?></button></a></td>
						<td><a href="delete-name.php?paid_id=<?php echo $data_row['paid_id'];?>"><button class="btn btn-action paid_action bg-danger text-light rounded" value="<?php echo $data_row['paid_id'];?>">Delete</button></a></td>
					</tr>
				<?php
							$i++;
						}
					}
				?>
				</tbody>
			</table>
			<div class="row pt-3 justify-content-center">
				<form class="form p-5 bg-light rounded" method="post" action="" onsubmit="return insertdata();">
					<div class="form-group pb-2">
					<h6>Insert New Name</h6>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="paid_name" name="paid_name" placeholder="Enter Full Name" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					 </div>
					 <div class="form-group">
						<input type="text" class="form-control" id="paid_mobile" placeholder="Enter Mobile Number" name="paid_mobile">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					 </div>
					 <div class="form-group">
						<input type="text" class="form-control" id="paid_amount" placeholder="Enter Amount" name="paid_amount" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					 <div class="form-group">
						<select name="paid_status" id="paid_status_in" class="custom-select" required>
							<option value="none" disabled selected>Status</option>
							<option value="1">Paid</option>
							<option value="0">Unpaid</option>
						</select>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					 </div>
					<div class="form-group">
						<button type="submit" id="submit" name="submit" class="btn btn-info">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script>
		function insertdata(){
			var paid_name = document.getElementById("paid_name").value;
			var paid_mobile = document.getElementById("paid_mobile").value;
			var paid_amount = document.getElementById("paid_amount").value;
			var paid_status = document.getElementById("paid_status_in").value;
			if (paid_name != "" && paid_status != "") {
				$.ajax({
					url: "data-insert.php",
					method: "post",
					data: {
						paid_name : paid_name,
						paid_mobile : paid_mobile,
						paid_amount : paid_amount,
						paid_status : paid_status,
					},
					success: function (response) {
						alert(response);
						location.reload();
					},
				});
			}else{
				alert("Empty Field Not Allowed");
			}
			return false;
		}
		</script> 
	</body>
</html>
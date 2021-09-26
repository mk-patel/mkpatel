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
	table{
		font-size:13px;
	}
	
	table, th, td{
		border : 2px solid white;
	}
	</style>
	</head>
	<body>
	<h5 class="p-3 pb-4 mb-4">Maa Shitla Samita, Boriya</h5>
		<div class="container">
		
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>Sr No</th>
						<th>Name</th>
						<th>Amount</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					//database connection code.
					require_once '../control/db.php';
					
					$data_select = "select paid_name, paid_amount, paid_status, paid_date from paid_unpaid";
					$data_result = mysqli_query($conn, $data_select);
					if(mysqli_num_rows($data_result) <= 0 ){
						echo "<tr>
								<td>No Data</td>
								<td>No Data</td>
								<td>No Data</td>
								<td>No Data</td>
							</tr>";
					}else{
						$i=1;
						while($data_row = mysqli_fetch_assoc($data_result)){
							if($data_row['paid_status']==0)
								$paid_status = "Unpaid";
							else
								$paid_status = "Paid";
				?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $data_row['paid_name'];?></td>
						<td><?php echo $data_row['paid_amount'];?></td>
						<td><?php echo $paid_status;?></td>
					   
					</tr>
				<?php
							$i++;
						}
					}
				?>
				</tbody>
			</table>
		</div>
		<div class="mt-5 p-3 bg-light">
		<a class="text-dark h6" href="about.html">About Developer</a>
		</div>
	</body>
</html>
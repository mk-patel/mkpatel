<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
		<meta name="theme-color" content="#f2fbff" />
		<title>Manish Patel - Suggessions & Feedback</title>
		<meta property="og:title" content="Manish Patel - Suggessions & Feedbac">
		<meta name="description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta property="og:description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta name="keywords" content="manish patel,manish kumar,mkp,mpatel,problem solver,believes in application knowledge">
		<meta name="author" content="Manish Patel">
		<link rel="stylesheet" type="text/css" href="../about/header.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
		<style>
		body{
			font-family: 'Work Sans', sans-serif;
		}
		.header-title{
			color:black;
		}
		.header-pg-title{
			color:black;
			font-weight:700;
		}
		.btn{
			font-size:13px;
			font-weight:700;
			padding:5px;
			background:black;
			color:white;
		}
		.bg-top{
			background-image:url('../sys_images/sky.jpg');
			background-repeat:no-repeat;
			background-size:cover;
		}
		.pr{
			margin-top:20px;
			margin-left:10px;
			color:#050c3b;
			width:100%;
			padding:10px;
		}
		.pr-p{
			color:#050c3b;
			font-size:15px;
			margin-left:25px;
			padding: 10px;
		}
		.middle-bg{
			background:#f2fbff;
			background-repeat:no-repeat;
			background-size:cover;
		}
		.form-field{
			background:white;
			padding:20px;
			width:100%;
		}
		</style>
	</head>
	<body>
		<div class="bg-top">
			<header class="d-flex justify-content-between">
				<div class="header-title">
					Mkpatel&nbsp;
				</div>
				<div class="header-pg-title">
					Feedback
				</div>
				<?php
				//including header navbar.
				include ('../about/header_component.php');
				?>
			</header>
			<div class="container">
				<br/>
				<h3 class="pr">Suggessions & Feedback</h3>
				<p class="pr-p">
					Please let us know about your suggessions and feedbacks.
					<br/><br/>
				</p>
			</div>
		</div>
		<div class="middle-bg">
			<div class="container">
			<?php
			require '../control/db.php';
			// Setting up time zone.
			date_default_timezone_set('Asia/Calcutta');
			$date=date("d M Y");
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$title = $mysqli->real_escape_string($_POST['name']);
				$content = $mysqli->real_escape_string($_POST['content']);
				$mobile = $mysqli->real_escape_string($_POST['mobile']);
					
				$sql = "INSERT INTO feedback(name,data,mobile,date)"
								. "VALUES('$title','$content','$mobile','$date')";	
				mysqli_query($conn,$sql);
				echo "<br>";
				echo "<center style='color:green;'>Thankyou For Your Feedback.</center>";	
				echo "<br>";
				echo "<br>";
				echo "<br>";
			}
			?>
				<div class="form-field">
					<form class="form" action="feedback.php" method="post" enctype="multipart/form-data" autocomplete="off">
						<div class="form-group">
							<label for="text">Your Name :</label>
							<input type="text" class="form-control" id="username" placeholder="Your Name " name="name" required>
						</div>
						<div class="form-group">
							<label for="comment">Feedback / Report :</label>
							<textarea class="form-control" rows="7" id="comment" name="content" required></textarea>
						</div>
						<div class="form-group">
							<label for="text">Your Mobile Number :</label>
							<input type="text" class="form-control" id="username" placeholder="Mobile Number " name="mobile" required>
						</div>
						<button type="submit" name="submit" class="btn btn-warning">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>

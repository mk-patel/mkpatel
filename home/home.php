<?php

/*
* This is the home page of the site.
*/

/*
* including db.php which contains database connection code.
*/
require_once('../control/db.php');

// setting up default time zone.
date_default_timezone_set('Asia/Calcutta');
$dt=date("H");
if($dt<12){
	$greeting = "Good Morning";
}else if($dt>=12){
	$greeting = "Good Afternoon";
}
else if($dt>=18){
	$greeting = "Good Evening";
}else if($dt>=22){
	$greeting = "Good Night";
}else{
	$greeting = "Hi";
}

$user_name = "Rakesh";
$ml_enabled = "on";


?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
		<meta name="theme-color" content="#f2fbff" />
		<title>Manish Patel - Believes in Application Knowledge</title>
		<meta property="og:title" content="Manish Patel - Believes in Application Knowledge">
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
		.bg-top{
			background-image:url('../sys_images/sky.jpg');
			background-repeat:no-repeat;
			background-size:cover;
		}
		.middle-bg{
			background:#f2fbff;
			background-repeat:no-repeat;
			background-size:cover;
		}
		.row{
			margin-top:10px;
			margin-left:10px;
			margin-right:10px;
		}
		.col-sm-6 h1{
			font-size:15px;
			color:grey;
			margin-top:20px;
		}
		#greeting_tag_bold{
			color:black;
			font-size:30px;
		}
		.intro-p{
			font-size:15px;
			color:black;
			padding:0px;
			margin-left:30px;
			margin-bottom:30px;
		}
		.box {
			background:white;
			}
		.box:hover {
			box-shadow:2px 2px 10px 1px rgba(0,0,0,0.1);
		}
		.explore{
			text-align:center;
			color:black;
			margin-top:30px;
			font-weight:700;
			padding:10px;
		}
		#explore_heading_bold{
			font-size:25px;
			color:black;
			text-align:center;
		}
		.explore-img{
			text-align:center;
		}
		.explore-p{
			font-size:15px;
			color:black;
			text-align:center;
			margin-left:10px;
			margin-right:10px;
			margin-bottom:40px;
		}
		.explore-p:hover{
			color:grey;
		}
		.explore-img img{
			width:150px;
			height:150px;
			margin-top:35px;
		}
		.explore-img img:hover{
			border:8px solid white;
			border-radius:5px;
		}
		.notify{
			border-radius:5px;
			margin-top:30px;
			margin-bottom:60px;
			text-align:center;
			background:#d9ecff;
		}
		.notify_para{
			font-size:18px;
			color:black;
			margin-top:15px;
			margin-left:15px;
			padding:7px;
			font-weight:600;
		}
		.btn{
			font-size:13px;
			font-weight:700;
			padding:5px;
			background:black;
			color:white;
		}
		.btn:hover{
			color:yellow;
		}
		.owner-img {
			text-align:center;
		}
		.owner-img img{
			width:300px;
			height:auto;
		}
		.bottom{
			width:100%;
			height:auto;
			background:#d9ecff;
			padding:15px;
			color:#01182e;
		}
		.btm-elm{
			font-size:15px;
			padding:5px;
			margin-left:10px;
		}
		.btm-elm a{
			text-decoration:none;
			font-weight:700;
			color:#01182e;
		}
		.last-line{
			font-size:11px;
			padding:5px;
			margin-left:10px;
			color:#01182e;
		}
		@media screen and (max-width:700px){
			.box {
				box-shadow:2px 2px 10px 1px rgba(0,0,0,0.1);
			}
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
					Welcome !
				</div>
				<?php
				//including header navbar.
				include ('../about/header_component.php');
				?>
			</header>
			<div class="container">
				<br/>
				<div class="row">
					<div class="col-sm-6">
						<h1><b id="greeting_tag_bold" ><?php echo $greeting; ?>, <?php echo $user_name; ?> !</b></h1>
						<p class="intro-p">
							This is your area,<br/>Enjoy the beautiful part of technology. Feel free and secure.<br/>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="middle-bg">
			<div class="container">
				<br/>
				<div class="row notify">
					<div class="notify_para">
						<p>Launching The AI Features Soon...</p>
					</div>
				</div>
				<div class="box">
					<div class="row">
						<div class="col-sm-6">
							<div class="explore-img">
								<img class="into-img" src="../images/psp.png">
							</div>
						</div>
						<div class="col-sm-6">
							<p class="explore"><b id="explore_heading_bold" > Projects </b> and Ideas<br>
								<p class="explore-p">
									PSP ( Problem Solving Product ) based projects with AI and ML enabled algorithm.<br><br>
									<a href="../projects/projects.php"><button class="btn">Projects</button></a>
								</p>
							</p>
						</div>
					</div>
				</div>
				<hr/>
				<div class="box">
					<div class="row">
						<div class="col-sm-6">
							<p class="explore"><b id="explore_heading_bold" > Applications </b> and Programs<br>
								<p class="explore-p">
									Shows the knowledge implementation technique and valuable outcomes for personal and professional need. <br><br>
									<a href="../apps/applications.php"><button class="btn">Applications</button></a>
								</p>
							</p>
						</div>
						<div class="col-sm-6">
							<div class="explore-img">
								<img class="into-img" src="../images/app.png">
							</div>
						</div>
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
		<div class="bottom">
			<div class="row">
				<div class="col-sm-6">
					<h1>Hi! I am <br><b id="greeting_tag_bold" >Manish Patel</b>.</h1>
					<p class="intro-p">
						Highly applicable knowledge and <br>scalable mindset personality,
						likes to  <br>learn, discover and invent <br>
						problem solving products for human help.
					</p>
					<p><a href="../myprofile/proinfo.php"><button class="btn">More Info</button></a>
					</p>
				</div>
				<div class="col-sm-6">
					<div class="owner-img">
						<img src="../sys_images/owner.png"/>
					</div>
				</div>
			</div>
			<hr/>
			<div class="btm-elm">
				<a href="../about/feedback.php">Suggessions & Feedback</a> | <a href="../about/about.php">About</a> | <a href="../about/privacypolicy.php">Privacy Policy</a>
			</div>
			<div class="last-line">
				All the contents & images are genuine and written & developed by Manish Patel.
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
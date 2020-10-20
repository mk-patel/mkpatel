<?php
include('config.php');

if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}
if(!isset($_SESSION['access_token']))
{
header('location:index.php');
}
$nm=$_SESSION['user_first_name'];
$ln=$_SESSION['user_last_name'];
$img=$_SESSION["user_image"];
$em=$_SESSION['user_email_address'];
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
		<title>Manish Patel - Believes in Application Knowledge</title>
		<meta property="og:title" content="Manish Patel - Believes in Application Knowledge">
		<meta name="description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta property="og:description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta name="keywords" content="manish patel,manish kumar,mkp,mpatel,problem solver,believes in application knowledge">
		<meta name="author" content="Manish Patel">
		<link rel="stylesheet" type="text/css" href="header.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
		<style>
			.row{
				margin-top:10px;
				margin-left:10px;
				margin-right:10px;
			}
			.into-img{
				text-align:center;
			}
			.col-sm-6 img{
				width:190px;
				height:200px;
			}
			.col-sm-6 h1{
				font-size:16px;
				color:grey;
				padding:5px;
				margin-top:20px;
			}
			#intro-wlcm{
				font-size:12px;
			}
			#name_tag_bold{
				color:#19566b;
				font-size:30px;
			}
			.intro-p{
				font-size:15px;
				color:black;
				padding:0px;
				margin-left:30px;
			}
			#into-first-line{
				font-size:14px;
			}
			.intro-more{
				margin-left:30px;
			}
			.explore-img{
				text-align:center;
			}
			.explore{
				text-align:center;
				color:black;
				margin-top:10px;
				font-weight:700;
			}
			#explore_bold{
				font-size:25px;
				color:#19566b;
				text-align:center;
			}
			.explore-p{
				font-size:15px;
				color:grey;
				text-align:center;
				margin-left:10px;
				margin-right:10px;
			}
			.explore-img img{
				width:120px;
				height:120px;
				margin-top:20px;
			}
			.btn{
				font-size:13px;
				font-weight:700;
				padding:5px;
			}
			.explore-img img:hover{
				border:8px solid white;
				border-radius:5px;
			}
			.explore-p:hover{
				color:black;
			}
			.intro-more a{
				font-size:12px;
				color:grey;
			}
			.box:hover {
				box-shadow:2px 2px 10px 1px rgba(0,0,0,0.1);
			}
			.ai-intro{
				font-size:18px;
				color:rgb(14, 49, 100);
				margin-top:15px;
				margin-left:15px;
				padding:7px;
				font-weight:600;
			}
			@media screen and (max-width:700px){
				.box {
					box-shadow:2px 2px 10px 1px rgba(0,0,0,0.1);
				}
			}
		</style>
	</head>
	<body>
		<header class="d-flex justify-content-between bg-info">
			<div class="header-title">
				Mkpatel&nbsp;
			</div>
			<div class="header-pg-title">
				<b style="color:black;"><?php echo $nm; ?> Welcome !</b>
			</div>
			<div class="header-content">
				<button id="category" type="button" class="btn bg-info" data-toggle="dropdown">Menu</button>
				<ul class="dropdown-menu">         
					<li><a class="dropdown-item" href="projects.php">Projects</a></li>
					<li class="divider"></li>
					<li><a class="dropdown-item" href="applications.php">Application</a></li>
					<li class="divider"></li>
					<li><a class="dropdown-item" href="aiarea.php">AI Area</a></li>
					<li class="divider"></li>
					<li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
				</ul>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>Hi! I am <br><b id="name_tag_bold" >Manish Patel</b>.</h1>
					<p class="intro-p">
						Highly applicable knowledge and <br>scalable mindset personality,
						likes to  <br>learn, discover and invent <br>
						problem solving products for human help.
					</p>
					<p class="intro-more"><a href="proinfo.php"><button class="btn btn-info">More Info</button></a>
					</p>
				</div>
			</div>
			<div class="row" style="border-radius:5px;margin-top:30px;margin-bottom:60px;text-align:center;background-image:linear-gradient(to bottom, lightblue ,white);">
				<div class="ai-intro">
					<p>Launching The AI Features Soon...</p>
				</div>
			</div>
			<div class="box">
				<div class="row">
					<div class="col-sm-6">
						<div class="explore-img">
							<img class="into-img" src="images/psp.jpg">
						</div>
					</div>
					<div class="col-sm-6">
						<p class="explore"><b id="explore_bold" > Projects </b> and Ideas<br>
							<p class="explore-p">
								PSP ( Problem Solving Product ) based projects with AI and ML enabled algorithm.<br><br>
								<a href="projects.php"><button class="btn btn-info">Projects</button></a>
							</p>
						</p>
					</div>
				</div>
			</div>
			<hr>
			<div class="box">
				<div class="row">
					<div class="col-sm-6">
						<p class="explore"><b id="explore_bold" > Applications </b> and Programs<br>
							<p class="explore-p">
								Shows the knowledge implementation technique and valuable outcomes for personal and professional need. <br><br>
								<a href="applications.php"><button class="btn btn-info">Applications</button></a>
							</p>
						</p>
					</div>
					<div class="col-sm-6">
						<div class="explore-img">
							<img class="into-img" src="images/app.jpg">
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="box">
				<div class="row">
					<div class="col-sm-6">
						<div class="explore-img" style="margin-top:60px;">
							This Feature will be live on 16th Nov 2020.  
						</div>
					</div>
					<div class="col-sm-6">
						<p class="explore">Explore <b id="explore_bold" > AI Area</b><br>
							<p class="explore-p">
								Enjoy the wonderful part of the technical world.<br><br>
								<a href="aiarea.php"><button class="btn btn-info">In Progress...</button></a>
							</p>
						</p>
					</div>
				</div>
			</div>
			<hr>
			</div>
			<div class="bottom">
				<div class="btm-elm">
					<a href="feedback.php">Suggessions & Feedback</a> | <a href="about.html">About</a> | <a href="privacypolicy.html">Privacy Policy</a>
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
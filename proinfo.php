<?php
session_start();
$password=$_SESSION["password"];
if(empty($password)){
       header("location: login.php");
         exit();
	    }
	else{
        if ($_SESSION["password"] == "111")
	    {
	    }
		else{
		header("location: login.php");
        exit();
	    }
	}
	
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
    <title>Manish Patel - Professional Information</title>
	<meta property="og:title" content="Manish Patel - Professional Information">
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
}
.btn{
font-size:13px;
font-weight:700;
padding:5px;
}
.heading
{
	color:#19566b;
	font-size:30px;
	padding:8px;
}
.heading_info
{
	color:grey;
	font-size:14px;
	margin-left:20px;
}
.r-dwnld{
margin-top:30px;
margin-left:10px;
margin-bottom:50px;
}
</style>
</head>
<body>
<header class="d-flex justify-content-between bg-info">
<div class="header-title">
Mkpatel&nbsp;
</div>
<div class="header-pg-title">
<b style="color:black;">CV</b>
</div>
<div class="header-content">
<button id="category" type="button" class="btn bg-info" data-toggle="dropdown">
Menu
</button>
<ul class="dropdown-menu">         

   <li><a class="dropdown-item" href="projects.php">Projects</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="applications.php">Application</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="aiarea.php">AI Area</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="logout.php">Logout</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
</ul>
</div>
</header>
<div class="container">
    <div class="row">
	    <div class="col-sm-6">
		<h1 class="heading"><b>Manish Patel</b></h1>
		<p class="heading_info">
		LinkedIn : <a href="https://www.linkedin.com/in/manish-patel-mkp/" style="color:grey;">https://www.linkedin.com/in/manish-patel-mkp</a><br>
		Email : manishkp399@gmail.com<br>
		</p>
		</div>
		<div class="col-sm-6 ">
		<div class="r-dwnld">
		<a href="manish-patel-resume.pdf"><button type="button" class="btn bg-info" style="color:white;">Download CV</button></a>
		</div>
		</div>
    </div>
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
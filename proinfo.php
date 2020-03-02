<?php
session_start();
$password=$_SESSION["password"];
if(empty($password)){
       header("location: login.php");
       exit();
	}else{
if ($_SESSION["password"] == "440v")
	{
	}
	else
	{
		header("location: login.php");
        exit();
    }
	}
?>

<html>
<head>
  <title>Manish Patel</title>
    <meta charset="UTF-8">
    <meta name="description" content="This is the professional information about Manish Patel.">
    <meta name="keywords" content="professional info about manish patel, about manish patel,information about mkpatel,mpatel">
    <meta name="author" content="Manish Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="11.png"/>
<style>
body{
    background:white;
    font-family:;
}
header{
    width:100%;
    height:40px;
    background:grey;
}
.header-img{
    float:left;
    margin-left:10px;
    width:120px;
    height:40px;
    line-height:40px;
    font-size:15px;
    font-weight:700;
    color:white;
}
.header-img img{
    width:40px;
    height:40px;
    border:1px solid white;
    border-radius:50%;
}
.header-content{
    float:right;
    margin-right:10px;
    width:110px;
    height:40px;
}
.header-content img{
    width:40px;
    height:40px;
    border:1px solid white;
    border-radius:50%;
}
#category{
    margin-top:0px;
}
.dropdown-item{
    color:darkorange;
    font-size:13px;
    font-weight:700;
}
.row{
    margin-top:10px;
.btn{
    font-size:12px;
    font-weight:700;
    padding:0px;
}
.heading
{
	color:green;
}
</style>
</head>
<body>
<header>
<div class="header-img">
<img src="images/mp.jpg"> &nbsp;MKPATEL
</div>
<div class="header-content">
<button id="category" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
Categories
</button>
<ul class="dropdown-menu">         

   <li><a class="dropdown-item" href="projects.php">My Projects</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="applications.php">My Application</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="tips.php">Tips</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="entertainment.php">Entertainment</a></li>
   <li class="divider"></li>
   <li><a class="dropdown-item" href="feedback.php">Feedback</a></li>

 
</ul>
</div>
</header>

<style>
.btn{
    font-size:12px;
    font-weight:700;
    padding:8px;
}
.heading
{
	color:darkorange;
	font-size:30px;
	padding:8px;
}
.heading_info
{
	color:grey;
	font-size:13px;
	padding:8px;
}
.sub_heading
{
	color:#034214;
	font-size:17px;
	font-weight:700;
	padding:6px;
	background:orange;
	border-radius:8px;
}
.sub_info_row
{
	margin-top:10px;
	margin-left:50px;
	margin-right:5px;
}
.sub_headind_info_first
{
	text-align:center;
	color:darkorange;
	font-weight:700;
	margin-left:15px;
	margin-right:15px;
}
.sub_headind_info
{
	color:#030a3b;
	
}
.sub_headind_info:hover
{
    color:black;
	font-weight:700;
	border-radius:10px;
}
.bottom{
width:100%;
height:auto;
background:grey;
}
.btm-elm{
font-size:15px;
padding:5px;
margin-left:10px;
}
.btm-elm a{
text-style:none;
color:white;
font-weight:700;
}
</style>
<div class="container" id="hide">
    <div class="row">
	    <div class="col-sm-6">
		<h1 class="heading">Manish Patel</h1>
		</div>
		<div class="col-sm-6">
		<p class="heading_info">Email : manishkp399@gmail.com<br>
		Phone : +91 62645 15763</p>
		</div>
    </div>
	<hr style="border-radius:2x solid grey;">
	<div class="row">
	<p class="sub_headind_info_first">I just want to provide the world <b style="color:darkorange">valuable products and services</b> for environment and human help.
	</p>
	</div>
	<hr>
	<div class="row">
	<div class="sub_info_row">
	<p class="sub_heading">Education :</p>
	<p class="sub_headind_info">&nbsp; &nbsp; &nbsp; I have taken following educations:
	<ul class="sub_headind_info">
        <li> High School Ceriticate Exam 2016 - Pass - 93.50% .</li>
        <li> Higher Secondary School Ceriticate Exam 2018 - Pass - 89.40% .</li>
        <li> Bachelor Of Engineering 2022 - Running - ... .</li>
    </ul>
	</p>
	</div>
	</div>
	<hr>
	<div class="row">
	<div class="sub_info_row">
	<p class="sub_heading">Trainings & Certificates :</p>
	<ul class="sub_headind_info">
        <li> IoT - IndEyes Company - August 2019.</li>
        <li> PCB Designing And Processing - IndEyes- January 2020.</li>
        <li> Sanskriti Gyan Pariksha - 2015.</li>
		<li> Pratibha Samman Samaroh Saja - 2018.</li>
    </ul>
	</div>
	</div>
	<hr>
	<div class="row">
	<div class="sub_info_row">
	<p class="sub_heading">Skills :</p>
	<ul class="sub_headind_info">
        <li> Website Development : <br>Language Known:<br> 1. PHP, <br>2. JAVASCRIPT, <br>3. CSS, <br>4. HTML, <br>5. AJAX. </li>
        <li> Creating Miner Programms Using C & C++ .</li>
        <li> Knowledge of M.S. Office Application.</li>
		<li> Blogging.</li>
    </ul>
	</div>
	</div>
	<hr>
	<div class="row">
	<div class="sub_info_row">
	<p class="sub_heading">Projects :</p>
	<p class="sub_headind_info">&nbsp; &nbsp; &nbsp; Projects that have been created only by me :
	<ul class="sub_headind_info">
        <li> Mor Gaon - My Evillage</li>
        <li> Multipurpose Electronic Kit</li>
        <li> MKPATEL - The Intro.</li>
    </ul>
	</p>
	</div>
	</div>
	<hr>
	<div class="row">
	<div class="sub_info_row">
	<p class="sub_heading">Languages Known :</p>
	<ul class="sub_headind_info">
        <li> English</li>
        <li> Hindi</li>
    </ul>
	</div>
	</div>
	<hr>
	<div class="row">
	<div class="sub_info_row">
	<p class="sub_heading">Personal Details :</p>
	<p class="sub_headind_info">&nbsp; &nbsp; &nbsp; Manish Patel<br>
	&nbsp; &nbsp; &nbsp; 433,Gandhi Nagar,32<br>
	&nbsp; &nbsp; &nbsp; Birgaon, Raipur, C.G.<br>
	</p>
	</div>
	</div>
</div>
<div class="bottom">
<div class="btm-elm">
<a href="feedback.php">Suggessions & Feedback</a> | <a href="about.html">About</a> | <a href="privacypolicy.html">Privacy Policy</a>
</div>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
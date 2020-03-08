<?php
session_start();
$password=$_SESSION["password"];
if(empty($password)){
       header("location: login.php");
         exit();
	    }
	else{
        if ($_SESSION["password"] == "5547e63e1a724ea0b42b8d6b79f6a0c243665f55")
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
  <title>Manish Patel</title>
    <meta charset="UTF-8">
    <meta name="description" content="This is the professional information about Manish Patel.">
    <meta name="keywords" content="professional info about manish patel, about manish patel,information about mkpatel,mpatel">
    <meta name="author" content="Manish Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="11.png"/>
<style>
body{
    background:white;
    font-family: 'Work Sans', sans-serif;
}
header{
    width:100%;
    height:40px;
    background:#00d0ff;
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
}
.btn{
    font-size:12px;
    font-weight:700;
    padding:2px;
}
.heading
{
	color:green;
}
.btn{
    font-size:12px;
    font-weight:700;
    padding:10px;
}
.heading
{
	color:#c97c00;
	font-size:30px;
	padding:8px;
}
.heading_info
{
	color:grey;
	font-size:14px;
	margin-left:20px;
}
.sub_info_row p
{
	color:#034214;
	font-size:17px;
	font-weight:700;
	background:grey;
	border-radius:3px;
	padding:5px; 
	color:white;
}
.sub_info_row
{
	width:100%;
	margin-top:10px;
}
.sub_headind_info_first
{
	color:grey;
	font-weight:700;
	padding:10px;
    font-size:18px;
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
.into-img img{
width:160px;
height:170px;
}
.into-img{
text-align:center;
}
</style>
</head>
<body>
<header>
<div class="header-img">
<img src="images/mp.jpg"> &nbsp;MKPATEL
</div>
<div class="header-content">
<a href="logout.php"><button id="category" type="button" class="btn btn-secondary">
Log Out
</button></a>
</div>
</header>
<div class="container" id="hide">
    <div class="row">
	    <div class="col-sm-6">
		<h1 class="heading"><b>Manish Patel</b></h1>
		<p class="heading_info">
		LinkedIn : <a href="https://www.linkedin.com/in/manish-patel-mkp/" style="text-style:none;color:grey;">https://www.linkedin.com/in/manish-patel-mkp</a><br>
		Email : manishkp399@gmail.com<br>
		Phone : +91 62645 15763<br>
		</p>
		</div>
		<div class="col-sm-6 ">
		<div class="into-img">
		<img src="images/mkp.jpg">
		</div>
		</div>
    </div>
	<hr style="border:2px solid grey;">
	<div class="row justify-content-center">
	<p class="sub_headind_info_first">I just want to provide the world <b style="color:darkorange">valuable products and services</b> for environment and human help.
	</p>
	</div>
	<hr style="border:2px solid grey;">
	<div class="row">
	<div class="sub_info_row">
	<p>Education :</p>
	</div>
	<div class="sub_headind_info">
	<p class="sub_headind_info">&nbsp; &nbsp; &nbsp; I have taken following educations:
	<ul class="sub_headind_info">
        <li> High School Ceriticate Exam 2016 - Pass - 93.50% .</li>
        <li> Higher Secondary School Ceriticate Exam 2018 - Pass - 89.40% .</li>
        <li> Bachelor Of Engineering 2022 - Running - ... .</li>
    </ul>
	</p>
	</div>
	</div>
	<div class="row">
	<div class="sub_info_row">
	<p>Trainings & Certificates :</p>
	</div>
	<div class="sub_headind_info">
	<ul>
        <li> IoT - IndEyes Company - August 2019.</li>
        <li> PCB Designing And Processing - IndEyes- January 2020.</li>
    </ul>
	</div>
	</div>
	<div class="row">
	<div class="sub_info_row">
	<p>Skills :</p>
	</div>
	<div class="sub_headind_info">
	<ul>
        <li> Website Development : <br>Language Known:<br> PHP<br> MySQL<br> JAVASCRIPT<br> CSS<br> HTML<br> AJAX</li>
        <li> Create Miner Programms Using C & C++ .</li>
		<li> Blogging.</li>
    </ul>
	</div>
	</div>
	<div class="row">
	<div class="sub_info_row">
	<p>Projects :</p>
	</div>
	<div class="sub_headind_info">
	<p>&nbsp; &nbsp; &nbsp; Projects that have been created only by me :
	<ul>
        <li> Mor Gaon - My Evillage ( <a href="https://www.github.com/mk-patel/morgaon">Source Code - GitHub</a> )</li>
        <li> Multipurpose Electronic Kit</li>
        <li> MKPATEL - The Intro.</li>
    </ul>
	</p>
	</div>
	</div>
	<div class="row">
	<div class="sub_info_row">
	<p>Languages Known :</p>
	</div>
	<div class="sub_headind_info">
	<ul>
        <li> English</li>
        <li> Hindi</li>
    </ul>
	</div>
	</div>
	<div class="row">
	<div class="sub_info_row">
	<p>Personal Details :</p>
	</div>
	<div class="sub_headind_info">
	<p>&nbsp; &nbsp; &nbsp; Manish Patel<br>
	&nbsp; &nbsp; &nbsp; 433,Gandhi Nagar, Ward No. 32<br>
	&nbsp; &nbsp; &nbsp; Birgaon, Raipur, C.G.(493221)<br>
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

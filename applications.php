<?php
session_start();
$password=$_SESSION["password"];
if(empty($password)){
       header("location: login.php");
         exit();
	    }
	else{
        if ($_SESSION["password"] == "eb51e8d5f7832dda80be1baef97c8f8c3034407e")
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
    <meta name="description" content="I am manish patel , this website will provide contents from manish patel.">
    <meta name="keywords" content="manish patel, manish kumar,mkp,mpatel">
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
background:#9ade4b;
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
margin-top:5px;
}
.dropdown-item{
color:darkorange;
font-size:13px;
font-weight:700;
}
.row{
margin-top:10px;
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
.last-line{
font-size:11px;
color:white;
padding:5px;
margin-left:10px;
}
.btn{
font-size:12px;
font-weight:700;
padding:5px;
}
.pr{
	font-size:27px;
	color:darkorange;
	padding:20px;
	text-align:center;
	margin-top:30px;
	font-weight:700;
}
.explore-img{
	text-align:center;
}
.explore-img img{
width:130px;
height:130px;
}
.pr-p{
	color:#8f3903;
	text-align:center;
	font-size:17px;
	padding:30px;
}
.into-img{
	margin-bottom:10px;
}
.into-img img{
width:220px;
height:120px;
margin-left:35px;
}
.caption{
	font-size:14px;
	color:black;
	text-align:center;
	padding:3px;
}
.caption a{
	color:black;
}
.pro-manage
{
	box-shadow:2px 2px 10px 1px rgba(0,0,0,0.3);
}
</style>
</head>
<body>
<header>
<div class="header-img">
<img src="images/mp.jpg"> &nbsp;MKPATEL
</div>
<div class="header-content">
<a href="logout.php"><button id="category" type="button" class="btn btn-warning">
Log Out
</button></a>
</div>
</header>
<div class="container">
    <div class="row">
         <img class="img-fluid" src="images/appppp.jpg">
		</div>
	
	<div class="row">
		    <p class="pr-p"><b>Some applications and programs are here 
			which shows my knowledge and skill.
			These apps and programs are made by me only.<br>
			I hope you will like my hardwork. Thank You!</b>
			</p>
		</div>
	<div class="row">
	<div class="caption">
			<img  class="img-thumbnail" src="images/mor.jpg" alt="Mor Gaon - My Evillage" style="width:150px;height:150px;">
             <p>Mor Gaon ( <a href="https://www.github.com/mk-patel/morgaon">Source Code - GitHub</a> )</p>
            </div>
        
        <div class="caption">
		<img  class="img-thumbnail" src="images/mkp.jpg" alt="MKPATEL - The Intro" style="width:150px;height:150px;">
          <p>MKPATEL</p>
        </div>
    </div>
	<hr>
	<div class="pro-manage">
    <div class="row">
	    <h3  style="font-weight:700;color:purple;margin-left:20px;padding:15px;">
		Mor Gaon - My Evillage
		</h3>
		<p style="color:grey;margin-left:40px;margin-right:40px;">
		Aim Of the Project - <span style="color:black;">Connect all the villages with each other through technology.</span><br><br>
        It is a website which provides the facility to 
		share the activities of village like events, what happpening in village  etc.
		It providse realtime news of the villages.
		it is also provide the users 'profile management facility' like create, update and upload their information on site.  ( <a href="https://www.github.com/mk-patel/morgaon">Source Code - GitHub</a> )
</p>
</div>

<div class="row">
		<div class="into-img">
        <img class="img-thumbnail" src="images/morgaonproject.jpeg">
		</div>
    </div>
	</div>
	<hr>
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

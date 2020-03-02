<?php
session_start();
$password=$_SESSION["password"];
if(empty($password)){
       header("location: login.php");
       exit();
	}else{
if ($_SESSION["password"] == "460v")
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
    <meta name="description" content="I am manish patel , this website will provide contents from manish patel.">
    <meta name="keywords" content="manish patel, manish kumar,mkp,mpatel">
    <meta name="author" content="Manish Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="11.png"/>
<style>
body{
background:white;
font-family:sans-serif;
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
	font-size:30px;
	color:darkorange;
	padding:40px;
	text-align:center;
}
.explore-img{
	text-align:center;
}
.explore-img img{
width:130px;
height:130px;
}
.pr-p{
	color:grey;
	margin-left:10px;
}
.into-img{
text-align:center;
}
.into-img img{
text-align:center;
width:200px;
height:80px;
margin-left:15px;
}

.morgaon-heading{
	color:black;
	font-size:20px;
	margin-left:10px;
}
.morgaon-description{
	color:grey;
	font-size:14px;
	margin-left:15px;
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
<div class="container">
    <div class="row">
	    <div class="col-sm-6">
	        <h1 class="pr">Projects</h1>
		</div>
		<div class="col-sm-6">
		<div class="explore-img">
                <img class="into-img" src="images/psp.jpg">
		 </div>
		</div>
    </div>
	<hr style="border:2px solid orange;">
	
	<div class="row">
	    <div class="col-sm-6">
		    <p class="pr-p">Some Projects That have been taken and completed by me :
		</div>
		<div class="col-sm-6">
		    <b><ul>
			<li> Mor Gaon - My Evillage</li>
            <li> Multipurpose Electronic Kit</li>
            <li> MKPATEL - The Intro.</li>
			</ul></b>
		</div>
    </div>
	<hr>
    <div class="row">
	    <p class="morgaon-heading">1. <b> Mor Gaon - My Evillage</b></p>
		<p class="morgaon-description">Aim :<br><br>We want to connect all the villages with each other through technology.<br>

Our only purpose to make this forum is to make people aware of all the events and facilities in the village.<br>

The facilities given by us are as follows :<br>

1. Information about the village.<br>
2. The space to put their point and information online.<br>
3. Information about the public places of the village.<br>
4. Cooperate to give them information about their public places.<br>
5. Provides a place to upload their events and info about something happened in village.<br>
6. Help everyone to know about every village, in which they might go.<br>
7. Help villagers to know about the facilities of the technology.<br>
8. Provides the user based content.<br>
9. Help users to provide a valuable content in village.<br>
10. Provide the info of population of the village in Male , Female categories.<br>
11. Provides the user profile service in which they can change their info easily.<br>
12. Help shopkippers to provide their necessary information to all the village people.<br>
13. Provide a space to share the difficulties in village and what need to done in village by the government.<br>
</p>
</div>
<div class="row">
		<div class="into-img">
        <img src="images/morgaonproject.jpeg">
		</div>
    </div>
	<hr>
	<div class="row">
	    <p class="pr-p">Multiple projects and tasks will be taken further...ThankYou!
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
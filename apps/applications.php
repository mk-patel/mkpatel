<?php
/*session_start();
$password=$_SESSION["password"];
if(empty($password)){
       header("location: login.php");
         exit();
	    }
	else{
        if ($_SESSION["password"] == "222")
	    {
	    }
		else{
		header("location: login.php");
        exit();
	    }
	}
	*/
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
	<meta name="theme-color" content="#f2fbff" />
	<title>Manish Patel - App Details</title>
	<meta property="og:title" content="Manish Patel - App Details">
	<meta name="description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
	<meta property="og:description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
    <meta name="keywords" content="manish patel,manish kumar,mkp,mpatel,problem solver,believes in application knowledge">
    <meta name="author" content="Manish Patel">
	<link rel="stylesheet" type="text/css" href="../about/header.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
	<style>
	.header-title{
		color:black;
	}
	.header-pg-title{
		color:white;
	}
	.btn{
		font-size:13px;
		font-weight:700;
		padding:5px;
		background:black;
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
		padding:50px 0px 0px 0px;
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
	.morgaon-heading{
		color:black;
		font-size:20px;
	}
	.morgaon-description{
		color:grey;
		font-size:14px;
	}
	.pro-img{
		margin-bottom:40px;
	}
	.pro-img img{
		width:220px;
		height:auto;
		margin-left:35px;
	}
	.pro-manage
	{
		box-shadow:2px 2px 10px 1px rgba(0,0,0,0.3);
		background:white;
	}
	.pro-manage h4{
		font-weight:700;
		margin-left:10px;
		padding:30px;
		color:#19566b;
	}
	.pro-manage h5{
		color:black;
		font-weight:500;
		margin-left:40px;
		margin-right:30px;
	}
	.pro-manage p{
		 color:grey;
		 margin-left:40px;
		 margin-right:50px;
		 padding:7px;
	}
	.pro-manage ul{
		 margin-top:20px;
	}
	.pro-manage ul li{
		 color:grey;
		 margin-left:40px;
		 margin-right:40px;
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
				<b style="color:black;">Apps</b>
			</div>
			<?php
			//including header navbar.
			include ('../about/header_component.php');
			?>
		</header>
		<div class="container">
			<div class="row">
				<h2 class="pr">Applications & Programs</h2>
				<p class="pr-p">
					Applications and programs which has been created by me.
				</p>
			</div>
		</div>
	</div>
	<div class="middle-bg">
		<div class="container">
			<div class="pro-manage">
				<h4>
					On Mock - Learn & Apply
					<p style="color:grey;font-size:15px;margin-left:5px;">Developer Name - Manish Official</p>
				</h4>
				<h5>This project is mainly based on Education Application which provides notes and also takes test of the student. Here the user/student can evaluate their exam skills.</h5><br/>
				<p>
					App link - <a href="https://play.google.com/store/apps/details?id=com.testqom">https://play.google.com/store/apps/details?id=com.testqom</a>
				</p>
				<p style="font-size:16px;font-weight:700;border:1px solid grey;padding:10px;width:150px;border-radius:10px;background:lightblue;"><a style="color:black;" href="../projects/projects.php">See More Details</a></p><br/>
				<div class="row">
					<div class="pro-img">
						<a href="https://play.google.com/store/apps/details?id=com.testqom"><img class="img-thumbnail" src="../sys_images/onmock-logo.jpg"> <img class="img-thumbnail" src="../sys_images/play-store.png"></a>
					</div>
				</div>
			</div>
			<hr/>
			<div class="pro-manage">
				<h4>
				CL SALES - Quaulity Products
				<p style="color:grey;font-size:15px;margin-left:5px;">Created By - Manish Patel</p>
				</h4>
				<h5>This project is mainly based on E-Commerce category which displays their shop’s products for their user.<br/>
					User can easily place their order through this website.
				</h5>
				<p>
					Website link - <a href="http://www.clsales.in">http://www.clsales.in</a>
				</p>
				<br/>
				<p style="font-size:16px;font-weight:700;border:1px solid grey;padding:10px;width:150px;border-radius:10px;background:lightblue;"><a style="color:black;" href="../projects/projects.php">See More Details</a></p><br/>
				<div class="row">
					<div class="pro-img">
						<a href="http://www.clsales.in"><img class="img-thumbnail" src="../sys_images/clsales-logo.png"><img class="img-thumbnail" src="../sys_images/goto-url.png">
					</div>
				</div>
			</div>
			<div class="row">
				<p class="pr-p"><br/>Multiple apps and tasks will be taken further...ThankYou!
			</div>
		</div>
	</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
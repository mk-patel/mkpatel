<?php
session_start();
if(empty($_SESSION['message_login'])){
	$msg= "Login or Create Account";
}
else{
	$msg = $_SESSION['message_login'];
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
	<meta name="theme-color" content="#f2fbff" />
	<title>Manish Patel - Login</title>
	<meta property="og:title" content="Manish Patel - Login">
	<meta name="description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
	<meta property="og:description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
    <meta name="keywords" content="manish patel,manish kumar,mkp,mpatel,problem solver,believes in application knowledge">
    <meta name="author" content="Manish Patel">
	<link rel="stylesheet" type="text/css" href="../../about/header.css"/>
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
	.pr-img{
		text-align:center;
	}
	.pr-img img{
		width:200px;
		height:auto;
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
	.pro-manage p a{
		 color:grey;
	}
	.pro-manage ul{
		 margin-top:20px;
	}
	.pro-manage ul li{
		 color:grey;
		 margin-left:40px;
		 margin-right:40px;
	}
	.forgetpass a{
		color:black;
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
				<b style="color:black;">Login</b>
			</div>
			<?php
			//including header navbar.
			include ('../../about/header_component.php');
			?>
		</header>
		<div class="container">
			<div class="row">
				<h2 class="pr">Login</h2>
				<p class="pr-p">
					Admin Panel for Chhatrapal
				</p>
			</div>
		</div>
		<div class="container">
			<div class="login-message">
				<?php
				echo $msg;
				session_destroy();
				?>
			</div>
			<hr/>
			<form action="index.php" id="setupform" method="POST" autocomplete="on">
				<div class="form-group">
					<label for="uname"style="font-weight:700;">Email :</label>
					<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php if(isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"];}?>" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="pwd" style="font-weight:700;">Enter / Create Password:</label>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"];}?>" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-check-inline">
					<input type="checkbox" class="form-check-input" name="remember" <?php if(isset($_COOKIE["user_email"])) {?> checked <?php } ?>>
					<label class="form-check-label" for="remember-me">Remember me</label>
					<div class="valid-feedback">Valid.</div>
				</div>
				<br>
				<br>
				<button type="submit" name="submit" class="btn btn-primary">Login</button>
			</form>
			<br>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>

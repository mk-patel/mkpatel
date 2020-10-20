<?php
session_start();
	if(empty($_SESSION['message'])){
		$msg="Hello User, Please Login To Enjoy The Service !";
	}
	else{
		$msg = $_SESSION['message'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
		<title>Manish Patel - Login For More Information</title>
		<meta property="og:title" content="Manish Patel - Login For More Information">
		<meta name="description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta property="og:description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta name="keywords" content="manish patel,manish kumar,mkp,mpatel,problem solver,believes in application knowledge">
		<meta name="author" content="Manish Patel">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="header.css"/>
		<style>
			.row{
				margin-top:30px;
			}
			.war-msg p{
				margin-top:10px;
				padding:20px;
				color:purple;
				font-weight:700;
			}
			.form-group{
				margin-left:20px;
				margin-right:20px;
				color:#19566b;
			}
		</style>
	</head>
	<body>
		<header class="d-flex justify-content-between bg-info">
			<div class="header-title">
				Mkpatel&nbsp;
			</div>
			<div class="header-pg-title">
				<b style="color:black;">Login</b>
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
					<li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
				</ul>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-sm-6" style="border-radius:10px;background:lightblue;text-align:center;margin-left:20px;margin-right:20px;">
					<div class="war-msg">
						<p>
							<?php
								echo $msg;
							?>
						</p>
					</div>
				</div>
				<div class="col-sm-6">
					<form action="login_pro.php" id="setupform" method="POST" autocomplete="on">
						<div class="form-group">
							<label for="uname"style="font-weight:700;margin-top:20px;">Username:</label>
							<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"];}?>" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
						<div class="form-group">
							<label for="pwd" style="font-weight:700;">Password:</label>
							<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"];}?>" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
						<div class="form-group">
						<div class="form-check-inline">
							<input type="checkbox" class="form-check-input" name="remember" <?php if(isset($_COOKIE["username"])) {?> checked <?php } ?>>
							<label class="form-check-label" for="remember-me" style="font-weight:700;">One Time Login</label>
							<div class="valid-feedback">Valid.</div>
						</div>
						<br>
						<br>
						<button type="submit" name="submit" class="btn btn-info">Login</button>
						</div>
						<div class="form-group">
						<a style="color:grey;" href="forgetpass.php">Forgot Password</a>
					</div>
					</form>
					
					<br>		
				</div>
			</div>
		</div>
		<br>
		<div class="bottom">
			<div class="btm-elm">
				<a href="feedback.php">Suggessions & Feedback</a> | <a href="about.html">About</a> | <a href="privacypolicy.html">Privacy Policy</a>
			</div>
			<div class="last-line">
				All the contents & images are genuine and written & developed by Manish Patel.
			</div>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
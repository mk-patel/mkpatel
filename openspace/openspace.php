<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
	<meta name="theme-color" content="#f2fbff" />
	<title>Manish Patel - Open Space</title>
	<meta property="og:title" content="Manish Patel - Open Space">
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
	.open-space-heading h2{
		margin-top:20px;
		margin-left:10px;
		color:#050c3b;
		width:100%;
		padding:10px;
	}
	.open-space-heading p{
		color:#050c3b;
		font-size:15px;
		margin-left:20px;
		margin-bottom:10px;
		padding:10px 10px 30px 10px;
	}
	.middle-bg{
		background:#f2fbff;
		background-repeat:no-repeat;
		background-size:cover;
	}
	.row{
		margin-left:10px;
		margin-right:10px;
	}
	.post{
		background:white;
		width:100%;
		box-shadow:2px 2px 10px 1px rgba(0,0,0,0.2);
		padding:20px;
	}
	.user-info{
		width:100%;
	}
	.user-image{
		float:left;
		width:70px;
		height:70px;
	}
	.user-image img{
		padding:10px;
		width:60px;
		height:60px;
	}
	.user-name{
		margin-left:50px;
	}
	.user-name h5{
		padding:12px;
		font-size:16px;
	}
	.post-info{
		width:100%;
		padding:10px;
	}
	.form-field{
		background:white;
		padding:20px;
		width:100%;
	}
	.custom-select{
		width:100px;
		float:left;
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
				<b style="color:black;">Open Space</b>
			</div>
			<?php
			//including header navbar.
			include ('../about/header_component.php');
			?>
		</header>
		<div class="container">
			<div class="open-space-heading">
				<h2>Open Space</h2>
				<p>Share your thoughts and ideas.<br/>
				You can share the thoughts private to me directely by choosing private in place of public.</p>
			</div>
		</div>
	</div>
	<div class="middle-bg">
		<br/>
		<br/>
		<div class="container">
			<div class="form-field">
				<form class="form" method='post'  onsubmit="return post();">
					<div class="form-group">
						<textarea rows="3" class="form-control" id="data" name="data" placeholder="Share your thoughts and ideas..." required></textarea>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					<div class="form-group">
						<span>
							<select class="custom-select" name="privacy" required>
								<option selected value="public">Public</option>
								<option  value="private">Private</option>
							</select>
							&nbsp;&nbsp;&nbsp;
							<button type="submit" id="submit" name="submit" class="btn btn-info">Post</button>
						</span>
					</div>
				</form>
			</div>
			<script type="text/javascript">
			function post(){
				var data = document.getElementById("data").value;
				if(data){
					$.ajax({
						type: 'post',
						url: 'insert-openspace-data.php',
						data:{
							user_data:data
						},
						success: function (response) {
						document.getElementById("post").innerHTML=response+document.getElementById("post").innerHTML;
						document.getElementById("data").value="";
						}
					});
				}
			return false;
			}
			</script>
			<br/><br/>
			<div class="row">
				<div class="post" id="post">
					<div class="user-info">
						<div class="user-image">
							<img src="../sys_images/onmock-logo.jpg"/>
						</div>
						<div class="user-name">
							<h5>
								Manish Patel<br/>
								Date
							</h5>
						</div>
					</div>
					<hr/>
					<div class="post-info">
						<p>
							Test data.
						</p>
					</div>
				</div>
			</div>
		</div>
	<br/>
	<br/>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
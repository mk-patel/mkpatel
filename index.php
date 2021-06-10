<?php
include('db.php');
include('config.php');
if(isset($_GET["code"])){
 	$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 	if(!isset($token['error'])){
		$google_client->setAccessToken($token['access_token']);
		$_SESSION['access_token'] = $token['access_token'];
		$google_service = new Google_Service_Oauth2($google_client);
		$data = $google_service->userinfo->get();
		if(!empty($data['given_name'])){
			$_SESSION['user_first_name'] = $data['given_name'];
		}
		if(!empty($data['family_name'])){
			$_SESSION['user_last_name'] = $data['family_name'];
		}
		if(!empty($data['email'])){
			$_SESSION['user_email_address'] = $data['email'];
		}
		if(!empty($data['gender'])){
			$_SESSION['user_gender'] = $data['gender'];
		}
		if(!empty($data['picture'])){
			$_SESSION['user_image'] = $data['picture'];
		}
 	}
}
if(!isset($_SESSION['access_token'])){
	header('location:index.php');
}
$nm = $_SESSION['user_first_name'];
$ln = $_SESSION['user_last_name'];
$img = $_SESSION["user_image"];
$em = $_SESSION['user_email_address'];
$query =  "select email from uforu where email='$em'";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);
if($resultCheck == 0){
	$query =  "INSERT INTO uforu (f_name,l_name,email,gender,enable_ml) VALUES ('$nm', '$ln', '$em', 'NA','off')";
	$result = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
		<title>Manish Patel - Application That Means PSP</title>
		<meta property="og:title" content="Manish Patel - Believes in Application Knowledge">
		<meta name="description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta property="og:description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
		<meta name="keywords" content="manish patel,manish kumar,mkp,mpatel,problem solver,believes in application knowledge">
		<meta name="author" content="Manish Patel">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
        <style>
		body{
			background:white;
			font-family: 'Work Sans', sans-serif;
			}
		header{
			width:100%;
			height:40px;
			box-shadow:2px 2px 10px 1px rgba(0,0,0,0.7);
			background:red;
		}
		.header-title{
			font-size:16px;
			color:black;
			margin-top:8px;
			margin-left:10px;
		}
		.header-pg-title{
			font-size:16px;
			margin-top:8px;
		}
		.header-img img{
			width:60px;
			height:39px;
			margin-left:10px;
			border:1px solid white;
			border-radius:50%;
		}
		.header-content{
			margin-right:10px;
			width:60px;
			height:40px;
		}
		.header-content img{
			width:40px;
			height:40px;
			border:1px solid white;
			border-radius:50%;
		}
		#category{
			margin-top:2px;
			color:white;
			font-size:16px;
			font-weight:400;
		}
		.dropdown-item{
			color:black;
			font-size:14px;
			font-weight:700;
		}
		
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
			font-size:20px;
			color:grey;
			margin-top:15px;
			margin-left:15px;
			padding:5px;
			font-weight:700;
		}
		@media screen and (max-width:700px){
			.box {
				box-shadow:2px 2px 10px 1px rgba(0,0,0,0.1);
			}
		}
		</style>
	</head>
    <body>
        <header class="d-flex justify-content-between">
			<div class="header-title">
				Mkpatel&nbsp;
			</div>
			<div class="header-pg-title">
				<b style="color:white;margin-right:10px;">Welcome !</b>
			</div>
		</header>
        <div class="container">
            <br />
            <br />
            <div class="panel panel-default">
                <?php
                $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
                    echo '<div align="center">'.$login_button . '</div>';
                ?>
            </div>
        </div>
        <br />
        <br />
        <div class="bottom">
            <div class="btm-elm">
                <a href="feedback.php">Suggessions & Feedback</a> | <a href="about.html">About</a> | <a href="privacypolicy.html">Privacy Policy</a>
            </div>
            <div class="last-line">
                All the contents & images are genuine and written & developed by Manish Patel.
            </div>
		</div>
    </body>
</html>
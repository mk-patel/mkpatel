<?php
if(isset($_POST["submit"]))
{
	$pw=$_POST["password"];
	$pw=md5($pw);
	$pw=sha1($pw);
	if(empty($pw))
	{
		header("Location: login.php");
	}
	else if($pw=="5547e63e1a724ea0b42b8d6b79f6a0c243665f55")
	{
        session_start();
	    $_SESSION["password"]=$pw;
		header("Location: proinfo.php");
	}

	else if($pw=="33b938457f1c233fd7b1f5e0061d7dffaccf574a")
	{
        session_start();
		$_SESSION["password"]=$pw;
		header("Location: projects.php");
	}
	else if($pw=="eb51e8d5f7832dda80be1baef97c8f8c3034407e")
	{
        session_start();
		$_SESSION["password"]=$pw;
		header("Location: applicatiots.php");
	}
	else
	{
		header("Location: login.php");
	}
}
?>
<html>
<head>
<title>Manish Patel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
header{
width:100%;
height:40px;
background:green;
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
.row{
	text-align:center;
}
.explore{
font-size:15px;
color:grey;
text-align:center;
}
.explore-img img{
width:120px;
height:120px;
text-align:center;
}
.notice
{
font-size:14px;
color:grey;
text-align:center;
}
.head-lock
{
	margin-top:20px;
	font-size:20px;
	color:orange;
	font-weight:700;
	text-align:center;
	padding:10px;
}
</style>

</head>
<body>
<header>
<div class="header-img">
<img src="images/mp.jpg"> &nbsp;MKPATEL
</div>

</header>
<div class="container">
<div class="row">
<p class="head-lock">
Enter PassCode
</p>
</div>
<hr>
	<div class="row">
	    <div class="col-sm-6">
		    <p class="explore">
			<b style="color:green;">Please enter the passcode to view the information.</b><br>
            You can email me without hesitation to know the passcode with a valid reason.<br>
			manishkp399@gmail.com
            </p>
		</div>
		<div class="col-sm-6">
		    <div class="explore-img">
                <img class="into-img" src="images/lock.png">
		    </div>
		</div>
    </div>

<form method="POST" autocomplete="on">
  <div class="form-group">
    <label for="pwd" style="font-weight:700;">PassCode:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter passcode" name="password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Enter</button>
</form>

<div class="row">
<p class="notice">
I have to hide my information due to some anti-social people.
Because some people are jealous of the achievements of others instead of increasing their knowledge.
</p>
</div>
</div>
</body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>

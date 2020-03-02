<html>
<head>
<title>Manish Patel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<div class="container" id="form">
<form method="POST" autocomplete="on">
  <div class="form-group">
    <label for="pwd" style="font-weight:700;">PassCode:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter passcode" name="password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Enter</button>
</form>
</div>
<?php
if(isset($_POST["submit"]))
{
	$pw=$_POST["password"];
    if(empty($pw))
	{
		header("Location: login.php");
	}
	else if($pw=="440v")
	{
        session_start();
	    $_SESSION["password"]=$pw;
		header("Location: proinfo.php");
	}
	else if($pw=="450v")
	{
        session_start();
		$_SESSION["password"]=$pw;
		header("Location: perinfo.php");
	}
	else if($pw=="460v")
	{
        session_start();
		$_SESSION["password"]=$pw;
		header("Location: projects.php");
	}
	else
	{
		header("Location: login.php");
	}
}
?>
</html>
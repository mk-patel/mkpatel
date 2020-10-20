<?php
session_start();
require 'db.php';
if(isset($_POST["submit"])){
	$unn = mysqli_real_escape_string($conn, $_POST['username']);
    $un = trim($unn);
	$pwdd = mysqli_real_escape_string($conn, $_POST['password']);
    $pwd = md5($pwdd);
    $pwd = sha1($pwd);
	if(empty($un) || empty($pwdd)){
		$_SESSION['message'] = "Hello User, Please Login To Enjoy The Service !";
		header("Location: login.php");
	}
	else{
		$sql="SELECT * FROM users WHERE username='$un'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			$_SESSION['message'] = "This Username Or Password Not Exist, Please Login With Legal Entries !";
			header("Location: login.php");
		}
		else{
            $row = mysqli_fetch_assoc($result);
			if($pwd !== $row["password"]){
				$_SESSION['message'] = "This Username Or Password Not Exist, Please Login With Legal Entries !";
				header("Location: login.php");
				}
				else if($pwd == $row["password"]){
					$_SESSION["username"] = $row["username"];
					$_SESSION["password"] = $row["password"];
					if(!empty($_POST["remember"])){
		                setcookie ("username",$un,time()+(10 * 365 * 24 * 60 * 60));
		                setcookie ("password",$pwdd,time()+(10 * 365 * 24 * 60 * 60));
	                }
					else{
		                if(isset($_COOKIE["username"])){
			                setcookie ("username","");
						}
		                if(isset($_COOKIE["password"])){
			                setcookie ("password","");
		                }
	                }
					header("Location: home.php");
				}
				else{
					$_SESSION['message'] = "This Username Or Password Not Exist, Please Login With Legal Entries !";
					header("Location: login.php");
				}
			}
		}
}
?>
<?php

//database connection code.
require_once '../../control/db.php';

// Setting up default timezone.
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d H:i a");

//starting session.
session_start();
if(isset($_POST["submit"])){
	$user_email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_email = trim($user_email);
	$pwdd = mysqli_real_escape_string($conn, $_POST['password']);
    $pwd = md5($pwdd);
    $pwd = sha1($pwd);
	if(empty($user_email) || empty($pwdd)){
        $_SESSION['message_login'] = "email And Password Is Empty !!";
        header("location:login.php");
	}
	else{
		$sql="SELECT user_id,user_email,password FROM user WHERE user_email='$user_email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			$_SESSION['message_login'] = "Invalid";
			header("location: login.php");
		}
		else{
            $row = mysqli_fetch_assoc($result);
			if($pwd != $row["password"]){
					$_SESSION['message_login'] = "Wrong email or Password !!";
					header("location:login.php");
			}
			else if($pwd == $row["password"]){
				$_SESSION["user_email"] = $row["user_email"];
				$_SESSION["password"] = $row["password"];
				if(!empty($_POST["remember"])){
					setcookie ("user_email",$user_email,time()+(30 * 24 * 60 * 60));
					setcookie ("password",$pwdd,time()+(30 * 24 * 60 * 60));
				}
				else{
					if(isset($_COOKIE["user_email"])){
						setcookie ("user_email","");
					}
					if(isset($_COOKIE["password"])){
						setcookie ("password","");
					}
				}
				header("Location: home/action.php");
			}
			else{
				 $_SESSION['message_login'] = "Wrong email or Password !!";
				 header("location: login.php");
			}
		}
	}
}
else{
	if(isset($_COOKIE["user_email"]) && isset($_COOKIE["password"])){
		$user_email =$_COOKIE["user_email"];
        $user_email = trim($user_email);
	    $pwdd =$_COOKIE["password"];
        $pwd = md5($pwdd);
        $pwd = sha1($pwd);
	    if(empty($user_email) || empty($pwdd)){
        	$_SESSION['message_login'] = "email And Password Is Empty !!";
			header("location:login.php");
	    }else{
			$sql="SELECT user_id,user_email,password FROM user WHERE user_email='$user_email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck < 1){
				$_SESSION['message_login'] = "User Not Exist !!";
				header("location:login.php");
			}
			else{
				$row = mysqli_fetch_assoc($result);
				if($pwd != $row["password"]){
						$_SESSION['message_login'] = "Wrong email or Password !!";
						header("location:login.php");
				}
				else if($pwd == $row["password"]){
					session_start();
					$_SESSION["user_email"] = $row["user_email"];
					$_SESSION["password"] = $row["password"];
					header("Location: home/action.php");
				}
				else{
					$_SESSION['message_login'] = "Please Login Carefully !!";
					header("location:login.php");
				}
			}
		}
	}
	else{
		$_SESSION['message_login'] = "Please Login Carefully !!";
		header("location:login.php");
	}
}
?>
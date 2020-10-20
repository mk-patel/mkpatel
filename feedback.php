<html>
<head>
<title>Mor Gaon : MyEVillage</title>
	<meta charset="UTF-8">
        <meta name="description" content="I am manish patel , this website will provide contents from manish patel.">
    <meta name="keywords" content="manish patel, manish kumar,mkp,mpatel">
    <meta name="author" content="Manish Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
background:white;
font-family: 'Work Sans', sans-serif;
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
.btn{
font-size:12px;
font-weight:700;
padding:5px;
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
<br>

  <div class="container">
Suggessions & Feedback
<hr style="border:2px solid green">
  </div>



<div class="d-flex justify-content-center">
<div class="container">
 <form class="form" action="feedback.php" method="post" enctype="multipart/form-data" autocomplete="off">

<div class="form-group">
<label for="text">Your Name :</label>
    <input type="text" class="form-control" id="username" placeholder="Your Name " name="name" required>
</div>
<div class="form-group">
<label for="comment">Feedback / Report :</label>
  <textarea class="form-control" rows="7" id="comment" name="content" required></textarea>
</div>

<div class="form-group">
<label for="text">Your Mobile Number :</label>
<input type="text" class="form-control" id="username" placeholder="Mobile Number " name="mobile" required>

</div>
  
<button type="submit" name="submit" class="btn btn-warning">Submit</button>

</form>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
/*	 <?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title = $mysqli->real_escape_string($_POST['name']);
	$content = $mysqli->real_escape_string($_POST['content']);
    $mobile = $mysqli->real_escape_string($_POST['mobile']);
	$dt2=date("Y-m-d H:i:s");
		
	$sql = "INSERT INTO users(name,post,mobile,date)"
                    . "VALUES('$title','$content','$mobile','$dt2')";	
	mysqli_query($conn,$sql);
    echo "<br>";
    echo "<center style='color:green;'>Thankyou For Your Feedback.</center>";	
    echo "<br>";
    echo "<br>";echo "<br>";
}

?>*/
</body>
</html>
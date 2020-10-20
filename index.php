<?php

//index.php

//Include Configuration File
include('config.php');

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">PHP Login using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php
   $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
    echo '<div align="center">'.$login_button . '</div>';
   ?>
   </div>
  </div>
 </body>
</html>
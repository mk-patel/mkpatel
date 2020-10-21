<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
        <title>Manish Patel - Believes in Application Knowledge</title>
        <meta property="og:title" content="Manish Patel - Believes in Application Knowledge">
        <meta name="description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
        <meta property="og:description" content="This is Manish, demonstratingand applying his knowledge to discover and invent problem soliving products for human help.">
        <meta name="keywords" content="manish patel,manish kumar,mkp,mpatel,problem solver,believes in application knowledge">
        <meta name="author" content="Manish Patel">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oxanium|Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="header.css"/>
    </head>
    <body>
        <header class="d-flex justify-content-between bg-info">
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

<?php

$conn = mysqli_connect("localhost", "root", "", "mkpatel_9826");
$mysqli = new mysqli("localhost", "root", "", "mkpatel_9826");

if(!$conn){
    die("Connection Failed, Please Try Again !!".mysqli_connect_error());
}

?>
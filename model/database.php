<?php
$server="localhost";
$user="root";
$pass="";
$dbn="french_learn_db";
$mysqli= new mysqli($server,$user,$pass,$dbn);
$query="SELECT * FROM users";
$users=$mysqli->query($query) or die('error_log(message)');
?>
<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "ajaxdb";

$conn = mysqli_connect($server,$user,$password,$dbname) or
die('DB Connection Failed');  

?>
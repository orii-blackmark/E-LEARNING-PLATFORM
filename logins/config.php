<?php
/*
$server = "localhost";
$user = "root";
$pass = "";
$database = "ols_users";

$conn = mysqli_connect($server, $user, $pass, $database);
*/
$con = mysqli_connect("localhost", "root", "", "ols_users") or 
die(
    mysqli_error());

?>s

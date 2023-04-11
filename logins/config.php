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

<<<<<<< HEAD
?>s
=======
if (!$conn) {
    die("<script>alert('connection failed.')</script>");
}
>>>>>>> 09cfee4211127a654902ed892aa578d5a375b02a

<?php
include_once 'config.php ';

//error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO details (username,email,password) 
            VALUES('$username','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('wow! User registration completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Ooops! something went wrong.')</script>";
            }
        } else {
            echo "<script>alert('Ooops! Email already exist.')</script>";
        }
    } else {
        echo "<script>alert('Password not matched.')</script>";
    }
}
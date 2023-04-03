<?php
include_once 'config.php';

//error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("location: /index.php");
}

if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);

$sql = "INSERT INTO users(fname,lname,email,pnumber,password) VALUES('$fname','$lname','$email','$pnumber','$password')";
$result=mysqli_query($conn,$sql); 
if ($result) { echo "
<script>
  alert('User registration completed.');
</script>
"; 
}else{
 "<script>
 alert('There was an error when trying to create an account');
  </script>
  ";
}
}
?>
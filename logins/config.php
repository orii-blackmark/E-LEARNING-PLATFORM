<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "ols_users";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('connection failed.')</script>");
<<<<<<< HEAD
}
=======
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
>>>>>>> 5816d093b56fe18bea8c1c3471fb3bc1c0476511

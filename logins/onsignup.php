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

    if ($password==$cpassword) {
        $sql="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        if (!$result->num_rows>0) { $sql = "INSERT INTO details
        (fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
        $result=mysqli_query($conn,$sql); 
        if ($result) { echo "
        <script>
          alert('User registration completed.');
        </script>
        "; 
        $fname="";
        $lname="";
        $email=""; 
        $pnumber="";
        $_POST['password']="";
        $_POST['cpassword']=""; 
      }else { echo "
        <script>
          alert('Ooops! something went wrong.');
        </script>
        "; } 
      } else { echo "alert('Ooops! Email already exist.');";} 

      
      }else{ echo "alert('Password not matched.');";}
  } 

?>
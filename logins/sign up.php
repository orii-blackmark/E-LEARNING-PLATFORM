
<?php 
  session_start();

  include("config.php");

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pnumber=$_POST['pnumber'];
        $password=md5($_POST['password']);
        $cpassword=md5($_POST['cpassword']);
        $ran_id = rand(time(), 100000000);

        if ($password == $cpassword) {
            $sql = "INSERT INTO users(unique_id,fname,lname,email,pnumber,password) VALUES('$ran_id','$fname','$lname','$email','$pnumber','$password')";
            mysqli_query($con,$sql); 
            if ($sql) {
                $select_sql2 = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
                if(mysqli_num_rows($select_sql2) > 0){
                    $result = mysqli_fetch_assoc($select_sql2);
                    $_SESSION['unique_id'] = $result['unique_id'];
                    echo "success";
            }else{
                echo "This email address does not Exist!";
            }
            }
            echo "<script>
            alert('User registration completed.');
            </script>
            "; 
            header("location: login.php");
            die;
            }else{
            "<script>
            alert('There was an error when trying to create an account');
            </script>
            ";
            }
    }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="../assets/backgrounds.mp4" type="video/mp4">
      </video>
    <div class="menu">
        <div class="logo">
            <img src="../assets/logo.jpg" alt="ols logo">
            <h1>OLSLEARN</h1>
        </div>
        <div class="sub-menu">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/service.php">Services</a></li>
                <li><a href="/dashboard.php">Dashboard</a></li>
                <li><a href="/help.php">Help</a></li>
                <li><div class="login"><a href="login.php">Login</a></div></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <form action="" method="POST" name="form3" onsubmit="validateSignup()">
            <h3>Create an account</h3>
            <div class="inputs names">
                <div class="name">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname">
                </div>
                <div class="name">
                    <label for="Lname">Last Name</label>
                    <input type="text" name="lname">
                </div>
            </div>
            <div class="inputs">
                <label for="">Email</label>
                <input type="email" name="email" id="">
            </div>
            <div class="inputs">
                <label for="">Phone Number</label>
                <input type="text" name="pnumber">
                
            </div>
            <div class="inputs">
                <label for="">Password</label>
                <input type="password" name="password" id="">
            </div>
            <div class="inputs">
                <label for="">Confirm Password</label>
                <input type="password" name="cpassword" id="">
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
            <div class="extras">
                Already have an account?
                <a href="login.php">Login here</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    
</body>
</html>
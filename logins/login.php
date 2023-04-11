<?php 
  session_start();
  
  include("config.php");

  if ($_SERVER['REQUEST_METHOD'] == "POST") 
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    if(!empty($password)){
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['email'] == "admin@admin.com" && $user_data['password'] == "admin" ){
                    echo "<script>
                alert('Login successfully as admin');
                </script>
                "; 
                header("location: ../admin/admin.php"); 
                die;
                }
                if($user_data['password'] == $password){
                    echo "<script>
            alert('Login successfully');
            </script>
            "; 
                    header("location: ../dashboard.php"); 
                    die;
                }
            }
        }  echo "<script>
            alert('Wrong email or password');
            </script>
            "; 
    }
    else{
        echo "<script>
            alert('Wrong email or password');
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
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="menu" >
        <div class="logo">
            <img src="../assets/logo.jpg" alt="ols logo">
            <h1>OLSLEARN</h1>
        </div>
        <div class="sub-menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../service.php">Services</a></li>
                <li><a href="../dashboard.php">Dashboard</a></li>
                <li><a href="../help.php">Help</a></li>
                <li><a class="active">Login</a></li>
            </ul>
        </div>
    </div>
    <video autoplay muted loop id="bg-video">
        <source src="../assets/backgrounds.mp4" type="video/mp4">
      </video>
      
    <div class="container">
        <form action="" method="POST" name="form2" onsubmit="validateLogin()">
            <h3>Login </h3>
            <div class="inputs">
                <label for="">Email</label>
                <input type="email" name="email" id="">
            </div>                
            <div class="inputs">
                <label for="">Password</label>
                <input type="password" name="password" id="">
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
            <div class="extras">
                <a href="forgot_pass.php">Forgot password?</a> <br>
                Don't have an account?
                <a href="sign up.php">Sign up here</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
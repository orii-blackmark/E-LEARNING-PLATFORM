<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="logo.jpg" type="image/icon type">
  <title>E-learning platform</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .services {
      padding: 40px;
      text-align: center;
    }

    .services h2 {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .services p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 40px;
    }

    .services ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .services li {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .services li:before {
      content: "✓ ";
      color: green;
      margin-right: 10px;
    }
    .services li a{
      text-decoration: none;
      border: none;

    }

    .services a {
      color: #333;
      text-decoration: none;
    }

    .services a:hover {
      color: gray;
      font-size: 25px;
    }
  </style>

</head>

<body>
  <div class="menu">
    <div class="logo">
        <img src="assets/logo.jpg" alt="ols logo">
        <h1>OLSLEARN</h1>
    </div>
    <div class="sub-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="#">Services</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="help.php">Help</a></li>
            <li><div class="login"><a href="/logins/login.php">Login</a></div></li>
        </ul>
    </div>
  </div>
  <div class="services">
    <h2>Our Services</h2>
    <p>We offer a wide range of online courses and resources to help you learn and grow.</p>
    <ul>
      <li><a href="#">Programming languages</a></li>
      <li><a href="#">Web development</a></li>
      <li><a href="#">Data science</a></li>
      <li><a href="#">Design</a></li>
      <li><a href="#">Business</a></li>
      <li><a href="#">Marketing</a></li>
    </ul>
  </div>
  <body>
 
    <div class="footer">
      <div class="row">
        <div class="column">
          <div class="one">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Molestias nam <br><br>ipsam cumque! Omnis quos nemo impedit dolor <br><br> ducimus suscipit soluta.</p>
          </div>
        </div>
        <div class="column">
          <div class="two">
            <h3>Company</h3>
            <ul>
              <li>Home</li>
              <li>Courses</li>
              <li>ORILEARN Academy</li>
              <li>Offers</li>
            </ul>
          </div>
        </div>
        <div class="column">
          <div class="three">
            <h3>Follow Us</h3>
            <ul>
              <li>Instagram</li>
              <li>Twitter</li>
              <li>LinkedIn</li>
              <li>Facebook</li>
              <li>Github</li>
            </ul>
          </div>

        </div>
        <div class="column">
          <div class="four">
            <h3>Contact us</h3>
            <div class="input">
              Send us a message
              <form action="">
                <textarea id="message" cols="20" rows="4" placeholder="Write Something"></textarea>
                <input id="submit" type="submit" value="Send">
              </form>

            </div>
          </div>
        </div>
        <div class="chatbot">
          <h4>Chat with us</h4>
          <div class="icon">
            <img src="assets/message.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
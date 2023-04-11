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
    .footer{
      display: block;
    }
    .main_content {
      width: 100%;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 20px;
    }

    .main_content h2 {
      font-size: 36px;
      margin-bottom: 30px;
      margin-top: 10px;
    }
    .main_content h3{
      margin-bottom: 10px;
      margin-top: 10px;
      padding: 0 5px;
      font-size: 23px;
    }

    .main_content p {
      font-size: 20px;
      line-height: 30px;
      padding: 5px;
    }

    .main_content ul {
      font-size: 20px;
      line-height: 30px;
      margin-top: 30px;
      list-style: none;
      padding: 5px;
      text-align: center;
      border: solid 1px grey;
      border-radius: 20px;
    }

    .main_content li {
      margin-bottom: 10px;
      text-align: center;

    }
    .main_content .faqs{
      border-radius: 20px;
      box-shadow: 3px 14px 16px 3px rgba(0, 0, 0, 0.5);
      width: 80%;
      padding: 10px 10px 40px 10px;
      margin-top: 40px;
      margin-bottom: 40px;
      text-align: center;
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
            <li><a href="service.php">Services</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a class="active">Help</a></li>
            <li><div class="login"><a href="logins/login.php">Login</a></div></li>
        </ul>
    </div>
</div>
<div class="main_content">
  <h2>How can we help you?</h2>
  <p>
    At OLSLEARN, we strive to provide the best learning experience for our students. If you have any questions, concerns or issues while using our platform, our support team is always available to assist you.
  </p>
  <div class="faqs">
    <h2>Frequently Asked Questions</h2>

  <h3>How do I enroll in a course?</h3>
  <p>To enroll in a course, simply go to the course page and click the "Enroll" button. You'll then be asked to confirm your enrollment and make any necessary payments.</p>

  <h3>What if I'm having technical issues?</h3>
  <p>If you're having technical issues with our platform, please check our Technical Support page for solutions to common problems. If you can't find a solution there, please contact our support team for further assistance.</p>

  <h3>How do I cancel my subscription?</h3>
  <p>To cancel your subscription, go to your account settings and click the "Cancel Subscription" button. You'll then be asked to confirm the cancellation and provide any necessary feedback.</p>
  </div>
  <h3>Contact our support team:</h3>
  <ul>
    <li>
      <strong>Email:</strong> support@olslearn.com
    </li>
    <li>
      <strong>Phone:</strong> 1-800-OLS-LEARN
    </li>
    <li>
      <strong>Live chat:</strong> Click on the chat icon on the bottom right corner of the screen to chat with our support team.
    </li>
  </ul>

</div>

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
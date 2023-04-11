<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project 1</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logo.jpg" type="image/icon type">
    <title>E-learning platform</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="stylesheet" href="projects/pr_styles.css">
    <style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #2d545e;
			color: #000;
			padding: 10px;
            justify-content: center;
            text-align: center;
		}

		h1 {
			margin: 0;
			padding: 0;
		}

		nav {
			background-color: #2d545e;
			padding: 10px;
            justify-content: space-between;
            text-align:inherit;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		nav li {
			display: inline-block;
			margin-right: 10px;
		}

		nav a {
			color: #333;
			text-decoration: none;
			padding: 5px;
		}

		nav a:hover {
			background-color: #333;
			color: #fff;
		}

		main {
			padding: 10px;
		}

		h2 {
			margin-top: 30px;
		}

		p {
			line-height: 1.5;
			margin-bottom: 10px;
		}

		ul {
			margin-top: 0;
			margin-bottom: 10px;
			padding-left: 20px;
		}

		li {
			line-height: 1.5;
			margin-bottom: 5px;
		}
        
		form {
			margin-top: 30px;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"], textarea {
			display: block;
			margin-bottom: 10px;
			width: 80%;
			padding: 10px;
			border: 1px solid#000;
			border-radius: 10px;
			box-sizing: border-box;
			resize: vertical;
		} 

		button[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 5px 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button[type="submit"]:hover {
			background-color: #555;
		}
	</style>
</head>
<body>
    <div class="menu" id="menu">
        <div class="logo">
            <img src="assets/logo.jpg" alt="ols logo">
            <h1>OLSLEARN</h1>
        </div>
        <div class="sub-menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="dashboard.html">Dashboard</a>
                </li>
                <li><a href="help.html">Help</a></li>
            </ul>
        </div>
    </div>
        <!--WORKSPACE-->

        <header>
            <h1>Help Page</h1>
        </header>
        <nav>
            <ul>
                <li><a href="#getting-started">Getting Started</a></li>
                <li><a href="#account-settings">Account Settings</a></li>
               <!---- <li><a href="#payment">Payment</a></li> --->
                <li><a href="#contact-us">Contact Us</a></li>
            </ul>
        </nav>
        <main>
            <h2 id="getting-started">Getting Started</h2>
            <p>Welcome to our website! To get started, simply create an account by clicking on the "Sign Up" button in the top right corner of the screen.</p>
            <ul>
                <li>Step 1: Enter your email address and create a password.</li>
                <li>Step 2: Fill out your profile information.</li>
                <li>Step 3: Start using our services!</li>
            </ul>
    
            <h2 id="account-settings">Account Settings</h2>
            <p>To update your account settings, log in and click on the "My Account" button in the top right corner of the screen. From there, you can edit your profile information, change your password, and update your payment information.</p>
           <!--
            <h2 id="payment">Payment</h2>
            <p>To make a payment, log in and click on the "Payment" button in the top right corner of the screen. From there, you can enter your payment information and complete your transaction.</p>
            -->
            <h2 id="contact-us">Contact Us</h2>
            <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
    
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email">
    
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter your message"></textarea>
    
                <button type="submit">Send Message</button>
            </form>
        </main>
        <!--WORKSPACE-->
       </div>
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
            <section>
                <div class="chatbot">
                  <div class="container">
                    <div class="chatbox">
                      <div class="chatbox__support">
                        <div class="chatbox__header">
                          <div class="chatbox__image--header">
                            <img src="./assets/chatbot.jpg" alt="" />
                          </div>
                          <div class="chatbox__content--header">
                            <h4 class="chatbox__heading--header">Chat-support</h4>
                            <p class="chatbox__description--header">
                              Hi. I am osl bot. How can I help you?
                            </p>
                          </div>
                        </div>
                        <div class="chatbox__messages">
                          <div></div>
                        </div>
                        <div class="chatbox__footer" class="sendBar">
                          <input type="text"  id="inputMSG" onkeypress="isEnter(event)" type="text" placeholder="Type a message" autofocus/>
                          <button class="chatbox__send--footer send__button">
                            <img src="./assets/send.svg" alt="" />
                          </button>
                        </div>
                      </div>
                      <div class="chatbox__button">
                        <button>
                          <h4>chat with us</h4>
                          <img src="./assets/chatbox-icon.svg" />
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
        </div>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>
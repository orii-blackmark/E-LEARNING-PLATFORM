<<<<<<< HEAD:assignment.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
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
h1 {
  color: #333;
}

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 20px;
}

form p {
  margin-bottom: 10px;
}

form input[type="file"] {
  display: block;
  margin-bottom: 10px;
}

form input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

form input[type="submit"]:hover {
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
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="dashboard.php">Dashboard</a>
                </li>
                <li><a href="help.php">help</a></li>
                <li>
                    <div id="user"> 
                        <div class="img">
                            <img src="assets/oriel.jpg" alt="img">
                        </div>
                        <div class="details">
                            <p>Oriel</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="section1" id="section1">
       <div id="left">
        <div id="top">
            <div id="logo">
                <img src="assets/logo.jpg" alt="ols logo">
            </div>
            <div id="desc">
                <h2>OLSLEARN</h2>
                <h3>Dashboard</h3>
            </div>
        </div>
        <div id="lower">
            <div id="categories" >
                <h3><a href="dashboard.php">dashboard</a></h3>
            </div>
            <div id="categories" >
                <h3><a href="personal_details.php">Personnal Details</a></h3>
        </div>
            <div id="categories">
                <h3><a href="projects.php">Projects</a></h3>
            </div>
            <div id="categories" >
                <h3><a href="quizes.php">Quizes & Cats</a></h3>
            </div>
            <div id="categories" class="active">
                <h3><a class="active">Assignments</a></h3>
            </div>
            <div id="categories">
                <h3><a href="grading.php">Grading</a></h3>
            </div>
        </div>
       </div>
       <div id="right">
        <div class="top">
            <div id="icon"><img src="assets/icon.png" alt=""></div>
            <div id="cate">
                <p style="text-transform: uppercase;">assignments</p>
            </div>
        </div>
<!--WORKSPACE-->
<main>
	<p>Submission Deadline:</p>
	
	<form method="post" action="submit.php" enctype="multipart/form-data">
		<p>Select your assignment file:</p>
		<input type="file" name="assignment" accept=".pdf,.doc,.docx" required>
		<br>
        <h4>Save as</h4>
        <input type="text" required>
        <option value="select" required>
        </option>
		<input type="submit" value="Submit">
	</form>

	<p>Please note that once you click on the "Submit" button, you will not be able to make any changes to your submission.</p>

    
  </main>
  <script>
    const form = document.querySelector('form');
    const fileInput = document.querySelector('input[type="file"]');
    const maxSize = 10 * 1024 * 1024 * 1024; // 100 MB
    
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      
      const file = fileInput.files[0];
      
      if (!file) {
        alert('Please select a file');
        return;
      }
      
      if (!/\.pdf$|\.doc$|\.docx$/i.test(file.name)) {
        alert('Please upload a PDF or Word document');
        return;
      }
      
      if (file.size > maxSize) {
        alert('Please upload a file that is smaller than 10 MB');
        return;
      }
      
      form.submit();
    });
  </script>  
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
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
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
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="projects/pr_styles.css">
        <style>
            /* Main content styles */
            main {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
            }
            
            assignment-container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                border-radius: 5px;
                border: 1px solid #ccc;
                padding: 20px;
            }
            main p {
                font-size: 18px;
                line-height: 1.5;
                margin-bottom: 20px;
            }

            main h4 {
                font-size: 20px;
                margin-top: 40px;
                margin-bottom: 20px;
            }

            main input[type="file"] {
                display: block;
                margin-bottom: 20px;
            }

            main input[type="text"] {
                display: block;
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 20px;
            }

            main input[type="submit"] {
                background-color: #333;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                text-align: center;
                width: 40%;
            }

            main input[type="submit"]:hover {
                background-color: #666;
            }

            main p.note {
                font-size: 16px;
                line-height: 1.5;
                margin-top: 40px;
            }

            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-top: 20px;
            }

            form p {
                margin-bottom: 10px;
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
                    <li><a href="help.html">help</a></li>
                </ul>
            </div>
        </div>
        <div class="section1" id="section1">
            <div id="left">
                <div id="top">
                    <div id="logo">
                        <img src="assets/logo.jpg" alt="ols logo">
                    </div>
                    <div id="desc">
                        <h2>OLSLEARN</h2>
                        <h3>Dashboard</h3>
                    </div>
                </div>
                <div id="lower">
                    <div id="categories">
                        <h3><a href="personal_details.html">Personnal Details</a></h3>
                    </div>
                    <div id="categories">
                        <h3><a href="dashboard.html">Courses</a></h3>
                    </div>
                    <div id="categories">
                        <h3><a href="projects.html">Projects</a></h3>
                    </div>
                    <div id="categories">
                        <h3><a href="quizes.html">Quizes & Cats</a></h3>
                    </div>
                    <div id="categories" class="active">
                        <h3>Assignments</h3>
                    </div>
                    <div id="categories">
                        <h3><a href="grading.html">Grading</a></h3>
                    </div>
                </div>
            </div>
            <div id="right">
                <div class="top">
                    <div id="icon"><img src="assets/icon.png" alt=""></div>
                    <div id="cate">
                        <p>Projects</p>
                    </div>
                    <div id="user">
                        <div class="img">
                            <img src="assets/oriel.jpg" alt="img">
                        </div>
                        <div class="details">
                            <p>Oriel kiplangat</p>
                        </div>
                    </div>
                </div>
                <!--WORKSPACE-->
                <div class="assignment-container">
                    <main>
                        <p>Submission Deadline:</p>

                        <form method="post" action="submit.php" enctype="multipart/form-data">
                            <p>Select your assignment file:</p>
                            <input type="file" name="assignment" accept=".pdf,.doc,.docx" required>
                            <br>
                            <h4>Save as</h4>
                            <input type="text" required>
                            <option value="select" required>
                            </option>
                            <input type="submit" value="Submit">
                        </form>

                        <p>Please note that once you click on the "Submit" button, you will not be able to make any
                            changes to your submission.</p>


                    </main>
                </div>
                <script>
                    const form = document.querySelector('form');
                    const fileInput = document.querySelector('input[type="file"]');
                    const maxSize = 10 * 1024 * 1024 * 1024; // 100 MB

                    form.addEventListener('submit', (event) => {
                        event.preventDefault();

                        const file = fileInput.files[0];

                        if (!file) {
                            alert('Please select a file');
                            return;
                        }

                        if (!/\.pdf$|\.doc$|\.docx$/i.test(file.name)) {
                            alert('Please upload a PDF or Word document');
                            return;
                        }

                        if (file.size > maxSize) {
                            alert('Please upload a file that is smaller than 10 MB');
                            return;
                        }

                        form.submit();
                    });
                </script>
                <!--WORKSPACE-->
            </div>
        </div>

        <div class="footer">
            <div class="row">
                <div class="column">
                    <div class="one">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Molestias nam <br><br>ipsam cumque! Omnis quos nemo impedit dolor <br><br> ducimus suscipit
                            soluta.</p>
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
>>>>>>> 09cfee4211127a654902ed892aa578d5a375b02a:assignment.html

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
    <link rel="icon" href="../assets/logo.jpg" type="image/icon type">
    <title>E-learning platform</title>
    <link rel="stylesheet" type="text/css"  href="../style.css">
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
            <img src="../assets/logo.jpg" alt="ols logo">
            <h1>OLSLEARN</h1>
        </div>
        <div class="sub-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="admin.php">Dashboard</a>
                </li>
                <li><a href="help.php">help</a></li>
                <li>
                    <div id="user"> 
                        <div class="img">
                            <img src="../assets/oriel.jpg" alt="img">
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
                <img src="../assets/logo.jpg" alt="ols logo">
            </div>
            <div id="desc">
                <h2>OLSLEARN</h2>
                <h3>Dashboard</h3>
            </div>
        </div>
        <div id="lower">
            <div id="categories" >
                <h3><a href="admin.php">dashboard</a></h3>
            </div>
            <div id="categories" >
                <h3><a href="all_programs.php">All Programs</a></h3>
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
            <div id="icon"><img src="../assets/icon.png" alt=""></div>
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
                    <img src="../assets/message.png" alt="">
                </div>        
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>

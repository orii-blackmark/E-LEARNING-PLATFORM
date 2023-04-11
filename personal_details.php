<?php
        // Start the session
        session_start();
        // Include database connection
        include_once "logins/config.php";
        // Get current user details 
        if(isset($_SESSION['unique_id'])){
            $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logo.jpg" type="image/icon type">
    <title>E-learning platform</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="stylesheet" type="text/css" href="projects/pr_styles.css">
    <style>
    main {
        max-width: 1200px;
        margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      
      section {
        flex-basis: 30%;
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }
      /*
      section.profile{
        border: solid green;
      }
      */
      section.profile{
        max-height: 530px;
        border-radius: 10px;
      }

      section.profile h2{
        margin-top: -50px;
      }
      section.profile .img img{
        border: solid 1px ;
        border-radius: 20px;
        padding: 2px;
      }
            
      section h2 {
        margin-top: 0;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        text-transform: uppercase;
        color: #333;
        font-family: 'Poppins', sans-serif;
      }
      .class_history .recents .units{
        text-align: center;
        padding: 5px;
        border-radius: 15px;
        margin-top: 10px;
        background: #2d545e;
        color: #fff;
        cursor: pointer;
        min-height: 120px;
      }
      section.wishlist{
        max-height: 850px;
        overflow: auto;
        border-radius: 10px;
      }
      .wishlist .recents .units:hover{
        background: #397b8b;
      }
      .wishlist .recents .units{
        text-align: center;
        padding: 5px;
        border-radius: 15px;
        margin-top: 10px;
        background: #2d545e;
        color: #fff;
        cursor: pointer;
        min-height: 120px;
      }
      section.class_history{
        border-radius: 10px;
        max-height: 850px;
        max-height: 700px;
        overflow: auto;
      }
      section.recommendation{
        max-height: 850px;
        overflow: auto;
        border-radius: 10px;
      }
      .recommendation .recents .units:hover{
        background: #397b8b;
      }
      .recommendation .recents .units{
        text-align: center;
        padding: 5px;
        border-radius: 15px;
        margin-top: 10px;
        background: #2d545e;
        color: #fff;
        cursor: pointer;
        min-height: 120px;
      }
      .class_history .recents .units:hover{
        background: #397b8b;
      }
      section.certification{
        border: none;
        border-radius: 10px;
        max-height: 700px;
        overflow: auto;
      }
      section.certification ul li .badge{
        border: solid 1px;
        display: flex;
        border-radius: 5px;
        flex-direction: row;
        justify-content: space-between;
        padding: 5px;
        cursor: pointer;
      }
      section.certification ul li .badge .badge_name{
        text-transform: capitalize;
        font-size: 18px;
      }
      section.certification ul li .badge .badge_name p{
        margin: auto;
        line-height: 40px;
      }
      section.certification ul li .badge .badge_icon{
        height: 50px;
        width: 50px;
        margin: auto;
      }
      section.certification ul li .badge .badge_icon img{
        height: 100%;
      }
      ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      .followings{
        border: none;
        max-height: 250px;
        border-radius: 10px;
      }
      .followings ul{
        padding: 10px;
        border-radius: 10px;
        background: #2d545e;
        color: #fff;
      }
      li {
        margin-bottom: 10px;
      }
      
      button {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
      }
      
      button:hover {
        background-color: #3e8e41;
      }
      
      /* Responsive styles */
      
      @media screen and (max-width: 767px) {
        main {
          flex-direction: column;
        }
        
        section {
          flex-basis: 100%;
        }
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="help.php">help</a></li>
                <li>
                    <div id="user"> 
                        <div class="img">
                            <img src="assets/oriel.jpg" alt="img">
                        </div>
                        <div class="details">
                            <p>
                            <?php
                                if(isset($_SESSION['unique_id'])){
                                    echo $row['fname'];
                                }
                                ?>
                            </p>
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
                    <h3><a href="dashboard.php">Dashboard</a></h3>
                </div>
                <div id="categories">
                    <h3><a class="active" href="personal_details.php">Personnal Details</a></h3>
                </div>  
                <div id="categories">
                    <h3><a href="projects.php">Projects</a></h3>
                </div>
                <div id="categories">
                    <h3><a href="quizes.php">quizes and cats</a></h3>
                </div>
                <div id="categories">
                    <h3><a href="assignment.php">Assignments</a></h3>
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
                <p style="
                font-weight: 700;
                text-transform: uppercase;
                ">Personal Details</p>
            </div>
            <!--
            <div id="user">
                <div class="img">
                    <img src="assets/oriel.jpg" alt="img">
                </div>
                <div class="details">
                    <p>Oriel kiplangat</p>
                </div>
            </div>
        -->
        </div>
<!--WORKSPACE-->
       <main>
        <section class="profile">
            <h2>User Profile</h2>
            <form>
                    <div class="img">
                        <img src="assets/oriel.jpg" alt="img">
                    </div>
                <label for="name">Name:</label>
                <p>
                     <?php
                            if(isset($_SESSION['unique_id'])){
                                    echo $row['fname']." ".$row['lname'];
                                }
                                ?>
                                </p>
                <label for="email">Email:</label>
                <p><?php
                            if(isset($_SESSION['unique_id'])){
                                    echo $row['email'];
                                }
                                ?></p>
                <label for="password">Phone Number:</label>
                <p><?php
                            if(isset($_SESSION['unique_id'])){
                                    echo "+254".$row['pnumber'];
                                }
                                ?></p>
                <button type="submit">Update Details</button>
            </form>
        </section>
        <section class="class_history">
            <h2>Course History</h2>
            <ul>
                <div class="recents">  
                
                    <div class="units">
                        <div class="title">
                            <h4>BMGT 320</h4>
                        </div>
                        <div class="many">
                            <p>Research Methodology</p>
                        </div>
                        <div class="lecturer">
                            <p>Dr. lydia ngubia</p>
                        </div>
                    </div>
                    <div class="units">
                        <div class="title">
                            <h4>INTE 320</h4>
                        </div>
                        <div class="many">
                            <p>Group project</p>
                        </div>
                        <div class="lecturer">
                            <p>Dr. Andrew Kipkebut</p>
                        </div>
                    </div>
                    <div class="units">
                        <div class="title">
                            <h4>INTE 323</h4>
                        </div>
                        <div class="many">
                            <p>Software quality engineering</p>
                        </div>
                        <div class="lecturer">
                            <p>Prof. waweru ndungi</p>
                        </div>
                    </div>
                    <div class="units">
                        <div class="title">
                            <h4>INTE 322</h4>
                        </div>
                        <div class="many">
                            <p>Software Engineering</p>
                        </div>
                        <div class="lecturer">
                            <p>Dr. alex bett</p>
                        </div>
                    </div>
                    <div class="units">
                        <div class="title">
                            <h4>BMGT 320</h4>
                        </div>
                        <div class="many">
                            <p>computer security</p>
                        </div>
                        <div class="lecturer">
                            <p>prof. oriel kiplangat</p>
                        </div>
                    </div>
                </div>
            </ul>
        </section>
        <section class="certification">
            <h2 style="font-size: 19px; margin-bottom: 10px;">Certifications and Achievements</h2>
            <ul>
                <div class="certs">
                    <h3 style="text-transform: uppercase; margin-bottom: 5px; ">Certification Badge</h3>
                    <li> 
                        <div class="badge">
                        <div class="badge_name">
                            <p>Artificial intelligence</p>
                        </div>
                        <div class="badge_icon">
                            <img src="assets/certificate_badge.png" alt="">
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="badge">
                            <div class="badge_name">
                                <p>Data Science</p>
                            </div>
                            <div class="badge_icon">
                                <img src="assets/certificate_badge.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="badge">
                            <div class="badge_name">
                                <p>Full stack Developer</p>
                            </div>
                            <div class="badge_icon">
                                <img src="assets/certificate_badge.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="badge">
                            <div class="badge_name">
                                <p>Poultry Farming</p>
                            </div>
                            <div class="badge_icon">
                                <img src="assets/certificate_badge.png" alt="">
                            </div>
                        </div>
                    </li>
                </div>
                <div class="achievements">
                    <h3 style="text-transform: uppercase; margin-bottom: 5px; ">Achievements badges</h3>
                    <li>
                        <div class="badge">
                            <div class="badge_name">
                                <p>Best performed</p>
                            </div>
                            <div class="badge_icon">
                                <img src="assets/star_badge.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="badge">
                            <div class="badge_name">
                                <p>Top finisher</p>
                            </div>
                            <div class="badge_icon">
                                <img src="assets/star_badge.png" alt="">
                            </div>
                        </div>
                    </li>
                </div>
                
                
            </ul>
        </section>
        <section class="wishlist">
            <h2>Wishlist</h2>
            <ul>
                <h2 style="font-size: 18px; color: gold; ">your wishlist</h2>
                <ul>
                    <div class="recents">  
                    
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <a href="enroll_user.php">
                                <button>
                                    Enroll
                                </button>
                                </a>
                            </div>
                            
                        </div>
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <a href="enroll_user.php">
                                <button>
                                    Enroll
                                </button>
                                </a>
                            </div>
                            
                        </div>
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <a href="enroll_user.php">
                                <button>
                                    Enroll
                                </button>
                                </a>
                            </div>
                            
                        </div>
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <a href="enroll_user.php">
                                <button>
                                    Enroll
                                </button>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </ul>
            </ul>
        </section>
        <section class="recommendation">
            <h2 style="font-size: 19px;">Recommendations</h2>
            <ul>
                <ul>
                    <div class="recents">  
                    
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <button>Enroll</button>
                            </div>
                            
                        </div>
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <button>Enroll</button>
                            </div>
                            
                        </div>
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <button>Enroll</button>
                            </div>
                            
                        </div>
                        <div class="units">
                            <div class="title">
                                <h4 style="text-transform: uppercase; font-weight:900; color: gold;">BMGT 320</h4>
                            </div>
                            <div class="many">
                                <p>Research Methodology</p>
                            </div>
                            <div class="lecturer">
                                <p>Dr. lydia ngubia</p>
                            </div>
                            <div class="duration">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Duration:</p>
                                <p>Jan - April, 2023</p>
                            </div>
                            <div class="course_format">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Course format</p>
                                <p>Self-Paced</p>
                            </div>
                            <div class="cost">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Cost</p>
                                <p>Ksh. 32,000</p>
                            </div>
                            <div class="ratings">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Ratings</p>
                                <p>6.7</p>
                            </div>
                            <div class="btn">
                                <p style="text-transform: uppercase; font-weight:900; color: gold; ">Enroll</p>
                                <button>Enroll</button>
                            </div>
                            
                        </div>
                    </div>
                </ul>
            </ul>
            
        </section>
        <section class="followings">
            <h2>Social Features</h2>
            <ul>
                <li>Followers: 10</li>
                <li>Following: 5</li>
                <li>Groups: 3</li>
                <li>Discussions: 2</li>
            </ul>
        </section>
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

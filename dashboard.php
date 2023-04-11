<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpg" type="image/icon type">
    <title>E-learning platform</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
</head>
<body>
    
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
    <div class="menu">
        <div class="logo">
            <img src="assets/logo.jpg" alt="ols logo">
            <h1>OLSLEARN</h1>
        </div>
        <div class="sub-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a class="active">Dashboard</a></li>
                <li><a href="help.php">Help</a></li>
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
            <div id="categories" class="active">
                <h3><a class="active">Dashboard</a></h3>
            </div>
            <div id="categories">
                    <h3><a href="personal_details.php">Personnal Details</a></h3>
            </div>
            <div id="categories">
                <h3><a href="projects.php">Projects</a></h3>
            </div>
            <div id="categories">
                <h3><a href="quizes.php">Quizes & Cats</a></h3>
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
            <div id="icon">Icon</div>
            <div id="cate">
                <p style="text-transform: uppercase;">Courses</p>
            </div>
        </div>
        <div class="mainpanel">
            <h3>
                Recents to be worked on
            </h3>
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
            <div class="allunits">
                <h3>
                    All units
                </h3>
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
            </div>
        </div>
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
                    <img src="message.png" alt="">
                </div>        
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    session_start();

    include("../logins/config.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $program_code = $_POST['program_code'];
        $program_title = $_POST['program_title'];
        $instructor = $_POST['instructor'];
        $duration = $_POST['duration'];
        $course_format = $_POST['course_format'];
        $ratings = $_POST['ratings'];
        $availability = $_POST['availability'];
        $category = $_POST['category'];

        if (!empty($program_code) && !empty($program_title) && !empty($instructor) && !empty($duration) && !empty($course_format) && !empty($ratings) && !empty($availability)) {
            $sql2 = "SELECT * FROM programs WHERE program_code = '$program_code' LIMIT 1";
            $result = mysqli_query($con, $sql2);
            if ($result && mysqli_num_rows($result) > 0) {
                echo "<script>alert('$program_code already exists.');</script>";
            } else {
                $sql1 = "INSERT INTO programs(program_code, program_title, instructor, duration, course_format, ratings, category, availability) 
                    VALUES('$program_code', '$program_title', '$instructor', '$duration', '$course_format', '$ratings', '$category', '$availability')";
                $result = mysqli_query($con, $sql1); 
                if ($result) {
                    echo "<script>alert('Program added successfully.');</script>"; 
                } else {
                    echo "<script>alert('There was a problem adding the program.');</script>"; 
                }
            }
        } else {
            echo "<script>alert('Please fill in all the inputs.');</script>";
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../assets/logo.jpg" type="image/icon type">
        <title>Instructors panel</title>
        <link rel="stylesheet" type="text/css"  href="../style.css">
    </head>
    <style>
        .mainpanel{
            width: 80%;
            margin: auto;
            margin-top: 30px;
            min-height: 70vh;
            overflow: auto;
            border: solid 1px grey;
        }
        .mainpanel form{
            text-align: center;
            padding: 7px;

        }
        .mainpanel form h3{
            font-size: 36px;
            text-transform: uppercase;
            padding-bottom:10px;
        }
        .mainpanel form .programs{
            display: flex;
            flex-direction: column;
            text-align: left;
            text-transform: capitalize;
            margin-top: 10px;
            padding: 5px;
        }
        .mainpanel form .programs label{
            font-size: 19px;
            font-weight: 450;
        }
        .mainpanel form .programs input{
            outline: none;
            border: none;
            padding: 0 7px;
            font-size: 17px;
            background: #f3f9e8;
            height: 40px;
        }
    </style>
    <body>
        <div class="menu">
            <div class="logo">
                <img src="../assets/logo.jpg" alt="ols logo">
                <h1>OLSLEARN</h1>
            </div>
            <div class="sub-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a class="active">Dashboard</a></li>
                    <li><a href="help.php">Help</a></li>
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
                    <h3>Admin Dashboard</h3>
                </div>
            </div>
            <div id="lower">
                <div id="categories" class="active">
                    <h3><a class="active">Dashboard</a></h3>
                </div>
                <div id="categories">
                        <h3><a href="all_programs.php">All Programs</a></h3>
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
            <form method = "POST" >
                <h3>Add a program</h3>
                <div class = "programs">
                    <label>program code</label>
                    <input type = "text" name="program_code">                
                </div>

                <div class = "programs">
                    <label>program title</label>
                    <input type = "text" name="program_title">                
                </div>
                <div class = "programs">
                    <label>program instructor</label>
                    <input type = "text" name="instructor">                
                </div>
                <div class = "programs">
                    <label>program duration (Months)</label>
                    <input type = "number" name="duration">                
                </div>
                <div class = "programs">
                    <label>course format</label>
                    <input type = "text" name="course_format">                
                </div>
                <div class = "programs">
                    <label for="category">Programming languages</label>
                    <input type="checkbox" id="category" name="category" value="1">
                    <label for="category">Web Development</label>
                    <input type="checkbox" id="category" name="category" value="2">
                    <label for="category">Design</label>
                    <input type="checkbox" id="category" name="category" value="3">
                    <label for="category">Data SCience</label>
                    <input type="checkbox" id="category" name="category" value="4">
                    <label for="category">Business</label>
                    <input type="checkbox" id="category" name="category" value="5">
                    <label for="category">Marketing</label>
                    <input type="checkbox" id="category" name="category" value="6">       
                </div>
                <div class = "programs">
                    <label>ratings</label>
                    <input type = "number" name="ratings">                
                </div>
                <div class = "programs">
                    <label>availability</label>
                    <input type = "text" name="availability">                
                </div>

                <div class="sumit">
                    <input type="submit" value="Submit">
                </div>

            </form>
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
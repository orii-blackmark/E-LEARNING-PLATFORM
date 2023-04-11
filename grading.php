<<<<<<< HEAD:grading.php
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
table {
  border-collapse: collapse;
  margin-top: 20px;
  width: 100%;
}

thead {
  background-color: #333;
  color: white;
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
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
            <div id="categories">
                <h3><a href="assignment.php">Assignments</a></h3>
            </div>
            <div id="categories" class="active">
                <h3><a class="active">Grading</a></h3>
            </div>
        </div>
       </div>
       <div id="right">
        <div class="top">
            <div id="icon"><img src="assets/icon.png" alt=""></div>
            <div id="cate">
                <p style="text-transform: uppercase;">grading</p>
            </div>
        </div>
<!--WORKSPACE-->

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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .grades-table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 70%;
            height: 30%;
        }

        .grades-table th,
        .grades-table td {
            padding: 10px;
            text-align: center;
        }

        .grades-table th {
            background-color: #4CAF50;
            color: white;
        }

        .grades-table td {
            border: 1px solid #ddd;
        }

        .grades-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .grades-table tr:hover {
            background-color: #ddd;
        }

        .add-grade-form {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .add-grade-form input[type="text"] {
            width: 200px;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: none;
        }

        .add-grade-form input[type="number"] {
            width: 100px;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: none;
        }

        .add-grade-form input[type="submit"] {
            background-color: #3449;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-grade-form input[type="submit"]:hover {
            background-color: #bbb;
        }
        
        .oregon{
            border: 1px solid white;
            height: 80.5%;
            border-radius: 1px;
        }
    </style>
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
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                padding: 20px;
            }

            h1 {
                text-align: center;
                margin-bottom: 30px;
            }

            .grades-table {
                border-collapse: collapse;
                margin: 0 auto;
            }

            .grades-table th,
            .grades-table td {
                padding: 10px;
                text-align: center;
            }

            .grades-table th {
                background-color: #3448;
                color: white;
            }

            .grades-table td {
                border: 1px solid #ddd;
            }

            .grades-table tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .grades-table tr:hover {
                background-color: #ddd;
            }

            .add-grade-form {
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .add-grade-form input[type="text"] {
                width: 200px;
                padding: 10px;
                margin: 5px;
                border-radius: 5px;
                border: none;
            }

            .add-grade-form input[type="number"] {
                width: 100px;
                padding: 10px;
                margin: 5px;
                border-radius: 5px;
                border: none;
            }

            .add-grade-form input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                margin: 5px;
                border-radius: 5px;
                cursor: pointer;
            }

            .add-grade-form input[type="submit"]:hover {
                background-color: #333;
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
                    <li>Services</li>
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
                    <div id="categories" class="active">
                        <h3>Quizes & Cats</h3>
                    </div>
                    <div id="categories">
                        <h3><a href="assignment.html">Assignments</a></h3>
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
                <h1>Grading Page</h1>
                <div class="oregon">
                    <table class="grades-table">
                        <tr>
                            <th>Student Name</th>
                            <th>Assignment 1</th>
                            <th>Assignment 2</th>
                            <th>Exam 1</th>
                            <th>Final Grade</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>85</td>
                            <td>90</td>
                            <td>80</td>
                            <td>88</td>
                        </tr>
                        <tr>
                            <td>Jane Doe</td>
                            <td>95</td>
                            <td>80</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>
                        <!-- Add dynamic rows here using JavaScript -->
                    </table>
                    <form class="add-grade-form">
                        <h3>Add Grade</h3>
                        <label for="student-name">Student Name: <input type="text" id="student-name"
                                placeholder="Enter student name"></label>
                        <label for="assignment1">Assignment 1: <input type="number" id="assignment1"
                                placeholder="Enter grade"></label>
                        <label for="assignment2">Assignment 2: <input type="number" id="assignment2"
                                placeholder="Enter grade"></label>
                        <label for="exam1">Examination 1: <input type="number" id="exam1"
                                placeholder="Enter grade"></label>
                        <input type="submit" value="Add Grade">
                    </form>
                </div>
                <script>
                    const gradesTable = document.querySelector(".grades-table");
                    const addGradeForm = document.querySelector(".add-grade-form");

                    // Add event listener to the form submit button
                    addGradeForm.addEventListener("submit", function (event) {
                        event.preventDefault(); // prevent form submission

                        // Get input values
                        const studentName = document.querySelector("#student-name").value;
                        const assignment1Grade = document.querySelector("#assignment1").value;
                        const assignment2Grade = document.querySelector("#assignment2").value;
                        const exam1Grade = document.querySelector("#exam1").value;

                        // Create new row with input values
                        const newRow = document.createElement("tr");
                        newRow.innerHTML = `
    <td>${studentName}</td>
    <td>${assignment1Grade}</td>
    <td>${assignment2Grade}</td>
    <td>${exam1Grade}</td>
    <td></td>
  `;

                        // Calculate and update final grade
                        const finalGrade = (Number(assignment1Grade) + Number(assignment2Grade) + Number(exam1Grade)) / 3;
                        newRow.lastElementChild.textContent = finalGrade.toFixed(2);

                        // Append new row to table
                        gradesTable.appendChild(newRow);

                        // Reset form
                        addGradeForm.reset();
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
                                        <input type="text" id="inputMSG" onkeypress="isEnter(event)" type="text"
                                            placeholder="Type a message" autofocus />
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
>>>>>>> 09cfee4211127a654902ed892aa578d5a375b02a:grading.html

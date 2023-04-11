<<<<<<< HEAD:projects.php
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
                <h3><a href="dashboard.php">DASHBOARD</a></h3>
            </div>
            <div id="categories">
                <h3><a href="personal_details.php">Personnal Details</a></h3>
            </div>
            <div id="categories" class="active">
                <h3><a class="active" >Projects</a></h3>
            </div>
            <div id="categories">
                <h3><a href="quizes.php">Quizes & Cats</a></h3>
            </div>
            <div id="categories" >
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
                <p style="text-transform: uppercase;">Projects</p>
            </div>
        </div>
        <!--WORKSPACE-->
<!--=============== MAIN ===============-->
<main class="main">
    <section class="filters container" style="overflow: auto;">
        <!--=============== FILTERS TABS ===============--
        <ul class="filters__content">
            <button class="filters__button filter-tab-active" data-target="#projects">
                Projects
            </button>
        </ul>
    -->
        <div class="filters__sections"
        style="
        margin-top: 20px;
        
        "
        
        >
            <!--=============== PROJECTS ===============-->
            <div class="projects__content grid filters__active" data-content id="projects">
                <article class="projects__card">
                    <img src="assets/project1.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle">grey worm nft </span>
                            <h3 class="projects__title">ATM Machine with Js</h3>
                            <a href="https://github.com/orii-blackmark"
                                class="projects__button button button__small">
                                <i class="ri-link">github</i>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="projects__card">
                    <img src="assets/project2.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle">Web</span>
                            <h3 class="projects__title">Responsive Website</h3>
                            <a href="https://github.com/trent130"
                                class="projects__button button button__small">
                                <i class="ri-link">github</i>
                            </a>
                        </div>
                    </div>
                </article>
                
                <article class="projects__card">
                    <img src="assets/project3.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle">python</span>
                            <h3 class="projects__title">django framework</h3>
                            <a href="https://github.com/orii-blackmark"
                                class="projects__button button button__small">
                                <i class="ri-link">github</i>
                            </a>
                        </div>
                    </div>
                </article>
                
                <article class="projects__card">
                    <img src="assets/project4.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle">cypto</span>
                            <h3 class="projects__title">encryption bypassing tool</h3>
                            <a href="https://github.com/trent130"
                                class="projects__button button button__small">
                                <i class="ri-link">github</i>
                            </a>
                        </div>
                    </div>
                </article>
            <!--=============== SKILLS ===============--
            <div class="skills__content grid" data-content id="skills">
                <div class="skills__area">
                    <h3 class="skills__title">Frontend Developer</h3>

                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__level">Intermediate</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__level">Intermediate</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__level">Basic</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills__area">
                    <h3 class="skills__title">Backend Developer</h3>

                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">MySQL</h3>
                                    <span class="skills__level">Advance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        -->
    </section>
</main>
<!--=============== SCROLLREVEAL ===============-->
<script src="js/scrollreveal.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="js/main.js"></script>
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
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="stylesheet" href="projects/pr_styles.css">
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
            <div id="categories" >
                <h3><a href="dashboard.html">Courses</a></h3>
            </div>
          
            <div id="categories" class="active">
                <h3>Projects</h3>
            </div>
            <div id="categories">
                <h3><a href="quizes.html">Quizes & Cats</a></h3>
            </div>
            <div id="categories" >
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
<!--=============== MAIN ===============-->
<main class="main">
    <section class="filters container">
        <!--=============== FILTERS TABS ===============-->
        <ul class="filters__content">
            <button class="filters__button filter-tab-active" data-target="#projects">
                Projects
            </button>
            <button class="filters__button" data-target="#skills">
                Skills
            </button>
        </ul>

        <div class="filters__sections">
            <!--=============== PROJECTS ===============-->
            <div class="projects__content grid filters__active" data-content id="projects">
                <article class="projects__card">
                    <img src="assets/project1.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle"> GWN</span>
                            <h3 class="projects__title">grey worm nft</h3>
                            <a href="https://github.com/trent130"
                                class="projects__button button button__small">
                                <i class="ri-link"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="projects__card">
                    <img src="assets/project2.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle">Web</span>
                            <h3 class="projects__title">Responsive Website</h3>
                            <a href="https://github.com/trent130"
                                class="projects__button button button__small">
                                <i class="ri-link"></i>
                            </a>
                        </div>
                    </div>
                </article>
                
                <article class="projects__card">
                    <img src="assets/project3.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle">python</span>
                            <h3 class="projects__title">django framework</h3>
                            <a href="https://github.com/trent130"
                                class="projects__button button button__small">
                                <i class="ri-link"></i>
                            </a>
                        </div>
                    </div>
                </article>
                
                <article class="projects__card">
                    <img src="assets/project4.jpg" alt="" class="projects__img">

                    <div class="projects__modal">
                        <div>
                            <span class="projects__subtitle">cypto</span>
                            <h3 class="projects__title">encryption bypassing tool</h3>
                            <a href="https://github.com/trent130"
                                class="projects__button button button__small">
                                <i class="ri-link"></i>
                            </a>
                        </div>
                    </div>
                </article>
            <!--=============== SKILLS ===============-->
            <div class="skills__content grid" data-content id="skills">
                <div class="skills__area">
                    <h3 class="skills__title">Frontend Developer</h3>

                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__level">Intermediate</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__level">Intermediate</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__level">Basic</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills__area">
                    <h3 class="skills__title">Backend Developer</h3>

                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class="ri-checkbox-circle-line"></i>

                                <div>
                                    <h3 class="skills__name">MySQL</h3>
                                    <span class="skills__level">Advance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<!--=============== SCROLLREVEAL ===============-->
<script src="js/scrollreveal.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="js/main.js"></script>
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
>>>>>>> 09cfee4211127a654902ed892aa578d5a375b02a:projects.html

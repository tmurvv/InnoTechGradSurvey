<!DOCTYPE html>

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="Vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="Vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="Vendors/css/ionicons.css">   
    <link rel="stylesheet" type="text/css" href="Resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="Resources/css/media.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Resources/js/script.js"></script>

    <title>Inno Grad Survey</title>

</head>

<body>
    <header>
        <nav>                                  
            <div class="row">






            
                <img src="Resources/Images/logopointerrgba.gif" alt="TechSchool Logo" class="logo">
                <ul class="main-nav js--main-nav">
                    <li class="main-nav--item"><a href="#survey">Go to Grad Survey</a></li>
                    <li class="main-nav--item"><a href="#about">About</a></li>                   
                </ul>
                <a href="#" class="mobile-navicon"><i class="ion-navicon js--nav-icon"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1 class="h1Format">Congratulations<br>Graduate!</h1>

            <div class="row">
                <a class="col span-1-of-5 btn btn-full" href="#survey">Go to Grad Survey</a>
                <a class="col span-1-of-5 btn btnCap js--throwCap js--displayToggle">Throw your cap!</a>
                <a class="col span-1-of-5 btn btnCap js--throwCapReset js--displayToggleReset">Throw Again?</a>
                
                <div class="col span-1-of-5" id="bounce">
                    <div class="capIconContainer" id="spin">
                        <i id="ion-university" class="ion-university"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-survey" id="survey">
        <div class="row">
            <h2>Job Placement Survey</h2>
            <p>Please fill out this quick survey regarding your current job placement information and let us know if you need any assistance.<br><br>
            <!-- <i class="ion-alert-circled"></i>THIS SITE IS A PROTOTYPE. USE TEST DATA. PLEASE DO NOT ENTER PERSONAL DATA.</p><br> -->
        </div>
        <div class="row">
            <!-- <form method="post" action="emailer.php" class="contact-form"> -->
            <form method="post" action="emailer.php" class="contact-form">

                <div class="row">
                   
                    <p class="question">1. Are you employed full-time or part-time?</p>
                    <div>
                        <input type="radio" name="employed" value="Full-time">Full-time<br>
                        <input type="radio" name="employed" value="Part-time">Part-time<br>
                        <input type="radio" name="employed" value="Unemployed">Unemployed
                    </div>

                    <p class="question">2. If you are employed, who and where is it?</p>
                    <textarea name="whereEmployed"></textarea>
                    <p class="question">3. Do you require any assistance in Job Placement?</p>
                    <textarea name="jobAssistance"></textarea>
                    <br>
                    <p class="question">4. Please fill out your most current contact info:</p>
                    <div class="row">
                        <div class="col span-1-of-4">
                            <label for="name">Name:<ion-asterisk></label>
                        </div>
                        <div class="col span-3-of-4">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-4">
                            <label for="phone">Phone #:</label>
                        </div>
                        <div class="col span-3-of-4">
                            <input type="text" name="phone" id="phone" placeholder="Your phone number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-4">
                            <label for="email">Email:<ion-asterisk></label>
                        </div>
                        <div class="col span-3-of-4">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col span-1-of-4">
                                <label>Address:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-4">
                                <label for="addressLine1">Line 1:</label>
                            </div>
                            <div class="col span-3-of-4">
                                <input type="text" name="addressLine1" id="addressLine1" placeholder="Address line 1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-4">
                                <label for="addressLine2">Line 2:</label>
                            </div>
                            <div class="col span-3-of-4">
                                <input type="text" name="addressLine2" id="addressLine2" placeholder="Address line 2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-4">
                                <label for="addressLine3">City Province Postal:</label>
                            </div>
                            <div class="col span-3-of-4">
                                <input type="text" name="addressLine3" id="addressLine3" placeholder="City/Province/Postal">
                            </div>
                        </div>
                        <div class="row submitContainer">
                            <div class="col span-1-of-4">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-1-of-4">
                                <input type="submit" class = "btnSubmit" value="Submit" id="surveySubmit">
                            </div>
                            <div class="col span-2-fo-4">
                                <?php
                                    if($_GET["success"] == 1) {
                                        echo "<div class=\"messageToUser messageToUser--success\">Success! Your form has been submitted.</div>";
                                    }

                                    if($_GET["success"] == -1) {
                                        echo "<div class=\"messageToUser messageToUser--fail\"><i class=\"ion-alert-circled\"></i>Oops... something went wrong. Form not sent.
                                        Please double-check your e-mail and try again.</div>";
                                    }                               
                                ?>
                            </div>
                        </div> 
                    </div>

                </div>

            </form>
        </div>

    </section>

    <section class="section-about" id="about">
        <div class="row">
            <h2>About this form</h2>
            <p>This form was created by <a href="https://www.linkedin.com/in/tisha-murvihill-tech" target="_blank">Tisha Murvihill</a>, 
            a graduate of <a href="https://www.innotechcollege.com" target="_blank">InnoTech College</a> in Calgary, Alberta, Canada. 
            It is written in HTML5, CSS, JavaScript, and PHP. The submit button sends an e-mail to the client with the details of each 
            survey submission. Tisha can be reached at <a href="http://www.take2tech.ca" target="_blank">tech@take2tech.ca</a>.</p><br>
        </div>
    </section>

    <footer>
        <div class="row">
            <div>
                <ul class="footer-nav">
                    <li><a href="#top">Home</a></li>
                    <li><a href="#survey">Grad Survey</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </div>
            <div>
                <ul class="social-links">
                    <li><a href="http://www.linkedin.com/in/tisha-murvihill-tech" target="_blank"><i class="ion-social-linkedin-outline"></i></a></li>
                    <li><a href="http://www.take2tech.ca" target="_blank">www.take2tech.ca</a></li>
                </ul>
            </div>
        </div>

        <div>

            <p>&copy; 2018 by take2tech.ca. All rights reserved.</p>

        </div>

    </footer>


</body>

</html>

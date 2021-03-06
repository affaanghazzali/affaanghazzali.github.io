<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Affaan Ghazzali's Portfolio</title>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="AffaanGhazzaliPortfolioStyling.css">
    </head>
    <body class="background" data-spy="scrol" data-target=".navbar" data-offset="50">
        <?php include 'PortfolioNavbar.php';?>
        
        
    <div class ="intro-container" id="AffaanGhazzaliPortfolio">
        <h1 class="h1-text">
          Hey, I'm Affaan
        </h1>
        <h2 class="h2-text">
            I like programming n' stuff
        </h2>
        <a href="#MyResume">
            <button class="resume-button resume-button-text">
                check out my resume 
            </button>
        </a>
    </div>
    <div class="card-container">
        <div class="left-card">
            <h1 class="h1-left-card">
                Full Time Student
            </h1>
            <h2 class="h2-left-card">
                I am a full time Computer Science student at San Francisco State University. 
                I am a full-stack software engineer with experience in Java, C++, and web development.
            </h2>
        </div> 
        <div class="center-card">
            <h1 class="h1-center-card">
                Back-end Developer
            </h1>
            <h2 class="h2-center-card">
                I have experience developing dynamic, clean Java and C++ programs using IDE's like Netbeans, IntelliJ, and xCode.
            </h2>
        </div>  
        <div class="right-card">
            <h1 class="h1-right-card">
                Front-end Developer
            </h1>
            <h2 class="h2-right-card">
                I have experience developing well designed, mobile-ready websites using HTML, CSS, PHP, Bootstrap, SQL, Javascript, and JQuery.
            </h2>
        </div>
    </div>
    <div class="resume-intro" id="MyResume">
        <h1 class="h1-resume-intro">
          Keep Up to Date With What I'm Up To
        </h1>
    </div>
    <div class="resume-card-container">
        <div class="resume-download-card">
            <h1 class="resume-download-card-h1">
                Download My Resume
            </h1>
            <h2 class="resume-download-card-h2">
                (By Clicking My Mini Resume)
            </h2>
            <a href="AffaanGhazzaliResume.pdf" download>
                <img src="resumedownloadpic.jpg" alt="ResumeDownlaodPicture" width="45%" height="70%" >
            </a>
        </div> 
        <div class="resume-sum-up-card">
            <h1 class="resume-sum-up-card-h1">
                Or Just Read About It
            </h1>
            <h2 class="resume-sum-up-card-h-elements">
                Work Experience: 
            </h2>
            <p class="resume-sum-up-card-p-elements">
                Nordstrom - Logistics Processor
                I worked full-time, utilizing vendor specific software to process and fulfill web orders within specified deadlines.
            </p>
            <p class="resume-sum-up-card-p-elements">
                Google - Code Corps Instructor
                I aided in the development and instruction of Computer Science curriculum to underprivileged students.
            </p>
            <p class="resume-sum-up-card-p-elements">
                SF Hacks 2018 - Outreach Team Lead
                Lead a team of students where we contracted companies for sponsorship and managed social media presence.
            </p>
            <h3 class="resume-sum-up-card-h-elements">
                Completed Coursework:
            </h3>
            <p class="resume-sum-up-card-p-elements">
               Data Structures, Discrete Mathematical Structures, Machine Structures, Programming Methodology, and Advanced Software Lab. 
            </p>
            <h4 class="resume-sum-up-card-h-elements">
                Awards:
            </h4>
            <p class="resume-sum-up-card-p-elements">
                Dean's List at SFSU, National Honors Society, and California Scholarship Federation.
            </p>
            <h5 class="resume-sum-up-card-h-elements">
                Skills:
            </h5>
            <p class="resume-sum-up-card-p-elements">
                Java, C++, Front-End Development, Assembly Language, and Microsoft Office.
            </p>
        </div>
    </div>
    <div class="about-me-container" id="AboutMe">
        <div class="about-me-text">
            <h1 class="about-me-h1">
                Who I Am
            </h1>
            <h2 class="about-me-h2">
                My name is Affaan Ghazzali, and I'm a 19 year-old student and full-stack software engineer from San Jose, California. I've had a passion for computers and how they function since the age of 6, and I'm currently studying Computer Science at SFSU, honing my skill set.
                On a more personal note, outside of software development, I am a music junky and a frequent gym goer! I also love cars, motorcycles, and anything mechanical if I'm being honest. If I’m not working out, listening to music, or at a car show, I'm probably in the library!
            </h2>
        </div>
        <div>
            <img src="AboutMePic.jpg" class="about-me-pic">
        </div>
    </div>
    <div class="contact-me-container" id="ContactMe">
        <div class="contact-me-links">
            <h1 class="contact-me-h1">
                You Can Find Me Here
            </h1>
            <h2>
                <p>
                    <a href="https://www.linkedin.com/in/affaanghazzali/">
                        My LinkedIn
                    </a>
                </p>
                <p> 
                    <a href="https://github.com/affaanghazzali">
                        My Github
                    </a>
                </p>
                <p>  
                    <a href="https://www.instagram.com/affaanghazzali/">
                        My Instagram
                    </a>
                </p>
                <p> 
                    <a href="https://www.pinterest.com/affaanghazzali/">
                       My Pinterest
                   </a>
                </p>
            </h2>
        </div>
        <div class="contact-me-forum">
            <h1 class="contact-me-forum-h1">
                Or Get In Touch Through Email
            </h1>
            <?php
            $action = $_REQUEST['action'];
            if ($action == "") {
                ?>
                <form  action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="submit">
                    Your name:<br>
                    <input name="name" type="text" value="" size="30"/><br>
                    Your email:<br>
                    <input name="email" type="text" value="" size="30"/><br>
                    Your message:<br>
                    <textarea name="message" rows="7" cols="30"></textarea><br>
                    <input type="submit" value="Send email"/>
                </form>
                <?php
            } else {
                $name = $_REQUEST['name'];
                $email = $_REQUEST['email'];
                $message = $_REQUEST['message'];
                if (($name == "") || ($email == "") || ($message == "")) {
                    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                } else {
                    $from = "From: $name<$email>\r\nReturn-path: $email";
                    $subject = "Message sent using your contact form";
                    mail("ghazzaliaffaan@gmail.com", $subject, $message, $from);
                    echo "Email sent!";
                }
            }
            ?>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



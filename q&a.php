<?php
$q = array("What's the cost for tutoring hour?", "What's is our tutoring subjects", "How can I book a tutoring session?",
"Where can I find the tutors list?", "How can I join as a Tutor?", "How can I join as a Learner?");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script src="contact.js" defer></script>
    <title>Contact</title>
</head>
<body>
        <nav class="headNav">

            <a href="">Login</a>
            <a href="">Sign-up</a>
        </nav>
    
        <hr>
    
        <header id="topHeader">
            <a href="index.html">Tutorium</a> 
        </header>
    
        <nav class="menu_wrap">
            <ul class="dep1">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="dep2">
                        <li><a href=#"">Test</a></li>
                        <li><a href=#"">Test</a></li>
                    </ul>
                </li>
    
                <li>
                    <a href="">About us </a>
                <ul class="dep2">
                    <li><a href="">Location</a></li>
                </ul>
             </li>
    
             <li>
                <a href="">Subjects</a>
                <ul class="dep2">
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">????</a></li>
                </ul>
             </li>
    
             <li>
                <a href="findTutors.html">Find Tutors</a>
                <ul class="dep2">
                    <li><a href="#">by location</a></li>
                    <li><a href="#">by subject</a></li>
                </ul>
             </li>
    
             <li>
                <a href="contact.html">Contact</a>
                <ul class="dep2">
                    <li><a href="#">Q&A</a></li>
                </ul>
             </li>
            </ul>
    
        </nav>
        <section id="qa-section">
            <div id="qa-container">
                <div id="qa-title">
                    <h2>Q & A</h2>
                </div>
                <div id="qa-subcontent">
                    <p>Hover on the question boxes below to see the content</p>
                    
                </div>
                <div id="questions-container">
                    <div class="questions-div">
                        <p><?php echo $q[0];?></p>
                        <p>A/.Tutoring hour is 15.50 CAD</p>
                    </div>
                    <div class="questions-div">
                        <p><?php echo $q[1];?></p>
                        <p>A/.Computer Programming Courses</p>
                    </div>
                    <div class="questions-div">
                        <p><?php echo $q[2];?></p>
                        <p>A/.Plese refer to our contact section, on top of this page</p>
                    </div>
                    <div class="questions-div">
                        <p><?php echo $q[3];?></p>
                        <p>A/.Please click on About us section on the navbar</p>
                    </div>
                    <div class="questions-div">
                        <p><?php echo $q[4];?></p>
                        <p>A/.Fill the form under Sign-up Tutor section found on top of the page</p>
                    </div>
                    <div class="questions-div">
                        <p>How can I join as a Learner?</p>
                        <p>A/.Fill the form under Sign-up Learner section found on top of the page</p>
                    </div>
                </div>
            </div>
        </section>


        <footer>
        <div class="footer-content">
            <h3>Tutorium</h3>
            <p>Tutorium | 1385 Woodroffe Ave, Nepean, ON <br>
                CST8285-Web-Programming Group Assignment (Algonquin College) <br>
            </p>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2022 Copyright. design by<span> Juho | Leonardo | Mathunan | Su Yeoun </span><br>
            </p>
        </div>
    </footer>

</body>
</html>
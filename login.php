<!-- login.php by Juho -->

<?php
// variables for database
$user = ['username'];
$pword = ['password'];
$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "1234";

// connection to database
$conn = mysqli_connect($host, $username, $password, $dbname);

// condition for connect
$db = mysqli_select_db($conn, "web_assignment_2")
    or die("Connection Fails");

//starts the server validation
$query = "select * from signup where username='$username'";

if ($result = mysqli_query($conn, $query)) {
    if (!($row = mysqli_fetch_array($result))) {
        echo "<script> alert('Invalid userName. Please try again.'); </script>";
    } else {
        $passwd = $row[3];
        if ($passwd == $pword) {
            include 'index.php';
        } else {
            echo "Incorrect Password<br><a href ='Login.html'>CLICK HERE</a></i>";
        }
    }
} else
    echo mysqli_error($conn);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
    <title>Tutorium</title>
</head>

<body>
    <!-- Logo and nav bar menu -->
    <header>
        <a href="index.html" class="logo">Tutorium</a>
        <nav class="navbar">
            <ul class="dep1">
                <li><a href="/contact.html">Contact Us</a>
                    <ul class="dep2">
                        <li><a href="q&a.html">Q&A</a></li>
                    </ul>
                </li>
                <li><a href="/aboutUs.html">About us</a>
                    <ul class="dep2">
                        <li><a href="/location.html">Location</a></li>
                    </ul>
                </li>
                <li><a href="findTutors.html">Find tutors</a> </li>
                <li><a href="/subject.html">Subjects</a></li>
            </ul>
        </nav>
        <div class="log" id="logg"><a href="login.html">Login | Sign-up</a></div>
    </header>

    <!-- Main page image add -->
    <div class="headerimg">
        <img src="Photos/Ban.jpg" alt="mainImage">
    </div>

    <!-- 3 flexboxes for with images -->
    <div class="flexbox-container">
        <div class="flexbox-item-1">
            <img src="Photos/inperson.jpg">
            <p>In-Person Tutoring</p>
        </div>
        <div class="flexbox-item-2">
            <img src="Photos/onlinetutoring.jpg">
            <p>Online Tutoring</p>
        </div>
        <div class="flexbox-item-3">
            <img src="./Photos/studygroup.jpg">
            <p>Study Group</p>
        </div>
    </div>

    <!-- SiteMap show/ hide button  -->
    <div id="div_button-hide_Site_Map">
        <input type="button" value="Hide Sitemap" id="site">
    </div>

    <!-- for Sitemap display  -->
    <div class="flexbox-container-siteMap">
        <div class="flexbox-siteMap1">
            <strong><a href=aboutUs.html>About us</a></strong> <br>
            Location
        </div>
        <div class="flexbox-siteMap2">
            <strong><a href=subject.html> Subject </a></strong> <br>
        </div>
        <div class="flexbox-siteMap3">
            <strong> <a href=findTutors.html>Find Tutors </a> </strong> <br>
        </div>
        <div class="flexbox-siteMap4">
            <strong> <a href=contact.html> Contact</a></strong> <br>
            Q&A
        </div>
    </div>

    <!-- footer with tutorium company information -->
    <footer>
        <div class="footer-content">
            <h3>Tutorium</h3>
            <p>Tutorium | 1385 Woodroffe Ave, Nepean, ON <br>
                CST8285-Web-Programming Group Assignment (Algonquin College) <br>
            </p>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2022 Copyright. Designed by<span> Juho | Leonardo | Mathunan | Su Yeoun </span><br>
            </p>
        </div>
    </footer>

</body>

</html>
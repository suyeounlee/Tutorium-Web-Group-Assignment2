<!-- signup.php by Juho -->
<?php

//variables for signup form
$email = $_POST['email'];
$user = $_POST['username'];
$password1 = $_POST['password1'];

// variables for database
$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "1234";


// connection to database
$conn = mysqli_connect($host, $username, $password, $dbname);

// condition for connect error
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

// sql insert query for signup table
$sql = "INSERT INTO signup (email, username, password) values (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_errno($conn));
}
mysqli_stmt_bind_param($stmt, "sss", $email, $user, $password1);

mysqli_stmt_execute($stmt);
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
    <header>
        <a href="index.html" class="logo">Tutorium</a>

        <nav class="navbar">
            <ul class="dep1">
                <li><a href="/contact.html">Contact</a>
                    <ul class="dep2">
                        <li><a href="q&a.html">Q&A</a></li>
                    </ul>
                </li>
                <li><a href="findTutors.html">Find tutors</a> </li>
                <li><a href="/subject.html">Subjects</a></li>

                <li><a href="/aboutUs.html">About us</a>
                    <ul class="dep2">
                        <li><a href="/location.html">Location</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php
        $user = $_POST['username'];
        $password1 = $_POST['password1'];

        $host = "localhost";
        $dbname = "web_assignment_2";
        $username = "root";
        $password = "1234";

        $conn = mysqli_connect($host, $username, $password, $dbname);

        //starts the server validation
        $query = "select * from signup where username='$user'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        ?>


        <div class="log" id="logg"><a href="update.php">
                <?php
                echo "Welcome $row[1]";
                ?>
            </a></div>
        <a href="index.html"> <button id="logout"> Logout</button> </a>

    </header>
    <div class="headerimg">
        <img src="Photos/Ban.jpg" alt=""><br>
    </div>

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
            <p>Sutdy Group</p>
        </div>
    </div>
    </div>

    <!-- Site Map show/ hide button (Testing)  -->
    <input type="button" value="Hide Sitemap" id="site">
    <br>
    <div class="flexbox-container-siteMap">
        <div class="">
        </div>
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
        <div class="">
        </div>
    </div>

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
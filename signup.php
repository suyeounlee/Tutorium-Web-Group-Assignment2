<?php
//variables for signup form
$email = $_POST['email'];
$user = $_POST['username'];
$password1 = $_POST['password1'];

// variables for database
$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "dkfrhdznls1234";

// connection to database
$conn = mysqli_connect($host, $username, $password, $dbname);

// condition for connect error
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

// sql insert query for signup table
$sql = "INSERT INTO signup (email, username, password) VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "sss", $email, $user, $password1);

if (mysqli_stmt_execute($stmt)) {
    echo "<script> alert('signup success'); </script>";
    include "index.php";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>Tutorium</title>
</head>

<body>
    <header>
        <a href="index.php" class="logo">Tutorium</a>

        <nav class="navbar">
            <ul class="dep1">
                <li><a href="/group/contact.php">Contact</a>
               
                        <li><a href="/group/q&a.php">Q&A</a></li>
                 
                </li>
                <li><a href="/group/findTutors.php">Find tutors</a> </li>
                <li><a href="/group/subject.php">Subjects</a></li>

                <li><a href="/group/aboutUs.php">About us</a>
                
                        <li><a href="/group/location.php">Location</a></li>
                
                </li>
            </ul>
        </nav>

        <?php
        $user = $_POST['username'];
        $password1 = $_POST['password1'];

        $host = "localhost";
        $dbname = "web_assignment_2";
        $username = "root";
        $password = "dkfrhdznls1234";

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
        <a href="index.php"> <button id="logout"> Logout</button> </a>

    </header>

<!--     
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

   Site Map show/ hide button (Testing)  
    <input type="button" value="Hide Sitemap" id="site">
    <br>
    <div class="flexbox-container-siteMap">
        <div class="">
        </div>
        <div class="flexbox-siteMap1">
            <strong><a href=aboutUs.php>About us</a></strong> <br>
            Location
        </div>
        <div class="flexbox-siteMap2">
            <strong><a href=subject.php> Subject </a></strong> <br>
        </div>
        <div class="flexbox-siteMap3">
            <strong> <a href=findTutors.php>Find Tutors </a> </strong> <br>
        </div>
        <div class="flexbox-siteMap4">
            <strong> <a href=contact.html> Contact</a></strong> <br>
            Q&A
        </div>
        <div class="">
        </div>
    </div>

  
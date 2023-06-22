<!-- login.php by Juho -->

<?php
// variables for database
$user = $_POST['username'];
$pword = $_POST['password'];
$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "dkfrhdznls1234";

// connection to database
$conn = mysqli_connect($host, $username, $password, $dbname);

// condition for connect
$db = mysqli_select_db($conn, "web_assignment_2") or die("Connection Fails");

//starts the server validation
$query = "select * from signup where username='$user'";

if ($result = mysqli_query($conn, $query)) {
    if (!($row = mysqli_fetch_array($result))) {
        echo "<script> alert('Invalid userName. Please try again.'); </script>";
    } else {
        $passwd = $row['password'];
        if ($passwd == $pword) {
            echo "<script> alert('login success'); </script>";
            include "index.php";
        } else {
            echo "<script> alert('Incorrect Password'); </script>";
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>Tutorium</title>
</head>

<body>
    <header>

    <div class="log" id="logg"><a href="update.php">
                <?php
                echo "Welcome $row[1]";
                ?>
            </a>  </div>
      <a href="index.php"> <button id="logout"> Logout</button> </a>

     
        
        <a href="index.php" class="logo">Tutorium</a>

        <nav class="navbar">
            <ul class="dep1">
                <li><a href="/group/contact.php">Contact</a>
                    <ul class="dep2">
                        <li><a href="/group/q&a.php">Q&A</a></li>
                    </ul>
                </li>
                <li><a href="/group/findTutors.php">Find tutors</a> </li>
                <li><a href="/group/subject.php">Subjects</a></li>

                <li><a href="/group/aboutUs.php">About us</a>
                    <ul class="dep2">
                        <li><a href="/group/location.php">Location</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php
     $user = $_POST['username'];
     $pword = $_POST['password'];

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

     

    </header>
  
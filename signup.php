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
                <li><a href="/group/contact.php">Contact</a></li>
                <li><a href="/group/q&a.php">Q&A</a></li>
                <li><a href="/group/findTutors.php">Find tutors</a> </li>
                <li><a href="/group/subject.php">Subjects</a></li>
                <li><a href="/group/aboutUs.php">About us</a></li>
                <li><a href="/group/location.php">Location</a></li>
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

  
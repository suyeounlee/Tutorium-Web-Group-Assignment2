<?php

// $email = $_POST['email'];
// $user = $_POST['username'];
// $password1 = $_POST['password1'];



$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "1234";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$password1 = $_GET['password1'];
$updateid = $_GET['updateid'];

$sql = "update `signup` set password=$password1 where username = '$updateid'";





echo $updateid;
echo $password1;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Update_real.php
</body>

</html>
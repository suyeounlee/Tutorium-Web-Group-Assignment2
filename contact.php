<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$interest = $_POST['interest'];
$message = $_POST['message'];

<<<<<<< HEAD
$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "1234";
=======
$host = "localhost:3310";
$dbname = "web_assignment_2";
$username = "root";
$password = "";
>>>>>>> 668ebcc88c31a9b120d264e2dd5eb0eb00da44dd

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

<<<<<<< HEAD
$sql = "INSERT INTO contact(firstName, lastName, email, course, message) VALUES ('$firstName', '$lastName', '$email', '$interest', '$message')";
=======
$sql = "INSERT INTO contact (firstName, lastName, email, course, message) VALUES ('$firstName', '$lastName', '$email', '$interest', '$message')";
>>>>>>> 668ebcc88c31a9b120d264e2dd5eb0eb00da44dd

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_execute($stmt);
header("Location: contact.html" );
?>

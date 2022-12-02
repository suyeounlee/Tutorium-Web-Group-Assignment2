<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$interest = $_POST['interest'];
$message = $_POST['message'];

$host = "localhost:3310";
$dbname = "web_assignment_2";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (firstName, lastName, email, course, message) VALUES ('$firstName', '$lastName', '$email', '$interest', '$message')";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_execute($stmt);
header("Location: contact.html" );
?>

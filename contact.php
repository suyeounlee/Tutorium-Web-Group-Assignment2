<<<<<<< HEAD
<!-- contact.php by Leonardo -->
=======
<!-- PHP code for contact page (leonardo)
In this code we store the passed values from contact page inside validation form.
No return values expected, only information is stored in database for further consultation.
-->
>>>>>>> aba7e5eafb056a7472550739436fa6a59395e54c

<?php
// variables for the form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$interest = $_POST['interest'];
$message = $_POST['message'];

<<<<<<< HEAD
// variables for database
=======
>>>>>>> aba7e5eafb056a7472550739436fa6a59395e54c
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

// sql insert query into contact table
$sql = "INSERT INTO contact (firstName, lastName, email, course, message) VALUES ('$firstName', '$lastName', '$email', '$interest', '$message')";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_execute($stmt);
header("Location: contact.html");
?>
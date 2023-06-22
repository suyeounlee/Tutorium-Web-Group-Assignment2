<!-- delete.php by Su Yeoun -->
<?php
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

// user delete query from the database table signup
if (isset($_GET['deleteid'])) {
    $user = $_GET['deleteid'];

    $sql = "delete from `signup` where username=$user";

    $result = mysqli_query($conn, $sql);
    echo "<script> alert('Deleted OK'); </script>";

    if ($result) {
        header("Location: index.php");
        // echo '<script> alert ("message successfully sent") </script>';

    } else {
        die(mysqli_error($conn));
    }
}

<?php
// if(isset($_POST['submit'])) {
// $userId = $_POST['userId'];
// $password = $_POST['password'];

$connection = mysqli_connect('localhost', 'root', '1234', 'web_assignment_2');

if ($connection) {
    echo "We are connected";
} else {
    die("Database connection failed");
}

$query = "select * from user ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query failed');
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="login.css">

    <script src="button.js" defer></script>
    <script src="signup.js" defer></script>
</head>

<body>
    <div class="container">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }

        ?>
    </div>

</body>

</html>
<!-- update.php by Su Yeoun Lee -->

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

// sql select query from signup table
$sql = "select * from `signup`";

$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $user = $row['username'];
        $email = $row['email'];
        $password1 = $row['password'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="css/update.css">
    <script src="https://kit.fontawesome.com/6b90367316.js" crossorigin="anonymous"></script>

    <script src="js/signup.js" defer></script>
</head>

<body>

    <?php include("header.php"); ?>

    <div class="container">
        <div class="form1">

            <?php echo "<p id='phpMsg'> Hello " . "<span>" . $user . " 😃</span> <br>Do you want to update your information? </p>" ?>

            <form action="" id="upgrade" class="form" method="post" name="form" onsubmit="return checkInputs()">
                <div class="form-control">
                    <input type="email" placeholder="Email" class="sifi" id="email" name="email" readonly value="<?php echo $email ?>">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">

                    <input type="text" placeholder="User name" class="sifi" id="username" name="username" readonly value="<?php echo $user ?>">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">

                    <input type="hidden" class="sifi" id="password" name="password1">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="buttonGrp">
                    <button type="button" class="si-btn" name="submit"><a href="update_go.php?updateid='<?php echo $user; ?>'">Go to Update</a></button>
                    <button class="si-btn" value="Delete"><a href="delete.php?deleteid='<?php echo $user; ?>'"> Go to Delete</a></button>
                </div>
            </form>
        </div>
        <?php include("footer.php"); ?>
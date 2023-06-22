<!-- update_go.php by Su Yeoun -->

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

// user update query 
if (isset($_GET['updateid'])) {
    $user = $_GET['updateid'];

    $sql = "update signup set password = 'Ab1234' where username = $user";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // header("Location: update_real.php" );
        // echo '<script> alert ("message successfully sent") </script>';

    } else {
        die(mysqli_error($conn));
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
    <!-- <script src="/signup.js" crossorigin="anonymous"></script> -->

    <script src="js/signup.js" defer></script>

    <style>
    .lo-im {
    padding-left: 55px;
  padding-top: 10px;
    text-align:center;
    margin-top: 0;
}

.container {
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(./Photos/Bgimg.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}

    </style>
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

               
                        <li><a href="/group/location.php">Location</a></li>
                
                </li>
            </ul>
        </nav>


        <div class="log" id="logg"><a href="update.php">
                <?php
                echo "Welcome $user";
                ?>
            </a></div>
        <a href="index.php"> <button id="logout"> Logout</button> </a>

    </header>

    <div class="container">
        <div class="form1">

            <?php echo "<p id='phpMsg'>" . "<span>" . $user . "😃 </span> <br>Please enter your new password! </p>" ?>


            <form action="/group/update_real.php" id="upgrade" class="form" method="POST" name="form" onsubmit="return checkInputs()">

                <div class="form-control">

                    <input type="password" placeholder="New password" class="sifi" id="password" name="password1">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">

                    <input type="password" placeholder="Password Check" class="sifi" id="password2" name="password2">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="buttonGrp">
                    <input type="submit" class="si-btn" value="update">
                    <!-- <button class="si-btn"><a href="update_real.php?updateid=<?php echo $user; ?>">Update</a></button> -->
                 </div>
                 <img src="./Photos/Logo1.png" class="lo-im" alt="Logo">
        </form>
    </div>
    <?php include("footer.php"); ?>
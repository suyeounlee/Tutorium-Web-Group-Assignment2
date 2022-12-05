<!-- update.php by Su Yeoun Lee -->

<?php
// variables for database
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
    <link rel="stylesheet" href="update.css">
    <script src="https://kit.fontawesome.com/6b90367316.js" crossorigin="anonymous"></script>
    <!-- <script src="/signup.js" crossorigin="anonymous"></script> -->

    <script src="upgradebuttin.js" defer></script>
    <script src="signup.js" defer></script>
</head>

<body>
    <header>
        <a href="index.html" class="logo">Tutorium</a>
        <nav class="navbar">
            <ul>
                <li><a href="/contact.html">Contact Us</a>
                    <ul>
                        <li><a href="/">Q&A</a></li>
                    </ul>
                </li>
                <li><a href="/aboutUs.html">About us</a>
                    <ul>
                        <li><a href="/location.html">Location</a></li>
                    </ul>
                </li>
                <li><a href="/findTutors.html">Find tutors</a> </li>
                <li><a href="/subject.html">Subjects</a></li>
            </ul>
        </nav>
        <input type="button" value="Login/Signup" class="log" id="logg">
    </header>


    <div class="container">
        <div class="form1">
            <!-- <div class="button">
                <div id="btn"></div>
                <button type="button" class="topbtn" onclick="login()">Log In</button>
                <button type="button" class="topbtn" onclick="signup()">Upgrade</button>
            </div> -->
            <!--
                <form action="login.html" id="login" class="input" method="get">
                    <input type="text" class="sifi" placeholder="User Id" required>
                    <input type="text" class="sifi" placeholder="Enter password" required>
                     //<input type="checkbox" name="rempas" class="check-box"><label for="rempas">Remember Password</label> 
                    <button type="submit" class="sub-btn">Log In</button>
                    <img src="/Photos/Logo1.png" class="lo-im" alt="LOgo">

                </form> -->
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
                <!-- <div class="form-control">

                    <input type="password" placeholder="Password" class="sifi" id="password2" name="password2">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
         -->
                <div class="buttonGrp">
                    <button type="button" class="si-btn" name="submit"><a href="update_go.php?updateid='<?php echo $user; ?>'">Go to Update</a></button>
                    <button class="si-btn" value="Delete"><a href="delete.php?deleteid='<?php echo $user; ?>'"> Go to Delete</a></button>
                </div>
            </form>
        </div>

        <footer>
            <div class="footer-content">
                <h3>Tutorium</h3>
                <p>Tutorium | 1385 Woodroffe Ave, Nepean, ON <br>
                    CST8285-Web-Programming Group Assignment (Algonquin College) <br>
                </p>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2022 Copyright. design by<span> Juho | Leonardo | Mathunan | Su Yeoun </span><br>
                </p>
            </div>
        </footer>
</body>

</html>
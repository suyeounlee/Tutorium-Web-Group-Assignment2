<?php 
if(isset($_POST['submit'])) {
$userId = $_POST['userId'];
$password = $_POST['password'];

$connection = mysqli_connect('localhost', 'root', '1234', 'web_assignment_2');

if($connection) {
echo "We are connected";
} else {
die("Database connection failed");
}


$query = "insert into user(userId, password) ";
$query .= "values ('$userId', '$password')";

$result = mysqli_query($connection, $query);

if(!$result) {
die('Query failed');

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
    <link rel="stylesheet" href="login.css">
    
    <script src="button.js" defer></script>
    <script src="signup.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="button">
                <div id="btn"></div>
                <button class="topbtn" >Log In</button>
                <button class="topbtn" onClick="signup()">Sign Up</button>
            </div>
            <form id="login" class="input" method="post" action="login.php" onSubmit="login()"; return false;>
                <input type="text" class="input-field" placeholder="User Id" required name="userId">
                <input type="text" class="input-field" placeholder="Enter password" required name="password">
                <input type="checkbox" name="rempas" class="check-box"><label for="rempas">Remember Password</label>
                <button type="submit" class="sub-btn" name="submit">Log In</button>
            </form>

            <form id="signup" class="form" method="POST" action="login.php" onSubmit="return signup();">
                <div class="form-control">
                    
                    <input type="email" name="email" placeholder="Email" class="sifi" id="email">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                   
                    <input type="text" placeholder="User name" name="username" class="sifi" id="username">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    
                    <input type="password" placeholder="Password" name="passowrd" class="sifi" id="password">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    
                    <input type="password" placeholder="Password" name="password2" class="sifi" id="password2">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="terms" id="terms">
                    <label for="terms">I agree to the terms and conditions</label>
                </div>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </form>


        </div>

    </div>

</body>

</html>
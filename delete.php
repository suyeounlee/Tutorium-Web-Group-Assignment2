<?php 

$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "1234";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}


if(isset($_GET['deleteid'])) {
    $user=$_GET['deleteid'];
    
    $sql="delete from `signup` where username=$user";
   

    $result = mysqli_query($conn, $sql);
    echo "<script> alert('Deleted OK'); </script>" ;
    
    if($result) {
        header("Location: index.html" );
        // echo '<script> alert ("message successfully sent") </script>';
        
    } else {
        die(mysqli_error($conn));
    }
}


?>

<?php 

$username = $_POST['username'];
$userId= $_POST['userId'];
$email= $_POST['email'];
$password= $_POST['password'];


$conn = new mysqli('localhost', 'root', '1234', 'web_assignment_2');
if($conn->connect_error) {
    die('Conncetion failed : '.$conn->connect_error);
} else {
$stmt = $conn->prepare("insert into signup(userId, username, email, password) values (?,?,?,?)");
$stmt->bind_param("sss", $userId, $username, $email, $password);
$stmt->execute();
echo "registration successfully...";
$stmt->close();
$conn->close();
}

?>
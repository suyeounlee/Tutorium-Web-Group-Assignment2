<?php
$servername = "localhost";
$userName = "root";
$password = "1234";
$dbName = "web_assignment_2";


$mysql_conect = mysqli_connect($servername, $userName, $password) or die(mysqli_connect_error());
    if($mysql_conect){
     echo '성공했디야~';
    }else{
     echo '실패요';
    }
	mysqli_select_db($mysql_conect, $username);
	




?>

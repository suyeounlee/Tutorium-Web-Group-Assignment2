<?php
$user = ['username'];
$pword =['password'];
$host = "localhost";
$dbname = "web_assignment_2";
$username = "root";
$password = "1234" ;

$conn = mysqli_connect($host, $username, $password, $dbname);

$db=mysqli_select_db($conn,"web_assignment_2")
		or die("Connection Fails");

//starts the server validation
	$query="select * from signup where username='$username'";

if($result=mysqli_query($conn,$query))
{
   if(!($row=mysqli_fetch_array($result)))
   {
     echo "<b><i>Invalid User Name<br><a href ='login.html'>CLICK HERE</a></i>";
   }
   else
   {
      $passwd=$row[3];
      if($passwd==$pword)
      {
      include 'index.php';
      }
      
      else
      {
      echo "Incorrect Password<br><a href ='Login.html'>CLICK HERE</a></i>";
      }
    }
}

else
echo mysqli_error($conn);
mysqli_close($conn);
?>
<?php

$Servername = "localhost";
$Username = "travelgo13temp";
$Password = "tizen1818";
$Dbname = "travelgo13temp";

// Create connection
$conn = new mysqli($Servername, $Username, $Password, $Dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username=$_POST['username'];

$sql="SELECT password FROM users WHERE username='$username'";

$result=mysql_query($sql,$conn);

$row=mysql_fetch_array($result);


if(!$row){
  echo "<script>alert('Not an existing user');history.back();</script>";
}else{
    echo "<script>alert('Your password is ".$row[0]."');history.back();</script>";
}

?>


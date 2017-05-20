<?php
$host = "localhost";
$username = "root";
$password = "1234";
$DB_name = "test";

// Create connection
$conn = new mysqli_connect($host, $username, $password, $DB_name);

if(mysqli_connect_errno($conn)){
	echo "Fail!";
}
else{
	echo "Success!";
	
	$result = mysqli_query($conn, "select * from Persons");
	
	while($row = mysqli_fetch_array($result)){
		echo $row['Name'];
		echo "";
	}
	
}
mysqli_close($conn)
?>
<?php

header("Content-Type: text/html; charset=UTF-8");

session_start();
//if(!isset($_SESSION['id']) && !isset($_SESSION['password'])) {
	//alert("Invalid username or password.");
    // exit;
//}

$is_logged= $_SESSION['is_logged'];

if($is_logged=='YES'){
$myusername = $_SESSION['id'];
$message = $myusername.' Logged In.';
}
else{
    $message='Failed to Login.';
}

//var_dump($_SESSION);
if($is_logged=='YES' && $myusername=$_SESSION['id']){
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

mysqli_query($conn,"set names utf8");

$sql = "SELECT * FROM users";

$query = mysqli_query($conn, $sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "Name: " . $row["name"]. " - id: " . $row["userID"]. " - password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
}
else{
    exit();
}
?>

<html>
<head>
<title>After Login Page</title>
<meta charset = "utf-8">
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0, user-scalable=no, target-densitydpi=medium-dpi" /><!--������������ũ��������Ÿ�±�-->
<button type="button" onclick="location.href='p03_list.html' ">Move on to Mypage</button>

</body>
</html>

<?php
echo "<br/>";
echo $message;
?>
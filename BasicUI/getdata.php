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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "Name: " . $row["id"]. " - id: " . $row["password"]. " - password: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
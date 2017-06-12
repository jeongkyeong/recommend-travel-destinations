
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      #jb-container {
        width: 900px;
        margin: 10px auto;
        padding: 10px;
        border: 1px solid #bcbcbc;
      }
      #jb-header {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #bcbcbc;
      }
      #jb-content {
        width: 580px;
        padding: 10px;
        margin-bottom: 10px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-sidebar {
        width: 260px;
        padding: 10px;
        margin-bottom: 10px;
        float: right;
        border: 1px solid #bcbcbc;
      }
      #jb-footer {
        clear: both;
        padding: 10px;
        border: 1px solid #bcbcbc;
      }
      @media ( max-width: 480px ) {
        #jb-container {
          width: auto;
        }
        #jb-content {
          float: none;
          width: auto;
        }
       
      }
    </style>
</head>
<body>
  <div id="jb-container">
      <div id="jb-content">
        
<?php

header("Content-Type: text/html; charset=UTF-8");

$Servername = "localhost";
$Username = "travelgo13temp";
$Password = "tizen1818";
$Dbname = "travelgo13temp";

// Create connection
$conn = new mysqli ($Servername, $Username, $Password, $Dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_query($conn,"set names utf8");

echo "Register Information";
echo "<br/>";
echo "<br/>";
echo "Username: ";
echo $_POST['username'];
echo "<br/>";
echo "Password: ";
echo $_POST['password'];
echo "<br/>";
echo "Name: ";
echo $_POST['name'];
echo "<br/>";
echo "Gender: ";
echo $_POST['gender'];
echo "<br/>";
echo "E-mail: ";
echo $_POST['email'];
echo "<br/>";
echo "<br/>";

//echo $_REQUEST['id'];
//echo $_REQUEST['password'];

//import_request_variables('p','p_');
//echo $p_id;

echo $HTTP_POST_VARS['username'];
echo $HTTP_POST_VARS['password'];
echo $HTTP_POST_VARS['name'];
echo $HTTP_POST_VARS['gender'];
echo $HTTP_POST_VARS['email'];

$sql = "INSERT INTO users (userID, password, name, gender, email)
VALUES ('$_POST[username]', '$_POST[password]', '$_POST[name]', '$_POST[gender]', '$_POST[email]')";

if ($conn->query($sql) === TRUE) {
    echo "New User is added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

    echo "</br>";
}

$conn->close();

?>
 <input type='button' value='Confirm' onclick="location.href='index.html'">
 <input type='button' value='Cancel' onclick="location.href='RegisterScreen.html' ">

</div>

</div>

 </body>

</html>
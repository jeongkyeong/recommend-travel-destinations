
<?php

$host="localhost"; // Host name 
$username="travelgo13temp"; // Mysql username 
$password="tizen1818"; // Mysql password 
$db_name="travelgo13temp"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['id']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM $tbl_name WHERE userID='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$num_rows = mysql_num_rows($result);

   
    

if($num_rows == 1){
    session_start();
    $_SESSION['is_logged'] = 'YES';
    $_SESSION['id'] = $myusername;
    
   // echo "logged in!";
    header("location:p03_list.html");
}else{
    $_SESSION['is_logged'] = 'NO';
    $_SESSION['id'] = "";
    echo "<script language='javascript'> 
alert('Invalid username or password.'); 
location.href='index.html';
</script>";
}

?>

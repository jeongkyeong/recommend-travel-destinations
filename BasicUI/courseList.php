<?php
header("Content-Type: text/html; charset=UTF-8");
$conn=mysqli_connect("localhost","timetable","twinkle13", "timetable" );  
if (!$conn)  
{  
    echo "MySQL CONNECTION ERROR : ";
    echo mysqli_connect_error();
    exit();  
}  

mysqli_set_charset($conn,"utf8"); 
$credit = $_GET["credit"];
$lectureTime=$_GET["lectureTime"];
$dept=$_GET["dept"];

$mysql_qry="SELECT * FROM course_list WHERE credit like '$credit' AND lecture_time like
'$lectureTime' AND department like '$dept';";


$result=mysqli_query($conn,$mysql_qry);
$response=array();
while($row=mysqli_fetch_array($result)){
	array_push($response,array("course_id"=>$row[0],"course_code"=>$row[1],"credit"=>$row[2],
	"course_name"=>$row[3],"lecture_time"=>$row[4],"department"=>$row[5],"professor"=>$row[6],
	"place_time"=>$row[7]));
}

echo json_encode(array("response"=>$response),JSON_UNESCAPED_UNICODE);
mysqli_close($conn);


?>
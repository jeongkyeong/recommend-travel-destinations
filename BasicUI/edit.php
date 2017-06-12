<?php  
//header("Content-Type: text/html; charset=UTF-8");
$username = $_GET["username"];

$link=mysqli_connect("localhost","timetable","twinkle13", "timetable" );  
if (!$link)  
{  
    echo "MySQL CONNECTION ERROR : ";
    echo mysqli_connect_error();
    exit();  
}  

mysqli_set_charset($link,"utf8"); 


$sql="select * from student where Username = '$username'";

$result=mysqli_query($link,$sql);
$data = array();   
if($result){  
    
    while($row=mysqli_fetch_array($result)){
        array_push($data, array('name'=>$row[0],'username'=>$row[1],'password'=>$row[2],'dept'=>$row[3],'grade'=>$row[4]));
    }

   // echo "<pre>"; print_r($data); echo '</pre>';
    header('Content-Type: application/json; charset=utf8');
    $json = json_encode(array("user"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;

}  
else{  
    echo "ERROR : "; 
    echo mysqli_error($link);
} 


 
mysqli_close($link);  
   
?>
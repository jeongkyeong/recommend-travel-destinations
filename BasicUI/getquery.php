<?php  
//header("Content-Type: text/html; charset=UTF-8");

$link=mysqli_connect("localhost","timetable","twinkle13", "timetable" );  
if (!$link)  
{  
    echo "MySQL CONNECTION ERROR : ";
    echo mysqli_connect_error();
    exit();  
}  

mysqli_set_charset($link,"utf8"); 


$sql="select * from course_list";

$result=mysqli_query($link,$sql);
$data = array();   
if($result){  
    
    while($row=mysqli_fetch_array($result)){
        array_push($data, 
            array('id'=>$row[0],
            'name'=>$row[1],
            'address'=>$row[2]
        ));
    }

   // echo "<pre>"; print_r($data); echo '</pre>';
    header('Content-Type: application/json; charset=utf8');
    $json = json_encode(array("webnautes"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;

}  
else{  
    echo "ERROR : "; 
    echo mysqli_error($link);
} 


 
mysqli_close($link);  
   
?>
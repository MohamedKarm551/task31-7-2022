<?php 
print_r($_POST);
$list_of_students =  explode(",",$_POST['name']);
$list_of_courses =  explode(",",$_POST['course']);
$cer_content= file_get_contents("cert.html");
echo "<pre>";
print_r( $list_of_students);
echo "<pre>";
print_r($list_of_courses);
// print_r( "cer_content".$cer_content);
for($i=0;$i<count($list_of_students);$i++){
    
    
    for ($j=0; $j < count($list_of_courses); $j++) { 
        fopen($list_of_students[$i].$list_of_courses[$j].".html","w");
        
   $newstring =  str_replace('$name'
    ,$list_of_students[$i],
    $cer_content);
  


        $newstringCourse =  str_replace('$courseName'
        ,$list_of_courses[$j],
        $newstring);
        file_put_contents(
            $list_of_students[$i].$list_of_courses[$j].".html",
            $newstring);
        file_put_contents(
        $list_of_students[$i].$list_of_courses[$j].".html",
        $newstringCourse);
    }
    

   
   
}

?>
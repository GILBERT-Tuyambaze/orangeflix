<?php
session_start();
include 'movie_database.php';
$output="";
  $type=$_POST['type'];
     $count=count($type);       
     for($i=0; $i<$count;$i++){
      $sql=mysqli_query($con,"INSERT INTO `popular`(`movie_unique_id`)VALUES('{$type[$i]}')");
      if($sql){
        
        if($i == ($count -1)){
          $output.="sucess";
        }  
      }
      else{
        $output.=mysqli_connect_error();
      }
        
       }   
      



echo $output;
?>
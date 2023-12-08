<?php 
session_start();
include 'movie_database.php';
$output=''; 
$name=mysqli_real_escape_string($con,$_COOKIE['searchTearm']);
$sql=mysqli_query($con,"SELECT*FROM  `movies` where `movie_name`LIKE'%{$name}%'");
if(mysqli_num_rows($sql)>0){
while($row=mysqli_fetch_assoc($sql)){
    $output.='
    <a href="play.php?user='.$row['movie_unique_id'].'" class="search_link">
    <div class="row" >
    <img src="files/img/'.$row['movie_image_url'].'" alt="" class="search_img">
      <span class="name_search">'.$row['movie_name'].'</span>
      <span class="date_search">released on '.$row['movie_release_time'].'</span>
      <span class="type_search">'.$row['type'].'</span>
    </div>
    </a>
    ';
}
}
else{
    $output.='no movie name  match with name provided, chech syantx or may be is not on our server
    ';
}
echo $output;
?>
<?php
session_start();
include 'movie_database.php';
$output="";
$conn=mysqli_query($con,"SELECT*FROM `popular` ");
if(mysqli_num_rows($conn)>0){
    while( $row=mysqli_fetch_assoc($conn)){
      $conn_1=mysqli_query($con,"SELECT*FROM `movies` where `movie_unique_id`='{$row['movie_unique_id']}' ");
      if(mysqli_num_rows($conn_1)>0){
        while( $row1=mysqli_fetch_assoc($conn_1)){
          $output.='
          <div class="swiper-slide"  >
          <div class="movie-box" style="background-color:blue">
          <img src="files/img/'.$row1['movie_image_url'] .'" alt="" class="popular-box-img">
      <div class="box-text">
       <h2 class="movie-title">'.$row1['movie_name'].'</h2>
        <span class="movie-type">'.$row1['type'].'</span>
        <a href="play.php?user='.$row1['movie_unique_id'].'"  onclick="func()" class="watch-btn play-btn" >
          <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
        
        </a>
      </div>
    </div>
    </div>
          ';
        }
      }
      else{
        
      }
    }
    
}
else{
    $output.="no movie is availble now";
}
echo $output;
?>

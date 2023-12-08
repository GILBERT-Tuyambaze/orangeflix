<?php
session_start();
include 'movie_database.php';
$output="";
$conn=mysqli_query($con,"SELECT*FROM `movies` ORDER BY `id` DESC");
if(mysqli_num_rows($conn)>0){
    while( $row=mysqli_fetch_assoc($conn)){
        $output.='
        <div class="movie-box">
            <img src="files/img/'.$row['movie_image_url'] .'" alt="" class="movie-box-img">
        <div class="box-text">
         <h2 class="movie-title">'.$row['movie_name'].'</h2>
          <span class="movie-type">'.$row['type'].'</span>
         <a href="play.php?user='.$row['movie_unique_id'].'"  class="watch-btn play-btn">
            <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
          
          </a>
        </div>
      </div>
    
        ';
    }
    
}
else{
    $output.="no movie is availble now";
}
echo $output;
?>

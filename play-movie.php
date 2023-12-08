<?php
session_start();
include 'movie_database.php';
$output="";
$user=$_SESSION['user_id'];
$conn=mysqli_query($con,"SELECT*FROM `movies` where `movie_unique_id`={$user}");
$con_1=mysqli_query($con,"SELECT*FROM `casts` where `movie_unique_id`={$user}");
if(mysqli_num_rows($conn)>0){
    while( $row=mysqli_fetch_assoc($conn)){
        $output.='
        
        <!-- play image -->
        <img src="files/img/'.$row['movie_image_url'].'" alt="" class="play-img">
         <!-- play text -->
         <div class="play-text">
            <h2> blue beetle </h2>
             <!-- rating -->
            <div class="rating">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M0 0h24v24H0z"/><path fill="yellow" d="M12 1a.993.993 0 0 1 .823.443l.067.116l2.852 5.781l6.38.925c.741.108 1.08.94.703 1.526l-.07.095l-.078.086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1-1.249 1.135l-.101-.035l-.101-.046l-5.693-3l-5.706 3c-.105.055-.212.09-.32.106l-.106.01a1.003 1.003 0 0 1-1.038-1.06l.013-.11l1.09-6.355l-4.623-4.5a1.001 1.001 0 0 1 .328-1.647l.113-.036l.114-.023l6.379-.925l2.853-5.78A.968.968 0 0 1 12 1zm0 3.274V16.75a1 1 0 0 1 .239.029l.115.036l.112.05l4.363 2.299l-.836-4.873a1 1 0 0 1 .136-.696l.07-.099l.082-.09l3.546-3.453l-4.891-.708a1 1 0 0 1-.62-.344l-.073-.097l-.06-.106L12 4.274z"/></g></svg>
            </div>
             <!-- tags -->
             <div class="tags">
                <span>Action</span>
                <span>Adventure</span>
                <span>4k hD</span>
             </div>
              <!-- trailer bitton -->
             <a href="play-page.php" class="watch-btn">
              <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
              <span>Watch The trailer</span> 
              </a>
         </div>
          <!-- play btn -->
          <svg class="play-movie" id="play-movie" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
      <!-- video container -->
      <div class="video-container" id="video-container">
        <!-- video-box -->
        <div class="video-box">
        <video id="myvideo" class="file/movie/'.$row['movie_url'].'" controls></video>
        </div>
        <h1 class="close-video">x</h1>
      </div>
        </div>
      <div class="about-movie container">
        <h2>'.$row['movie_name'].'</h2>
        <p>'.$row['movie_about'].'</p>
       <!-- movie cast --> 
       <h2 class="cast-heading">movie cast</h2>
       <div class="cast">
       ';
       while($row_1=mysqli_fetch_assoc($con_1)){
       $output.='
       <div class="cast-box">
       <img src="files/casts/'.$row_1['cast_img'].'" alt="" class="cast-img">
       <span class="cast-title">'.$row_1['cast_name'].'</span>
   </div>
       ';
       }
       
       $output.='

       </div>
        ';
    }
}

echo $output;
?>

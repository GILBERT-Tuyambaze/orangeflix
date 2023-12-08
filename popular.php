
<?php
session_start();
include 'movie_database.php';   
         $output="";
          $conn=mysqli_query($con,"SELECT*FROM `movies` ORDER BY `id` DESC");
           if(mysqli_num_rows($conn)>0){
            while( $row=mysqli_fetch_assoc($conn)){
                $count=$row['movie_about'];
                $new_word="";
                $word=strlen($count)<200?$count:substr($count,0,200)."...";
                $output.='
                <h2 for="input" class="label12"> <img src="files/img/'.$row['movie_image_url'].'" alt="" class="popular_new_img"><i class="i">'.$row['movie_name'] .'</i> 
                <i class="popular_new_about"> <i class="i12">stroy:</i> '. $word.' </i>
                <input type="checkbox" id="chk" name="type[]"  class="type12" value='.$row['movie_unique_id'] .'> 
                </h2><br>
                ';
               
            }
               
              echo $output;

           }
            

         ?>
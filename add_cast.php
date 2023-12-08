
<?php
session_start();
include 'movie_database.php';
$output="";
$number=mysqli_real_escape_string($con,$_POST['number']);
$_SESSION['number']=$number;
$count=$number;
  if(!empty($number)){
    if(($number >= 1)&&($number <= 15))
   {
    
    for($num=1;$num<=$number;$num++){
      $count++;
      $output.='
      <div class="image">
      <h6> please enter name and image of cast number '.$num.'</h6><br>
      <label for="name"> name : <input type="text" name="'.$num.'" placehold="enter name of cast .."><br><br>
      <label for="image"> image : <input type="file" name="'.$count.'" > <br><br>
      </div>
     
      ';

  }

   }
   else{
    echo 1;
   }
    
  }
  else{
    echo 0;
  }
  echo $output;
?>
<?php
session_start();
include 'movie_database.php';
$output="";
$name=mysqli_real_escape_string($con,$_POST['movie_name']);
$country=mysqli_real_escape_string($con,$_POST['movie_country_originality']);
$date=mysqli_real_escape_string($con,$_POST['movie_release_time']);
$type=($_POST['type']);

$movie_about=mysqli_real_escape_string($con,$_POST['movie_about']);
if(!empty($name)&&!empty($country)&&!empty($date)&&!empty($movie_about)&&!empty($type)){
    if((isset($_FILES['movie_ur'])) || (isset($_FILES['movie_image_url'])&& isset($_FILES['movie_subtile']))){

   $movie_name=$_FILES['movie_ur']['name'];
   $trialer_name=$_FILES['movie_trialer_url']['name'];
   $img_name=$_FILES['movie_image_url']['name'];
   $subtitle_name=$_FILES['movie_subtile']['name'];

   $movie_size=$_FILES['movie_ur']['size'];
   $trialer_size=$_FILES['movie_trialer_url']['size'];
   $img_size=$_FILES['movie_image_url']['size'];
   $subtitle_size=$_FILES['movie_subtile']['size'];

   $movie_tmp_name=$_FILES['movie_ur']['tmp_name'];
   $trialer_tmp_name=$_FILES['movie_trialer_url']['tmp_name'];
   $img_tmp_name=$_FILES['movie_image_url']['tmp_name'];
   $subtitle_tmp_name=$_FILES['movie_subtile']['tmp_name'];

   $movie_error=$_FILES['movie_ur']['error'];
   $trialer_error=$_FILES['movie_trialer_url']['error'];
   $img_error=$_FILES['movie_image_url']['error'];
   $subtitle_error=$_FILES['movie_subtile']['error'];
    $size=$trialer_size+$img_size+$subtitle_size;
   if(($movie_error===0)||(($img_error===0)&&($subtitle_error===0))){
    
    $movie_exe=pathinfo( $movie_name, PATHINFO_EXTENSION);
    $movie_exe_lowcase=strtolower( $movie_exe);
    $movie_allowed_exetension=array("mp4","avi","3gp","rmvb","wmv","mkv","mpg","vob","mov","flv","swf");
    
    $trialer_exe=pathinfo($trialer_name, PATHINFO_EXTENSION);
    $trialer_exe_lowcase=strtolower( $trialer_exe);
    $trialer_allowed_exetension=array("mp4","avi","3gp","rmvb","wmv","mkv","mpg","vob","mov","flv","swf");

     
    $subtitle_exe=pathinfo($subtitle_name, PATHINFO_EXTENSION);
    $subtitle_exe_lowcase=strtolower( $subtitle_exe);
    $subtitle_allowed_exetension=array("srt");
    
     
    $img_exe=pathinfo($img_name, PATHINFO_EXTENSION);
    $img_exe_lowcase=strtolower( $img_exe);
    $img_allowed_exetension=array("jpg","jpeg","png","jpe","jfif","gif","tiff","tif","bmp");

    if((in_array($img_exe_lowcase,$img_allowed_exetension))&&( in_array( $subtitle_exe_lowcase,$subtitle_allowed_exetension)) &&(in_array($movie_exe_lowcase,$movie_allowed_exetension))){
        $new_movie_name=uniqid("movievel.$name.full_movie.",true).'.'.$movie_exe_lowcase;
        $new_subtitle_name=uniqid("movievel.$name.subtitle.",true).'.'.$subtitle_exe_lowcase;
        $new_trialer_name=uniqid("movievel.$name.trialer.",true).'.'.$trialer_exe_lowcase;
        $new_img_name=uniqid("movievel.$name.img.",true).'.'.$img_exe_lowcase;

     $movie_upload_path='files/'.'movie/'.$new_movie_name;
     move_uploaded_file($movie_tmp_name,$movie_upload_path);
     $trialer_upload_path='files/'.'trialer/'.$new_trialer_name;
     move_uploaded_file($trialer_tmp_name,$trialer_upload_path);
     $subtitle_upload_path='files/'.'subtitle/'.$new_subtitle_name;
     move_uploaded_file($subtitle_tmp_name,$subtitle_upload_path);
     $img_upload_path='files/'.'img/'.$new_img_name;
     move_uploaded_file($img_tmp_name,$img_upload_path);
     $time=time();
     $unique=rand(time(),1000000);
     $data=$type;
     $alldata=implode("/",$data);
     $_SESSION['movie_unique_id']=$unique;
     $sql="INSERT INTO `movies`(`movie_unique_id`,`movie_name`,`movie_url`,`movie_about`,
     `movie_trialer_url`,`movie_release_time`,`movie_country_orginaity`,`movie_image_url`,
     `movie_subtitle`,`type`)
     VALUES('{$unique}','{$name}','{$new_movie_name}','{$movie_about}','{$new_trialer_name}',
     '{$date}','{$country}','{$new_img_name}','{$new_subtitle_name}','{$alldata}')";
     $con=mysqli_query($con,$sql);
     if($con){
    echo 'success';
     }
     else{
     die("connect error ".mysqli_connect_error());
     }
    }
    else{
        $output.='please check if entered file have allowed extension : for video ("mp4","avi","3gp","rmvb","wmv","mkv","mpg","vob","mov","flv","swf") , for img ("jpg","jpeg","png","jpe","jfif","gif","tiff","tif","bmp") and for subtile (srt) ';
    }


    
   }
   else
   {
   $output.="error have occured please re-enter again after same time or check if files are all filled";
   }
    }
    else{
        $output.=" please fill those all files ";
    }
}
else
{
    $output.=" all faild must be filled please";
}

echo $output;
?>
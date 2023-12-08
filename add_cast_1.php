<?php
session_start();
include 'movie_database.php';
$number=$_SESSION['number'];
$movie_unique_id=$_SESSION['movie_unique_id'];
$name;
$count=$number;
$count_1=1;
$output='';
for($num=1;$num<=$number;$num++){
    $count++;
    $count_1++;
    $name=mysqli_real_escape_string($con,$_POST[$num]);
    if(empty($name)){
        $output.="Please Provide Name";
    }
    else{
        $file_name=$_FILES[$count]['name'];
    $file_size=$_FILES[$count]['size'];
    $file_error=$_FILES[$count]['error'];
    $file_tmp_name=$_FILES[$count]['tmp_name'];
    if($file_error===0){
 
        $file_exe=pathinfo($file_name, PATHINFO_EXTENSION);
        $file_exe_lowcase=strtolower( $file_exe);
        $file_allowed_exetension=array("jpg","jpeg","png","jpe","jfif","gif","tiff","tif","bmp");
        if(in_array($file_exe_lowcase, $file_allowed_exetension)){
            $new_file_name=uniqid($name,true).'.'.$file_exe_lowcase;
            $file_path='files/'.'casts/'. $new_file_name;
            move_uploaded_file( $file_tmp_name,$file_path);
            $sql=mysqli_query($con,"INSERT INTO `casts`(`movie_unique_id`,`cast_name`,`cast_img`) VALUES('{$movie_unique_id}','{$name}','{$new_file_name}')");
            if($sql){
                echo '';
                if($count_1==$number){
                    session_unset();
                    session_destroy();
                }
                 }
                 else{
                 die("connect error ".mysqli_connect_error());
                 break;
                 }
           
        }
    }
    else{
       $output.='machine find same errors during image submition'; 
       break;
    }
   
    }
}
echo  $output;

?>
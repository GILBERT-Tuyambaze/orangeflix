<?php

if((isset($_POST['submit']))&&(isset($_FILES['imgs']))){
    $header=$_POST['header'];
    $img_name=$_FILES['imgs']['name'];
    $img_size=$_FILES['imgs']['size'];
    $tmp_name=$_FILES['imgs']['tmp_name'];
    $error=$_FILES['imgs']['error']; 
   if($error==0){
    if($img_size >1025024){
        echo "<a href='views.php' style='position:absolute;color:yellow;' class='output'>"."file enter is too large try to enter small one click here to re-enter"."<a>";
    }
    else{
        $img_exe=pathinfo($img_name, PATHINFO_EXTENSION);
       $img_exe_lc=strtolower($img_exe);
       $allowed_exe=array("jpg","jpeg","png","jpe","jfif","gif","tiff","tif","bmp");
       if(in_array($img_exe_lc,$allowed_exe)){
        $new_img_name=uniqid("IMG",true).'.'.$img_exe_lc;
        $img_upload_path='connect-img/'.$new_img_name;
        $conn=mysqli_connect('localhost','root','','accounts');
        $var=$_COOKIE['name'];
        if($var=$_COOKIE['name']){
        $name=$_COOKIE['name'];
        $sql="SELECT*FROM form WHERE `name`='$name'";
        $result=mysqli_query($conn,$sql);
       if($rr=mysqli_num_rows($result)===1){
        $rr=mysqli_fetch_assoc($result);
        if(($rr['name']===$name)){
                     $nme=$rr['name'];
                     $imgs=$new_img_name; 
                     
                       $check="SELECT *FROM `post` WHERE  `name`='$name'";
                         $resul=mysqli_query($conn,$check);
                           if($result=mysqli_fetch_assoc($resul)){ 
                              move_uploaded_file($tmp_name,$img_upload_path);
                               $change="UPDATE `post` SET `images_url`='$imgs', `header`='$header' WHERE `name`='$name'";
                                  $done=mysqli_query($conn,$change);
                                    if($done){
                                       $vie="SELECT * FROM `post` WHERE `name`='$nme'";
                                          $resultvie=mysqli_query($conn,$vie);
                                             if($rvie=mysqli_num_rows($resultvie)===1){
                                               $rvie=mysqli_fetch_assoc($resultvie);
                                               header("location:views.php");
                                                                                      }
                                              else
                                                   {
                                                        echo  "<h1 style='position:absolute;color:white;'class='output'>"." error occered during Posting please re-enter "."</h1><br/>"; 
                                                   }
                        
                                            } 
                                         }
                                   else{
                       $con="INSERT INTO `post`(`images_url`,`name`,`header`) VALUES('$imgs','$nme','$header')";
                                 $fina=mysqli_query($conn,$con);
                                    if($fina){
                                        move_uploaded_file($tmp_name,$img_upload_path);
                                        echo  "<h1 style='position:absolute;color:white;'class='output'>".$rr['name']." you want to creat this public view "."</h1><br/>" ;
                                       $vie="SELECT * FROM `post` WHERE `name`='$nme'";
                                       $resultvie=mysqli_query($conn,$vie);
                                       if($rvie=mysqli_num_rows($resultvie)===1){
                                        $rvie=mysqli_fetch_assoc($resultvie);
                                        header("location:views.php");
                                       }
                                     }
                                     else{
                                        echo  "<h1 style='position:absolute;color:white;'class='output'>"." error occered  please re-enter "."</h1><br/>";
                                     }
                                    }
            
       
      
    }
        }
        else{
            echo "<h1 style='position:absolute;color:white;'class='output'>"." fail to connect to server please reload paje "."</h1>";

        }
       }
       else{
        echo" <h1 style='position:absolute;color:white'class='output'>"."can't upload file of this type:".($img_exe_lc)."</h1>";
    
       }
       }
       }
       }
    }

 else{
    echo "<a href='views.php' style='position:absolute;color:black;'class='output'>"."unkown error occured click here to re-enter"."</a>";
    

   }
   ?>
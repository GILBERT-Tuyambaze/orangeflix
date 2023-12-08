<?php


if(isset($_POST['submit'])&& isset($_FILES['my_img'])){
   
    $img_name=$_FILES['my_img']['name'];
    $img_size=$_FILES['my_img']['size'];
    $tmp_name=$_FILES['my_img']['tmp_name'];
    $error=$_FILES['my_img']['error']; 
   if($error==0){
    if($img_size >1725024){
        echo "<a href='connect_img.php' style='position:absolute;color:yellow;' class='output'>"."file enter is too large try to enter small one click here to re-enter"."<a>";
    }
    else{
        $img_exe=pathinfo($img_name, PATHINFO_EXTENSION);
       $img_exe_lc=strtolower($img_exe);
       $allowed_exe=array("jpg","jpeg","png");
       if(in_array($img_exe_lc,$allowed_exe)){
        $new_img_name=uniqid("IMG",true).'.'.$img_exe_lc;
        $img_upload_path='connect-img/'.$new_img_name;
        $conn=mysqli_connect('localhost','root','','accounts') or die("failed to connect due to this error").mysqli_error();
        if(isset($_POST['name'])|| isset($_POST['email'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sql="SELECT*FROM form WHERE `name`='$name' or `email`='$email'";
        $result=mysqli_query($conn,$sql);
       if($rr=mysqli_num_rows($result)===1){
        $rr=mysqli_fetch_assoc($result);
        if(($rr['name']===$name)||($rr['email']===$email)){
            if($rr['name']===$name){
                
                     $nme=$rr['name'];
                     $imgs=$new_img_name;
                       $con="INSERT INTO `images`(`imegas_url`,`name`) VALUES('$imgs','$nme')";
                                 $fina=mysqli_query($conn,$con);
                                    if($fina){
                                        move_uploaded_file($tmp_name,$img_upload_path);
                                        echo  "<h1 style='position:absolute;color:white;'class='output'>"." welcome ".$rr['name']."</h1><br/>" ;
                                       echo "<br/><h1 style='position:absolute;color:white;'class='output'>"."image submited successful  "." <a href='sample.php' class='a' >"."Go to login"."</a>"."</h1>" ;
                                      
                                       $vie="SELECT * FROM images WHERE `name`='$nme'";
                                       $resultvie=mysqli_query($conn,$vie);
                                       if($rvie=mysqli_num_rows($resultvie)===1){
                                        $rvie=mysqli_fetch_assoc($resultvie);
                                        ?>
                                        <img src="connect-img/<?=$rvie['imegas_url']?>" alt=" oooh pooo " class="box">
                                        <?php
                                       }
                                     }
                                     else{
                                        echo  "<h1 style='position:absolute;color:white;'class='output'>"." error occered during image upload please re-enter ".$rr['name'].mysqli_connect_error()."</h1><br/>";
                                     }
            }
            else{
        if(!($rr['email']===$email)){
           echo "<h1 style='position:absolute;color:white;'class='output'>"."no such email"."</h1>" ;
         
        }
        else
        {
            $gb=$rr['name'];
           echo "<h1 style='position:absolute;color:white;' class='output'>". "name match with this email ".$rr['email']." is ".$gb." use it instead"."</h1>";

            
        }
    }
        }
        else{
            echo "<h1 style='position:absolute;color:white;'class='output'>"." no account macth with that name please enter correct name or email "."</h1>";

        }
       }
       }
       else{
        echo" <h1 style='position:absolute;color:white'class='output'>"."please enter name or email"."</h1>";
       }
       }
       else{
        echo" <h1 style='position:absolute;color:white'class='output'>"."can't upload file of this type:".($img_exe_lc)."</h1>";
    
       }
    }
   }
   else{
    echo "<a href='connect_img.php' style='position:absolute;color:white;'class='output'>"."unkown error occured click here to re-enter"."</a>";
    

   }
}

else{
    echo "<h1 style='position:absolute; color:white'class='output'>"."profile edition"."</h1>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
<link rel="stylesheet" href="connect_img.css">
</head>
<body>
<div class="container">
        <video autoplay loop muted plays-inline class="background-clip">
            <source src="imige/skymove.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>use name or email to creat profile</h1>
         <form action="" method="POST" enctype="multipart/form-data">
           <label for="name">name:</label>
           <input type="text"  name="name" placeholder="enter your name" ><br/>
          <label for="email">  email:</label>
          <input type="email"   name="email" placeholder="use email to get name" ><br/><br/>
          <input type="file" name="my_img"  class="style_img"  required><br/><br/>
            <input type="submit" value="upload"  name="submit" id="down" class="style_img" >
        </form>
        </div>
    </div>
    
      
    
</body>
</html>
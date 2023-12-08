<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn= mysqli_connect('localhost','root','','test1') or die ("connection failed" .mysqli_connect_error());
    if(isset($_POST['name'])  && isset($_POST['password'])){
        $uname= $_POST['name'];
       $pass=$_POST['password'];

        $sql = "INSERT INTO `users`(`uname`,``) VALUES('$uname',$pass')";

        $query= mysqli_query($conn,$sql);
        if($query){
            echo 'well connected';
        }
        else
        {
            echo 'error occured';
        }
    }
}
?>
<?php
include "database.php";


if(isset($_POST["submit"])){
    
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $str="insert into login_details (Email,Password) values('$email','$password')";
    $result=mysqli_query($db,$str);
    if($result){
    echo "successs";
   }
   else{
    die(mysqli_error($db));
   }

}








?>
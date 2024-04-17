<?php
include "database.php";


if(isset($_POST['submitt'])){

    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    
    $str="insert into signin_details (Email,Password,Confirm_Password) values('$email','$password','$confirmpassword')";
    $result=mysqli_query($db,$str);
    if($result){
        header('location: user_data.php');
   }
   else{
    
    die(mysqli_error($db));
   }

}









?>
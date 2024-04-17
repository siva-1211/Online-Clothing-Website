<?php
include "database.php";
$id=$_GET['updateid'];




$sql="select * from signin_details where ID=$id";
$result=mysqli_query($db,$sql);

$info=mysqli_fetch_assoc($result);
$email=$info['Email'];
$password=$info['Password'];
$confirmpassword=$info['Confirm_Password'];


if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    
    $str="update signin_details set ID=$id,Email='$email',Password='$password',Confirm_Password='$confirmpassword' where ID=$id";
    
    $result=mysqli_query($db,$str);
    if($result){
        header('location: user_data.php');
    }
    else{
        die(mysqli_error($db));
    }
}

?>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link href="https://db.onlinewebfonts.com/c/3cfe6d7e2919d98e0c6994d3dfbeda2c?family=Turista+Gorda+NF+W01+Regular"
        rel="stylesheet">



    <link rel="stylesheet" href="signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>


    <header class="header">
        <nav class="navbar navbar-expand-md navbar-dark bg-black">
            <div class="container-fluid">
                <a href="#" class="navbar-brand align-bottom">
                    <img src="MASTHEAD-1_d291d857-8b53-4ada-8c76-e5e504fa9d56.webp" alt="" width="35" height="35"
                        style="border-radius: 50%;"> CLOTHING PRODUCTS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavBar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-items">
                            <a href="#" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-items">
                            <a href="#accountpage" class="nav-link active" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">Account</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link active dropdown-toggle" role="button"
                                data-bs-toggle="dropdown">Follow</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">YouTube</a></li>
                                <li><a href="#" class="dropdown-item">Facebook</a></li>
                                <li><a href="#" class="dropdown-item">Instagram</a></li>
                                <li><a href="#" class="dropdown-item">Twitter</a></li>
                            </ul>
                        </li>
                        <li class="nav-items">
                            <a href="#" class="nav-link active">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <form class="container d-flex justify-content-center align-items-center" style="height: 700px;" method="POST">
        <div class="details d-flex-column ">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email ?>">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $password ?>">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="confirmpassword" value="<?php echo $confirmpassword ?>">
            </div>
          
          <button type="submit" class="signinbutton" name="submit">UPDATE ACCOUNT</button>
        </div>
        
      </form>


</body>
</html>













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
            <div class="container">
                
                    <a href="#" class="navbar-brand">
                        <div class="logo d-flex align-items-center">
                            <div class="symbol">
                                <img src="MASTHEAD-1_d291d857-8b53-4ada-8c76-e5e504fa9d56.webp" alt="" width="35" height="35"
                                style="border-radius: 50%;">
                            </div>
                            
                            <div class="tile">CLOTHING PRODUCTS

                            </div>
                        </div>
                         
                    </a>
                
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

    <form class="container d-flex justify-content-center align-items-center" style="height: 700px;" action="account_creation.php" method="POST">
        <div class="details d-flex-column">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Passwprd" name="confirmpassword">
            </div>
          
          <button type="submit" class="signinbutton" name="submitt">CREATE AN ACCOUNT</button>
        </div>
        
      </form>

      <div class="footer">
        <div class="content4">
            <div class="ordernow">
                <ul>
                    <li class="footertitle1">Clothing Products</li>

                    <li><a class="footercontent1" href="#">Treams & Conditions</a></li>
                    <li><a class="footercontent1" href="#">Fees and Payment</a></li>
                    <li><a class="footercontent1" href="#">Rturn and refund</a></li>
                    <li><a class="footercontent1" href="#">Join Our Team</a></li>
                    <li><a class="footercontent1" href="#">Promotions Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="aboutus">
                <ul>
                    <li class="footertitle2">HELP
                        
                        </li>

                    <li><a class="footercontent2" href="#">Track Your Order</a></li>
                    <li><a class="footercontent2" href="#">FAQ</a></li>
                    <li><a class="footercontent2" href="#">Customer Care</a></li>
                    <li><a class="footercontent2" href="#">Cancellations</a></li>
                    <li><a class="footercontent2" href="#">Reviews</a></li>
                </ul>
            </div>


            <div class="ourpolicies">
                <ul>
                    <li class="footertitle3">Our policies</li>

                    <li><a class="footercontent3" href="#">Privacy</a></li>
                    <li><a class="footercontent3" href="#">Terms & Conditions</a></li>
                    <li><a class="footercontent3" href="#">Responsible disclosure</a></li>
                    <li><a class="footercontent3" href="#">FAQs & Help</a></li>

                </ul>
            </div>

            <div class="visitlosPollos">
                <ul>
                    <li class="footertitle4">Visit Our Store</li>

                    <li><a class="footercontent4" href="#">Locate a store</a></li>
                    <li><a class="footercontent4" href="#">Global blog</a></li>

                </ul>
            </div>



        </div>
        <div class="apps">
            <a href="#"><img
                    src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSXhTpVLVjVH9dWeD7VHOFlegqrSHY4A4DGIlkEzRdCU3RHFXRc"
                    alt="" width="120px" height="40px"></a>
            <a href="#"><img
                    src="https://www.pizzahut.co.in/order/images/icons/app-store-google-play.b1ffb9f40420b63efe43e34f60bfb682.png"
                    alt="" width="120px" height="40px"></a>
        </div>
        <div class="followus">
            <div class="folowustitle">Follow Us</div>
        </div>
        <div class="icons">
            <div class="facebook">
                <a href="#"><img
                        src="	https://www.pizzahut.co.in/order/images/icons/social-white-facebook.7cce5c98cdf27ef51601f3650f73b465.png"
                        alt=""></a>
            </div>
            <div class="twitter">
                <a href="#"><img
                        src="https://www.pizzahut.co.in/order/images/icons/social-white-twitter.ef766a459cb51bbdaf9b24eaa5d21289.png"
                        alt=""></a>
            </div>
            <div class="instagram">
                <a href="#"><img
                        src="https://www.pizzahut.co.in/order/images/icons/social-white-instagram.cf20de72a775ca841c887ea845457fa0.png"
                        alt=""></a>
            </div>
            <div class="youtube">
                <a href="#"><img
                        src="https://www.pizzahut.co.in/order/images/icons/social-white-youtube.c5d3435334b39f9535c1eeb639938a30.png"
                        alt=""></a>
            </div>
        </div>
    </div>


</body>
</html>
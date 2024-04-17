<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Products</title>
    <link href="https://db.onlinewebfonts.com/c/3cfe6d7e2919d98e0c6994d3dfbeda2c?family=Turista+Gorda+NF+W01+Regular"
        rel="stylesheet">



    <link rel="stylesheet" href="index.css">
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

    <div class="offcanvas offcanvas-end" tabindex="-1" id="accountpage" aria-labelledby="sidebar-label">
        <button type="button" class="btn-close" width="50px" aria-label="Close" data-bs-dismiss="offcanvas"></button>
        <div class="offcanvas-title d-flex">Login</div>
        <form class="d-flex-column p-5" action="login.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" name="email">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1" name="password">
            </div>
           
            <button type="submit" class="signin" name="submit">SIGN IN</button>
            <button class="accountcreate"><a class="createaccount" href="signin.php">CREATE AN ACCOUNT</a></button>
            
          </form>
    </div>



    <div class="jumbotron">
        <div class="container d-flex justify-content-center">

            <ul class="menu d-flex mt-3">
                <li class="menu-item dropdown">
                    <a class="menu-link dropdown-toggle" data-bs-toggle="dropdown" role="button" href="#">Men</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Shirts</a></li>
                        <li><a href="#" class="dropdown-item">t-shirts</a></li>
                        <li><a href="#" class="dropdown-item">Jeans</a></li>
                        <li><a href="#" class="dropdown-item">Sweatshirt & Hoodies</a></li>
                        <li><a href="#" class="dropdown-item">Footwear</a></li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a class="menu-link dropdown-toggle" data-bs-toggle="dropdown" role="button" href="#">Women</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Top wear</a></li>
                        <li><a href="#" class="dropdown-item">Bottom wear</a></li>
                        <li><a href="#" class="dropdown-item">Inner wear</a></li>
                        <li><a href="#" class="dropdown-item">Sarees</a></li>
                        <li><a href="#" class="dropdown-item">Footwear</a></li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a class="menu-link dropdown-toggle" data-bs-toggle="dropdown" role="button" href="#">Kids</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">t-shirts</a></li>
                        <li><a href="#" class="dropdown-item">Trousers</a></li>
                        <li><a href="#" class="dropdown-item">t-shirts</a></li>
                        <li><a href="#" class="dropdown-item">Skirts And Shorts</a></li>
                        <li><a href="#" class="dropdown-item">Footwear</a></li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a class="menu-link dropdown-toggle" data-bs-toggle="dropdown" role="button" href="#">Seasonal Wears</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Jackets</a></li>
                        <li><a href="#" class="dropdown-item">Switters</a></li>
                        <li><a href="#" class="dropdown-item">Sweatshirt & Hoodies</a></li>
                        <li><a href="#" class="dropdown-item">Rainwear & Windcheater</a></li>
                        <li><a href="#" class="dropdown-item">Footwear</a></li>
                    </ul>
                </li>
            </ul>


        </div>
    </div>


    <div class="jumbotron">
        <div class="container-fluid mt-3">
            <img src="MASTHEAD-1_d291d857-8b53-4ada-8c76-e5e504fa9d56.webp" alt="" width="100%">
        </div>
    </div>
    
<div class="bestsellar d-flex justify-content-center">Best-Seller</div>

<div class="bestsellar-items d-flex justify-content-around">
    <div class="card" style="width: 18rem;">
        <img src="1_17copy.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 799</h5>
          <p class="card-text">Men Full Sleeve T-shirt</p>
          
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="3_16copy.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 699</h5>
          <p class="card-text">Men Oversized Graphic T-shirt</p>
          
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="6_3copy.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 599</h5>
          <p class="card-text">Men Oversized Graphic T-shirt</p>
          
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="oversized_sicko_mode_1_1copy.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 799</h5>
          <p class="card-text">Men Oversized Graphic T-shirt</p>
          
        </div>
      </div>
</div>
<p><a href="#" class="link-dark d-flex flex-row-reverse">Explore more >></a></p>

<div class="bestsellar d-flex justify-content-center">Hoodies & Sweatshirt</div>

<div class="bestsellar-items d-flex justify-content-around">
    <div class="card" style="width: 18rem;">
        <img src="2_18.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 799</h5>
          <p class="card-text">Men Solid Full Sleeves Hoodie</p>
          
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="kurt_cobain_1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 699</h5>
          <p class="card-text">Men Solid Sweatshirt</p>
          
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="green_oversized_hoodie_1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 599</h5>
          <p class="card-text">Men Green Oversized Hoodie</p>
          
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="nirvana_1_1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">₹ 799</h5>
          <p class="card-text">Men Athleisure Graphic Hoodie</p>
          
        </div>
      </div>
</div>
<p><a href="#" class="link-dark d-flex flex-row-reverse">Explore more >></a></p>
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
                    <li class="footertitle2">Help
                        
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




    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
        </div>
      </div>

      <script>
        function redirect() {
          location.replace("https://www.youtube.com/watch?v=8FkLRUJj-o0")
        }
        </script>
        

</body>





</html>
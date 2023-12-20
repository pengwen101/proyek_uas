<?php
session_start();

$id_cust = $_SESSION['id_cust'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="icon" href="image/bnm_logo.jpg" type="./image/jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>B&M - Home</title>
    </head>
    <style>
      @font-face {
        font-family: smile;
        src: url(The\ Smile.otf);
      }

      @font-face {
        font-family: regisha;
        src: url(Regisha.otf);
      }

      @font-face {
        font-family: cinzel;
        src: url(CinzelDecorative-Regular.otf);
      }

      @keyframes animate {
        from {
          opacity: 0;
        }
        to {
          opacity: 100;
        }
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        background-image: url(image/opaque_paw.png);
        background-color: #fffaf2;
      }

      .card-title {
        margin-top: 20px;
        margin-bottom: 60px;
        font-size: 28pt;
      }

      button {
        border-radius: 5px;
        background-color: #d48b7a;
        font-family: 'Poppins', sans-serif;
        font-size: 16pt;
        color: #ffffff;
      }

      nav > div a {
        color: white;
    }

    nav > div a:hover {
        color: pink;
        transition: all 0.5s;
    }

    nav > div .signup {
        background-color: blue;
        color: #fff;
    }

    nav > div .signup:hover {
        background-color: cyan;
        color: black;
        transition: all 0.5s;
    }

    .offcanvas-title {
        font-weight: bold;
    }

    .navbar .navbar-nav .nav-link:hover {
        color: pink;
    }  

    .navbar .navbar-nav .nav-link {
    padding: 0.6em;
    font-size: 1.2em;
    }

    .navbar .navbar-brand {
    padding: 0 0.6em;
    font-size: 1.5em;
    font-weight: bold;
    }

    footer {
        background: linear-gradient(to right, #581845, #900C3F, #C70039, #FF5733, #FFC300);
        bottom: 0;
        left: 0;
        width: 100%;
        color: white;
    }

    @media only screen and (min-width: 992px) {
        .navbar {
            padding: 0;
        }
        .navbar .navbar-nav .nav-link {
            padding: 1em 0.7em;
        }
        .navbar .navbar-brand {
            padding: 0 0.8em;
        }
    }

    header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 9999;
    }

      .offcanvas-title {
        font-weight: bold;
      }

      .title {
        background: linear-gradient(to right, #D38312, #A83279);
        background-clip: text;
        font-family: regisha;
        color: transparent;
        font-size: 48pt;
        text-align: center;
      }

      .font {
        font-family: smile;
        background: linear-gradient(120deg, #C02425, #F0CB35);
        background-clip: text;
        color: transparent;
        font-size: 24pt;
        text-align: center;
      }

      .animate {
        animation: animate 1s;
      }

      .align {
        margin-top: 150px;
        text-align: left;
      }

      .founder {
        width: 117px;
        clip-path: circle();
        margin-top: 16px;
      }

      .served-head {
        font-family: 'Poppins', sans-serif;
        font-size: 25pt;
        font-weight: bolder;
        margin-left: 10px;
      }

      .served-body {
        font-family: 'Poppins', sans-serif;
        font-size: 12pt;
        color: rgb(136, 136, 136);
        margin-left: 10px;
      }

      .gotop {
        position: fixed;
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background-color: #ff7b00;
        bottom: 30px;
        right: 30px;
        text-decoration: none;
        text-align: center;
        line-height: 40px;
        color: white;
        font-size: 18pt;
        z-index: 9999;
      }

      .disc {
        background-image: linear-gradient( rgb(194, 0, 0), black);
        background-clip: text;
        color: transparent;
        font-family: cinzel;
        font-size: 30pt;
        font-weight: bolder;
        text-align: center;
        margin-top: 100px;
        margin-bottom: 40px;
      }

      .card-body {
        background: linear-gradient(120deg, #581845, #900C3F, #C70039, #FF5733, #FFC300);
        background-clip: text;
        color: transparent;
      }

      .card-footer {
        background: linear-gradient(120deg, #581845, #900C3F, #C70039, #FF5733, #FFC300);
        background-clip: text;
        color: transparent;
      }

      .hov {
        transition: 0.7s;
      }

      .hov:hover {
        background-color: rgb(242, 242, 242);
        transform: scale(1.1);
      }

      .hov1 {
        transition: 0.7s;
      }

      .hov1:hover {
        transform: scale(1.07);
      }

      .hotsale {
        transition: 0.7s;
      }

      .hotsale:hover {
        background-color: rgb(250, 162, 162);
        transform: scale(1.1);
      }

      .disc-size {
        font-size: 13pt;
      }

      .code {
        font-family: 'Poppins', sans-serif;
        font-weight: bolder;
      }
    </style>
    <body>
      <header>
        <nav class="navbar navbar-dark bg bg-dark navbar-expand-lg navbar-fixed-top">
          <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fs-4" href="home.php">Bark & Meow <i class="fa-solid fa-paw"></i></a>
            <!-- Toggle Button -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Sidebar -->
            <div class="sidebar offcanvas offcanvas-start text-white bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <!-- Sidebar Header -->
              <div class="offcanvas-header border-bottom">
                <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Bark & Meow <i class="fa-solid fa-paw"></i></h4>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <!-- Sidebar Body -->
              <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                  <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="aboutus.php">About</a>
                  </li>
                  <?php echo
                  "<li class='nav-item mx-2'>
                    <a class='nav-link' href='shop.php?id_cust=$id_cust'>Shop</a>
                  </li>"
                  ?>
                </ul>
                <!-- Login/Sign up -->
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                <?php

                echo "<a href='cart.php?id_cust=$id_cust'><i class='fa-solid fa-cart-shopping fs-5'></i></a>";

                if(isset($_SESSION['id_cust'])) {
                echo "<a href='login.php' class='signup text-decoration-none px-3 py-1 rounded-4'>Logout</a>";

                session_destroy();
                } else {
                echo "<a href='login.php' class='signup text-decoration-none px-3 py-1 rounded-4'>Login</a>";
                }

                ?>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <a href="#top" class="gotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

      <div id="top">.</div>
      <div class="align row animate">
        <div class="col-sm-6" style="margin-left: 20px;">
          <p class="title">Bark & Meow Petshop</p><br>
          <div class="font">
            <p>Your pet's happy place</p>
            <p>Bringing happiness one pet at a time</p><br>
          </div>
        </div>
        <div class="col-sm-5">
          <img src="image/dog1.png" style="width: 600px; height: 330px; margin-top: 25px;">
        </div>

        <div class="container">
          <div class="disc"><i class="fa fa-paw" aria-hidden="true"></i> HOT SALE ITEMS <i class="fa fa-paw" aria-hidden="true"></i></div>
          <div class="row">
            <div class="col-4" style="display: grid; justify-content: right;">
              <div class="card mb-3 rounded-4 hotsale" style="max-width: 12rem;">
                <div class="card-body">
                  <img src="image/portable_backpack.jpg" style="height: 170px; width: 130px; display: block; margin: 0px auto;">
                  <h4 style="color: black;">Portable Pet Bag</h4>
                </div>
                <a href="shop.php" class="card-footer bg-transparent code">View all products</a>
              </div>
            </div>
            <div class="col-4" style="display: grid; justify-content: center;">
              <div class="card mb-3 rounded-4 hotsale" style="max-width: 19rem;">
                <div class="card-body">
                  <img src="image/dog_shampoo.jpg" style="height: 170px; width: 110px; display: block; margin: 0px auto;">
                  <h4 style="color: black;">Pet Shampoo</h4>
                </div>
                <a href="shop.php" class="card-footer bg-transparent code">View all products</a>
              </div>
            </div>
            <div class="col-4" style="display: grid; justify-content: left;">
              <div class="card mb-3 rounded-4 hotsale" style="max-width: 19rem;">
                <div class="card-body">
                  <img src="image/cleaning_brush.jpg" style="height: 170px; width: 140px; display: block; margin: 0px auto;">
                  <h4 style="color: black;">Slicker Brush</h4>
                </div>
                <a href="shop.php" class="card-footer bg-transparent code">View all products</a>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container">
          <div class="disc"><i class="fa fa-tags" aria-hidden="true"></i> Upcoming New Year's Voucher Discount <i class="fa fa-tags" aria-hidden="true"></i></div>
          <div class="row">
            <div class="col-3" style="display: grid; justify-content: center;">
              <div class="card mb-3 rounded-4 hov" style="max-width: 19rem;">
                <div class="card-body">
                  <h5 class="card-title">January Kins</h5>
                  <p class="card-text disc-size">Get a special discount as big as 10% for your pets whose born at the first month of the year, January!</p>
                  <p class="card-text disc-size">* Valid for all kind of transactions!</p>
                </div>
                <div class="card-footer bg-transparent code">available for in-store purchase only</div>
              </div>
            </div>
            <div class="col-3" style="display: grid; justify-content: center;">
              <div class="card mb-3 rounded-4 hov" style="max-width: 19rem;">
                <div class="card-body">
                  <h5 class="card-title">24 M.O</h5>
                  <p class="card-text disc-size">As we celebrate the upcoming year of 2024, we will give a special discount as much as 15% for those who were turning 24 months old!</p>
                  <p class="card-text disc-size">* Valid for all kind of transactions!</p>
                </div>
                <div class="card-footer bg-transparent code">available for in-store purchase only</div>
              </div>
            </div>
            <div class="col-3" style="display: grid; justify-content: center;">
              <div class="card mb-3 rounded-4 hov" style="max-width: 19rem;">
                <div class="card-body">
                  <h5 class="card-title">B&M Newbies</h5>
                  <p class="card-text disc-size">Enjoy a special discount as much as 10% for the first visiters in the shop!</p>
                  <p class="card-text disc-size">* Valid for all kind of transactions!</p>
                </div>
                <div class="card-footer bg-transparent code">available for in-store purchase only</div>
              </div>
            </div>
            <div class="col-3" style="display: grid; justify-content: center;">
              <div class="card mb-3 rounded-4 hov" style="max-width: 19rem;">
                <div class="card-body">
                  <h5 class="card-title">Janniversary</h5>
                  <p class="card-text disc-size">Special discount for all pets who visit the petshop as much as 5%, in celebration of our 5th anniversary.</p>
                  <p class="card-text disc-size">* Valid for all kind of transactions!</p>
                </div>
                <div class="card-footer bg-transparent code">available for in-store purchase only</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-bottom: 100px; margin-top: 100px;">
          <div class="col-3" style="display: grid; justify-content: center;">
            <div class="card mb-3 hov1" style="max-width: 250px; max-height: 100px; padding: 13px 0px 15px 15px; margin-left: 45px;">
              <div class="row">
                <div class="col-3">
                  <img src="image/customer.svg" style="margin-top: 7px; margin-right: 7px;">
                </div>
                <div class="col-9">
                  <div class="card-text served-head">500+</div>
                  <div class="card-text served-body">Client Served</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3" style="display: grid; justify-content: center;">
            <div class="card mb-3 hov1" style="max-width: 250px; max-height: 100px; padding: 13px 3px 15px 15px; margin-left: 45px;">
              <div class="row">
                <div class="col-3">
                  <img src="image/animal.svg" style="margin-top: 7px; margin-right: 7px;">
                </div>
                <div class="col-9">
                  <div class="card-text served-head">700+</div>
                  <div class="card-text served-body">Animal Served</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3" style="display: grid; justify-content: center;">
            <div class="card mb-3 hov1" style="max-width: 250px; max-height: 100px; padding: 13px 0px 15px 15px; margin-left: 45px;">
              <div class="row">
                <div class="col-3">
                  <img src="image/product.svg" style="margin-top: 7px; margin-right: 7px;">
                </div>
                <div class="col-9">
                  <div class="card-text served-head">1,800+</div>
                  <div class="card-text served-body">Product Sold</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3" style="display: grid; justify-content: center;">
            <div class="card mb-3 hov1" style="max-width: 250px; max-height: 100px; padding: 13px 7px 15px 15px; margin-left: 45px;">
              <div class="row">
                <div class="col-3">
                  <img src="image/years.svg" style="margin-top: 7px; margin-right: 7px;">
                </div>
                <div class="col-9">
                  <div class="card-text served-head">4+</div>
                  <div class="card-text served-body">Combined Years</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid" style="background-color: #ffe9d0; margin-bottom: 100px;">
          <div class="row" style="margin-top: 50px; margin-left: 50px;">
            <div style="font-family: cinzel; font-size: 20pt; font-weight: bold; color: #c22d00; text-decoration: underline;">Here Our Partner Connected With Us</div>
            <div class="col-7" style="font-family: 'Poppins', sans-serif; font-weight: bolder; font-size: 40pt;">Our Trusted Partner</div>
            <div class="col-5" style="font-family: 'Poppins', sans-serif; font-size: 40pt; font-weight: bold;">Brand Partner</div>
          </div>
          <div class="row" style="margin-left: 50px;">
            <div class="col-1">
              <img src="image/opening.jpg" class="founder">
            </div>
            <div class="col-6">
              <div style="font-family: 'Poppins', sans-serif; font-weight: bolder; font-size: 30pt;">Helena Susan</div>
              <div style="font-family: 'Poppins', sans-serif; font-weight: bolder; font-size: 16pt; color: #c22d00;">Founder</div>
            </div>
            <div class="col-5" style="margin-bottom: 40px;">
              <img src="image/paypal.png" style="opacity: 40%; width: 180px; height: 110px;">
            </div>
          </div>
        </div>

        <footer class="footer-bs text-center bg-body-tertiary text-lg-start">
          <div class="container-fluid p-3">
      
            <!-- Slogan -->
            <div class="mt-3">
              <h3 class="text-center fw-bold">Want To Keep Your Pet In Our Center ?</h3>
              <center><a href="" class="btn btn-outline-light" style="margin-top: 0.2cm;">Book Now</a></center>
              <hr>
            </div>
        
      
          <!-- Informations -->
          <div class="container p-4">
            <div class="row mt-3">
              <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase fw-bold mb-4">Follow Us</h5>
                <div class="mt-4">
                  <!-- Facebook -->
                  <a class="btn btn-floating btn-light btn-lg mr"><i class="fab fa-facebook-f"></i></a>
                  <!-- Instagram -->
                  <a class="btn btn-floating btn-light btn-lg"><i class="fab fa-instagram"></i></a>
                  <!-- Twitter -->
                  <a class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
                  <!-- Google + -->
                  <a class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
                </div>
              </div>
      
              <!--Contact-->
              <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 fw-bold pb-1">Contact</h5>
                <ul class="fa-ul" style="margin-left: 1.65em;">
                  <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-solid fa-location-dot"></i></span><span class="ms-2">New York, NY 10012, US</span>
                  </li>
                  <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">barknmeow@example.com</span>
                  </li>
                  <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01 234 567 88</span>
                  </li>
                </ul>
              </div>
      
              <!--Opening Hours-->
              <div class="col-lg-4 col-md-6 mb-4 mb-md-0 table-responsive">
                <h5 class="text-uppercase fw-bold mb-4">Opening hours</h5>
        
                <table class="table text-center">
                  <tbody class="font-weight-normal">
                    <tr>
                      <td>Mon - Thu:</td>
                      <td>8am - 9pm</td>
                    </tr>
                    <tr>
                      <td>Fri - Sat:</td>
                      <td>8am - 1am</td>
                    </tr>
                    <tr>
                      <td>Sunday:</td>
                      <td>9am - 10pm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
              </div>
            </div>
          </div>
      
          <!-- Copyright -->
          <hr>
          <div class="row">
            <div class="col-md-12 text-center pt-2">
              <p>&copy; 2023 Copyright <a href="" class="text-white text-decoration-none"> Bark & Meow</a></p>
            </div>
          </div>
          </div>
        </footer>
  </body>
</html>
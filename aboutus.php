<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>B&M - About Us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="swiper-bundle.min.css"> 
        <link rel="icon" href="image/bnm_logo.jpg" type="./image/jpg">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="aboutus_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="vh-100">
      <!-- Navbar -->
      <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-fixed-top">
            <div class="container">
              <!-- Logo -->
              <a class="navbar-brand fs-4" href="#">Bark & Meow <i class="fa-solid fa-paw"></i></a>
              <!-- Toggle Button -->
              <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Sidebar -->
              <div class="sidebar offcanvas offcanvas-start text-white bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- Sidebar Header -->
                <div class="offcanvas-header border-bottom">
                  <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Bark & Meow <i class="fa-solid fa-paw"></i></h4>
                  <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- Sidebar Body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                  <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                    <li class="nav-item mx-2">
                      <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link active">About</a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                  </ul>
                  <!-- Login/Sign up -->
                  <!-- <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping fs-5"></i></a>
                    <a href="login.php" class="signup text-decoration-none px-3 py-1 rounded-4">Login</a> -->
                  </div>
                </div>
              </div>
            </div>
          </nav>
      </header>

      <div id="top">.</div>
      <a href="#top" class="gotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

      <!-- About Us Content -->
      <div class="about">
        <div class="inner-section">
          <h1>About Us</h1>
          <p class="text">
            At Bark & Meow, we are more than just a store; we are a community of pet enthusiasts dedicated to enhancing the well-being of your beloved companions. With a carefully curated selection of premium products, personalized service, and a passion for responsible pet ownership, we strive to be your go-to destination for all things pets. Discover the joy of shopping for your furry friends at Bark & Meow—where pets and their owners come first.
          </p>
          <div>
            <button class="btn btn-outline-light btn-lg">More About Us</button>
          </div>
        </div>
      </div>

      <!-- Testimonial -->
      <div class="div_testimoni">
        <center><h1 class="px-3 py-2 rounded-5">Testimonial <i class="fa-solid fa-paper-plane"></i></h1></center>
        <center><h2>Valueable Words From Customers</h2></center>
        <section class="container testimoni">
          <div class="testimoni_container swiper">
            <div class="testimoni_content">
              <div class="swiper-wrapper">
                <article class="testimoni_article swiper-slide">
                  <div class="testimoni_image">
                    <img src="image/cat smile.jpg" class="testimoni_img">
                  </div>

                  <div class="testimoni_data">
                    <h3 class="testimoni_name">Kell Dawn</h3>
                    <p class="testimoni_description">
                      The staff's knowledge is unparalleled, and they genuinely care about pets. The store is well-maintained, and the variety of products caters to all needs. 
                    </p>
                    <p>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </p>
                  </div>
                </article>
                <article class="testimoni_article swiper-slide">
                  <div class="testimoni_image">
                    <img src="image/cat jump.jpg" class="testimoni_img">
                  </div>

                  <div class="testimoni_data">
                    <h3 class="testimoni_name">Loid Fox</h3>
                    <p class="testimoni_description">
                      The staff is incredibly knowledgeable and passionate about feline and canine needs. The prices are fair, and the store's ambiance is cozy and inviting. 
                    </p>
                    <p>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </p>
                  </div>
                </article>
                <article class="testimoni_article swiper-slide">
                  <div class="testimoni_image">
                    <img src="image/catto.jpg" class="testimoni_img">
                  </div>

                  <div class="testimoni_data">
                    <h3 class="testimoni_name">Sara Mit</h3>
                    <p class="testimoni_description">
                      The store has a good selection of products, though I occasionally wish for a bit more variety. Overall, it's a solid choice for pet owners and their pets.
                    </p>
                    <p>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                    </p>
                  </div>
                </article>
                <article class="testimoni_article swiper-slide">
                  <div class="testimoni_image">
                    <img src="image/doggo.jpg" class="testimoni_img">
                  </div>

                  <div class="testimoni_data">
                    <h3 class="testimoni_name">Jenny Phoenix</h3>
                    <p class="testimoni_description">
                      The prices are reasonable but a wider range of discounts or loyalty programs would be a nice addition. Despite this, the overall experience is positive.
                    </p>
                    <p>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                    </p>
                  </div>
                </article>
                <article class="testimoni_article swiper-slide">
                  <div class="testimoni_image">
                    <img src="image/doggo hogwart.jpg" class="testimoni_img">
                  </div>

                  <div class="testimoni_data">
                    <h3 class="testimoni_name">Alexa Kane</h3>
                    <p class="testimoni_description">
                      Bark & Meow is my favorite place for pet essentials. The variety of products is excellent, and the store layout is easy to navigate. Highly recommended!
                    </p>
                    <p>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </p>
                  </div>
                </article>
                <article class="testimoni_article swiper-slide">
                  <div class="testimoni_image">
                    <img src="image/shiba.jpg" class="testimoni_img">
                  </div>

                  <div class="testimoni_data">
                    <h3 class="testimoni_name">Jack Frost</h3>
                    <p class="testimoni_description">
                      I absolutely love Bark & Meow! The staff is fantastic, always ready to offer advice and assistance. The store is clean, well-organized, and the product range is impressive.
                    </p>
                    <p>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </p>
                  </div>
                </article>
              </div>
            </div>
              <!-- Pagination -->
              <div class="swiper-pagination"></div>
          </div>
        </section>
      </div>

      <!-- Our Team -->
      <div class="div_card"> 
        <center><h1 class="px-3 py-2 rounded-5"><i class="fa-solid fa-paw"></i> Our Team <i class="fa-solid fa-paw"></i></h1></center>
        <center><h2>See Our Bark & Meow Team Members</h2></center>
      <div class="container card">
        <div class="card_container">
          <article class="card_article">
            <img src="image/helena.jpg" class="card_img">
            <div class="card_data">
              <span class="card_description">Founder</span>
              <h2 class="card_title">Helena</h2>
            </div>
          </article>
          <article class="card_article">
            <img src="image/kimberly.jpg" class="card_img">
            <div class="card_data">
              <span class="card_description">Co-Founder</span>
              <h2 class="card_title">Kimberly</h2>
            </div>
          </article>
          <article class="card_article">
            <img src="image/aiko.jpg" class="card_img">
            <div class="card_data">
              <span class="card_description">Assistant</span>
              <h2 class="card_title">Aiko</h2>
            </div>
          </article>
          <article class="card_article">
            <img src="image/amelia.png" class="card_img">
            <div class="card_data">
              <span class="card_description">Manager</span>
              <h2 class="card_title">Amelia</h2>
            </div>
          </article>
        </div>
      </div>
     </div>

      <!-- Footer -->
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
          <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase fw-bold mb-4">Follow Us</h5>
              <div class="mt-4 mb-5">
                <!-- Facebook -->
                <a class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                <!-- Instagram -->
                <a class="btn btn-floating btn-light btn-lg"><i class="fab fa-instagram"></i></a>
                <!-- Twitter -->
                <a class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
                <!-- Google + -->
                <a class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
              </div>
            </div>

            <!--Contact-->
            <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
              <h5 class="text-uppercase mb-4 fw-bold pb-1">Contact</h5>
              <ul class="fa-ul" style="margin-left: 1.65em;">
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-solid fa-location-dot"></i></span><span class="ms-2">New York, NY 10012, US</span>
                </li>
                <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">barknmeow@gmail.com</span>
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

      <script src="swiper-bundle.min.js"></script>
       <script src="aboutus_js.js"></script>
    </body>
</html>
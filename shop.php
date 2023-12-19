<?php
include 'includes/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
      .btn-circle.btn-xl {
			width: 40px;
			height: 40px;
			border-radius: 100px;
			font-size: 15px;
      font-weight: bold;
		}
          .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }

          .cart {
      overflow: hidden;
      background-color: #333;
      color: white;
      position: fixed; /* Set the navbar to fixed position */
      width: 100%; /* Full width */
      bottom:0
    }

    </style>

<script>
  $(document).ready(function(){
    $(".btn-sub").on("click", function(){
      // Get the ID attribute
      var id = $(this).attr("id");

      console.log(id);
      
      // Get the quantity element using the ID
      var qtyElement = $("#qty-" + id);

      // Get the current quantity value and decrement it
      var currentQty = parseInt(qtyElement.text());
      var newQty = currentQty - 1;

      // Limit the quantity to a minimum of 1
      newQty = Math.max(newQty, 1);

      // Set the new quantity value
      qtyElement.text(newQty);
    });

    $(".btn-add").on("click", function(){
      // Get the ID attribute
      var id = $(this).attr("id");

      console.log(id);

      // Get the quantity element using the ID
      var qtyElement = $("#qty-" + id);

      // Get the current quantity value and increment it
      var currentQty = parseInt(qtyElement.text());
      var newQty = currentQty + 1;

      // Set the new quantity value
      qtyElement.text(newQty);
    });


    $(document).on("click", ".add-to-cart", function(){
      console.log("Add to cart clicked.");
      var productId = $(this).attr("id");
      var quantity = $("#qty-" + productId).text();

      console.log(productId);
      console.log(quantity);

      // Make an AJAX request to update the cart
      $.ajax({
        url: "ajax_cart.php", // Replace with the actual path to your PHP script
        method: "POST",
        data: { productId: productId, quantity: quantity },
        success: function(response) {
          console.log(response);
          // Update the cart-qty element with the new quantity
          $("#cart-qty").text(response);
        },
        error: function() {
          console.log("Error updating cart.");
        }
      });
    });


  });
</script>

  </head>
<body>
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
                  <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- Sidebar Body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                  <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                    <li class="nav-item mx-2">
                      <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link active">About</a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                      </a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link">Shop</a>
                    </li>
                  </ul>
                  <!-- Login/Sign up -->
                  <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                    <a href=""><i class="fa-solid fa-cart-shopping fs-5"></i></a>
                    <a href="" class="signup text-decoration-none px-3 py-1 rounded-4">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
      </header>

      <div class = "container-xxl p-4 ps-5" style = "background-color: beige">
        <div class = "row align-items-center">
            <div class = "col-sm-7">
                <h1 class = "h1" style = "font-weight: bold">Wide Variety of High Quality Pet's Care Waiting For You!</h1>
            </div>
            <div class = "col-sm-5">
                <img src = "dog-shop.png" style = "width: 20rem">
            </div>
        </div>
      </div>

      <div class = "p-5">
        <h1 style = "text-align: center; font-weight: bold">Our Products</h1>
        <div class = "row m-3 shop-list" style = "box-shadow: 0px 0px 10px rgb(181, 181, 181); border-radius: 25px">
          <!--list produk ditaruh di sini-->
          <?php foreach ($shop->show_product()->fetchAll(PDO::FETCH_ASSOC) as $data): ?>
    <div class="col-sm-6 col-md-4 m-3" style="background-color: rgb(223, 223, 223); border-radius: 20px">
        <img src="<?php echo $data["img"]; ?>" class="center">
        <h5 style="text-align: center"><?php echo $data["name"]; ?></h5>
        <p><?php echo $data["dsc"]; ?></p>
        <h5><?php echo $data["price"]; ?></h5>
        <div class="row p-3">
            <div class="col-4">
                <button type="button" class="btn btn-dark btn-circle btn-xl btn-sub" id = "<?php echo $data["id"]; ?>">-</button>
            </div>
            <div class="col-4">
                <p class = "qty" id="qty-<?php echo $data["id"]; ?>">1</p>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-dark btn-circle btn-xl btn-add" id = "<?php echo $data["id"]; ?>">+</button>
            </div>
        </div>
        <button class="m-3 btn btn-dark add-to-cart" id = "<?php echo $data["id"]; ?>">Add To Cart</button>
    </div>
<?php endforeach; ?>
 
        </div>
      </div>

      <div class = "cart p-3">
        Items in your cart: 
        <div id = "cart-qty"></div>
        <button class = "btn btn-light" style = "float: right; overflow: hidden;">See my cart</button>
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
                  <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">info@example.com</span>
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
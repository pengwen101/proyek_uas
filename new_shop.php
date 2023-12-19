<?php
include 'includes/connect.php';
include 'config.php';

session_start();

echo "Welcome ".$_SESSION['user_name'];

if(isset($_POST["add-to-cart"])) {
    if (isset($_GET["cust_id"])) {
    $cust_id = $_GET["cust_id"];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_img = $_POST['product_img'];
    $qty = $_POST['quantity'];

    $select_cart = mysqli_query($con, "SELECT cart.*, product.* FROM cart INNER JOIN product ON cart.product_id = product.product_id WHERE product.product_name='$product_name") or die("Error Occured");
    // $cust_id = intval($_SESSION['USER_ID']);
    $cust_id = $_SESSION['user_id'];

    if(mysqli_num_rows($select_cart) > 0) {
        echo "Product already added to cart";
    } else {
        $insert_product = mysqli_query($con, "INSERT INTO `cart` (`cust_id`, `product_id`, `qty`) VALUES ('$cust_id', '$product_id', '$qty')");
    }
}
}

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

    .gotop {
    position: fixed;
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background-color: #ff7b00;
    bottom: 70px;
    right: 30px;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
    color: white;
    font-size: 18px;
    z-index: 9999;
}

html {
    scroll-behavior: smooth;
}

    footer {
  background: linear-gradient(to right, #581845, #900C3F, #C70039, #FF5733, #FFC300);
  bottom: 0;
  left: 0;
  width: 100%;
  color: white;
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

      <div id="top">.</div>
      <a href="#top" class="gotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

      <div class = "container-xxl p-4 ps-5" style = "background-color: beige; margin-top: 1.1cm;">
        <div class = "row align-items-center">
            <div class = "col-sm-7">
                <h1 class = "h1" style = "font-weight: bold">Wide Variety of High Quality Pet's Care Waiting For You!</h1>
            </div>
            <div class = "col-sm-5">
                <img src = "image/dog-shop.png" style = "width: 20rem">
            </div>
        </div>
      </div>

      <div class = "p-5">
        <h1 style = "text-align: center; font-weight: bold">Our Products</h1>
        <div class = "row m-3 shop-list" style = "box-shadow: 0px 0px 10px rgb(181, 181, 181); border-radius: 25px; justify-content: center;">
          <!--list produk ditaruh di sini-->
          <?php foreach ($shop->show_product()->fetchAll(PDO::FETCH_ASSOC) as $data): ?>
        <div class="col-sm-6 col-md-4 m-3" style="background-color: rgb(223, 223, 223); border-radius: 20px; display: grid; justify-content: center;">
        <img src="image/<?php echo $data["product_img"]; ?>" class="center" style="margin-bottom: 10px;">
        <h5 style="text-align: center" name="item_name"><?php echo $data["product_name"]; ?></h5>
        <center p><?php echo $data["product_dsc"]; ?></p>
        <h5 name="item_price">Rp <?php echo $data["product_price"]; ?></h5>
        <div class="row p-2">
            <div class="col-4">
                <button type="button" class="btn btn-dark btn-circle btn-xl btn-sub" id = "<?php echo $data["product_id"]; ?>">-</button>
            </div>
            <div class="col-4">
                <p class = "qty" name="quantity" id="qty-<?php echo $data["product_id"]; ?>">1</p>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-dark btn-circle btn-xl btn-add" id = "<?php echo $data["product_id"]; ?>">+</button>
            </div>
        </div>
        <button class="m-3 btn btn-dark add-to-cart" name="add-to-cart" id = "<?php echo $data["product_id"]; ?>">Add To Cart</button>
    </div>
<?php endforeach; ?>
 
        </div>
      </div>

      <div class = "cart p-3" style="z-index: 9999;">
        Items in your cart: 
        <div id = "cart-qty"></div>
        <a href="cart.php" class = "btn btn-light" style = "float: right; overflow: hidden;">See my cart</a>
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
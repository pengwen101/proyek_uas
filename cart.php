<?php 

session_start();

if (isset($_GET["id_cust"]) && !empty($_GET["id_cust"])) {
  $id_cust = $_GET["id_cust"];
} else {
  header("Location: login.php");
}

include 'includes/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>B&M - Cart</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="cart_style.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
  $(document).ready(function(){
    $(".btn-sub").on("click", function(){
      var id = $(this).attr("id");

      console.log(id);

      var qtyElement = $("#qty-" + id);

      var currentQty = parseInt(qtyElement.text());
      var newQty = currentQty - 1;

      newQty = Math.max(newQty, 1);

      qtyElement.text(newQty);
    });

    $(".btn-add").on("click", function(){
      var id = $(this).attr("id");

      console.log(id);

      var qtyElement = $("#qty-" + id);

      var currentQty = parseInt(qtyElement.text());
      var newQty = currentQty + 1;

      qtyElement.text(newQty);
    });


    $(document).on("click", ".add-to-cart", function(){
      console.log("Add to cart clicked.");
      var productId = $(this).attr("id");
      var quantity = $("#qty-" + productId).text();

      console.log(productId);
      console.log(quantity);

      $.ajax({
        url: "ajax_cart.php",
        method: "POST",
        data: { productId: productId, quantity: quantity },
        success: function(response) {
          console.log(response);
          $("#cart-qty").text(response);
        },
        error: function() {
          console.log("Error updating cart.");
        }
      });
    });

    $(".btn-update").on("click", function(){
      var productId = $(this).attr("id");
      var quantity = $("#qty-" + productId).text();

      $.ajax({
        url: "ajax_update.php",
        method: "POST",
        data: { productId: productId, quantity: quantity },
        success: function(response) {
          alert("jumlah berhasil diupdate")
        },
        error: function() {
          console.log("Error updating cart.");
        }
      });
    });

    $(".btn-del").on("click", function(){
      var cartId = $(this).attr("id");

      console.log(cartId);

      $.ajax({
        url: "ajax_del.php",
        method: "POST",
        data: { cartId: cartId },
        success: function(response) {
          alert("Produk berhasil dihapus.");
        },
        error: function() {
          console.log("Error deleting cart.");
        }
      });
    });

  });
</script>
    </head>
    <body class="vh-100">
      <!-- Navbar -->
      <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-fixed-top">
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
                      <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link" href="aboutus.php">About</a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                  </ul>
                  <!-- Login/Sign up -->
                  <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                    <a href=""><i class="fa-solid fa-cart-shopping fs-5"></i></a>
                    <a href="login.php" class="signup text-decoration-none px-3 py-1 rounded-4">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
      </header>

      <div class="cart-section" style="margin-top: 3cm;">
        <center class="mb-4"><h1>Your Shopping Cart <i class="fa-solid fa-cart-shopping"></i></h1></center>
        <div class="container">
          <form action="" method="post">
            <div class="row">
              <div class="col-12">
                <div class="table-wrapper">
                  <table class="eg-table table table-bordered cart-table" style="margin-bottom: 3cm;">
                    <thead class="table-dark">
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Subtotal</th>
                          <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

<?php foreach ($shop->show_cart([$id_cust])->fetchAll(PDO::FETCH_ASSOC) as $data): ?>
  <tr>
    <td><img src="image/<?php echo $data["img"]; ?>" class="center"></td>
    <td><h5 style="text-align: center"><?php echo $data["name"]; ?></h5></td>
    <td><p><?php echo $data["price"]; ?></p></td>
    <td>
    <div class="row p-3">
            <div class="col-4">
                <button type="button" class="btn btn-dark btn-circle btn-xl btn-sub" id = "<?php echo $data["id"]; ?>">-</button>
            </div>
            <div class="col-4">
                <p class = "qty" id="qty-<?php echo $data["id"]; ?>"><?php echo $data["qty"]; ?></p>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-dark btn-circle btn-xl btn-add" id = "<?php echo $data["id"]; ?>">+</button>
            </div>
        </div>
        <button class="m-3 btn btn-primary btn-update" id = "<?php echo $data["id"]; ?>">Update</button></td>
    </td>
    <td><?php echo $data["price"] * $data["qty"];?></td>
    <td><button class="m-3 btn btn-danger btn-del" id = "<?php echo $data["cart_id"]; ?>">Delete</button></td>
  </tr>
<?php endforeach; ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        
            <div class="row g-4" style="margin-bottom: 2cm;">
              <div class="col-lg-8 table-responsive">
                <div class="coupon-area" style="margin-bottom: 1cm;">
                  <div class="cart-coupon-input">
                    <h5 class="coupon-title">Total Payment

                        <?php 
                        $totalPayment = $shop->calculate_total([$id_cust]);
                        echo $totalPayment;
                        ?>
                    </h5>
                  </div>
                <div class="cart-btn-group">
                    <a href="shop.php" class="btn btn-secondary btn-lg" style="margin-right: 15px;">Continue Shopping</a>
                    <?php echo
                    "<a href='paypal_standard_checkout_php/payment.php?totalPayment=$totalPayment' class='btn btn-primary btn-lg'>Proceed to Checkout</a>"
                    ?>
                </div>
              </div>
            </div>
          </form>
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
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>B&M - Sign Up</title>
        <link rel="stylesheet" href="signup_style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="image/bnm_logo.jpg" type="./image/jpg">
    </head>
    <body>
        <?php
        include("config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone_num = $_POST['phone_num'];
            $password = $_POST['password'];
            $confirmpw = $_POST['confirmpw'];

            $verify_email = mysqli_query($con, "SELECT email FROM customer WHERE email='$email'");
            $verify_username = mysqli_query($con, "SELECT username FROM customer WHERE username='$username'");

            if(mysqli_num_rows($verify_email) != 0){
                echo "<div class='wrapper'>
                        <p>This email is used. Try another one please!</p><br>
                        <a href='javascript:self.history.back()'><button class='btn'>Back</button>
                      </div>";
            } else if(mysqli_num_rows($verify_username) != 0){
                echo "<div class='wrapper'>
                        <p>This username is used. Try another one please!</p><br>
                        <a href='javascript:self.history.back()'><button class='btn'>Back</button>
                      </div>";
            } else if($confirmpw != $password) {
                echo "<div class='wrapper'>
                        <p>Passwords do not match. Please try again.</p><br>
                        <a href='javascript:self.history.back()'><button class='btn'>Back</button>
                      </div>";
            } else {
                mysqli_query($con, "INSERT INTO customer(username,email,address,phone_num,password) VALUES('$username','$email','$address','$phone_num','$password')") or die("Error Occurred");

                echo "<div class='wrapper' tabindex='-1'>
                        <div class='wrapper-content'>
                            <div class='wrapper-body'>
                            <p>Registration success 🥳</p>
                            </div>
                        </div><br>
                        <a href='login.php'><button class='btn'>Login Now</button>
                    </div>";
            }
        } else {
        ?>
        <div class="wrapper">
            <form action="" method="post">
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" autocomplete="off" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" autocomplete="off" required>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Address" name="address" autocomplete="off" required>
                    <i class='bx bxs-home'></i>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Phone Number" name="phone_num" autocomplete="off" required>
                    <i class='bx bxs-phone'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" minlength="8" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Confirm Password" name="confirmpw" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn" name="submit">Sign Up</button>

                <div class="register-link">
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
        <?php } ?>
    </body>
</html>



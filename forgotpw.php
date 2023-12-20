<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>B&M - Forgot Password</title>
        <link rel="stylesheet" href="signup_style.css">
        <link rel="stylesheet" href="assets/css/datepicker.min.css">
        <link rel="icon" href="image/bnm_logo.jpg" type="./image/jpg">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <?php
        include("config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmpw = $_POST['confirmpw'];

            $verify_email = mysqli_query($con, "SELECT email FROM customer WHERE email='$email'");
            $verify_username = mysqli_query($con, "SELECT username FROM customer WHERE username='$username'");

            if(mysqli_num_rows($verify_email) == 0){
                echo "<div class='wrapper'>
                        <p>Incorrect Email</p><br>
                        <a href='javascript:self.history.back()'><button class='btn'>Back</button>
                      </div>";
            } else if(mysqli_num_rows($verify_username) == 0){
                echo "<div class='wrapper'>
                        <p>Incorrect Username</p><br>
                        <a href='javascript:self.history.back()'><button class='btn'>Back</button>
                      </div>";
            } else if($confirmpw != $password) {
                echo "<div class='wrapper'>
                        <p>Passwords do not match. Please try again.</p><br>
                        <a href='javascript:self.history.back()'><button class='btn'>Back</button>
                      </div>";
            } else {
                mysqli_query($con, "UPDATE customer SET password='$password' WHERE email='$email'") or die("Error Occurred");
                echo "<div class='wrapper' tabindex='-1'>
                        <div class='wrapper-content'>
                            <div class='wrapper-body'>
                            <p>Password changed 🥳</p>
                            </div>
                        </div><br>
                        <a href='login.php'><button class='btn'>Login Now</button>
                    </div>";
            }
        } else {
        ?>
        <div class="wrapper">
            <form action="" method="post">
                <h1>Forgot Password</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" autocomplete="off" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" autocomplete="off" required>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="New Password" name="password" minlength="8" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Confirm Password" name="confirmpw" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div>
                    <button type="submit" class="btn" name="submit">Change Password</button>
                </div>

                <div class="register-link">
                    <p><a href="login.php">Back to Login</i></a></p>
                </div>
            </form>
        </div>
        <?php } ?>
    </body>
</html>



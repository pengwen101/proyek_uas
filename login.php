<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bark and Meow - Login</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
    <?php
        include("config.php");
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $password = mysqli_real_escape_string($con,$_POST['password']);

            $result = mysqli_query($con,"SELECT * FROM customer WHERE username='$username' AND password='$password'") or die("Select error");
            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)){
                $_SESSION['valid'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['birth_date'] = $row['birth_date'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['phone_num'] = $row['phone_num'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id_cust'] = $row['id_cust'];
            } else {
                echo "<div class='message'>
                    <p>Incorrect Username or Password</p><br>
                    <a href='login.php'><button class='btn'>Back</button>
                </div>";
            }

            if(isset($_SESSION['valid'])){
                if(isset($_POST['remember_me'])){
                    setcookie('username',$_POST['username'],time() + (60*60*24));
                    setcookie('email',$_POST['email'],time() + (60*60*24));
                }
                header("Location: home.php");
            } 
        } else {
    ?>
        <div class="wrapper">
            <form action="" method="post">
                <h1 class="font">Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" id="username" name="username" autocomplete="off" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" id="password" name="password" autocomplete="off" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember_me">Remember me</label>
                    <a href="forgotpw.php">Forgot password?</a>
                </div>

                <button type="submit" class="btn" id="submit" name="submit">Login</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                </div>
            </form>
        </div>
        <?php } ?>
    </body>
</html>
<?php

include('partials/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/login-style.css">
</head>

<body>

<div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome Back</h1>
                    <p class="sub-para">Please Collect your credentials from President of the club</p>
                    <h2>Log In</h2>
                    <form action="partials/login_handler.php" method="POST">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <!-- <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div> -->
                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    </form>
                
                    <p class="account">Don't have an account? <a href="registration.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- <section classs="card">
        <form  action="partials/login_handler.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Log In</button>
        </form>
    </section> -->
</body>

</html>
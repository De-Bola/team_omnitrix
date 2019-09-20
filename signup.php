<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign Up</title>
</head>

<header class="header">
    <div class="logo">
        <img class="logo"
            src="https://res.cloudinary.com/hng-pre-internship/image/upload/v1568738419/Signup/Group_3_wtbfzg.png"
            alt="logo">
    </div>
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon"> <span class="nav-icon"></span></label>
</header>

<body>
    <div class="container" id="container">
        <div class="inner-container grid">
            <div class="form-img-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1568738420/Signup/Group_6_z8a0hm.jpg
" alt="">
            </div>

            <div class="form-wrapper">
                <h1 class="lead">Create Account</h1>
                <form method="post" action="registration.php">
                    <div class="form-grid">
                        <div class="form-grid1">
                            <label for="username">
                                <input type="text" name="username" id="username input" placeholder="Username">
                                <i class="far fa-user"></i>
                            </label>

                            <label for="email">
                                <input type="email" name="email" id="email input" placeholder="Email">
                                <i class="far fa-envelope"></i>
                            </label>

                            <label for="password">
                                <input type="password" name="apassword" id="password input" placeholder="Password">
                                <i class="fas fa-lock"></i>
                            </label>
                        </div>
                        <div class="form-grid2">
                            <label for="name">
                                <input type="text" name="fullname" id="name input" placeholder="Full Name">
                                <i class="far fa-user"></i>
                            </label>

                            <label for="tel">
                                <input type="tel" name="mobileno" id="tel input" placeholder="Mobile Number">
                                <i class="fas fa-phone-square"></i>
                            </label>

                            <label for="con-password">
                                <input type="password" name="cpassword" id="con-password" input"
                                    placeholder="Confirm Password">
                                <i class="fas fa-lock"></i>
                            </label>
                        </div>
                    </div>
                    <div class="flex-btn">
                        <div class="signup">
                            <label for="signup">
                                <button type="submit" name="signup" id="signup">Sign Up</button>
                                <i class="fas fa-sign-in-alt"></i>
                            </label>

                        </div>
                    </div>
                </form>
                <div id="prompt">
                    <p>Have an account?<a class="forgot" href="index.php">Login</a></p>
                </div>
            </div>
        </div>
        <footer>&copy2019 <span class="blue">Team Omnitrix.</span> All Rights Reserved.</footer>
    </div>
    <script src="js/signup.js"></script>
</body>

</html>

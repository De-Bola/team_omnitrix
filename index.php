<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Login</title>
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
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1568934415/login%20page/desktop_hz404i.png
" alt="">
            </div>

            <div class="form-wrapper">
                <h1 class="lead">Welcome Back</h1>
                <span style="font-size:25px;"><?php echo $err ?></span>
                <form method="POST" action="validation.php">
                    <div class="form-grid">
                        <div class="form-grid1">
                            <label for="username">
                                <input type="text" name="username" id="username input" placeholder="Username">
                                <i class="far fa-user"></i>
                            </label>

                            <label for="password">
                                <input type="password" name="password" id="password input" placeholder="Password">
                                <i class="fas fa-lock"></i>
                            </label>
                        </div>
                    </div>
                    <div class="flex-btn">
                        <div class="login">
                            <label for="login">
                                <button type="submit" name="login" id="login">LOGIN</button>
                                <i class="fas fa-sign-in-alt"></i>
                            </label>

                        </div>
                </form>
                <div id="prompt">
                    <p>New to Omnitrix?<a class="forgot" href="signup.php">Sign Up</a></p>
                </div>
            </div>
            <!--THIS BUTTON IS JUST FOR DEMO. DELETE IT BEFORE SUBMISSION
            <a href="landing.html">Demo Link to Welcome Page</a>
            THIS BUTTON IS JUST FOR DEMO. DELETE IT BEFORE SUBMISSION END-->
        </div>
    </div>
    <footer>&copy2019 <span class="blue">Team Omnitrix.</span> All Rights Reserved.</footer>
    </div>
    <script src="js/main.js"></script>

</body>

</html>

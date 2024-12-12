<?php 
//include function page
include_once('library/functions/userFunction.php');

if(isset($_POST['btnbutton'])){
    $result = Authentication($_POST['UserEmail'],$_POST['UserPassword']);
    echo($result);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/weather.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body style="background:#87CEEB;">

    <!-- ----------------nav bar----------------- -->
    <div class="container-fluid" style="background:#4682B4;">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 navbar">
        <div class="col-md-3 mb-2 mb-md-0">
            <img src="Resources/Images/logo.png" alt="Logo_image" width="100" height="50">    
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn me-2" data-bs-toggle="modal" data-bs-target="#modalSignin" style="background-color: #87CEEB; color: white; border: none; width: 100px; height: 50px;">
                Login
            </button>
        </div>
        </header>
    </div>

    
    <!-- --------------Sign In Modal-------------- -->

    <div class="modal fade" id="modalSignin" tabindex="-1" aria-labelledby="modalSigninLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <!-- Video Background
            <video autoplay muted loop id="modalVideoBackground" class="modal-video">
                <source src="images/modal.mp4" type="video/mp4">
            </video> -->

        <div class="modal-header p-5 pb-4 border-bottom-0">
            <h1 class="fw-bold mb-0 fs-2" id="modalSigninLabel">Sign In</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5 pt-0">
            <form action=""method="post">
            <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" name="UserEmail" id="UserEmail" placeholder="name@example.com">
                <label for="usermail" >Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3"  name="UserPassword" id="UserPassword" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" name = "btnbutton"  type="submit">Sign In</button>
            <small class="text-body-secondary ">By clicking Sign Up, you agree to the terms of use.</small>
            <hr class="my-4">
            <div class="login-register">
                <p>Don't have an account? <a href="#" class="register-link" data-bs-toggle="modal" data-bs-target="#modalSignup" data-bs-dismiss="modal">Sign up</a></p>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>

    <!-- --------------Sign Up Modal-------------- -->

    <div class="modal fade" id="modalSignup" tabindex="-1" aria-labelledby="modalSignupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2" id="modalSignupLabel">Create Your Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pt-0">
                <form action="library/routes/user/registration.php"method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="UserName" id="UserName" placeholder="Saman kumara">
                    <label for="signupEmail">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="UserNIC" id="UserNIC" placeholder="200402100275">
                    <label for="signupEmail">Identify Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="UserMobile" id="UserMobile" placeholder="075-9822176">
                    <label for="signupEmail">Mobile Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-3" name="UserEmail" id="UserEmail" placeholder="name@example.com">
                    <label for="signupEmail">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3"  name="UserPassword" id="UserPassword" placeholder="#hs*hsna82bd/2">
                    <label for="signupPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign Up</button>
                <hr class="my-4">
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="register-link" data-bs-toggle="modal" data-bs-target="#modalSignin" data-bs-dismiss="modal">Sign in</a></p>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">

    </div>
    
    <script src="css/weather.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

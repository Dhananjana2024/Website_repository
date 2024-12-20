<?php 
//include function page
include_once('library/functions/adminFunction.php');

if(isset($_POST['btnbutton'])){
    $result = Authentication($_POST['adminEmail'],$_POST['adminPass']);
    echo($result);
}

?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkyZone-Admin</title>
    <link rel="stylesheet" href="css/adminLR.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    /* Slide-out effect */
    .slide-out-left {
        transform: translateX(-100%);
        transition: transform 0.5s ease;
    }

    .slide-out-right {
        transform: translateX(100%);
        transition: transform 0.5s ease;
    }

    /* Slide-in effect */
    .slide-in-left {
        transform: translateX(0);
        transition: transform 0.5s ease;
    }

    .slide-in-right {
        transform: translateX(0);
        transition: transform 0.5s ease;
    }

    /* Hide the signup section initially */
    #signup-section {
        display: none;
    }

    /* Add initial state for both sections */
    #login-section, #signup-section {
        transition: transform 0.5s ease;
    }
    </style>
</head>
  <body style="background-color: #87CEEB;">


    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 " style="background-color:#4682B4;">
      <div class="container-fluid ">
        <a class="navbar-brand" href="index.php">
            <img src="images/Logo/logo.png" alt="Logo" width="100" height="60 "  style="display: block; margin: auto;">
        </a>
      </div>
    </header>

  
    
    <section id="login-section" class="h-100 gradient-form login" style="background-color:87CEEB;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100" style="border-radius: 25px;">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black" style="border-radius: 25px;">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="images/Logo/logo.png" style="width: 185px;" alt="logo">
                                    <h4 class="mt-3 mb-3 pb-1">Team@Sky<span style="color: rgb(255, 208, 0);">Z</span>one</h4>
                                </div>

                                <form  action="" method="POST">
                                    <small class="text-body-secondary pb-2" style="display: block; text-align: center;">Please use your Admin Username & Password</small>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Admin E-mail</label>
                                        <input type="email" name="adminEmail" id="adminEmail" class="form-control" placeholder="adminUser@gmail.com" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Password</label>
                                        <input type="password" name="adminPass" id="adminPass" class="form-control" placeholder="#Password" />
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Don't have an account?</p>
                                        <a href="#" class="register-link" id="show-signup">Sign In</a>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                    <button type="submit" name="btnbutton" class="btn" style="width: 40%; height: 50%; border-radius: 25px; background-color: rgb(255, 208, 0); color:white;">Login</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a Website <br> - Team@Sky<span style="color: rgb(255, 208, 0);">Z</span>one -</h4>
                                <p class="small mb-0">"Welcome,  As the guiding force behind this platform, your role is pivotal in delivering accurate weather insights and location-based services to users worldwide. By logging in, you unlock the tools to manage and enhance the system, ensuring it remains reliable, intuitive, and impactful. Every action you take here contributes to empowering users with information they need to make informed decisions, stay prepared, and explore with confidence. Let's work together to build a better connected, weather-smart world."</p>
                                <small class="text pb-2 pt-5" style="display: block; text-align: center; color: white;"> - Team@Sky<span style="color: rgb(255, 208, 0);">Z</span>one -</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="signup-section" class="h-100 Register" style="background-color:87CEEB; display: none;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100" style="border-radius: 25px;">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black" style="border-radius: 25px;">
                    <div class="row g-0">
                        <div class="col-lg-6 d-flex align-items-center FullCard">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Welcome to Admin Registretion   <br> - Team@Sky<span style="color: rgb(255, 208, 0);">Z</span>one -</h4>
                                <p class="small mb-0">"By registering, you become the key to providing users with reliable weather insights and location-based services. Your role empowers individuals to make informed decisions and stay prepared. Together, let's build a smarter, more connected world."</p>
                                <small class="text pb-2 pt-5" style="display: block; text-align: center; color: white;"> - Team@Sky<span style="color: rgb(255, 208, 0);">Z</span>one -</small>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="images/Logo/logo.png" style="width: 185px;" alt="logo">
                                    <h4 class="mt-3 mb-3 pb-1">Team@Sky<span style="color: rgb(255, 208, 0);">Z</span>one</h4>
                                </div>

                                <form method="POST" action="library/routes/admin/registration.php">
                                    <small class="text-body-secondary pb-2" style="display: block; text-align: center;">Please enter your Admin Detail's</small>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Admin Username</label>
                                        <input type="text" name="adminName" id="adminName" class="form-control" placeholder="username" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Admin Reg.no</label>
                                        <input type="text" name="adminReg" id="adminReg" class="form-control" placeholder="Admin@12345" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Mobile Number</label>
                                        <input type="text" name="adminMobile" id="adminMobile" class="form-control" placeholder="+94 75 123 1234 " />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Admin E-mail</label>
                                        <input type="email" name="adminEmail" id="adminEmail" class="form-control" placeholder="adminUser@gmail.com" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Password</label>
                                        <input type="password" name="adminPass" id="adminPass" class="form-control" placeholder="#Password" />
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Already have an account?</p>
                                        <a href="#" class="register-link" id="show-login">Sign in</a>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                    <button type="submit" name="btnbutton" class="btn" style="width: 40%; height: 50%; border-radius: 25px; background-color: rgb(255, 208, 0); color:white;">Login</button>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
   // Function to reset the classes after the transition
function resetSlideClasses() {
    document.getElementById('login-section').classList.remove('slide-out-left', 'slide-in-left');
    document.getElementById('signup-section').classList.remove('slide-out-right', 'slide-in-right');
}

// Show signup section with sliding effect and hide login section
document.getElementById('show-signup').addEventListener('click', function(e) {
    e.preventDefault();
    
    // Add classes to trigger the sliding effect
    document.getElementById('login-section').classList.add('slide-out-left');
    
    // Wait for slide-out to complete, then show signup section
    setTimeout(function() {
        document.getElementById('login-section').style.display = 'none'; // Hide login section
        document.getElementById('signup-section').style.display = 'block'; // Show signup section
        document.getElementById('signup-section').classList.add('slide-in-right'); // Add slide-in-right class

        // Reset the classes for future transitions
        resetSlideClasses();
    }, 500); // Wait for 500ms for sliding out
});

// Show login section with sliding effect and hide signup section
document.getElementById('show-login').addEventListener('click', function(e) {
    e.preventDefault();

    // Add classes to trigger the sliding effect
    document.getElementById('signup-section').classList.add('slide-out-right');

    // Wait for slide-out to complete, then show login section
    setTimeout(function() {
        document.getElementById('signup-section').style.display = 'none'; // Hide signup section
        document.getElementById('login-section').style.display = 'block'; // Show login section
        document.getElementById('login-section').classList.add('slide-in-left'); // Add slide-in-left class

        // Reset the classes for future transitions
        resetSlideClasses();
    }, 500); // Wait for 500ms for sliding out
});

</script>







    

    <footer class="my-2 pt-5 text-center text-small">
        <p class="mb-1">© 2024 SkyZone Weather and Location-based Services</p>
        <ul class="list-inline">
            <li class="list-inline-item " ><a href="#" style="color:black;">Privacy</a></li>
            <li class="list-inline-item " ><a href="#" style="color:black;">Terms</a></li>
            <li class="list-inline-item " ><a href="#" style="color:black;">Support</a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

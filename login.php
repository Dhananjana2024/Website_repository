<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/log.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
</head>

<body>

    <!-- ------------------------Navbar section--------------------- -->
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">contact</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class='bx bx-search'></i>  </button>
        </form>
    </header>



     <!-- ------------------------BAckgroun video section--------------------- -->
    <div class="background">
        <video src="Resources\video\loginBvideo.mp4" autoplay muted loop></video>
    </div>

    <!-- ------------------------login page conetent section--------------------- -->
    <div class="container">
        <video src="Resources\video\loginBvideo.mp4" autoplay muted loop></video>
    </div>


   
    <div class="container">
        <div class="content"> 
            <h2 class="logo"> <i class='bx bxl-google-cloud' ></i> SkyZone</h2>

            <div class="text-in-content">
                <h2>Welcome!<br><span>To SkyZone Weather And Location Based Services</span></h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, sapiente.</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                </div>
            </div>
        </div>

        <!-- ------------------------Content section--------------------- -->
        <div class="login-box">

            <!-- ---------login Section--------- -->
            <div class="form-box login">
                <form action="#">
                    <h2>Sign In</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <input type="email" name="" id="" required>
                        <label> E-mail</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="" id="" required>
                        <label> Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox" name="#" id="#">Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn">Sign in</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign up</a></p>
                    </div>
                </form>
            </div>           

            <!-- ---------Register Section--------- -->
            <div class="form-box register">
                <form action="#">
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user' ></i></span>
                        <input type="text" name="" id="" required>
                        <label> Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <input type="email" name="" id="" required>
                        <label> E-mail</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-phone' ></i></span>
                        <input type="text" name="" id="" required>
                        <label> Mobile Number</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="" id="" required>
                        <label> Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox" name="#" id="#">I agree to the terms & conditions</label>
                    </div>

                    <button type="submit" class="btn">Sign Up</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Sign in</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>



    <script src="Js/script.js"></script>
</body>
</html>


            
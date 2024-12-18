<?php 
//include function page
include_once('library/functions/userFunction.php');

if(isset($_POST['btnbutton'])){
    $result = Authentication($_POST['UserEmail'],$_POST['UserPassword']);
    echo($result);
}

?>

<?php include 'partails/Index/header.php';?>
<?php include 'partails/Index/navbar.php';?>

    
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

    

    



<?php include 'partails/Index/footer.php';?>
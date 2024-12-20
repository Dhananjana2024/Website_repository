<?php
//include database connection
include_once("db.php");

//create userRegistration function

function userRegistration($adminName,$adminEmail,$adminPass,$adminMobile,$adminReg){
    //create database connection
    $db_conn = Connection();
    //data insert query
    $insertSql = "INSERT INTO admin_tble(admin_name,admin_email,admin_mobile,admin_nic,admin_status)
    VALUES ('$adminName','$adminEmail','$adminMobile','$adminReg',1);";

    $sqlResult = mysqli_query($db_conn,$insertSql);

    //check database connection errors
    if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    //if the registration result is success we can feed data into the login table also
    if($sqlResult > 0) {
    //use MD5 method to our password
    $newPassword = md5($adminPass);

    $insertlogin = "INSERT INTO adminlogin_table(adminlogin_email,adminlogin_password,adminlogin_role,adminlogin_status)
    VALUES ('$adminEmail','$newPassword','admin',1);";

    $loginResult = mysqli_query($db_conn, $insertlogin);

    //check database connection errors
    if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    echo"<script>
    alert('Your Registration Success!');
    window.location.href = '../../../admin.php';
    </script>";
    
}else{
    echo"<script>
    alert('Please Try Again!!');
    </script>";
}

}

//login function
function Authentication($adminName, $adminPass) {
  // Call database connection
  $db_conn = Connection();
  $sqlFetchUser = "SELECT * FROM adminlogin_table WHERE adminlogin_email = '$adminName';";
  $sqlResult = mysqli_query($db_conn, $sqlFetchUser);

  // Check for connection errors
  if (mysqli_connect_errno()) {                
      echo(mysqli_connect_error());
  }  

  // Convert user password into a hash value
  $newpassword = md5($adminPass);

  // Check the number of rows
  $norows = mysqli_num_rows($sqlResult);

  // Validating the number of records > 0 or not
  if ($norows > 0) {
      // Fetch the user records
      $rec = mysqli_fetch_assoc($sqlResult);

      // Validate the password
      if ($rec['adminlogin_password'] == $newpassword) {
          // Validate the user login status
          if ($rec['adminlogin_status'] == 1) {
              session_start();
              
              // Fetch user details
              $sqlFetchUserDetails = "SELECT * FROM admin_tble WHERE admin_email = '$adminName';";
              $userDetailsResult = mysqli_query($db_conn, $sqlFetchUserDetails);
              $userDetails = mysqli_fetch_assoc($userDetailsResult);

              // Store user details in session
              $_SESSION['user'] = $userDetails;

              // Redirect user based on role
              if ($rec['adminlogin_role'] == "admin") {
                  header("location:library/views/dashboards/admin.php");
              } else {
                  header("location:library/views/dashboards/user.php");
              }
          } else {
            echo"<script>
            alert('Your Account Has Been Deactivated.!');
            </script>";
          }
      } else {
        echo"<script>
        alert('Your Password Is Incorrect! Please Try Again.!');
        </script>";
      }
  } else {
    echo "<script>
    alert('No Records Found');
    </script>";
  }
}

?>
<?php
//include database connection
include_once("db_corn.php");

//create userRegistration function

function userRegistration($userName,$userEmail,$userPassword,$userMobile,$userNIC){
    //create database connection
    $db_conn = Connection();
    //data insert query
    $insertSql = "INSERT INTO user_table(user_name,user_email,user_mobile,user_nic,user_status)
    VALUES ('$userName','$userEmail','$userMobile','$userNIC',1);";

    $sqlResult = mysqli_query($db_conn,$insertSql);

    //check database connection errors
    if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    //if the registration result is success we can feed data into the login table also
    if($sqlResult > 0) {
    //use MD5 method to our password
    $newPassword = md5($userPassword);

    $insertlogin = "INSERT INTO login_table(login_email,login_password,login_role,login_status)
    VALUES ('$userEmail','$newPassword','user',1);";

    $loginResult = mysqli_query($db_conn, $insertlogin);

    //check database connection errors
    if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    echo"<script>
    alert('Your Registration Success!');
    window.location.href = '../../../index.php';
    </script>";
    
}else{
    return("Please Try Again!");
}

}

//login function
function Authentication($UserName, $UserPassword) {
  // Call database connection
  $db_conn = Connection();
  $sqlFetchUser = "SELECT * FROM login_table WHERE login_email = '$UserName';";
  $sqlResult = mysqli_query($db_conn, $sqlFetchUser);

  // Check for connection errors
  if (mysqli_connect_errno()) {                
      echo(mysqli_connect_error());
  }  

  // Convert user password into a hash value
  $newpassword = md5($UserPassword);

  // Check the number of rows
  $norows = mysqli_num_rows($sqlResult);

  // Validating the number of records > 0 or not
  if ($norows > 0) {
      // Fetch the user records
      $rec = mysqli_fetch_assoc($sqlResult);

      // Validate the password
      if ($rec['login_password'] == $newpassword) {
          // Validate the user login status
          if ($rec['login_status'] == 1) {
              session_start();
              
              // Fetch user details
              $sqlFetchUserDetails = "SELECT * FROM user_table WHERE user_email = '$UserName';";
              $userDetailsResult = mysqli_query($db_conn, $sqlFetchUserDetails);
              $userDetails = mysqli_fetch_assoc($userDetailsResult);

              // Store user details in session
              $_SESSION['user'] = $userDetails;

              // Redirect user based on role
              if ($rec['login_role'] == "admin") {
                  header("location:library/views/dashboards/admin.php");
              } else {
                  header("location:library/views/dashboards/user.php");
              }
          } else {
              return "Your Account Has Been Deactivated";
          }
      } else {
          return "Your Password Is Incorrect! Please Try Again";
      }
  } else {
    echo "<script>
    alert('No Records Found');
    </script>";
  }
}



//Update function
function updateUser($userId, $userName, $userEmail, $userMobile, $userNIC) {
    $db_conn = Connection();
    
    $updateSql = "UPDATE user_table SET 
                    user_name = '$userName',
                    user_email = '$userEmail',
                    user_mobile = '$userMobile',
                    user_nic = '$userNIC'
                  WHERE id = $userId;";
    $result = mysqli_query($db_conn, $updateSql);

    if ($result) {
        return "User Updated Successfully!";
    } else {
        return "Error Updating User: " . mysqli_error($db_conn);
    }
}


//Delete function
function deleteUser($userId) {
    $db_conn = Connection();
    
    $deleteSql = "DELETE FROM user_table WHERE id = $userId;";
    $result = mysqli_query($db_conn, $deleteSql);

    if ($result) {
        return "User Deleted Successfully!";
    } else {
        return "Error Deleting User: " . mysqli_error($db_conn);
    }
}






?>
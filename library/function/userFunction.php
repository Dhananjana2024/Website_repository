<?php
//include database connection
include_once("db_corn.php");

//create userRegistration function

function userRegistration($UserName,$UserPass,$userEmail,$userMobile){
    //create database connection
    $db_conn = Connection();
    //data insert query
    $insertSql = "INSERT INTO user_table(user_name,user_email,user_mobile)
    VALUES ('$UserName','$userEmail','$userMobile');";

    $sqlResult = mysqli_query($db_conn,$insertSql);

    //check database connection errors
    if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    //if the registration result is success we can feed data into the login table also
    if($sqlResult > 0) {
    //use MD5 method to our password
    $newPassword = md5($UserPass);

    $insertlogin = "INSERT INTO login_table(login_email,login_password,login_role,login_status)
    VALUES ('$userEmail','$newPassword','user',1);";

    $loginResult = mysqli_query($db_conn, $insertlogin);

    //check database connection errors
    if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    return("Your Registration Success!");

}else{
    return("Please Try Again!");
}

}

//login function
function Authentication($UserName,$UserPass){
    //call database connection
    $db_conn = Connection();
    $sqlFetchUser = "SELECT * FROM login_table WHERE login_email = '$UserName';";
    $sqlResult = mysqli_query($db_conn,$sqlFetchUser);

   //check database connection errors
   if(mysqli_connect_errno()){                
    echo(mysqli_connect_error());
}  
   //convert user password into a hash value
   $newpassword = MD5($UserPass);

   //check the number of the rows
   $norows = mysqli_num_rows($sqlResult);

   //validating the number of records > 0 or not
   if($norows > 0){
     //fatch the user records
     $rec = mysqli_fetch_assoc($sqlResult);

     //validate the password
     if($rec['login_password'] == $newpassword){
        //validate the user login status
        if($rec['login_status'] == 1){
          if($rec['login_role']== "admin"){
            //redirect this user into the admin dashboard
            header("location:library/views/dashboards/admin.php");
          }else{
            //redirect this user into the user dashboard
            header("location:library/views/dashboards/user.php");
          }
        }else{
            return("Your Accout Has Been Diactivated");
        }
     }else{
        return("Your Password Is Not Correct! Please Try Again");
     }
   }else{
    return("No Recods Are Found");
   }
    
}




?>
<?php
include_once('../../functions/userFunction.php');

if (isset($_POST['updateUser'])) {
    $userId = $_POST['UserId'];
    $userName = $_POST['UserName'];
    $userEmail = $_POST['UserEmail'];
    $userMobile = $_POST['UserMobile'];
    $userNIC = $_POST['UserNIC'];

    $result = updateUser($userId, $userName, $userEmail, $userMobile, $userNIC);
    echo "<script>alert('$result'); window.location.href='../../views/dashboards/admin.php';</script>";
}
?>

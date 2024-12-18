<?php
include_once('../../functions/userFunction.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $result = deleteUser($userId);
    echo "<script>alert('$result'); window.location.href='../../views/dashboards/admin.php';</script>";
}
?>

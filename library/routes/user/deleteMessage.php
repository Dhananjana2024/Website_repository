<?php
session_start();
include_once('../../functions/userFunction.php');
$db_conn = Connection();

if (isset($_GET['id'])) {
    $messageId = intval($_GET['id']);

    // Delete query
    $sql = "DELETE FROM message_table WHERE id = $messageId";
    if (mysqli_query($db_conn, $sql)) {
        $_SESSION['success'] = "Message deleted successfully.";
    } else {
        $_SESSION['error'] = "Error deleting message: " . mysqli_error($db_conn);
    }
}

// Redirect back to the admin page
header("Location: ../../views/dashboards/admin.php");
exit();
?>

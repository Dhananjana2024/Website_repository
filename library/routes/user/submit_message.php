<?php
// Include the database connection function
include '../../library/functions/db_corn.php';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get form inputs
    $user_name = trim($_POST['userName']);
    $user_email = trim($_POST['userEmail']);
    $user_message = trim($_POST['userAddress']);

    // Validate required fields
    if (empty($user_name) || empty($user_message)) {
        echo "Name and Message fields are required!";
        exit();
    }

    // Establish database connection
    $conn = Connection();

    // Prepare SQL query to insert data into 'message_table'
    $sql = "INSERT INTO message_table (user_name, user_email, user_message) VALUES (?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sss", $user_name, $user_email, $user_message);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Message submitted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid Request Method!";
}
?>

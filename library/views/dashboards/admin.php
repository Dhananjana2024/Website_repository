<?php
session_start();
include_once('../../functions/userFunction.php');
$db_conn = Connection();

// Fetch all users
$sqlUsers = "SELECT * FROM user_table";
$resultUsers = mysqli_query($db_conn, $sqlUsers);

// Fetch all messages
$sqlMessages = "SELECT * FROM message_table";
$resultMessages = mysqli_query($db_conn, $sqlMessages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../../css/admin.css">
</head>
<body>
    <!-- Feedback Section -->
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert success">
            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php } elseif (isset($_SESSION['error'])) { ?>
        <div class="alert error">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php } ?>

    <div class="container">
        <h2>User Management</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>NIC</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultUsers)) { ?>
                    <tr>
                        <form action="../../routes/user/editUser.php" method="post">
                            <td><?php echo $row['id']; ?></td>
                            <td><input type="text" name="UserName" value="<?php echo $row['user_name']; ?>" required></td>
                            <td><input type="email" name="UserEmail" value="<?php echo $row['user_email']; ?>" required></td>
                            <td><input type="text" name="UserMobile" value="<?php echo $row['user_mobile']; ?>" required></td>
                            <td><input type="text" name="UserNIC" value="<?php echo $row['user_nic']; ?>" required></td>
                            <td>
                                <!-- Edit Button -->
                                <input type="hidden" name="UserId" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="updateUser" class="btn edit-btn">Edit</button>
                                
                                <!-- Delete Button -->
                                <a href="../../routes/user/deleteUser.php?id=<?php echo $row['id']; ?>" 
                                   onclick="return confirm('Are you sure you want to delete this user?');" class="btn delete-btn">
                                   Delete
                                </a>
                            </td>
                        </form>
                    </tr>
                <?php } ?>
            </tbody>
        </table><br><br>

        <h2>User Messages</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($message = mysqli_fetch_assoc($resultMessages)) { ?>
                    <tr>
                        <td><?php echo $message['id']; ?></td>
                        <td><?php echo $message['user_name']; ?></td>
                        <td><?php echo $message['user_email']; ?></td>
                        <td><?php echo $message['user_message']; ?></td>
                        <td>
                            <!-- Delete Button -->
                            <a href="../../routes/user/deleteMessage.php?id=<?php echo $message['id']; ?>" 
                               onclick="return confirm('Are you sure you want to delete this message?');" class="btn delete-btn">
                               Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

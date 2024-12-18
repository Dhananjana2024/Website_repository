<?php
// Include the database connection
include_once("../library/functions/db_corn.php");

if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userMessage = $_POST['userMessage'];

    // Insert data into the database
    $db_conn = Connection();

    // Prepare the SQL query
    $insertMessage = "INSERT INTO message_table (user_name, user_email, user_message) 
                      VALUES ('$userName', '$userEmail', '$userMessage')";

    $result = mysqli_query($db_conn, $insertMessage);

    if ($result) {
        echo "<script>
                alert('Your message has been submitted successfully!');
                window.location.href = 'contact.php';
              </script>";
    } else {
        echo "<script>
                alert('Error submitting your message: " . mysqli_error($db_conn) . "');
              </script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4 img-fluid" src="../images/Logo/CLogo-.png" alt="" width="550" height="300">
        <h2>Submit Your Message</h2>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h4 class="mb-3">Feedback's <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15m0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                </svg></h4>
                <form class="needs-validation" action="contact.php" method="POST" novalidate="">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="userName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="userName" name="userName" placeholder="John Wick" required="">
                        </div>

                        <div class="col-12">
                            <label for="userEmail" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                            <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="you@example.com">
                        </div>

                        <div class="col-12">
                            <label for="userAddress" class="form-label">Message</label>
                            <textarea class="form-control" id="userAddress" name="userMessage" placeholder="Enter your message here" required="" style="height: 150px; padding: 15px;"></textarea>
                        </div>

                        <hr class="my-4">
                        <button class="modern-btn" type="submit" name="submit">Submit My Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="my-5 pt-5  text-white text-center text-small">
        <p class="mb-1">© 2024 SkyZone Weather and Location-based Services</p>
        <ul class="list-inline">
            <li class="list-inline-item " ><a href="#" style="color:white;">Privacy</a></li>
            <li class="list-inline-item " ><a href="#" style="color:white;">Terms</a></li>
            <li class="list-inline-item " ><a href="#" style="color:white;">Support</a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3Wm3CUtTe8aWw7Y7x7jQ+YPu3Pt5+uXWmZVu6N9n5kpxDAG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Xj9TzQlmNTEI8kpph5GkmPpc7X2MC7p4yoDheOgU8cN1RkD" crossorigin="anonymous"></script>
</body>

</html>

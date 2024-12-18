<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../../../index.php");
    exit;
}

// Fetch user details from session
$user = $_SESSION['user'];
?>

<?php include '../../../partails/other/header.php';?>
<?php include '../../../partails/other/navbar.php';?>


    



    <?php include '../../../partails/other/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
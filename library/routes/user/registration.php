<?php

include_once('../../functions/userFunction.php');

$result = userRegistration($_POST['UserName'],$_POST['UserEmail'],$_POST['UserPassword'],
$_POST['UserMobile'],$_POST['UserNIC']);

echo($result);


?>
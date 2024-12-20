<?php

include_once('../../functions/adminFunction.php');

$result = userRegistration($_POST['adminName'],$_POST['adminEmail'],$_POST['adminPass'],
$_POST['adminMobile'],$_POST['adminReg']);

echo($result);


?>  
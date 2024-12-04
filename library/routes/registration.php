<?php

include_once('../../function/userFunction.php');

$result = userRegistration($_POST['UserName'],$_POST['userEmail'],$_POST['UserPass'],
$_POST['userMobile']);

echo($result);


?>
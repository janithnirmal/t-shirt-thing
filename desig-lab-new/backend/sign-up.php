<?php
require_once 'app/database_driver.php';
require_once 'app/response_sender.php';
require_once 'app/passwordEncryptor.php';

+-

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo ("Warning! unauthorized acces!");
    exit;
}


$decrypt_email=$_POST['email'];
$decrypt_password=$_POST['password'];

$email = base64_encode($decrypt_email);
$password = base64_encode($decrypt_password);




$login_link = "http://localhost/to%20do%20list/t-shirt-thing/desig-lab-new/backend/user_verification.php?email={$email}&password={$password}";


echo($login_link);











//send response
$responseObject->status = "success";
response_sender::sendJson($responseObject);


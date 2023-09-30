<?php
require_once 'app/database_driver.php';
require_once 'app/response_sender.php';
require_once 'app/passwordEncryptor.php';
require_once 'email_save.php';
require_once 'app/mail/MailSender.php';

// Initialize the response object
$responseObject = new stdClass();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo "Warning! Unauthorized access!";
    exit;
}

// Save the email to the session
$email = $_POST['email'];
// email_server::emailSave($email);

// // Retrieve the email from the session
// $sessionEmail = email_server::get_email();
// echo "Email retrieved from session: $sessionEmail";

$decrypt_email = $_POST['email'];
$decrypt_password = $_POST['password'];

$email = base64_encode($decrypt_email);
$password = base64_encode($decrypt_password);

$login_link =  $_SERVER['HTTP_HOST'] . "/backend/user_verification.php?email={$email}&password={$password}";


$mailSender = new MailSender($email);
$mailSender->mailInitiate("Sign UP Link - Design Lab", "Click on the following link to verify", $login_link);
$mailSender->sendMail();

// Send a response
$responseObject->status = "success";
response_sender::sendJson($responseObject);

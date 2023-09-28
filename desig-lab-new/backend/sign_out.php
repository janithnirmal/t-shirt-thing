<?php
require("app/user_access_updater.php");
require("app/response_sender.php");

$responseObject = new stdClass();
$responseObject->status = "failed";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $responseObject->error = "request method is not valid";
    response_sender::sendJson($responseObject);
    exit(); // Exit the script after sending the response
}

// Assuming that the user_access_updater.php file contains the UserAccess class
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$UserAccess = new UserAccess();
$UserAccess->logout();

// Logout was successful, update the status in the response
$responseObject->status = "success";
response_sender::sendJson($responseObject);

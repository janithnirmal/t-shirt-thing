<?php

require("app/data_validator.php");
require("app/database_driver.php");
require("app/passwordEncryptor.php");
require("app/user_access_updater.php");
require("app/response_sender.php");


$responseObject = new stdClass();
$responseObject->status = "failed";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $responseObject->error = "request method is not valid";
    response_sender::sendJson($responseObject);
}


$UserAccess= new UserAccess();
$UserAccess->logout();



<?php
require("app/data_validator.php");
require("app/database_driver.php");
require("app/passwordEncryptor.php");
require("app/user_access_updater.php");
require("app/response_sender.php");


$responseObject = new stdClass();
$responseObject->status = "failed";


//handle the request
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    $responseObject->error = "invalid request";
    response_sender::sendJson($responseObject);
}


//gather inputs
$email = trim($_POST['email']);
$password = trim($_POST['password']);


//validate inputs
if (empty($email) || empty($password)) {
    $responseObject->error = "empty input values";
    response_sender::sendJson($responseObject);
}
$validateReadyObject = new stdClass();
$emailObject = new stdClass();
$emailObject->datakey = 'email1';
$emailObject->value = $email;


$validateReadyObject->email = array($emailObject);

$data_validator = new data_validator($validateReadyObject);
//echo(json_encode($data_validator->validate()));

$emailvalidate = $data_validator->validate();
if (!$emailvalidate->email1 == null) {
    $responseObject->error = "email ias not correct format";
    response_sender::sendJson($responseObject);
};


//gather data from database
$database_driver = new database_driver();
$query = "SELECT * FROM `user` WHERE email = ?";
$result = $database_driver->execute_query($query, 's', [$email]);


// Fetch the row from the result
$row = $result['result']->fetch_assoc();

// Extract the data values
$userEmail = $row['email'];
$password_hash = $row['password_hash'];
$password_salt = $row['password_salt'];

//check acess by comparing
if (!PasswordHashVerifier::isValid($password, $password_salt, $password_hash)) {
    $responseObject->error = "incorrect password";
    response_sender::sendJson($responseObject);
};


//create a session
$UseerAccess = new UserAccess();
$UseerAccess->login($row);


//send response
$responseObject->status = "success";
response_sender::sendJson($responseObject);

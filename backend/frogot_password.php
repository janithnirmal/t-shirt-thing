<?php
require_once 'app/database_driver.php';
require_once 'app/response_sender.php';
require_once 'app/passwordEncryptor.php';

// Initialize the response object
$responseObject = new stdClass();

if (!isset($_POST['email']) || !isset($_POST['new_password'])) {
    $responseObject->error = "Invalid request";
    response_sender::sendJson($responseObject);
}

// Gather inputs
$email = trim($_POST['email']);
$newPassword = trim($_POST['new_password']);

// Validate inputs
if (empty($email) || empty($newPassword)) {
    $responseObject->error = "Empty input values";
    response_sender::sendJson($responseObject);
}

// Check if the email exists in the database
$database_driver = new database_driver();
$query = "SELECT * FROM `user` WHERE email = ?";
$result = $database_driver->execute_query($query, 's', [$email]);

if ($result['result']->num_rows === 0) {
    $responseObject->error = "Email not found";
    response_sender::sendJson($responseObject);
}

// Fetch the row from the result
$row = $result['result']->fetch_assoc();

// Extract the data values
$userEmail = $row['email'];
$password_hash = $row['password_hash'];
$password_salt = $row['password_salt'];

// Generate new password hash and salt for the new password
$passwordEncryptor = new StrongPasswordEncryptor();
$newPasswordEncrypted = $passwordEncryptor->encryptPassword($newPassword);

$newPasswordHash = $newPasswordEncrypted['hash'];
$newPasswordSalt = $newPasswordEncrypted['salt'];

// Update the password hash and salt in the database
$updateQuery = "UPDATE `user` SET password_hash = ?, password_salt = ? WHERE email = ?";
$updateResult = $database_driver->execute_query($updateQuery, 'sss', [$newPasswordHash, $newPasswordSalt, $email]);


$responseObject->status = "success";

// Send the JSON response
response_sender::sendJson($responseObject);
?>

<?php
require_once 'app/database_driver.php';
require_once 'app/response_sender.php';
require_once 'app/passwordEncryptor.php';
require_once 'send_otp.php';



if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo ("Warning! unauthorized acces!");
    exit;
}

$password = $_POST['password'];
$email = $_POST['email'];

// session_start();

// // Add data to the session
// $_SESSION['email'] = $email;
// $_SESSION['password'] = $password;

$response = new stdClass();
$response->status = 'failed'; // Corrected the typo, changing 'success' to 'success'

$db = new database_driver();
// Check if the email already exists in the database
$searchQuery = "SELECT email FROM `user` WHERE email = ?";
$queryResult = $db->execute_query($searchQuery, 's', array($email));

// Extract the statement and the result from the queryResult array
$stmt = $queryResult['stmt'];
$result = $queryResult['result'];

// Fetch the row from the result
if ($result->num_rows > 0 && ($row = $result->fetch_assoc())) {
    // The email already exists in the database, show error
    $response->error = 'Email already exists in the database';
    response_sender::sendJson($response);
}

// $otp=substr($otp,8);
//send otp and chech if otp is correct
// mail::mailSender($otp);

$passwordEncypter = StrongPasswordEncryptor::encryptPassword($password);
$hash = $passwordEncypter['hash'];
$salt = $passwordEncypter['salt'];

$id = uniqid();
$number = substr($id, 0, 4);


// For demonstration purposes, let's assume the user ID is always '2' for all sign-ins
$insertQuery = "INSERT INTO `normal-sign-in` (`email`, `userid`, `password_hash`,`password_salt`) VALUES (?, ?, ?, ?);";
$db->execute_query($insertQuery, 'ssss', array($email, $number, $hash, $salt));

// login link for idex.html
$login_link = "http://localhost/t-shirt-thing/desig-lab-new/index.html?id=$number";
mail::mailSender($login_link);


$response->status = 'success'; // Corrected the typo, changing 'success' to 'success'
response_sender::sendJson($response);

<?php
require_once("app/user_access_updater.php");
require_once("app/database_driver.php");
require_once("app/response_sender.php");

$responseObject = new stdClass();
$responseObject->status = "failed";

$access = new UserAccess();
if (!$access->isLoggedIn()) {
    $responseObject->error = "Invalid Access please log in";
    response_sender::sendJson($responseObject);
    die();
}
$loggedUserData = $access->getUserData();

$database = new database_driver();

// Query to retrieve user data from the database
$query = "SELECT `firstname`, `lastname`, `address1`, `address2`, `mobile`, `city`, `provience`, `postal` FROM `user` WHERE `email` = ?";
$userData = $database->execute_query($query, "s", [$loggedUserData['email']]);

if ($userData['result']) {
    $row = $userData['result']->fetch_assoc();

    // Send the user data as JSON response to the frontend
    $responseObject->status = "success";
    $responseObject->userData = $row;
    response_sender::sendJson($responseObject);

    // Close the statement and free the result
    $userData['stmt']->close();
    $userData['result']->free();
} else {
    // Return an empty JSON object if user data is not found
    $responseObject->status = "success";
    $responseObject->userData = [];
    response_sender::sendJson($responseObject);
}
?>

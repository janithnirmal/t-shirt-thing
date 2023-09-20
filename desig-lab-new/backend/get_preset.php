<?php
require_once("app/user_access_updater.php");
require_once("app/database_driver.php");
require_once("app/response_sender.php");

$loggedUserData = null;
$access = new UserAccess();
if ($access->isLoggedIn()) {
    $loggedUserData = $access->getUserData();
}

$responseObject = new stdClass();
$responseObject->status = "failed";
$access = new UserAccess();
if (!$access->isLoggedIn()) {
    $responseObject->error = "Invalid Access";
    response_sender::sendJson($responseObject);
    die();
}
$loggedUserData = $access->getUserData();

// get the users saved design list
$database = new database_driver();
$query = "SELECT * FROM `save_preset` WHERE `user_email` = ?";
$types = "s"; // Assuming user_email is a string
$params = ["admin@gmail.com"]; // Replace with the actual email
$db_response = $database->execute_query($query, $types, $params);

// Create a response 
$result_set = $db_response["result"];
$responseDesignsArray = array();
while ($row = $result_set->fetch_assoc()) {
    $responseDesignsArray[] = $row;
}

// Response back the relevant data
$responseObject->data = $responseDesignsArray;
$responseObject->status = "success";
response_sender::sendJson($responseObject);

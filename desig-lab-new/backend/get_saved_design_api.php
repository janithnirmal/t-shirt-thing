<?php
require_once("app/user_access_updater.php");
require_once("app/database_driver.php");
require_once("app/response_sender.php");


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
$query = "SELECT * FROM `saved_designs` WHERE `user_email` = ?";
$db_response = $database->execute_query($query, "s", [$loggedUserData["email"]]);


// create a response 
$result_set = $db_response["result"];
$responseDesignsArray = array();
for ($i = 0; $i < $result_set->num_rows; $i++) {
    $row = $result_set->fetch_assoc();
    array_push($responseDesignsArray, $row);
}


// resnponse back the relevent data
$responseObject->data = $responseDesignsArray;
$responseObject->status = "success";
response_sender::sendJson($responseObject);

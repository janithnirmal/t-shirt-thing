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

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $responseObject->error = "empty json";
    response_sender::sendJson($responseObject);

}


$access = new UserAccess();
$loggedUserData = $access->getUserData();
$database_driver=new database_driver();

$loadQuery="SELECT * FROM `preset_data` WHERE `user_email`!=?";
$result=$database_driver->execute_query($loadQuery,'s',array("x"));

if (!$result['stmt']->affected_rows > 0) {
    $responseObject->error = "Data select failed " ;
    response_sender::sendJson($responseObject);
}

$rows = [];
while ($row = $result['result']->fetch_assoc()) {
    $rows[] = $row; // Append each row to the $rows array
}

// File saved successfully
$responseObject->status = "success";
$responseObject->data = $rows;
response_sender::sendJson($responseObject);





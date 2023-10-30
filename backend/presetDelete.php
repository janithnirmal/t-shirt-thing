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

$access = new UserAccess();
$loggedUserData = $access->getUserData();

if (!isset($_POST["presetData"])) {
    $responseObject->error = "empty json";
    response_sender::sendJson($responseObject);
}

$presetData = json_decode($_POST["presetData"]);
$id=$presetData->imageData;


$database_driver=new database_driver();

$loadQuery="DELETE FROM `preset_data` WHERE `preset_idea` = ?;";
$result=$database_driver->execute_query($loadQuery,'s',array($id));





// File saved successfully
$responseObject->status = "success";
response_sender::sendJson($responseObject);





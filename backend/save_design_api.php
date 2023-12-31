<?php

require_once("app/user_access_updater.php");
require_once("app/database_driver.php");
require_once("app/response_sender.php");

$loggedUserData = null;
$access = new UserAccess();
if ($access->isLoggedIn()) {
    $loggedUserData = $access->getUserData();
}
if (isset($loggedUserData["status"])) {
    $responseObject = new stdClass();
    $responseObject->status = "failed";
    $access = new UserAccess();
    if (!$access->isLoggedIn()) {
        $responseObject->error = "Invalid Access";
        response_sender::sendJson($responseObject);
    }
    $loggedUserData = $access->getUserData();

    if (!isset($_POST["design_json"]) || !isset($_POST["imageObject"]) || empty($_POST["design_json"])) {
        $responseObject->error = "Wrong Request parameters!";
        response_sender::sendJson($responseObject);
    }

    $designData = $_POST["design_json"];

    // save designs data in db
    $uid = uniqid();

    $db = new database_driver();
    $currentDateTime = date('Y-m-d H:i:s');
    $insertQuery = "INSERT INTO `save_preset` (`id`, `saved_datetime`, `user_email`, `design_data`) VALUES (?, ?, ?, ?);";
    $db->execute_query($insertQuery, 'ssss', array($uid, $currentDateTime, $loggedUserData["email"], $designData));



    // image saving 
    $imageObject =  json_decode($_POST["imageObject"]);
    foreach ($imageObject as $key => $value) {
        $dataURL = str_replace("data:image/png;base64,",  "", $value);
        $imageData = base64_decode($dataURL);
        $path = "saved_design_images/" . $uid . $key  . ".png";
        file_put_contents($path, $imageData);
    }

    $responseObject->status = "success";
    response_sender::sendJson($responseObject);
} else {
    $responseObject = new stdClass();
    $responseObject->status = "failed";
    $access = new UserAccess();
    if (!$access->isLoggedIn()) {
        $responseObject->error = "Invalid Access";
        response_sender::sendJson($responseObject);
    }
    $loggedUserData = $access->getUserData();

    if (!isset($_POST["design_json"]) || !isset($_POST["imageObject"]) || empty($_POST["design_json"])) {
        $responseObject->error = "Wrong Request parameters!";
        response_sender::sendJson($responseObject);
    }

    $designData = $_POST["design_json"];

    // save designs data in db
    $uid = uniqid();

    $db = new database_driver();
    $currentDateTime = date('Y-m-d H:i:s');
    $insertQuery = "INSERT INTO `saved_designs` (`id`, `saved_datetime`, `user_email`, `design_data`) VALUES (?, ?, ?, ?);";
    $db->execute_query($insertQuery, 'ssss', array($uid, $currentDateTime, $loggedUserData["email"], $designData));



    // image saving 
    $imageObject =  json_decode($_POST["imageObject"]);
    foreach ($imageObject as $key => $value) {
        $dataURL = str_replace("data:image/png;base64,",  "", $value);
        $imageData = base64_decode($dataURL);
        $path = "saved_design_images/" . $uid . $key  . ".png";
        file_put_contents($path, $imageData);
    }

    $responseObject->status = "success";
    response_sender::sendJson($responseObject);
}

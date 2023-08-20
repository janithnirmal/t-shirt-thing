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




if (!isset($_POST["formData"])) {
    $responseObject->error = "Invalid Access";
    response_sender::sendJson($responseObject);
    
};
// Get the form data in JSON format and decode it into a PHP array
$formData = json_decode($_POST["formData"], true);
  
// Now you can access the form data as an associative array
$firstName = $formData["firstName"];
$lastName = $formData["lastName"];
$telephone = $formData["telephone"];
$address = $formData["address"];
$address2 = $formData["address2"];
$city = $formData["city"];
$province = $formData["province"];
$postalCode = $formData["postalCode"];


$database = new database_driver();
$query = "UPDATE `user` SET 
            `firstname` = ?, 
            `lastname` = ?, 
            `address1` = ?, 
            `address2` = ?,
            `mobile` = ?,
            `city` = ?,
            `provience` = ?,
            `postal` = ?



          WHERE `email` = ?";
$database->execute_query($query, "sssssssss",[$firstName, $lastName, $address, $address2, $telephone,$city,$province,$postalCode, $loggedUserData["email"]]);


$responseObject->error = "Sucess";
response_sender::sendJson($responseObject);
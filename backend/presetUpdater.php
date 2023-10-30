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
$title=$presetData->title;

if (isset($presetData->imageData) && is_array($presetData->imageData)) {
    // Specify the directory where you want to store the images
    $uploadDir = "preset_images/";

    // Create the directory if it doesn't exist
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedFiles = $presetData->imageData;

    $temp=1;
    $currentDateTime = date('YmdHis'); // Format: YearMonthDayHourMinuteSecond
$randomNumber = mt_rand(1000, 9999); // Generate a random 4-digit number

$uid = $currentDateTime . $randomNumber;


    foreach ($uploadedFiles as $key => $base64Data) {
        // Generate a unique filename for each image (you can modify this logic as needed)
     
        $fileName = $uploadDir . $temp .'_' . $uid . '.png';
        $temp++;

        // Decode the base64 image data and save it as a file
        $fileData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Data));
        if (file_put_contents($fileName, $fileData)) {
            
        } else {
            $responseObject->status = "error";
            $responseObject->message = "Failed to save the image.";
        }
    }
} else {
    $responseObject->status = "error";
    $responseObject->message = "Invalid or missing image data.";
}

$database_driver=new database_driver();

$insertQuery="INSERT INTO `preset_data`(`preset_idea`,`user_email`,`presettitle`) VALUES (?,?,?)";
$parms=array($uid,$loggedUserData['email'],$title);
$result=$database_driver->execute_query($insertQuery,'sss',$parms);


if (!$result['stmt']->affected_rows > 0) {
    $responseObject->error = "Data adding failed. " . $database->connection->error;
    response_sender::sendJson($responseObject);
}


// File saved successfully
$responseObject->status = "success";
response_sender::sendJson($responseObject);
?>

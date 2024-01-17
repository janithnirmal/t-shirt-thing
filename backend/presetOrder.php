<?php
require "app/SMTP.php";
require "app/PHPMailer.php";
require "app/Exception.php";

require "app/database_driver.php";
require "app/user_access_updater.php";
require "app/response_sender.php";

use PHPMailer\PHPMailer\PHPMailer;

$responseObject = new stdClass();
$responseObject->status = "failed";

$sessionManager = new UserAccess();
$userData =  $sessionManager->getUserData();

// Check if 'presetData' is sent in the POST request
if (isset($_POST['presetData'])) {
    $presetData = json_decode($_POST['presetData']);

    $imageData = $presetData->imageData;
    $instuctions = $presetData->instuctions;
    $title=$presetData->title;

    

    // Send an email with the image data and instructions
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'trackaaofficial@gmail.com';
    $mail->Password = 'foamzsrbhogekuhz';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('trackaaofficial@gmail.com', 'Admin Verification');
    $mail->addReplyTo('trackaaofficial@gmail.com', 'Admin Verification');
    $mail->addAddress('webkd20@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'T-shirt order with instructions';

    // Set the email body to include the instructions
    $mail->Body = "
    <html>
    <head>
    <style>
        /* Add your inline CSS styles here */
        .email-title {
            font-size: 24px;
            color: #0066cc;
        }
        .instructions {
            font-size: 16px;
            color: #333333;
        }
    </style>
    </head>
    <body>
        <div class='email-title'>{$title}</div>
        <div class='instructions'>Instructions: {$instuctions}</div>
    </body>
    </html>
";


    // Attach the images to the email
    foreach ($imageData as $index => $base64Image) {
        $imageDataBinary = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));
        $mail->addStringAttachment($imageDataBinary, "image_$index.png");
    }

    if (!$mail->send()) {
        $responseObject->error = "Mail Sending Failed";
    } else {
        // Email sent successfully, you can take further actions or respond accordingly
        $responseObject->status = "success";
        response_sender::sendJson($responseObject);
    }
} else {
    $responseObject->error = "No 'presetData' found in POST request.";
    response_sender::sendJson($responseObject);
}
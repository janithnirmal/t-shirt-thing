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

$decodedData = json_decode($_POST["dataObject"]);
$imageObject = json_decode($_POST["image"]);


$sizeQuantitySets = $decodedData->sizeQuntitySets;
$gender = $decodedData->gender;
$clothType = $decodedData->clothType;
$printType = $decodedData->printType;
$mainColorHueValue = $decodedData->mainColorHueValue;
$mainColorSaturateValue = $decodedData->mainColorSaturateValue;
$mainColorLevelValue = $decodedData->mainColorLevelValue;
$clothOption = $decodedData->clothOption;
$views = $decodedData->views;
$clothOptionSleves = $decodedData->clothOption->sleves;
$clothOptionNeck = $decodedData->clothOption->neck;
$clothOptionButtons = $decodedData->clothOption->buttons;
$stripsNeck = $decodedData->views->strips->neck;
$stripsArm = $decodedData->views->strips->arm;
$stripsSides = $decodedData->views->strips->sides;

// Start output buffering
ob_start();
?>


<div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,td
        {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;

        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
        }

       
    </style>
    <div class="container" style="max-width: 1200px;
            margin: 0 auto;
            padding: 20px;">
        <h2 style=" text-align: center;
            margin-bottom: 20px;">Main Data</h2>

        <table style="  border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
            <tr>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">Variable</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">Value</th>
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">Gender</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $gender; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">Cloth Type</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $clothType; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">Print Type</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $printType; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">Main Color Hue Value</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $mainColorHueValue; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">Main Color Saturate Value</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $mainColorSaturateValue; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">Main Color Level Value</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $mainColorLevelValue; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">sleve type</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $clothOptionSleves; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">neck type</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $clothOptionNeck; ?></td >
            </tr>
            <tr>
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
">button type</td >
                <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $clothOptionButtons; ?></td >
            </tr>

        </table>
        <table style="  border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h2 style=" text-align: center;
            margin-bottom: 20px;">Quntity Data</h2>

            <tr>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">Timestamp</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">Gender</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">Material</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">XS</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">S</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">M</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">L</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">XL</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">DoubleXXL</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">ThribbleXXL</th>
            </tr>
            <?php foreach ($sizeQuantitySets as $set) { ?>
                <tr>
                    <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">Variable</th>
                    <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">Value</th>
                </tr>

            <?php } ?>
        </table>
        <table style="  border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h2 style=" text-align: center;
            margin-bottom: 20px;">Neck Line Data</h2>

            <tr>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">colour</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">thickness</th>
            </tr>
            <?php foreach ($stripsNeck as $setp) { ?>
                <tr>
                    <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $setp->color; ?></td >
                    <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $setp->thickness; ?></td >
                </tr>
            <?php } ?>
        </table>
        <table style="  border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h2 style=" text-align: center;
            margin-bottom: 20px;">Arm Line Data</h2>

            <tr>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">colour</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">thickness</th>
            </tr>
            <?php foreach ($stripsArm as $setpo) { ?>
                <tr>
                    <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $setpo->color; ?></td >
                    <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $setpo->thickness; ?></td >
                </tr>
            <?php } ?>
        </table>
        <table style="  border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h2 style=" text-align: center;
            margin-bottom: 20px;">Side Line Data</h2>

            <tr>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">thickness</th>
                <th style="background-color: #f5f5f5;
            font-weight: bold;
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;">colour</th>
            </tr>
            <?php foreach ($stripsSides as $setpm) { ?>
                <tr>
                    <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $setpm->color; ?></td >
                    <td style=" border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
"><?php echo $setpm->thickness; ?></td >
                </tr>
            <?php } ?>
        </table>
    </div>

    <div>
        Images
    </div>
    <div>
        <?php

        ?>
    </div>
</div>


<?php
// Get the content from the output buffer
$tableHtml = ob_get_clean();

// Now you can use the $tableHtml variable wherever you need to display the HTML table

// email code
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'trackaaofficial@gmail.com';
$mail->Password = 'gijtkbbqyrnxnwzr';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('trackaaofficial@gmail.com', 'Admin Verification');
$mail->addReplyTo('trackaaofficial@gmail.com', 'Admin Verification');
$mail->addAddress('rmjanithnirmal@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Test t shirt thing';
$mail->Body    = $tableHtml;


$canvasItemArray = $decodedData->views->generatedTextData;
foreach ($canvasItemArray as $object) {
    $items = json_decode($object->data)->objects;
    foreach ($items as $value) {
        $dataUrl = $value->src;
        $mail->addStringAttachment(base64_decode(substr($dataUrl, strpos($dataUrl, ",") + 1)), "image.png");
    }
}


if (!$mail->send()) {
    $responseObject->error = "Mail Sending Failed";
} else {
    $uid = uniqid(); // uuid
    $database = new database_driver();
    $user_access = new UserAccess();

    date_default_timezone_set('Asia/Colombo'); // Set the time zone to your desired one

    $currentDateTime = date("Y-m-d H:i:s");

    $insertQuery = "INSERT INTO `order` (`id`, `ordered_datetime`, `user_email`, `data_object`) VALUES (?, ?, ?, ?) ";
    $database->execute_query($insertQuery, "ssss", [$uid,  $currentDateTime, $user_access->getUserData()["email"], json_encode($decodedData)]);

    foreach ($imageObject as $key => $value) {
        $dataURL = str_replace("data:image/png;base64,",  "", $value);
        $imageData = base64_decode($dataURL);
        $path = "ordered_design_images/" . $uid . $key  . ".png";
        file_put_contents($path, $imageData);
    }


    $responseObject->status = "success";
    response_sender::sendJson($responseObject);
}



?>
<?php

// // get the request data
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if email and password are empty
//     if (empty($_POST["orderDetails"])) {
//         $responseObject->error = "Invalid Request";
//         echo (json_encode($responseObject));
//         die();
//     } else {
//         $signUpData = $_POST['signUpData'];
//     }
// } else {
//     $responseObject->error = "Invalid Request Type";
//     echo (json_encode($responseObject));
//     die();
// }


// image saving 
$imageObject =  json_decode($_POST["imageObject"]);
foreach ($imageObject as $key => $value) {
    $dataURL = str_replace("data:image/png;base64,",  "", $value);
    $imageData = base64_decode($dataURL);
    $path = "saved_design_images/email" . $key . uniqid() . ".png";
    file_put_contents($path, $imageData);
}

echo ("success");

<?php

// get the request data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are empty
    if (empty($_POST["orderDetails"])) {
        $responseObject->error = "Invalid Request";
        echo (json_encode($responseObject));
        die();
    } else {
        $signUpData = $_POST['signUpData'];
    }
} else {
    $responseObject->error = "Invalid Request Type";
    echo (json_encode($responseObject));
    die();
}


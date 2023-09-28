<?php
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';



//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId("99137703230-aeruvble0otkffemvovap5p71n7tpm8g.apps.googleusercontent.com");

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret("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");

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri("http://localhost/t-shirt-thing/desig-lab-new/backend/contraller.php");

$google_client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
$google_client->addScope('email');

$Google_login_btn = $google_client->createAuthUrl();





?>
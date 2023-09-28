<?php

require_once 'vendor/autoload.php';
require_once 'app/response_sender.php';
require_once 'app/passwordEncryptor.php';
require_once 'send_otp.php';
require_once 'app/database_driver.php';



// init configuration
$clientID = '792754426124-qjtotmddrjlcjci8emqntv9mre08eq76.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/to%20do%20list/t-shirt-thing/desig-lab-new/backend/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;

  function generateRandomNumbers($count, $min, $max) {
    $randomNumbers = array();

    for ($i = 0; $i < $count; $i++) {
        $randomNumbers[] = rand($min, $max);
    }

    return $randomNumbers;
}

// Generate six random numbers between 1 and 49 (inclusive)
$randomNumbers = generateRandomNumbers(6, 1, 49);


$passwordEncypter = StrongPasswordEncryptor::encryptPassword($randomNumbers);
$hash = $passwordEncypter['hash'];
$salt = $passwordEncypter['salt'];


$db = new database_driver();


// For demonstration purposes, let's assume the user ID is always '2' for all sign-ins
$insertQuery = "INSERT INTO `user` (`email`, `password_hash`,`password_salt`) VALUES (?, ?, ?, ?);";
$db->execute_query($insertQuery, 'ssss', array($email, $hash, $salt));

  
}

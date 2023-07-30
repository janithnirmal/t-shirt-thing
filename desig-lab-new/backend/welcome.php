<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
require_once 'app/database_driver.php';


// authenticate code from Google OAuth Flow
if (!isset($_GET['code'])) {
    echo "error";
}
$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
$client->setAccessToken($token['access_token']);

// get profile info
$google_oauth = new Google_Service_Oauth2($client);
$google_account_info = $google_oauth->userinfo->get();
$id = $google_account_info->id;
$email = $google_account_info->email;
$name = $google_account_info->name;
$picture = $google_account_info->picture;

$db = new database_driver();
$searchQuery = "INSERT INTO `google-sign-in` (`email`, `id`, `name`, `picture`) VALUES (?, ?, ?, ?);";
$db->execute_query($searchQuery, 'ssss', array($email, $id, $name, $picture));




$destinationURL = "http//www.youtube.com";
// Redirect the user to the specified URL
header("Location: $destinationURL");
exit; // Make sure to exit the script after sending the redirect header

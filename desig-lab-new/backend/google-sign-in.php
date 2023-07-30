<?php
require_once 'vendor/autoload.php';

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

  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>
<?php
require_once 'vendor/autoload.php';

// init configuration
$clientID = '792754426124-qjtotmddrjlcjci8emqntv9mre08eq76.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/design%20lab%20backend/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

?>
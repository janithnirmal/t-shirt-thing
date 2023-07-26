<?php
require_once 'vendor/autoload.php';
require_once 'config.php';




  // now you can use this profile info to create account in your website and make user logged in.

  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";

?>
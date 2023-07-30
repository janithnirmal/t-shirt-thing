<?php
require_once 'app/database_driver.php';
require_once 'app/response_sender.php';
require_once 'app/passwordEncryptor.php';
require_once 'app/user_access_updater.php';
require_once "config.php";

if (isset($_GET["code"])) {
     $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
} else {
     header("Location:index.php");
     exit();
}

if (isset($token["error"]) != "invalid_grant") {
     $oAuth = new Google_Service_OAuth2($google_client);
     $useData = $oAuth->userinfo->get();

     $user_info = [
          "email" => $useData["email"],
          "firstName" => $useData["givenName"],
          "lastName" => $useData["familyName"],
          "picture" => $useData["picture"],
     ];

     $email = $user_info["email"];
     $firstName = $user_info["firstName"];
     $lastName = $user_info["lastName"];
     $picture = $user_info["picture"];

     $response = new stdClass();
     $response->status = 'failed'; // Corrected the typo, changing 'success' to 'success'

     $dataBase = new database_driver();
     $searchQuery = "SELECT email FROM `user` WHERE email = ?";
     $queryResult =  $dataBase->execute_query($searchQuery, 's', array($email));


     // Extract the statement and the result from the queryResult array
     $stmt = $queryResult['stmt'];
     $result = $queryResult['result'];

     // Fetch the row from the result
     if ($result->num_rows > 0 && ($row = $result->fetch_assoc())) {
          // The email already exists in the database, show error
          $response->error = 'Email already exists in the database';
          response_sender::sendJson($response);
     }

     $password = uniqid();
     $passwordEncypter = StrongPasswordEncryptor::encryptPassword($password);
     $hash = $passwordEncypter['hash'];
     $salt = $passwordEncypter['salt'];

     // / Inserter for database
     $insertQuery = "INSERT INTO `user` (`email`, `password_hash`,`password_salt`,`firstname`,`lastname`,`image_url`) VALUES (?, ?, ?, ?,?,?);";
     $dataBase->execute_query($insertQuery, 'ssssss', array($email, $hash, $salt, $firstName, $lastName, $picture));


     // /gather data from database
     $database_driver = new database_driver();
     $query = "SELECT * FROM `user` WHERE email = ?";
     $result = $database_driver->execute_query($query, 's', [$email]);


     // Fetch the row from the result
     $row = $result['result']->fetch_assoc();



     //create a session
     $userAccess = new UserAccess();
     $userAccess->login($row);

     echo "<script>window.location.href = 'http://localhost/t-shirt-thing/desig-lab-new/index.php';</script>";
} else {
     header("Location:index.php");
     exit();
}

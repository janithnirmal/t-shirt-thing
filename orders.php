<?php

require_once("backend/app/user_access_updater.php");

$loggedUserData = null;
$access = new UserAccess();
if ($access->isLoggedIn()) {
  $loggedUserData = $access->getUserData();
}

?>



<!DOCTYPE html>
<html>

<head>
  <title>My Bootstrap Page</title>

  <!-- css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="dcss.css" />
  <link rel="stylesheet" href="controls.css" />

  <!-- scripts -->
  <script src="https://kit.fontawesome.com/f98ce7c376.js" crossorigin="anonymous" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js" defer></script>
  <script src="popup.js" defer></script>
  <script src="main.js" defer></script>
  <script src="script.js" defer></script>

</head>
<style>
  /* Default styles for all screen sizes */
.shaddow {
  box-shadow: 0px 2.98256px 7.4564px rgba(0, 0, 0, 0.2);
}

/* Styles for screens up to 578px wide */
@media screen and (max-width: 578px) {
  /* Example styles for smaller screens */
  body {
    font-size: 1px;
  }

  #orderContainer {
    padding: 20px;
  }
  .order-item{
    color: red;
  }
  img{
    width: 1%;
  }
}

/* Styles for screens between 579px and 786px wide */
@media screen and (min-width: 579px) and (max-width: 786px) {
  /* Example styles for medium-sized screens */
  body {
    font-size: 1px;
    color: red;
    background-color: blue;
  }
  

  #orderContainer {
    padding: 30px;
  }
}

/* Styles for screens between 787px and 992px wide */
@media screen and (min-width: 787px) and (max-width: 992px) {
  /* Example styles for larger screens */
  body {
    font-size: 18px;
  }

  #orderContainer {
    padding: 40px;
  }
}

/* Styles for screens between 993px and 1200px wide */
@media screen and (min-width: 993px) and (max-width: 1200px) {
  /* Example styles for extra-large screens */
  body {
    font-size: 20px;
  }
  

  #orderContainer {
    padding: 50px;
  }
}

</style>

<body onload="loadOrderData()">
  <?php include 'navbar.php'; ?>



  
  <div id="orderContainer" style="margin-top: 100px;" style="background-color: black;">

  </div>


  
  <!-- Your content goes here -->

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
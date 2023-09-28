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
  .shaddow {
    box-shadow: 0px 2.98256px 7.4564px rgba(0, 0, 0, 0.2);

  }
</style>

<body>
  <?php include 'navbar.php'; ?>



  <div class="container rounded shaddow  ml-2 mb-3 text-center" style="background-color: white; margin-top:90px;">
    <h3 class="my-3">My Orders</h3>
    <div class="container" style="border-style: dashed;width:98%">
      <img src="images/No orders.png" class="w-25">
    </div>
  </div>


  <footer class="footer bg-dark text-white" style="margin-top: 90px;">
    <div class="container text-center">
      <!-- Footer content goes here -->
      <p>this is just dummy contenet</p>
    </div>
  </footer>

  <!-- Your content goes here -->

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
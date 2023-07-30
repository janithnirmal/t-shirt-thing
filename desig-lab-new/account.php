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
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dcss.css" />
    <link rel="stylesheet" href="controls.css" />
  <script src="https://kit.fontawesome.com/f98ce7c376.js" crossorigin="anonymous" defer></script>
  <script src="script.js" defer></script>
  
    <!-- Other meta tags and stylesheets may be present here -->
  
  
</head>
<style>
  .shaddow{
    box-shadow: 0px 2.98256px 7.4564px rgba(0, 0, 0, 0.2);

  }
  .bs:focus {
  border: 1px solid black; /* Change the border color when focused */
}



</style>
<body>
<?php include 'navbar.php'; ?>

    <div class="container rounded shaddow  ml-2 mb-3 " style="background-color: white; margin-top:90px;">
        <h3 class="text-center pt-3 font-weight-bold" >My Account</h3>
        <div class="profil-heading bg-dark text-white">
             <p class="text-center py-2"><i class="fas fa-user px-3" ></i>Profile</p>
        </div>
        <div class="container w-75"> 
        <form class="mx-5">
    <div class="form-inline d-flex flex-row">
        <input type="email" class="w-50 mx-2" id="firstNameInput" aria-describedby="emailHelp" placeholder="First Name" style="border: none; border-bottom: 1px solid black; border-radius: 0px; outline: none; background-color: white;">
        <input type="email" class="w-50" id="lastNameInput" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Last Name">
    </div>
    <div class="form-inline d-flex flex-row mt-3">
        <input type="email" class="w-50 mx-2" id="telephoneInput" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Telephone">
        <button type="button" class="btn btn-danger" style="width: 100px;">Edit</button>
    </div>
    <div class="form-inline d-flex flex-row mt-5">
        <input type="email" class="bs w-100 mx-2" id="addressInput" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Address">
    </div>
    <div class="form-inline d-flex flex-row mt-5">
        <input type="email" class="w-100 mx-2" id="address2Input" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Address 2">
    </div>
    <div class="form-inline d-flex flex-row mt-5">
        <input type="email" class="w-50 mx-2" id="cityInput" aria-describedby="emailHelp" placeholder="City" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;">
        <input type="email" class="w-50 mx-2" id="provinceInput" aria-describedby="emailHelp" placeholder="Province" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;">
        <input type="email" class="w-50" id="postalCodeInput" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Postal Code">
    </div>
    <div class="form-inline d-flex flex-row mt-5 mb-3" style="margin-left: 35%;">
        <button type="button" class="btn btn-danger mb-3 mx-2 pl-5" style="width: 100px;">Cancel</button>
        <button type="button" class="btn btn-info text-white mb-3 mx-2" style="width: 100px;" onclick="userData()">Save</button>
    </div>
</form>

        </div>
          
    </div>


    <footer class="footer bg-dark text-white">
    <div class="container text-center">
      <!-- Footer content goes here --> <p>this is just dummy contenet</p>
    </div>
  </footer>

<!-- Your content goes here -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

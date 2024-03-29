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
/* Extra small screens (phones, less than 576px) */
@media (max-width: 575px) {
  .container {
    max-width: 90%;
  }

  

  .form-group {
    width: 100%;
  }
  ::placeholder{
    font-size: 15px;
  }
  .responsive-col{
    display: flex;
    flex-direction: column;
  }
}

/* Small screens (tablets, less than 768px) */
@media (min-width: 576px) and (max-width: 767px) {
  .container {
    max-width: 95%;
  }
}

/* Medium screens (desktops, less than 992px) */
@media (min-width: 768px) and (max-width: 991px) {
  .container {
    max-width: 98%;
  }
}

/* Large screens (large desktops, 1200px and up) */
@media (min-width: 992px) {
  .container {
    max-width: 1140px;
  }
}



</style>
<body onload="getUserData()">
<?php include 'navbar.php'; ?>

    <div class="container rounded shaddow  ml-2 mb-3 " style="background-color: white; margin-top:90px;">
        <h3 class="text-center pt-3 font-weight-bold" >My Account</h3>
        <div class="profil-heading bg-dark text-white">
             <p class="text-center py-2"><i class="fas fa-user px-3" ></i>Profile</p>
        </div>
        <div class="container w-75"> 
        <form class="mx-5">
    <div class=" d-block d-md-flex flex-row ">
        <input type="email" class="w-md--50 w-100 mx-md-2 mx-auto" id="firstNameInput" aria-describedby="emailHelp" placeholder="First Name" style="border: none; border-bottom: 1px solid black; border-radius: 0px; outline: none; background-color: white;">
        <input type="email" class="w-md-50 w-100" id="lastNameInput" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Last Name">
    </div>
    <div class=" d-block d-md-flex flex-row-row mt-md-2 mt-auto">
        <input type="email" class="w-md-25 w-100 mx-md-2 mx-auto " id="telephoneInput" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Telephone">
        <button type="button" class="btn btn-danger d-md-block d-none" style="width: 100px;"  onclick="getUserData()">Edit</button>
    </div>
    <div class="form-inline d-flex flex-row mt-md-5 mt-auto ">
        <input type="email" class="bs w-100 mx-md-2 md-auto" id="addressInput" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Address">
    </div>
    <div class="form-inline d-flex flex-row mt-md-5 mt-auto ">
        <input type="email" class="w-100 mx-md-2 md-auto" id="address2Input" style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Address 2">
    </div>
    <div class="d-block d-md-flex flex-row-row mt-md-5 mt-auto">
        <input type="email" class="w-md-50 w-100 mx-md-2 mx-auto" id="cityInput" aria-describedby="emailHelp" placeholder="City" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;">
        <input type="email" class="w-md-50 w-100 mx-md-2 mx-auto" id="provinceInput" aria-describedby="emailHelp" placeholder="Province" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;">
        <input type="email" class="w-md-50 w-100 mx-md-2 mx-auto" id="postalCodeInput" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;" aria-describedby="emailHelp" placeholder="Postal Code">
    </div>
    <div class="form-inline d-flex flex-row mt-5 mb-3 justify-content-center" >

        <button type="button" class="btn btn-danger mb-3 mx-2 pl-5" style="width: 100px;" onclick="userData()">Update</button>
        <button type="button" class="btn btn-info text-white mb-3 mx-2" style="width: 100px;" onclick="userData()">Save</button>
    </div>
</form>

        </div>
          
    </div>


       <!-- toasts -->
       <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="renderStartToastMessage" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header d-flex gap-2">
                                        <div class="spinner-grow text-danger" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <strong class="me-auto">Notification Panel</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        <span>Wait for few seconds.....</span>
                                    </div>
                                </div>
                            </div>

<!-- Your content goes here -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

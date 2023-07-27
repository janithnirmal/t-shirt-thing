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
<body><nav class="d-flex justify-content-between align-items-center px-5">
        <div class=" h-100">
            <a href="">
                <img src="images/free-logo-simple-illustration-vector-260nw-776460778.webp" />
            </a>
            <a href="">DesignHome</a>
            <a href="">Designs</a>
            <a href="">Orders</a>
            <a href="">Help</a>
            <a href="">
                Reviews
                <i class="fas fa-star"></i>
            </a>
        </div>
        <div class="d-flex h-100 justify-content-center">
            <a href=""><img class="nav-img-contact" src="images/nav-image.png" alt="" /></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
            <?php
            if ($loggedUserData) {
            ?>
                <div class="rounded-circle bg-primary" style="width: 30px; height: 30px;" id="signInBtn"></div>
            <?php
            } else {
            ?>
                <button class="btn btn-primary my-2 text-center" id="signInBtn">Sign In</button>
            <?php
            }
            ?>
        </div>

    </nav>
  

    <div class="container rounded shaddow  ml-2 mb-3 " style="background-color: white; margin-top:90px;">
        <h3 class="text-center pt-3 font-weight-bold" >My Account</h3>
        <div class="profil-heading bg-dark text-white">
             <p class="text-center py-2"><i class="fas fa-user px-3" ></i>Profile</p>
        </div>
        <div class="container w-75"> 
        <form class="mx-5 ">
            <div class="form-inline d-flex flex-row" >
            <input type="email" class=" w-50 mx-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" style="border: none; border-bottom: 1px solid black; border-radius: 0px; outline: none; background-color: white;">

              <input type="email" class=" w-50 "style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Last Name">
            </div>
            <div class="form-inline d-flex flex-row mt-3" >
                
                <input type="email" class=" w-50 mx-2"  style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone">
                <button type="button" class="btn btn-danger" style="width: 100px;">Edit</button>

              </div>
              <div class="form-inline d-flex flex-row mt-5" >
                
                <input type="email" class="bs w-100 mx-2"  style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adress">
                

              </div>
              <div class="form-inline d-flex flex-row mt-5" >
                
                <input type="email" class=" w-100 mx-2"  style="border: none; border-bottom: 1px solid black;border-radius: 0px;outline: none; background-color: white;"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adress 2" >
                

              </div>

              <div class="form-inline d-flex flex-row mt-5" >
                <input type="email" class=" w-50 mx-2  " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;">
                <input type="email" class=" w-50 mx-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Province" style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;">
              <input type="email" class=" w-50 "style="border: none; border-bottom: 1px solid black; border-radius: 0px;outline: none; background-color: white;" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Postal Code">
            </div>
            <div class="form-inline d-flex flex-row mt-5 mb-3" style="margin-left: 35%;">
                <button type="button" class="btn btn-danger mb-3 mx-2 pl-5" style="width: 100px;">Cancle</button>
                <button type="button" class="btn btn-info text-white mb-3 mx-2" style="width: 100px;">Save</button>
                
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

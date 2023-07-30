<?php

require_once("backend/app/user_access_updater.php");

$loggedUserData = null;
$access = new UserAccess();
if ($access->isLoggedIn()) {
    $loggedUserData = $access->getUserData();
}

?>

<nav class="d-flex justify-content-between align-items-center px-5">
    <div class=" h-100">
        <a href="index.php">
            <img src="images/free-logo-simple-illustration-vector-260nw-776460778.webp" />
        </a>
        <a href="index.php">DesignHome</a>
        <button class="btn-style-remover text-secondary" href="#" onclick="openSavedDesignModal();">Designs</button>
        <a href="orders.php">Orders</a>
        <a href="">Help</a>
        <a href="">
            Reviews
            <i class="fas fa-star"></i>
        </a>
    </div>
    <div class="d-flex h-100 justify-content-center align-items-center">
        <a href=""><img class="nav-img-contact" src="images/nav-image.png" alt="" /></a>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        <?php
        if ($loggedUserData) {
        ?>
            <span class="text-danger">Hi, <?php
                                            if ($loggedUserData["firstname"]) {
                                                echo (substr($loggedUserData["firstname"], 0, 7) . "...");
                                            } else {
                                                echo (substr($loggedUserData["email"], 0, 7) . "...");
                                            }
                                            ?></span>
            <i class="fas fa-bell px-3"></i>
            <?php if ($loggedUserData["image_url"]) {
            ?>
                <img class="rounded-circle bg-primary profile-picture "  style="width: 30px; height: 30px;" src="<?php echo ($loggedUserData["image_url"]) ?>" id="userProfileBtn">
                <button onclick="logout()">logout</button>
            <?php
            } else {
            ?>
                <div class="rounded-circle bg-primary profile-picture " style="width: 30px; height: 30px" id="userProfileBtn"></div>
            <?php
            }
            ?>
        <?php
        } else {
        ?>
            <button class="btn btn-primary py-1 text-center" id="signInBtn">Sign In</button>
        <?php
        }
        ?>
    </div>
</nav>

<!-- modals -->
<div class="modal" tabindex="-1" id="savedDesignModel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Saved Designs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="savedDesignModelContentContainer">
                NO designs yet
            </div>
        </div>
    </div>
</div>

<script>
    function logout() {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      responseObject = JSON.parse(request.responseText);
      if (responseObject.status === "success") {
        window.location.reload();
      } else {
        console.log(responseObject);
      }
    }
  };

  request.open("POST", "http://localhost/to%20do%20list/t-shirt-thing/desig-lab-new/backend/sign_out.php", true);
  request.send();
}


</script>
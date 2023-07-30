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
        <a href="">
            <img src="images/free-logo-simple-illustration-vector-260nw-776460778.webp" />
        </a>
        <a href="account.php">DesignHome</a>
        <a href="">Designs</a>
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
                <img class="rounded-circle bg-primary profile-picture " style="width: 30px; height: 30px;" src="<?php echo ($loggedUserData["image_url"]) ?>" id="userProfileBtn">
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
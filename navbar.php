<?php
require_once("backend/app/user_access_updater.php");

$loggedUserData = null;
$access = new UserAccess();
if ($access->isLoggedIn()) {
    $loggedUserData = $access->getUserData();
}

?>
<?php if (isset($loggedUserData["status"])) {
?>
    <nav class="d-flex justify-content-between align-items-center px-5">
        <div class=" h-100 d-flex  justify-content-between align-items-center">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="menu-hamberger-icon">
                    <i class="fas fa-bars " onclick="openNavigationSideBar()"></i>
                </div>
                <div class="nav-logo-container">
                    <a href="index.php" class="logo">
                        <img src="images/free-logo-simple-illustration-vector-260nw-776460778.webp" />
                    </a>
                </div>
            </div>
            <div class="navbar-link-container">
                <button class="btn-style-remover text-secondary" href="#" onclick="openSavedDesignModal();">Presets</button>
                <a href="" class="d-none">
                    Reviews
                    <i class="fas fa-star"></i>
                </a>
            </div>
        </div>
        <div class="d-flex h-100 justify-content-center align-items-center nav-bar-button-section">
            <img class="nav-img-contact navbar-talk-image" src="images/contact.png" alt="" />
            <div class="mx-3 nav-contact-para d-lg-flex d-none  flex-column ">
                <span class="nav-contact-para1">(+94)70 1234567</span>
                <span class="nav-contact-para2">Talk to an Expert</span>
            </div>
            <a class="d-none" href="cart.php"><i class="fas fa-shopping-cart fa-lg"></i></a>
        <?php
    } else {
        ?>
            <nav class="d-flex justify-content-between align-items-center px-5">
                <div class=" h-100 d-flex  justify-content-between align-items-center">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="menu-hamberger-icon">
                            <i class="fas fa-bars " onclick="openNavigationSideBar()"></i>
                        </div>
                        <div class="nav-logo-container">
                            <a href="index.php" class="logo">
                                <img src="images/free-logo-simple-illustration-vector-260nw-776460778.webp" />
                            </a>
                        </div>
                    </div>
                    <div class="navbar-link-container">
                        <a href="index.php">DesignHome</a>
                        <button class="btn-style-remover text-secondary" href="#" onclick="openSavedDesignModal();">Designs</button>
                        <a href="orders.php">Orders</a>
                        <a class="d-none" href="">Help</a>
                        <a href="" class="d-none">
                            Reviews
                            <i class="fas fa-star"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex h-100 justify-content-center align-items-center nav-bar-button-section">
                    <img class="nav-img-contact navbar-talk-image" src="images/contact.png" alt="" />
                    <div class="mx-3 nav-contact-para d-lg-flex d-none  flex-column ">
                        <span class="nav-contact-para1">(+94)70 1234567</span>
                        <span class="nav-contact-para2">Talk to an Expert</span>
                    </div>
                    <a class="d-none" href="cart.php"><i class="fas fa-shopping-cart fa-lg"></i></a>
                <?php
            }
                ?>

                <?php
                if ($loggedUserData) {
                ?>
                    <span class="text-danger nav-profile-para d-none d-lg-block">Hi, <?php
                                                                                        if ($loggedUserData["firstname"]) {
                                                                                            echo (substr($loggedUserData["firstname"], 0, 7) . "...");
                                                                                        } else {
                                                                                            echo (substr($loggedUserData["email"], 0, 7) . "...");
                                                                                        }
                                                                                        ?></span>
                    <i class=""></i>
                    <?php if ($loggedUserData["email"]) {
                    ?>

                        <a href="account.php">
                            <i class="fas fa-user"></i>

                        </a>
                        <div>
                            <button class="btn-style-remover px-3 bg-danger text-white rounded-2 py-0 my-0 fs-6" onclick="logout()">logout</button>
                            <div class="navbar-signouticon"><i class="fa-solid fa-right-from-bracket fa-lg" style="color: #ffffff;"></i></div>
                        </div>
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
                    <div id="signInBtn">
                        <button class="btn-style-signIn btn btn-primary py-1 text-center">Sign In</button>
                        <div class="navbar-signInicon"> <i class="fa-solid fa-right-to-bracket fa-lg " style="color: #ffffff;"></i></div>
                    </div>
                <?php
                }
                ?>
                </div>
            </nav>

            <!-- modals -->
            <div class="modal" tabindex="-1" id="savedDesignModel">
                <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Saved Designs</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="savedDesignModelContentContainer">

                        </div>
                    </div>
                </div>
            </div>
<?php
require_once("backend/app/user_access_updater.php");

$loggedUserData = null;
$access = new UserAccess();
if ($access->isLoggedIn()) {
    $loggedUserData = $access->getUserData();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>Design Labs</title>

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="controls.css" />

    <!-- scripts -->
    <script src="https://kit.fontawesome.com/f98ce7c376.js" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    <script src="renderer.js" defer></script>
    <script src="controls.js" defer></script>
    <script src="popup.js" defer></script>
    <script src="main.js" defer></script>
    <script src="script.js" defer></script>
    <script defer src="imageTextController.js"></script>

</head>

<body>
    <?php
    include 'navbar.php';
    ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between">
<div class="mb-4 d-flex justify-content-center  mt-3">
    <!--img src="" alt="example placeholder" style="width: 250px;" /-->
</div>
<div class="d-flex justify-content-center  mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
        <img id="imagePlaceholder" src="<?php echo $_GET['param1']; ?>"
            alt="example placeholder"  onerror="this.src='./images/sk.png'"  style="width: 200px; margin-left: 22px; margin-top: 40px;" />

    </span>
</div>
    <div class="mb-4 d-flex justify-content-center  mt-3">
        <!--img src=""
        alt="example placeholder" style="width: 250px;" /-->
    </div>
    <div class="d-flex justify-content-center  mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
    <img src="<?php echo $_GET['param2']; ?>"
        alt="example placeholder"  onerror="this.src='./images/sk.png'"  style="width: 200px;margin-left:22px;margin-top:40px;" id="imagePlaceholder1"  />
        
    </span>
</div>


<div class="mb-4 d-flex justify-content-center  mt-3">
        <!--img src=""
        alt="example placeholder" style="width: 250px;" /-->
    </div>
    <div class="d-flex justify-content-center  mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
    <img src="<?php echo $_GET['param3']; ?> "
        alt="example placeholder"  onerror="this.src='./images/sk.png'"  style="width: 200px;margin-left:22px;margin-top:40px;" id="imagePlaceholder2"  />
        
    </span>
</div>

<div class="mb-4 d-flex justify-content-center  mt-3">
        <!--img src=""
        alt="example placeholder" style="width: 250px;" /-->
    </div>
    <div class="d-flex justify-content-center  mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
    <img src="<?php echo $_GET['param4']; ?>"
        alt="example placeholder"  onerror="this.src='./images/sk.png'" style="width: 200px;margin-left:22px;margin-top:40px;" id="imagePlaceholder3"  />
      
    </span>
</div>


</div>
<div class="form-group mt-4 mb-5">
    <label for="exampleFormControlTextarea1 ">Instruction box</label>
    <textarea id="instuctionBox" class="form-control border border-primary mt-3" id="exampleFormControlTextarea1" rows="10" placeholder="give instruction as you need"></textarea>
  </div>
  <div class="d-flex justify-content-between">
  <div class="btn btn-primary btn-rounded border border-primary">
                <label class="form-label text-white m-1" for="customFilenew">Choose Images</label>
                <input type="file" class="form-control d-none" id="customFilenew"  />
            </div>
<input type="button" class="btn btn-primary btn-rounded border border-primary"" value="Place Order" id="Place Order" onclick="preset()">
</div>
</div>


<h1 id="hidetext" style="display: none;"><?php echo $_GET['param5']; ?></h1>


</div>




















</body>

</html>

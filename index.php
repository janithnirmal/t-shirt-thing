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
    if (isset($loggedUserData["status"])) {
    ?>




<div style="margin-top: 50px;" class="container">
    <!--Image-->
<div class="d-flex justify-content-between">
<div class="mb-4 d-flex justify-content-center mx-1 mt-3">
    <!--img src="" alt="example placeholder" style="width: 250px;" /-->
</div>
<div class="d-flex justify-content-center mx-1 mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
        <img id="imagePlaceholder" src="./images/sk.png"
            alt="example placeholder" style="width: 200px; margin-left: 22px; margin-top: 40px;" />
        <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
            <div class="btn btn-primary btn-rounded border border-primary">
                <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                <input type="file" class="form-control d-none" id="customFile1" accept="image/*" onchange="updateImage()" />
            </div>
        </div>
    </span>
</div>
    <div class="mb-4 d-flex justify-content-center mx-1 mt-3">
        <!--img src=""
        alt="example placeholder" style="width: 250px;" /-->
    </div>
    <div class="d-flex justify-content-center mx-1 mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
    <img src="./images/sk.png "
        alt="example placeholder" style="width: 200px;margin-left:22px;margin-top:40px;" id="imagePlaceholder1"  />
        <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
            <div class="btn btn-primary btn-rounded border border-primary">
                <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                <input type="file" class="form-control d-none" id="customFile2" onchange="updateImage1()" />
            </div>
        </div>
    </span>
</div>


<div class="mb-4 d-flex justify-content-center mx-1 mt-3">
        <!--img src=""
        alt="example placeholder" style="width: 250px;" /-->
    </div>
    <div class="d-flex justify-content-center mx-1 mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
    <img src="./images/sk.png "
        alt="example placeholder" style="width: 200px;margin-left:22px;margin-top:40px;" id="imagePlaceholder2"  />
        <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
            <div class="btn btn-primary btn-rounded border border-primary">
                <label class="form-label text-white m-1" for="customFile3">Choose file</label>
                <input type="file" class="form-control d-none" id="customFile3" onchange="updateImage2()" />
            </div>
        </div>
    </span>
</div>

<div class="mb-4 d-flex justify-content-center mx-1 mt-3">
        <!--img src=""
        alt="example placeholder" style="width: 250px;" /-->
    </div>
    <div class="d-flex justify-content-center mx-1 mt-3">
    <span class="border border-primary" style="width: 250px; height: 350px; position: relative;">
    <img src="./images/sk.png "
        alt="example placeholder" style="width: 200px;margin-left:22px;margin-top:40px;" id="imagePlaceholder3"  />
        <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
            <div class="btn btn-primary btn-rounded border border-primary">
                <label class="form-label text-white m-1" for="customFile4">Choose file</label>
                <input type="file" class="form-control d-none" id="customFile4" onchange="updateImage3()" />
            </div>
        </div>
    </span>
</div>


</div>
<div class="d-flex justify-content-between mt-5">
<button class="btn btn-primary btn-rounded border border-primary mx-5" id="submitButton" onclick="submitImages()" style="margin-left: 45%;font-size:20px;">Submit</button>
<input type="text" class="form-control" placeholder="Enter title" id="presettitle">
</div>
</div>









<div class="container mt-4">



<table style="border: 3px solid black; width: 100%;" id="presetTable">
    <h1 style="margin-left: 42%;">PRESET</h1>

       
        
    </table>













</div>






                    <?php
                } else {
                    ?>
                        <div class="section1 px-3" style="height: 100vh;">
                            <div class="container section1-layout d-flex justify-content-between align-items-center align-items-md-start flex-column flex-md-row ">
                                <!-- left side panel -->
                                <div class="section1-panel d-flex flex-md-column mt-3 mt-md-0 justify-content-center align-items-center section1-panel-sides side-panel-1 h-100 order-3 order-md-1 gap-2">
                                    <!-- box 1 -->
                                    <div class="basic-styling left-side-box1">
                                        <div class="list-group-item">
                                            <div id="btn1">
                                                <button id="clothTypeIndicationBtn" class="left-side-btn" style="background-color: #6c7a89">
                                                    Polo Tshirt
                                                </button>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div id="btn2">
                                                <button class="left-side-btn btn btn-primary" onclick="openGenderModel();" id="genderControlBtn">
                                                    Men
                                                </button>
                                                <div id="genderModelContainer">
                                                    <div class="modal" tabindex="-1" id="genderModel">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content  border border-1 border-secondary m-3">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-center">Gender</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="d-flex justify-content-center gap-3">
                                                                        <div class="d-flex gap-2">
                                                                            <input checked value="male" name="genderRadioInput" type="radio" id="menRadioBtn">
                                                                            <label class="btn btn-primary" for="menRadioBtn">Men</label>
                                                                        </div>
                                                                        <div class="d-none gap-2">
                                                                            <input value="female" name="genderRadioInput" type="radio" id="womenRadioBtn">
                                                                            <label class="btn btn-info" for="womenRadioBtn">Women</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div id="btn9">
                                                <button class="left-side-btn btn btn-primary" onclick="openPrintTypeModel();" id="printTypeControlBtn">
                                                    Emblishment
                                                </button>
                                                <div id="printTypeModelContainer">
                                                    <div class="modal" tabindex="-1" id="printTypeModel">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content  border border-1 border-secondary m-3">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-center">Print Type</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="d-flex justify-content-center gap-3">
                                                                        <div class="d-flex gap-2">
                                                                            <input checked value="Emblishment" name="printTypeRadioInput" type="radio" id="emblishmentRadioBtn">
                                                                            <label class="btn btn-primary" for="emblishmentRadioBtn">ScreenPrint</label>
                                                                        </div>
                                                                        <div class="d-flex gap-2">
                                                                            <input value="Embroidered" name="printTypeRadioInput" type="radio" id="embroideredRadioBtn">
                                                                            <label class="btn btn-info" for="embroideredRadioBtn">Embroidered</label>
                                                                        </div>
                                                                        <div class="d-flex gap-2">
                                                                            <input value="Sublimation " name="printTypeRadioInput" type="radio" id="sublimationRadioBtn">
                                                                            <label class="btn btn-info" for="sublimationRadioBtn">Sublimation</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                   




                                    <div class="list-group-item">
                                        <div id="btn3">
                                            <button class="left-side-btn" id="showModalss" style="background-color: #f62459" onclick="openProductModel();">
                                                Product
                                            </button>

                                            <div class="produtModelContainer">
                                                <div class="modal" tabindex="-1" id="productControlModel">
                                                    <div class="modal-dialog modal-fullscreen-md-down">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="product-control-nav d-flex justify-content-center">
                                                                    <!-- <button data-btntype="Gender" id="productControlNavigationChangeGender" class="d-flex btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Gender');">
                                                        <div class="product-control-number-icon">1</div>
                                                        <span class="product-control-number-text fw-light">Start here</span>
                                                    </button> -->
                                                                    <button data-btntype="Type" id="productControlNavigationChangeType" class="d-flex btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Type');">
                                                                        <div class="product-control-number-icon">2</div>
                                                                        <span class="product-control-number-text fw-light">Cloth Template</span>
                                                                    </button>
                                                                    <button data-btntype="Sleeves" id="productControlNavigationChangeSleeves" class="d-none btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Sleeves');">
                                                                        <div class="product-control-number-icon">3</div>
                                                                        <span class="product-control-number-text fw-light">Select Template</span>
                                                                    </button>
                                                                    <button data-btntype="TshirtButtons" id="productControlNavigationChangeTshirtButtons" class="d-none btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('TshirtButtons');">
                                                                        <div class="product-control-number-icon">3</div>
                                                                        <span class="product-control-number-text fw-light">Select Template</span>
                                                                    </button>
                                                                    <button data-btntype="Template" id="productControlNavigationChangeTemplate" class="d-none btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Template');">
                                                                        <div class="product-control-number-icon">4</div>
                                                                        <span class="product-control-number-text fw-light">Select Template</span>
                                                                    </button>
                                                                </div>
                                                                <hr>
                                                                <div class="product-control-body overflow-auto">
                                                                    <!-- <div id="productControlGenderSelectSection" class="d-flex flex-column  product-control-section">
                                                        <span class="text-center w-100 py-2">Let's Start Here...</span>
                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                            <div class="product-control-card-item">
                                                                <span>Men</span>
                                                                <img class="product-control-item-img" src="images/cloths/polo-t-shirt-front_male.png" />
                                                                <button onclick="changeGender('male');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Women</span>
                                                                <img class="product-control-item-img" src="images/cloths/polo-t-shirt-front_female.png" />
                                                                <button onclick="changeGender('female')" class="btn btn-secondary">Select</button>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                                    <div id="productControlTypeSelectSection" class="d-flex flex-column product-control-section">
                                                                        <span class="text-center w-100 py-2">Great! Now it's time to select what you want..</span>
                                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                                            <div class="product-control-card-item">
                                                                                <span>Polo T Shirt</span>
                                                                                <img class="product-control-item-img" src="images/cloths/polo-t-shirt-front_male.png" />
                                                                                <button onclick="changeProduct('polo-t-shirt'); " class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Cotten T Shirt</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                                <button onclick="changeProduct('cotton-t-shirt');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Bottom</span>
                                                                                <img class="product-control-item-img" src="images/cloths/bottom-front_male.png" />
                                                                                <button onclick="changeProduct('bottom'); " class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Jacket</span>
                                                                                <img class="product-control-item-img" src="images/cloths/jacket-front_male.png" />
                                                                                <button onclick="changeProduct('jacket'); " class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Shorts</span>
                                                                                <img class="product-control-item-img" src="images/cloths/short-front_male.png" />
                                                                                <button onclick="changeProduct('short');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Singlet</span>
                                                                                <img class="product-control-item-img" src="images/cloths/singlet-front_male.png" />
                                                                                <button onclick="changeProduct('singlet'); " class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="productControlSleevesSelectSection" class="d-none flex-column product-control-section">
                                                                        <span class="text-center w-100 py-2">We prepaired everything for you. Just select your template!</span>
                                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                                            <div class="product-control-card-item">
                                                                                <span>Short Sleeves</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                                <button onclick="sleeveSelection('shortSleeves');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Long Sleeves</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-longSleeves-chinese-front_male.png" />
                                                                                <button onclick="sleeveSelection('longSleeves')" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="productControlTemplateshortSleevesSelectSection" class="d-none flex-column product-control-section">
                                                                        <span class="text-center w-100 py-2">We prepaired everything for you. Just select your template!</span>
                                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                                            <div class="product-control-card-item">
                                                                                <span>Chinese</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-shortSleeves-chinese-front_male.png" />
                                                                                <button onclick="templateSection('chinese');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Chinese V Type</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-shortSleeves-chinese-v-type-front_female.png" />
                                                                                <button onclick="templateSection('chinese-v-type');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>V Neck</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-shortSleeves-vneck-front_male.png" />
                                                                                <button onclick="templateSection('vneck');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>V Cut with COller</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-shortSleeves-v-cut-with-coller-front_male.png" />
                                                                                <button onclick="templateSection('v-cut-with-coller')" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>V neck with Coller</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-shortSleeves-collar2buttons-front_male.png" />
                                                                                <button onclick="templateSection('collar2buttons');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="productControlTemplatelongSleevesSelectSection" class="d-none flex-column product-control-section">
                                                                        <span class="text-center w-100 py-2">We prepaired everything for you. Just select your template!</span>
                                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                                            <div class="product-control-card-item">
                                                                                <span>Chinese</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-longSleeves-chinese-front_male.png" />
                                                                                <button onclick="templateSection('chinese');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>Chinese V Type</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-longSleeves-chinese-v-type-front_female.png" />
                                                                                <button onclick="templateSection('chinese-v-type');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>V Neck</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-longSleeves-vneck-front_male.png" />
                                                                                <button onclick="templateSection('vneck');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>V Cut with COller</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-longSleeves-v-cut-with-coller-front_male.png" />
                                                                                <button onclick="templateSection('v-cut-with-coller')" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>V neck with Coller</span>
                                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-longSleeves-collar2buttons-front_male.png" />
                                                                                <button onclick="templateSection('collar2buttons');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="productControlTshirtButtonsSelectSection" class="d-none flex-column product-control-section">
                                                                        <span class="text-center w-100 py-2">We prepaired everything for you. Just select your template!</span>
                                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                                            <div class="product-control-card-item">
                                                                                <span>2 Buttons Only</span>
                                                                                <img class="product-control-item-img" src="images/cloths/polo-t-shirt-front_male.png" />
                                                                                <button onclick="tShirtButtonNeckSection('2 Buttons + Only');" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                            <div class="product-control-card-item">
                                                                                <span>2 Buttons + Open</span>
                                                                                <img class="product-control-item-img" src="images/cloths/polo-t-shirt-front_male.png" />
                                                                                <button onclick="tShirtButtonNeckSection('2 Buttons + Open')" class="btn btn-secondary">Select</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div id="btn4">
                                            <button class="d-none left-side-btn" style="background-color: #343f86" onclick="opemMaterialModel();">
                                                Budget
                                            </button>
                                            <div id="materialContainer">
                                                <div class="modal" tabindex="-1" id="materialModel">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content  border border-1 border-secondary m-3">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-center">Select the material of your product</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                                                                    <button style="font-size: 12px; width: max-content;" class="btn btn-primary">Budget (220GSM)</button>
                                                                    <p>
                                                                        A breathable and extremely comfortable material (220GSM Crocodile material / 190GSM Cotton t-shirt material) designed to last longer without pilling. An excellent choice for profit oriented promotional events in universities, schools and societies etc. (Please contact customer care service for 190GSM crocodile / 170GSM cotton t-shirt material prices)
                                                                    </p>
                                                                    <button style="font-size: 12px; width: max-content;" class="btn btn-info">Corporate (220GSM)</button>
                                                                    <p>
                                                                        An optimized fabric for a premium look and feel with all the positive characteristics budget material has to offer (220GSM crocodile material / 190 GSM cotton t-shirt material). Highly recommended for professionals and business staffs. (Please contact our customer care service for 190GSM crocodile / 170GSM cotton t-shirt material prices)
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <!-- box 2 -->
                                    <div class="basic-styling left-side-box2 d-flex  flex-md-column justify-content-center align-items-center">
                                        <div class="list-group-item" id="btn6">
                                            <button onclick="openTextPanel()" class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2">
                                                <i class="left-side-icons fas fa-t"></i>
                                                <p class="p-0 m-0">Add Text</p>
                                            </button>
                                            <!-- controls for adding text -->
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                                                <!-- Modal -->
                                                <div class="modal fade " id="addTextModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-fullscreen-md-down">
                                                        <div class="modal-content" style="background-color: #e3e8ce;">
                                                            <div class="modal-header">
                                                                <p class="modal-title fs-3 fw-bold text-center" id="exampleModalLabel">Edit Text</p>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-12">
                                                                    <button class="w-100 card d-flex flex-column align-items-center p-2" style="background-color: #e3e8ce;">
                                                                        <div class="fs-6">Text</div>
                                                                        <textarea class="edit-text-textarea form-control w-100" col="1" id="textAddingInput" name="" placeholder="Your Text"></textarea>
                                                                    </button>
                                                                </div>

                                                                <div class="card mt-4" style="background-color: #e3e8ce;">
                                                                    <!-- <div class="form-group d-flex flex-column align-items-center p-2">
                                                    <label for="fontSelector" class="fs-6 py-2">Font</label>
                                                    <select class="form-control" id="fontSelector" style="background-color: #e3e8ce;">
                                                        <option value="Arial">Arial</option>
                                                        <option value="Helvetica">Helvetica</option>
                                                        <option value="Times New Roman">Times New Roman</option>
                                                        <option value="Courier New">Courier New</option>
                                                        <option value="Verdana">Verdana</option>
                                                    </select>
                                                </div> -->

                                                                    <button onclick="" class="w-100 size-qty-box2 btn-style-remover">
                                                                        <div class="d-flex flex-column align-items-center justify-content-center p-1">
                                                                            <div class="fs-6 p-3">Font Color</div>
                                                                            <input type="color" class="border-0 " id="textColorInput">
                                                                        </div>
                                                                    </button>
                                                                </div>

                                                                <div class="mt-4">
                                                                    <div class="row m-0">
                                                                        <div class="p-0">
                                                                            <div class="card" style="background-color: #e3e8ce;">
                                                                                <div class="card-body d-flex flex-column align-items-center">
                                                                                    <h3 class="card-title fs-6 py-2">Font Size</h3>
                                                                                    <div class="btn-group" role="group" aria-label="Font Size Controls">
                                                                                        <button type="button" class="card rounded-0 text-pop-sizebtn btn" onclick="decreaseFontSize()">-</button>
                                                                                        <input id="fontSizeInput" type="text" class="text-pop-sizebtn1" min="0" max="120" value="16">
                                                                                        <button class="card text-pop-sizebtn2 rounded-0 fs-6  fw-bold btn">pt</button>
                                                                                        <button type="button" class="card text-pop-sizebtn rounded-0 btn" onclick="increaseFontSize()">+</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="mt-4">
                                                <div class="row m-0">
                                                    <div class="p-0">
                                                        <div class="card d-flex flex-column  align-items-center" style="background-color: #e3e8ce;">
                                                            <div class="fs-6">Font Style </div>
                                                            <div class="p-3 gap-4">
                                                                <button class="text-pop-bottomicon fw-bold">B</button>
                                                                <button class="text-pop-bottomicon"><img src="images/text_popup_underline.png" class="text-pop-bottomiconimage" alt=""></button>
                                                                <button class="text-pop-bottomicon"><img src="images/text_popup_italic.png" class="text-pop-bottomiconimage" alt=""></button>
                                                                <button class="text-pop-bottomicon">S</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                                            </div>
                                                            <div class="modal-footer d-flex  justify-content-center">
                                                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button onclick="addTextToSelectedCanvas();" class="btn btn-primary">Add Text</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="list-group-item" id="btn7">
                                            <button onclick="openImageModel()" class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2">
                                                <i class="left-side-icons fas fa-image"></i>
                                                <p class="p-0 m-0">Add Image</p>
                                            </button>
                                            <!-- add text model controls -->
                                            <!--image-->
                                            <div id="imageModelContainer">
                                                <div class="modal" tabindex="-1" id="addImageModel">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content  border border-1 border-secondary m-3">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label>Add Image to Selected Canvas</label>
                                                                    <input type="file" id="imageAddingInput" class="form-control">
                                                                </div>
                                                                <button onclick="addImageToSelectedCanvas()" class="btn btn-primary  mx-2" id="adding image">Add image</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                      
                                            <div class="list-group-item" id="btn8">
                                                <button class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2" onclick="saveCurrentDesign();">
                                                    <i class="left-side-icons fas fa-download"></i>
                                                    <p class="p-0 m-0">Save Design</p>
                                                </button>
                                            </div>
                                       
                                        <div class="list-group-item" id="btn10">
                                            <button class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2" onclick="openSavedDesignModals()">
                                                <i class="left-side-icons fas fa-sliders-h"></i>
                                                <p class="p-0 m-0">Preset</p>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- box 3 -->
                                    <!-- size & qty -->


                                   
                                        <div class="left-side-box3">
                                            <div class="pricetagcontainer">
                                                <button class="pricetagbtn3box d-flex flex-column flex-md-row gap-2 justify-content-center align-items-center p-2" onclick="placeOrderModalOpen();">
                                                    <img src="images/Cart.png" style="width: 25px; height: 25px" />
                                                    <p class="text-white p-0 m-0" ">MIN QTY : 35</p>
                                                </button> 
                                            </div>
                                        </div>
                                   
                                    <!-- ordering modal -->
                                    <div class=" modal" tabindex="-1" id="orderNowModal">
                                                    <div class="modal-dialog modal-fullscreen-md-down">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Ordering Process</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body d-flex flex-column align-items-center">
                                                                <img src="" class="w-50 rounded-3 p-2">
                                                                <div class="d-flex flex-column">
                                                                    <h4 id="orderNowModalQty"></h4>
                                                                    <div id="orderNowModalDetails"></div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button onclick="placeOrder()" type="button" class="btn btn-primary">Confirm Order</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <!-- middle panel -->
                                        <div class="section1-panel  section1-panel-mid side-panel-2 h-100 order-1 order-md-2 py-5 d-flex justify-content-center">
                                            <div class="t-shirt-panel-container ">
                                                <!-- render -->
                                                <div id="canvas" class=" t-shirt-panel-container d-flex justify-content-center align-items-center position-absolute"></div>
                                                <!-- strips -->
                                                <div class="canvasOverly ">
                                                    <div id="polo-t-shirt" class="canvasOverlyInner d-block">
                                                        <div data-controlside="front" id="polo-t-shirt-StripControl-front" class=" canvasOverlyInner-front d-block control-sectinos-sides">
                                                            <div class="strip-controls">
                                                                <!-- stips neck-->
                                                                <div class="controller-indication-design polo-t-shirt-coller-front-left" onclick="controllerModelOpen('neck')"></div>
                                                                <div class="controller-indication-design polo-t-shirt-coller-front-right" onclick="controllerModelOpen('neck')"></div>

                                                                <!-- strips arm -->
                                                                <div class="controller-indication-design polo-t-shirt-front-left-arm" onclick="controllerModelOpen('arm');"></div>
                                                                <div class="controller-indication-design polo-t-shirt-front-right-arm" onclick="controllerModelOpen('arm');"></div>
                                                            </div>
                                                        </div>
                                                        <div data-controlside="back" id="polo-t-shirt-StripControl-back" class="canvasOverlyInner-back d-none control-sectinos-sides">
                                                            <!--strips neck-->
                                                            <div class="controller-indication-design polo-t-shirt-coller-back" onclick="controllerModelOpen('neck')"></div>
                                                            <!-- strips arm -->
                                                            <div class="controller-indication-design polo-t-shirt-back-left-arm" onclick="controllerModelOpen('arm');"></div>
                                                            <div class="controller-indication-design polo-t-shirt-back-right-arm" onclick="controllerModelOpen('arm');"></div>
                                                        </div>
                                                        <div data-controlside="left" id="polo-t-shirt-StripControl-left" class="canvasOverlyInner-left d-none control-sectinos-sides">
                                                            <!-- stips neck-->

                                                            <div class="controller-indication-design polo-t-shirt-coller-left" onclick="controllerModelOpen('neck')"></div>
                                                            <!-- strips arm -->
                                                            <div class="controller-indication-design polo-t-shirt-left-arm" onclick="controllerModelOpen('arm');"></div>
                                                            <!-- straight line -->
                                                            <div class="controller-indication-design polo-t-shirt-left-straight-line" onclick="controllerModelOpen('sides')"></div>
                                                        </div>
                                                        <div data-controlside="right" id="polo-t-shirt-StripControl-right" class="canvasOverlyInner-right d-none control-sectinos-sides">
                                                            <!-- stips neck-->
                                                            <div class="controller-indication-design polo-t-shirt-coller-right" onclick="controllerModelOpen('neck')"></div>
                                                            <!-- strips arm -->
                                                            <div class="controller-indication-design polo-t-shirt-right-arm" onclick="controllerModelOpen('arm');"></div>
                                                            <!-- straight line -->
                                                            <div class="controller-indication-design polo-t-shirt-right-straight-line" onclick="controllerModelOpen('sides')"></div>
                                                        </div>
                                                    </div>
                                                    <div id="cotton-t-shirt" class="canvasOverlyInner  d-none">
                                                        <div data-controlside="front" id="cotton-t-shirt-StripControl-front" class="canvasOverlyInner-front d-block control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="back" id="cotton-t-shirt-StripControl-back" class="canvasOverlyInner-back d-none control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="left" id="cotton-t-shirt-StripControl-left" class="canvasOverlyInner-left d-none control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="right" id="cotton-t-shirt-StripControl-right" class="canvasOverlyInner-right d-none control-sectinos-sides">
                                                        </div>
                                                    </div>
                                                    <div id="short" class="canvasOverlyInner  d-none">
                                                        <div data-controlside="front" id="short-StripControl-front" class="canvasOverlyInner-front d-block control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="back" id="short-StripControl-back" class="canvasOverlyInner-back d-none control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="left" id="short-StripControl-left" class="canvasOverlyInner-left d-none control-sectinos-sides">
                                                            <div class="controller-indication-design short-leg-left" onclick="controllerModelOpen('sides')"></div>
                                                        </div>
                                                        <div data-controlside="right" id="short-StripControl-right" class="canvasOverlyInner-right d-none control-sectinos-sides">
                                                            <div class="controller-indication-design short-leg-right" onclick="controllerModelOpen('sides')"></div>
                                                        </div>
                                                    </div>
                                                    <div id="bottom" class="canvasOverlyInner  d-none">
                                                        <div data-controlside="front" id="bottom-StripControl-front" class="canvasOverlyInner-front d-block control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="back" id="bottom-StripControl-back" class="canvasOverlyInner-back d-none control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="left" id="bottom-StripControl-left" class="canvasOverlyInner-left d-none control-sectinos-sides">
                                                            <div class="controller-indication-design bottom-leg-left" onclick="controllerModelOpen('sides')"></div>

                                                        </div>
                                                        <div data-controlside="right" id="bottom-StripControl-right" class="canvasOverlyInner-right d-none control-sectinos-sides">
                                                            <div class="controller-indication-design bottom-leg-right" onclick="controllerModelOpen('sides')"></div>
                                                        </div>
                                                    </div>
                                                    <div id="singlet" class="canvasOverlyInner  d-none">
                                                        <div data-controlside="front" id="singlet-StripControl-front" class="canvasOverlyInner-front d-block control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="back" id="singlet-StripControl-back" class="canvasOverlyInner-back d-none control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="left" id="singlet-StripControl-left" class="canvasOverlyInner-left d-none control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="right" id="singlet-StripControl-right" class="canvasOverlyInner-right d-none control-sectinos-sides">
                                                        </div>
                                                    </div>
                                                    <div id="jacket" class="canvasOverlyInner  d-none">
                                                        <div data-controlside="front" id="jacket-StripControl-front" class="canvasOverlyInner-front d-block control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="back" id="jacket-StripControl-back" class="canvasOverlyInner-back d-none control-sectinos-sides">
                                                        </div>
                                                        <div data-controlside="left" id="jacket-StripControl-left" class="canvasOverlyInner-left d-none control-sectinos-sides">
                                                            <div class="controller-indication-design jacket-arm-left-top" onclick="controllerModelOpen('arm')"></div>
                                                            <div class="controller-indication-design jacket-arm-left-bottom" onclick="controllerModelOpen('arm')"></div>
                                                        </div>
                                                        <div data-controlside="right" id="jacket-StripControl-right" class="canvasOverlyInner-right d-none control-sectinos-sides">
                                                            <div class="controller-indication-design jacket-arm-right-top" onclick="controllerModelOpen('arm')"></div>
                                                            <div class="controller-indication-design jacket-arm-right-bottom" onclick="controllerModelOpen('arm')"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- image text  -->
                                                <div class="image-text-container " id="imageTextContainer">
                                                    <div data-type="textimage" data-side="front" id="canvasOverlyFront" class="d-block position-absolute    canvas-overly" style="width: 400px; height: 540px;"></div>
                                                    <div data-type="textimage" data-side="back" id="canvasOverlyBack" class="d-none position-absolute    canvas-overly" style="width: 400px; height: 540px;"></div>
                                                    <div data-type="textimage" data-side="left" id="canvasOverlyLeft" class="d-none position-absolute    canvas-overly" style="width: 400px; height: 540px;"></div>
                                                    <div data-type="textimage" data-side="right" id="canvasOverlyRight" class="d-none position-absolute    canvas-overly" style="width: 400px; height: 540px;"></div>
                                                </div>

                                                <div class="image-text-controller-icons position-absolute">
                                                    <button onclick="removeSelectedItem()" id="canvasSelectedItemDeleteBtn" class="py-1 px-2 btn-style-remover btn rounded-2 bg-dark fw-bold text-white"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>

                                            <!-- model contianer -->
                                            <div class="modelContainer">
                                                <!-- Modal - polo neck strip -->
                                                <div class="modal fade" id="neckStripControlModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5">Neck Strip Lines</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="d-flex justify-content-center align-items-center p-3 my-3">
                                                                    <div class="d-flex flex-column py-3 bg-secondary" style="rotate: -180deg;" id="neckStripLinePreviewContainer">

                                                                    </div>
                                                                </div>

                                                                <div class="p-2">
                                                                    <div class="fs-5 text-center">Line Count</div>
                                                                    <input id="neckStripLineControlCountInput" onchange="neckLineCounter(event)" type="number" class=" form-control strip-control-modal-line-neck-line-count" value="0" min="0" max="3" />
                                                                </div>
                                                                <div class="p-2">
                                                                    <div class="fs-5 text-center">Selected Line</div>
                                                                    <select id="neckLineSelector" class="form-control" onchange="selectneckLine(event)">
                                                                        <option value="0">No Lines</option>
                                                                    </select>
                                                                </div>
                                                                <div class="tshirt-neck-line-control-container d-none" id="neckLineControlSection">
                                                                    <div>
                                                                        <div class="p-2">
                                                                            <div class="fs-5 text-center">Line Color & Thickness</div>
                                                                            <div class="d-flex justify-content-between">
                                                                                <input id="neckStripLinePreviewColorInput" onchange="updateneckStripData(event, 'color')" type="color" class="form-control" style="width: 50px; height: 50px;" class="rounded-pill" />
                                                                                <input id="neckStripLinePreviewThicknessInput" onchange="updateneckStripData(event, 'thickness')" type="number" class="form-control" min="1" max="4">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cancelLineData();">Close</button>
                                                                <button type="button" class="btn btn-primary" onclick="updateneckLineData()">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal - polo arm strip -->
                                                <div class="modal fade" id="armStripControlModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5">arm Strip Lines</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="d-flex justify-content-center align-items-center p-3 my-3">
                                                                    <div class="d-flex flex-column py-3 bg-secondary" style="rotate: -180deg;" id="armStripLinePreviewContainer">

                                                                    </div>
                                                                </div>

                                                                <div class="p-2">
                                                                    <div class="fs-5 text-center">Line Count</div>
                                                                    <input id="armStripLineControlCountInput" onchange="armLineCounter(event)" type="number" class=" form-control strip-control-modal-line-arm-line-count" value="0" min="0" max="3" />
                                                                </div>
                                                                <div class="p-2">
                                                                    <div class="fs-5 text-center">Selected Line</div>
                                                                    <select id="armLineSelector" class="form-control" onchange="selectarmLine(event)">
                                                                        <option value="0">No Lines</option>
                                                                    </select>
                                                                </div>
                                                                <div class="tshirt-arm-line-control-container d-none" id="armLineControlSection">
                                                                    <div>
                                                                        <div class="p-2">
                                                                            <div class="fs-5 text-center">Line Color & Thickness</div>
                                                                            <div class="d-flex justify-content-between">
                                                                                <input id="armStripLinePreviewColorInput" onchange="updatearmStripData(event, 'color')" type="color" class="form-control" style="width: 50px; height: 50px;" class="rounded-pill" />
                                                                                <input id="armStripLinePreviewThicknessInput" onchange="updatearmStripData(event, 'thickness')" type="number" class="form-control" min="1" max="3">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cancelLineData();">Close</button>
                                                                <button type="button" class="btn btn-primary" onclick="updatearmLineData()">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal - polo sides strip -->
                                                <div class="modal fade" id="sidesStripControlModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5">Sides Strip Lines</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="d-flex justify-content-center align-items-center p-3 my-3">
                                                                    <div class="d-flex flex-column py-3 bg-secondary" style="rotate: -180deg;" id="sidesStripLinePreviewContainer">

                                                                    </div>
                                                                </div>

                                                                <div class="p-2">
                                                                    <div class="fs-5 text-center">Line Count</div>
                                                                    <input id="sidesStripLineControlCountInput" onchange="sidesLineCounter(event)" type="number" class=" form-control strip-control-modal-line-sides-line-count" value="0" min="0" max="3" />
                                                                </div>
                                                                <div class="p-2">
                                                                    <div class="fs-5 text-center">Selected Line</div>
                                                                    <select id="sidesLineSelector" class="form-control" onchange="selectsidesLine(event)">
                                                                        <option value="0">No Lines</option>
                                                                    </select>
                                                                </div>
                                                                <div class="tshirt-sides-line-control-container d-none" id="sidesLineControlSection">
                                                                    <div>
                                                                        <div class="p-2">
                                                                            <div class="fs-5 text-center">Line Color & Thickness</div>
                                                                            <div class="d-flex justify-content-between">
                                                                                <input id="sidesStripLinePreviewColorInput" onchange="updatesidesStripData(event, 'color')" type="color" class="form-control" style="width: 50px; height: 50px;" class="rounded-pill" />
                                                                                <input id="sidesStripLinePreviewThicknessInput" onchange="updatesidesStripData(event, 'thickness')" type="number" class="form-control" min="1" max="3">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cancelLineData();">Close</button>
                                                                <button type="button" class="btn btn-primary" onclick="updatesidesLineData()">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- right side panel -->
                                        <div class="section1-panel d-flex flex-row flex-md-column  section1-panel-sides side-panel-3 d-flex order-2 order-md-3  h-100 ">
                                            <!-- size & qty -->
                                           
                                                <div id="clothCombinationOptionViewerToggle" class="d-block d-md-none">
                                                    <i onclick="toggleClothCombinationPanel()" class="fas fa-shirt p-2 bg-secondary text-white rounded-5 my-2"></i>
                                                </div>

                                                <div id="clothCombinationOptionViewerPanel" class="basic-styling right-side-box1 bg-white d-none d-md-block my-2">
                                                    <div class="right-side-box-btn-container">
                                                        <div class="d-flex-column">
                                                            <button style="background-color: #2596be" class="right-side-box-btn">
                                                                Men
                                                            </button>
                                                            <button style="background-color: #8e48ae" class="right-side-box-btn">
                                                                Men
                                                            </button>
                                                            <button style="background-color: #4482c9" class="right-side-box-btn">
                                                                Woman
                                                            </button>
                                                            <button style="background-color: #8e44ad" class="right-side-box-btn">
                                                                Woman
                                                            </button>
                                                        </div>

                                                        <div class="d-flex-column">
                                                            <button style="background-color: #1f3a93" class="right-side-box-btn" onclick="opemMaterialModel();">
                                                                Coparate
                                                            </button>
                                                            <button style="background-color: #1f3a93" class="right-side-box-btn" onclick="opemMaterialModel();">
                                                                Budget
                                                            </button>
                                                            <button style="background-color: #fb6e0d" class="right-side-box-btn" onclick="opemMaterialModel();">
                                                                Budget
                                                            </button>
                                                            <button style="background-color: #fb6e0d" class="right-side-box-btn" onclick="opemMaterialModel();">
                                                                Coparate
                                                            </button>
                                                        </div>

                                                        <div class="d-flex-column">
                                                            <span class="right-side-box-num" id="mc" style="font-size: 10px;"></span>
                                                            <span class="right-side-box-num" id="mb" style="font-size: 10px;"> </span>
                                                            <span class="right-side-box-num" id="wb" style="font-size: 10px;"></span>
                                                            <span class="right-side-box-num" id="wc" style="font-size: 10px;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <!-- color controls -->
                                            <div class="basic-styling big-box d-flex justify-content-center flex-column align-items-center">
                                                <div class="dropdown">
                                                    <!-- <button onclick="toggleDropdown1()" class="size-qty-box2 btn-style-remover d-flex-column" style="align-items: center; justify-content: center; gap: 10px"> -->
                                                    <button onclick="openModelColorControl()" class="size-qty-box2 d-flex btn-style-remover d-flex-column" style="align-items: center; justify-content: center; gap: 10px">
                                                        <div class="small-box" id="small-box"></div>
                                                        <span class="d-none d-md-block">Color</span> <i class="fas fa-chevron-down"></i>
                                                    </button>

                                                    <div id="colorControlModelContainer">
                                                        <div class="modal" tabindex="-1" id="colorControlModel">
                                                            <div class="modal-dialog ">
                                                                <div class="modal-content  border border-1 border-secondary m-3">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-center">Select A Color</h5>

                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="d-flex justify-content-center gap-3 w-100">
                                                                            <div class="w-100 d-flex justify-content-center align-items-center gap-3">
                                                                                <!-- Color Picker Input -->
                                                                                <div class="set-color-input-field col-6">
                                                                                    <input type="color" id="colorPicker" class="">
                                                                                </div>

                                                                                <!-- Set Color Button -->
                                                                                <button class="col-6 btn btn-primary" onclick="setColor(); colorUpdate();">Set Color</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            
                                                <!-- size & qty -->
                                                <div class="basic-styling big-box order-md-2 order-4">
                                                    <div class="d-flex-column" style="height: 100%">
                                                        <!-- <button onclick="toggleDropdown2()" class="size-qty-box2 btn-style-remover d-flex-column" style=" height: 100%; align-items: center; justify-content: center; gap: 10px;"> -->
                                                        <button onclick="openSizeQuantityModel();" class="size-qty-box2 btn-style-remover d-flex d-flex-column" style=" height: 100%; align-items: center; justify-content: center; gap: 10px;">
                                                            <div class="size-qty-box1" id="sizeItems"></div>
                                                            <span style="width: 100%">Size & Qty</span>

                                                            <i class="fas fa-chevron-down"></i>
                                                        </button>

                                                        <div class="modal" tabindex="-1" id="sizeQuantityModel">
                                                            <div class="modal-dialog modal-fullscreen-md-down">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Select your combination.</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="align-items-end flex-column">
                                                                            <div class="p-2 rounded-3 border border-1 border-secondary w-100">
                                                                                <!-- <p class="text-center">Select your combination.</p> -->
                                                                                <div class="size-box1 d-flex justify-content-center flex-column gap-3 w-100">
                                                                                    <div class="w-100 d-flex">
                                                                                        <div class="w-50">
                                                                                            <input type="radio" id="combinationMen" name="combinationGender" />
                                                                                            <label for="combinationMen" class=" popup-btn w-75" style="background-color: #0c7ce5">
                                                                                                Men
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="w-50">
                                                                                            <input type="radio" id="combinationWomen" name="combinationGender" />
                                                                                            <label for="combinationWomen" class=" popup-btn w-75" style="background-color: #8e44ad">
                                                                                                Woman
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="w-100 d-flex">
                                                                                        <div class="w-50">
                                                                                            <input type="radio" id="combinationBudget" name="combinationBudget" />
                                                                                            <label for="combinationBudget" class=" popup-btn w-75" style="background-color: #0c7ce5">
                                                                                                Budget
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="w-50">
                                                                                            <input type="radio" id="combinationCoperate" name="combinationBudget" />
                                                                                            <label for="combinationCoperate" class=" popup-btn w-75" style="background-color: #8e44ad">
                                                                                                Coperate
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="my-2 d-flex flex-column gap-1">
                                                                                <div class="w-100 d-flex gap-2">
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">XS</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" id="xs" />
                                                                                    </div>
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">S</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" id="s" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="w-100 d-flex gap-2">
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">M</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" id="m" />
                                                                                    </div>
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">L</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" id="l" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="w-100 d-flex gap-2">
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">Xl</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" id="xl" />
                                                                                    </div>
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">2XXL</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" id="2xl" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="w-100 d-flex gap-2">
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">3XXl</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" id="3xl" />
                                                                                    </div>
                                                                                    <div class="w-50 combination-size d-flex">
                                                                                        <div class="combination-size-input p-1">XXl</div>
                                                                                        <input type="number" class="bg-transparent border-1 border border-secondary w-100" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="d-flex gap-2 w-100">
                                                                                <button class="size-chart-text btn btn-secondary w-50">Size Chart</button>

                                                                                <button class="size-chart-text btn btn-dark w-50" onclick="size()">Add Quantities</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                           

                                            <!-- navigation control -->
                                            <div class="basic-styling right-side-box2 order-md-4 order-3 d-flex justify-content-center align-items-center">
                                                <div class="t_changebtnbox d-flex gap-1 flex-row flex-md-column" id="viewPortChange">
                                                    <button class="t_changebtn t_changebtn1" onclick="viewChange('front');">
                                                        <div class="p-3 t_changebtnimg t_changebtnimg1"></div>
                                                        <p class="t_changebtnpara">Front view</p>
                                                    </button>
                                                    <button class="t_changebtn t_changebtn2" onclick="viewChange('left');">
                                                        <div class="p-3 t_changebtnimg t_changebtnimg2"></div>
                                                        <p class="t_changebtnpara">Left view</p>
                                                    </button>
                                                    <button class="t_changebtn t_changebtn3" onclick="viewChange('back');">
                                                        <div class="p-3 t_changebtnimg t_changebtnimg3"></div>
                                                        <p class="t_changebtnpara">Back view</p>
                                                    </button>
                                                    <button class="t_changebtn t_changebtn4" onclick="viewChange('right');">
                                                        <div class="p-3 t_changebtnimg t_changebtnimg4"></div>
                                                        <p class="t_changebtnpara">Right view</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <!-- models -->
                            <div class="model-container">
                                <div class="modal fade" id="signInModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
                                        <div class="modal-content modal-custom-height">

                                            <div class="modal-body">
                                                <div class="row" id="signInModalSignInSection">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-1 text-center" id="exampleModalLabel">
                                                            Sign In
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group m-0" style="padding: 0px 40px 15px 40px;">
                                                            <span class="input-group-text rounded-0" id="basic-addon1" style="background-color: rgb(205, 205, 205); height: 50px;"><i class="fa-solid fa-envelope"></i></span>
                                                            <input id="emailInput" style="background-color: rgb(205, 205, 205); height: 50px;" type="email" class="form-control rounded-0" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group m-0" style="padding: 0px 40px 15px 40px;">
                                                            <span style="background-color: rgb(205, 205, 205); height: 50px;" class="input-group-text rounded-0" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>

                                                            <input id="passwordInput" style="background-color: rgb(205, 205, 205); height: 50px;" type="password" class="form-control rounded-0" placeholder="Passowrd" aria-label="passowrd" aria-describedby="basic-addon1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-end text-primary" style="font-size: 13px;  padding: 0 50px 0px 0px; cursor: pointer;"><a href="password.php">forgot passowrd?</a></div>
                                                    <div style="padding: 0px 50px 15px 50px;">
                                                        <button onclick="SignIn();" style="margin-top: 25px;  height: 50px; font-size: 15px; font-weight: bold; background-color: rgb(46, 228, 176)" class="text-light col-12 btn">Sign In</button>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <div class="col-12 text-center">
                                                            <span style="font-size: 18px">Or Continue with</span>
                                                        </div>
                                                        <div class="col-12 text-center" style="margin-top: 12px;">

                                                        </div>
                                                        <div class="col-12 text-center" style="margin-top: 70px;">
                                                            <span style="font-size: 15px;">Not a member? <span class="text-primary" style="cursor: pointer;" id="signInUpChangeBtn" onclick="signInModalViewChanger();">Sign Up Now!</span> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-none" id="signInModalSignUpSection">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-1 text-center" id="exampleModalLabel">
                                                            Sign Up
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group m-0" style="padding: 0px 40px 15px 40px;">
                                                            <span class="input-group-text rounded-0" id="basic-addon1" style="background-color: rgb(205, 205, 205); height: 50px;"><i class="fa-solid fa-envelope"></i></span>
                                                            <input id="emailInputs" style="background-color: rgb(205, 205, 205); height: 50px;" type="email" class="form-control rounded-0" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group m-0" style="padding: 0px 40px 15px 40px;">
                                                            <span style="background-color: rgb(205, 205, 205); height: 50px;" class="input-group-text rounded-0" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                                            <input id="passwordInputs" style="background-color: rgb(205, 205, 205); height: 50px;" type="password" class="form-control rounded-0" placeholder="Passowrd" aria-label="passowrd" aria-describedby="basic-addon1" />
                                                        </div>
                                                    </div>
                                                    <div style="padding: 0px 50px 15px 50px;">
                                                        <button onclick="SignUp()" style="margin-top: 25px;  height: 50px; font-size: 15px; font-weight: bold; background-color: rgb(46, 228, 176)" class="text-light col-12 btn">Sign Up</button>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
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


                            <?php
                                }
                                    ?>



</body>

</html>

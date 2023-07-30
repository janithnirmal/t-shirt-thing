<?php
require_once("./backend/config.php");

// require_once("backend/app/user_access_updater.php");

// $loggedUserData = null;
// $access = new UserAccess();
// if ($access->isLoggedIn()) {
//     $loggedUserData = $access->getUserData();
// }



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>Document</title>

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
    <script src="renderer.js" defer></script>
    <script src="controls.js" defer></script>
    <script src="popup.js" defer></script>
    <script src="main.js" defer></script>
    <script src="script.js" defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="section1 px-3">
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
                                                    <div class="d-flex gap-2">
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
                                ScreenPrint
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
                                                        <input checked value="ScreenPrint" name="printTypeRadioInput" type="radio" id="screenPrintRadioBtn">
                                                        <label class="btn btn-primary" for="screenPrintRadioBtn">ScreenPrint</label>
                                                    </div>
                                                    <div class="d-flex gap-2">
                                                        <input value="Embroidered" name="printTypeRadioInput" type="radio" id="embroideredRadioBtn">
                                                        <label class="btn btn-info" for="embroideredRadioBtn">Embroidered</label>
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
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="product-control-nav d-flex justify-content-center">
                                                    <button id="productControlNavigationChangeGender" class="d-flex btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Gender');">
                                                        <div class="product-control-number-icon">1</div>
                                                        <span class="product-control-number-text fw-light">Start here</span>
                                                    </button>
                                                    <button id="productControlNavigationChangeType" class="d-flex btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Type');">
                                                        <div class="product-control-number-icon">2</div>
                                                        <span class="product-control-number-text fw-light">Cloth Template</span>
                                                    </button>
                                                    <button id="productControlNavigationChangeSleeves" class="d-none btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Sleeves');">
                                                        <div class="product-control-number-icon">3</div>
                                                        <span class="product-control-number-text fw-light">Select Template</span>
                                                    </button>
                                                    <button id="productControlNavigationChangeTshirtButtons" class="d-none btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('TshirtButtons');">
                                                        <div class="product-control-number-icon">3</div>
                                                        <span class="product-control-number-text fw-light">Select Template</span>
                                                    </button>
                                                    <button id="productControlNavigationChangeTemplate" class="d-none btn-style-remover product-control-nav-section-btn" onclick="productControlNavigationChange('Template');">
                                                        <div class="product-control-number-icon">3</div>
                                                        <span class="product-control-number-text fw-light">Select Template</span>
                                                    </button>
                                                </div>
                                                <hr>
                                                <div class="product-control-body overflow-auto">
                                                    <div id="productControlGenderSelectSection" class="d-flex flex-column  product-control-section">
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
                                                    </div>
                                                    <div id="productControlTypeSelectSection" class="d-none flex-column product-control-section">
                                                        <span class="text-center w-100 py-2">Great! Now it's time to select what you want..</span>
                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                            <div class="product-control-card-item">
                                                                <span>Polo T Shirt</span>
                                                                <img class="product-control-item-img" src="images/cloths/polo-t-shirt-front_male.png" />
                                                                <button onclick="changeProduct('polo-t-shirt'); updateControlLayoutBaseVariable('tshirt');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Cotten T Shirt</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="changeProduct('cotton-t-shirt'); updateControlLayoutBaseVariable('tshirt');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Bottom</span>
                                                                <img class="product-control-item-img" src="images/cloths/bottom-front_male.png" />
                                                                <button onclick="changeProduct('bottom'); updateControlLayoutBaseVariable('bottom');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Jacket</span>
                                                                <img class="product-control-item-img" src="images/cloths/jacket-front_male.png" />
                                                                <button onclick="changeProduct('jacket'); updateControlLayoutBaseVariable('jacket');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Shorts</span>
                                                                <img class="product-control-item-img" src="images/cloths/short-front_male.png" />
                                                                <button onclick="changeProduct('short'); updateControlLayoutBaseVariable('short');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Singlet</span>
                                                                <img class="product-control-item-img" src="images/cloths/singlet-front_male.png" />
                                                                <button onclick="changeProduct('singlet'); updateControlLayoutBaseVariable('singlet');" class="btn btn-secondary">Select</button>
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
                                                                <img class="product-control-item-img" src="images/cloths/long-cotton-t-shirt-front_male.png" />
                                                                <button onclick="sleeveSelection('longSleeves')" class="btn btn-secondary">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="productControlTemplateSelectSection" class="d-none flex-column product-control-section">
                                                        <span class="text-center w-100 py-2">We prepaired everything for you. Just select your template!</span>
                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                            <div class="product-control-card-item">
                                                                <span>V Neck</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="templateSection('vneck');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Round Neck</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="templateSection('roundneck')" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Collar + 3 Buttons</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="templateSection('collar2buttons');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>Collar + 3 Buttons </span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="templateSection('collar3buttons')" class="btn btn-secondary">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="productControlTshirtButtonsSection" class="d-none flex-column product-control-section">
                                                        <span class="text-center w-100 py-2">We prepaired everything for you. Just select your template!</span>
                                                        <div class="product-control-slider  d-flex gap-3 py-3 px-3 text-dark ">
                                                            <div class="product-control-card-item">
                                                                <span>2 Buttons Only</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="tShirtButtonNeckSection('2buttons');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>2 Buttons + Open</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="tShirtButtonNeckSection('2buttonsopen')" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>3 Buttons Only</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="tShirtButtonNeckSection('3buttons');" class="btn btn-secondary">Select</button>
                                                            </div>
                                                            <div class="product-control-card-item">
                                                                <span>3 Buttons + Open</span>
                                                                <img class="product-control-item-img" src="images/cloths/cotton-t-shirt-front_male.png" />
                                                                <button onclick="tShirtButtonNeckSection('3buttonopen')" class="btn btn-secondary">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-control-footer">
                                                    <hr>
                                                    <div class="product-control-nav-btn d-flex justify-content-between py-2">
                                                        <div style="font-size: 14px;" class="text-white py-1 px-2 rounded-2 btn-style-remover bg-secondary">Previous</div>
                                                        <div style="font-size: 14px;" class="text-white py-1 px-2 rounded-2 btn-style-remover bg-secondary">Next</div>
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
                        <button class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2">
                            <i class="left-side-icons fas fa-t"></i>
                            <p class="p-0 m-0">Add Text</p>
                        </button>
                    </div>
                    <div class="list-group-item" id="btn7">
                        <button class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2">
                            <i class="left-side-icons fas fa-image"></i>
                            <p class="p-0 m-0">Add Image</p>
                        </button>
                    </div>
                    <div class="list-group-item" id="btn8">
                        <button class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2" onclick="saveCurrentDesign();">
                            <i class="left-side-icons fas fa-download"></i>
                            <p class="p-0 m-0">Save Design</p>
                        </button>
                    </div>
                    <div class="list-group-item" id="btn10">
                        <button class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2">
                            <i class="left-side-icons fas fa-sliders-h"></i>
                            <p class="p-0 m-0">Preset</p>
                        </button>
                    </div>
                </div>

                <!-- box 3 -->
                <!-- size & qty -->
                <div class="left-side-box3">
                    <div class="pricetagcontainer">
                        <button class="pricetagbtn3box d-flex flex-column flex-md-row gap-2 justify-content-center align-items-center p-2">
                            <img src="images/Cart.png" style="width: 25px; height: 25px" />
                            <p class="text-white p-0 m-0">MIN QTY : 15</p>
                        </button>
                    </div>
                </div>
            </div>

            <!-- middle panel -->
            <div class="section1-panel section1-panel-mid side-panel-2 h-100 order-1 order-md-2 py-5 d-flex justify-content-center">
                <div class="t-shirt-panel-container">
                    <div class="canvasOverly">
                        <div id="tshirt" class="canvasOverlyInner d-block">
                            <!-- strip controls -->
                            <div id="tshirtStripControl1" class="canvasOverlyInner-front d-block">
                                <div class="tshirt-controller tshirt-coller-front-left" onclick="controllerModelOpen('neck')"></div>
                                <div class="tshirt-controller tshirt-coller-front-right" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-controller tshirt-arm-front-left" onclick="controllerModelOpen('arm')"></div> -->
                                <!-- <div class="tshirt-controller tshirt-arm-front-right" onclick="controllerModelOpen('arm')"></div> -->
                            </div>
                            <div id="tshirtStripControl2" class="canvasOverlyInner-back d-none">
                                <div class="tshirt-controller tshirt-coller-back" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-controller tshirt-arm-back-right" onclick="controllerModelOpen('arm')"></div> -->
                                <!-- <div class="tshirt-controller tshirt-arm-back-left" onclick="controllerModelOpen('arm')"></div> -->
                            </div>
                            <div id="tshirtStripControl3" class="canvasOverlyInner-left d-none">
                                <div class="tshirt-controller tshirt-coller-left" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-controller tshirt-arm-left-right" onclick="controllerModelOpen('arm')"></div> -->
                            </div>
                            <div id="tshirtStripControl4" class="canvasOverlyInner-right d-none">
                                <div class="tshirt-controller tshirt-coller-right" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-controller tshirt-arm-right-right" onclick="controllerModelOpen('arm')"></div> -->
                            </div>

                            <!-- image controls -->
                            <div id="tshirtImageControl1" class="canvasOverlyInner-front d-block">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-front-topleft"></button>
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-front-topright "></button>
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-front-mid"></button>
                            </div>
                            <div id="tshirtImageControl2" class="canvasOverlyInner-back d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-top"></button>
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-bottom"></button>
                            </div>
                            <div id="tshirtImageControl3" class="canvasOverlyInner-left d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-left-hand"></button>
                            </div>
                            <div id="tshirtImageControl4" class="canvasOverlyInner-right d-none">
                                <button class=" tshirt-controller btn-style-remover tshirt-image-control-right-hand"></button>

                            </div>
                        </div>
                        <div id="short" class="canvasOverlyInner d-none">
                            <!-- strip controls -->


                            <!-- image controls -->
                            <div id="tshirtImageControl1" class="canvasOverlyInner-front d-block">
                                <button class="tshirt-controller btn-style-remover short-image-control-front-topleft"></button>
                                <button class="tshirt-controller btn-style-remover short-image-control-front-topright "></button>
                                <button class="tshirt-controller btn-style-remover short-image-control-front-mid"></button>
                            </div>
                            <div id="tshirtImageControl2" class="canvasOverlyInner-back d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-top"></button>
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-bottom"></button>
                            </div>
                            <div id="tshirtImageControl3" class="canvasOverlyInner-left d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-left-hand"></button>
                            </div>
                            <div id="tshirtImageControl4" class="canvasOverlyInner-right d-none">
                                <button class=" tshirt-controller btn-style-remover tshirt-image-control-right-hand"></button>

                            </div>
                        </div>
                        <div id="bottom" class="canvasOverlyInner d-none">
                            <!-- strip controls -->



                            <!-- image controls -->
                            <div id="tshirtImageControl1" class="canvasOverlyInner-front d-block">
                                <button class="tshirt-controller btn-style-remover bottom-image-control-front-topleft"></button>
                                <button class="tshirt-controller btn-style-remover bottom-image-control-front-topright "></button>
                                <button class="tshirt-controller btn-style-remover bottom-image-control-front-mid"></button>
                            </div>
                            <div id="tshirtImageControl2" class="canvasOverlyInner-back d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-top"></button>
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-bottom"></button>
                            </div>
                            <div id="tshirtImageControl3" class="canvasOverlyInner-left d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-left-hand"></button>
                            </div>
                            <div id="tshirtImageControl4" class="canvasOverlyInner-right d-none">
                                <button class=" tshirt-controller btn-style-remover tshirt-image-control-right-hand"></button>

                            </div>
                        </div>
                        <div id="singlet" class="canvasOverlyInner d-none">
                            <!-- strip controls -->



                            <!-- image controls -->
                            <div id="tshirtImageControl1" class="canvasOverlyInner-front d-block">
                                <button class="tshirt-controller btn-style-remover singlet-image-control-front-mid"></button>
                            </div>
                            <div id="tshirtImageControl2" class="canvasOverlyInner-back d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-top"></button>
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-bottom"></button>
                            </div>
                            <div id="tshirtImageControl3" class="canvasOverlyInner-left d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-left-hand"></button>
                            </div>
                            <div id="tshirtImageControl4" class="canvasOverlyInner-right d-none">
                                <button class=" tshirt-controller btn-style-remover tshirt-image-control-right-hand"></button>

                            </div>
                        </div>
                        <div id="jacket" class="canvasOverlyInner d-none">
                            <!-- strip controls -->


                            <!-- image controls -->
                            <div id="tshirtImageControl1" class="canvasOverlyInner-front d-block">
                                <button class="tshirt-controller btn-style-remover jacket-image-control-front-topleft"></button>
                                <button class="tshirt-controller btn-style-remover jacket-image-control-front-topright "></button>
                                <button class="tshirt-controller btn-style-remover jacket-image-control-front-mid"></button>
                            </div>
                            <div id="tshirtImageControl2" class="canvasOverlyInner-back d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-top"></button>
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-back-bottom"></button>
                            </div>
                            <div id="tshirtImageControl3" class="canvasOverlyInner-left d-none">
                                <button class="tshirt-controller btn-style-remover tshirt-image-control-left-hand"></button>
                            </div>
                            <div id="tshirtImageControl4" class="canvasOverlyInner-right d-none">
                                <button class=" tshirt-controller btn-style-remover tshirt-image-control-right-hand"></button>

                            </div>
                        </div>
                    </div>
                    <div id="canvas" class="t-shirt-panel-container d-flex justify-content-center align-items-center"></div>
                </div>

                <!-- model contianer -->
                <div class="modelContainer">
                    <!-- Modal -->
                    <div class="modal fade" id="tshirtNeckStripControlModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="p-2">
                                        <div class="fs-5 text-center">Line Count</div>
                                        <input type="number" class=" form-control" value="0" min="0" max="3" id="neckStripCount" />
                                    </div>
                                    <div class="p-2">
                                        <div class="fs-5 text-center">Selected Line</div>
                                        <select id="tshirtNeckLineSelector" class="form-control">
                                            <option value="0">No Lines</option>
                                        </select>
                                    </div>
                                    <div class="tshirt-neck-line-control-container d-none" id="neckLineControlSection1">
                                        <div>
                                            <div class="p-2">
                                                <div class="fs-5 text-center">Line Color & Thickness</div>
                                                <div class="d-flex justify-content-between">
                                                    <input id="tshirtNeckStripColor1" type="color" class="form-control" style="width: 50px; height: 50px;" class="rounded-pill" />
                                                    <input id="tshirtNeckStripThickness1" type="number" class="form-control" min="0" max="3">
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="fs-5 text-center">Line gap</div>
                                                <input type="number" class="form-control" min="0" max="3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tshirt-neck-line-control-container d-none" id="neckLineControlSection2">
                                        <div>
                                            <div class="p-2">
                                                <div class="fs-5 text-center">Line Color & Thickness</div>
                                                <div class="d-flex justify-content-between">
                                                    <input id="tshirtNeckStripColor2" type="color" class="form-control" style="width: 50px; height: 50px;" class="rounded-pill" />
                                                    <input id="tshirtNeckStripThickness2" type="number" class="form-control" min="0" max="3">
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="fs-5 text-center">Line gap</div>
                                                <input type="number" class="form-control" min="0" max="3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tshirt-neck-line-control-container d-none" id="neckLineControlSection3">
                                        <div>
                                            <div class="p-2">
                                                <div class="fs-5 text-center">Line Color & Thickness</div>
                                                <div class="d-flex justify-content-between">
                                                    <input id="tshirtNeckStripColor3" type="color" class="form-control" style="width: 50px; height: 50px;" class="rounded-pill" />
                                                    <input id="tshirtNeckStripThickness3" type="number" class="form-control" min="0" max="3">
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="fs-5 text-center">Line gap</div>
                                                <input type="number" class="form-control" min="0" max="3">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="text-center">Edit Cuff\Collar</h5>
                                            <hr />
                                            <div class="border border-1 border-dark border-opacity-25 p-2">
                                                <p class="text-center">Preview</p>
                                                <div class="bg-primary pt-1 pb-1" style="max-width:280px; height:66px;" id="box"></div>
                                                <div class="m-1 d-flex-column justify-content-center align-items-center border border-1 border-dark border-opacity-25 p-1">
                                                    <span>Cuff Color & Lines</span>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="border border-1 border-dark border-opacity-25 p-2" onclick="decreaseLine();">-</div>
                                                        <input class="px-2 w-25" id="lineId" value="0" />
                                                        <div class="border border-2 p-2">Line</div>
                                                        <div class="border border-2 p-2" onclick="increaseLine();">+</div>
                                                    </div>
                                                </div>
                                                <div class="d-none" id="customizeArea">
                                                    <div class="border border-1 border-dark border-opacity-25 p-1 pb-2 mt-1">
                                                        <div class="text-center pb-2"> <span>Select line</span></div>
                                                        <select class="border border-0 border-bottom border-3 bo border-dark border-bottom w-100 bg-transparent" id="lineSelecter">
                                                        </select>
                                                    </div>

                                                    <div class="border border-1 border-dark border-opacity-25 p-2 pb-2 mt-2">
                                                        <div class="text-center pb-2"> <span>Line Color& Width</span></div>
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex gap-0">
                                                                <div class="offset-2 col-3"><input type="color" class="px-2 w-50 h-75" id="colorId" value="0" /></div>
                                                                <div class="d-flex">
                                                                    <div class="border border-2 p-2" onclick="decreaseWidth();">-</div>
                                                                    <input class="px-2 w-25" id="widthId" value="0" />
                                                                    <div class="border border-2 p-2">mm</div>
                                                                    <div class="border border-2 p-2" onclick="increaseWidth();">+</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border border-1 border-dark border-opacity-25 p-2 pb-2 mt-2">
                                                        <div class="text-center pb-2"> <span>Line Gap</span></div>
                                                        <div class="d-flex justify-content-center">
                                                            <div class="border border-2 p-1" onclick="decreaseGap();">-</div>
                                                            <input class="px-2 w-25" id="gapId" value="0" />
                                                            <div class="border border-2 p-2">mm</div>
                                                            <div class="border border-2 p-2" onclick="increaseGap();">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center gap-4">
                                                    <div><i class="bi bi-x text-danger fs-5"></i></div>
                                                    <div><i class="bi bi-check2 fs-5" style="color:green;"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="updateTshirtNeckArray()">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- right side panel -->
            <div class="section1-panel d-flex flex-row flex-md-column  section1-panel-sides side-panel-3 d-flex order-2 order-md-3  h-100 ">

                <!-- size & qty -->
                <div class="basic-styling right-side-box1 d-none d-md-block">
                    <div class="right-side-box-btn-container">
                        <div class="d-flex-column">
                            <button style="background-color: #2596be" class="right-side-box-btn">
                                Men
                            </button>
                            <button style="background-color: #8e48ae" class="right-side-box-btn">
                                Woman
                            </button>
                            <button style="background-color: #4482c9" class="right-side-box-btn">
                                Men
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
                                Coparate
                            </button>
                            <button style="background-color: #fb6e0d" class="right-side-box-btn" onclick="opemMaterialModel();">
                                Budget
                            </button>
                            <button style="background-color: #fb6e0d" class="right-side-box-btn" onclick="opemMaterialModel();">
                                Budget
                            </button>
                        </div>

                        <div class="d-flex-column">
                            <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
                            <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
                            <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
                            <span class="right-side-box-num"><input class="style-remover" type="radio" /></span>
                        </div>
                    </div>
                </div>

                <!-- color controls -->
                <div class="basic-styling big-box d-flex justify-content-center flex-column align-items-center">
                    <div class="dropdown">
                        <!-- <button onclick="toggleDropdown1()" class="size-qty-box2 btn-style-remover d-flex-column" style="align-items: center; justify-content: center; gap: 10px"> -->
                        <button onclick="openModelColorControl()" class="size-qty-box2 btn-style-remover d-flex-column" style="align-items: center; justify-content: center; gap: 10px">
                            <div class="small-box"></div>
                            <span>Color</span> <i class="fas fa-chevron-down"></i>
                        </button>

                        <div id="colorControlModelContainer">
                            <div class="modal" tabindex="-1" id="colorControlModel">
                                <div class="modal-dialog">
                                    <div class="modal-content  border border-1 border-secondary m-3">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center">Select A Color</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-center gap-3">
                                                <div class="color-row" style="max-width: 350px">
                                                    <div class="color-option" onclick="colorUpdate(0, 1, 1); setColor('red')" style="background-color: red"></div>
                                                    <div class="color-option" onclick="colorUpdate(230, 1, 1); setColor('blue')" style="background-color: blue"></div>
                                                    <div class="color-option" onclick="colorUpdate(120, 1, 1); setColor('green')" style="background-color: green"></div>
                                                    <div class="color-option" onclick="colorUpdate(60, 1.4, 1.8); setColor('yellow')" style="background-color: yellow"></div>
                                                    <div class="color-option" onclick="colorUpdate(35, 1, 1); setColor('orange')" style="background-color: orange"></div>
                                                    <div class="color-option" onclick="colorUpdate(270, 1, 1); setColor('purple')" style="background-color: purple"></div>
                                                    <div class="color-option" onclick="colorUpdate(300, 1, 1); setColor('pink')" style="background-color: pink"></div>
                                                    <div class="color-option" onclick="colorUpdate(160, 1, 1); setColor('teal')" style="background-color: teal"></div>
                                                    <div class="color-option" onclick="colorUpdate(0, 0, 1.5); setColor('gray')" style="background-color: gray"></div>
                                                    <div class="color-option" onclick="colorUpdate(35, 1, 1); setColor('brown')" style="background-color: brown"></div>
                                                    <div class="color-option" onclick="colorUpdate(180, 1, 1); setColor('cyan')" style="background-color: cyan"></div>
                                                    <div class="color-option" onclick="colorUpdate(330, 1, 1); setColor('magenta')" style="background-color: magenta"></div>
                                                    <div class="color-option" onclick="colorUpdate(150, 1, 1); setColor('lime')" style="background-color: lime"></div>
                                                    <div class="color-option" onclick="colorUpdate(0, 1, 1); setColor('silver')" style="background-color: silver"></div>
                                                    <div class="color-option" onclick="colorUpdate(280, 1, 1); setColor('indigo')" style="background-color: indigo"></div>
                                                    <div class="color-option" onclick="colorUpdate(70, 1, 1); setColor('gold')" style="background-color: gold"></div>
                                                    <div class="color-option" onclick="colorUpdate(40, 1, 1); setColor('maroon')" style="background-color: maroon"></div>
                                                    <div class="color-option" onclick="colorUpdate(260, 1, 1); setColor('navy')" style="background-color: navy"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="dropdown-menu1 basic-styling flex-column" id="dropdownContent1">
                            <div class="color-row" style="max-width: 350px">
                                <div class="color-option" onclick="colorUpdate(0); setColor('red')" style="background-color: red"></div>
                                <div class="color-option" onclick="colorUpdate(230); setColor('blue')" style="background-color: blue"></div>
                                <div class="color-option" onclick="colorUpdate(120); setColor('green')" style="background-color: green"></div>
                                <div class="color-option" onclick="colorUpdate(60); setColor('yellow')" style="background-color: yellow"></div>
                                <div class="color-option" onclick="colorUpdate(35); setColor('orange')" style="background-color: orange"></div>
                                <div class="color-option" onclick="colorUpdate(270); setColor('purple')" style="background-color: purple"></div>
                                <div class="color-option" onclick="colorUpdate(300); setColor('pink')" style="background-color: pink"></div>
                                <div class="color-option" onclick="colorUpdate(160); setColor('teal')" style="background-color: teal"></div>
                                <div class="color-option" onclick="colorUpdate(0); setColor('gray')" style="background-color: gray"></div>
                                <div class="color-option" onclick="colorUpdate(35); setColor('brown')" style="background-color: brown"></div>
                                <div class="color-option" onclick="colorUpdate(180); setColor('cyan')" style="background-color: cyan"></div>
                                <div class="color-option" onclick="colorUpdate(330); setColor('magenta')" style="background-color: magenta"></div>
                                <div class="color-option" onclick="colorUpdate(150); setColor('lime')" style="background-color: lime"></div>
                                <div class="color-option" onclick="colorUpdate(0); setColor('silver')" style="background-color: silver"></div>
                                <div class="color-option" onclick="colorUpdate(280); setColor('indigo')" style="background-color: indigo"></div>
                                <div class="color-option" onclick="colorUpdate(70); setColor('gold')" style="background-color: gold"></div>
                                <div class="color-option" onclick="colorUpdate(40); setColor('maroon')" style="background-color: maroon"></div>
                                <div class="color-option" onclick="colorUpdate(260); setColor('navy')" style="background-color: navy"></div>
                            </div>
                        </div> -->

                    </div>
                </div>


                <!-- size & qty -->
                <div class="basic-styling big-box order-md-2 order-4">
                    <div class="d-flex-column" style="height: 100%">
                        <!-- <button onclick="toggleDropdown2()" class="size-qty-box2 btn-style-remover d-flex-column" style=" height: 100%; align-items: center; justify-content: center; gap: 10px;"> -->
                        <button onclick="openSizeQuantityModel();" class="size-qty-box2 btn-style-remover d-flex-column" style=" height: 100%; align-items: center; justify-content: center; gap: 10px;">
                            <div class="size-qty-box1" id="sizeItems"></div>
                            <span style="width: 100%">Size & Qty</span>

                            <i class="fas fa-chevron-down"></i>
                        </button>

                        <div class="modal" tabindex="-1" id="sizeQuantityModel">
                            <div class="modal-dialog">
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
                                                            <label for="combinationMen" class="btn-style-remover popup-btn w-75" style="background-color: #0c7ce5">
                                                                Men
                                                            </label>
                                                        </div>
                                                        <div class="w-50">
                                                            <input type="radio" id="combinationWomen" name="combinationGender" />
                                                            <label for="combinationWomen" class="btn-style-remover popup-btn w-75" style="background-color: #8e44ad">
                                                                Woman
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 d-flex">
                                                        <div class="w-50">
                                                            <input type="radio" id="combinationBudget" name="combinationBudget" />
                                                            <label for="combinationBudget" class="btn-style-remover popup-btn w-75" style="background-color: #0c7ce5">
                                                                Budget
                                                            </label>
                                                        </div>
                                                        <div class="w-50">
                                                            <input type="radio" id="combinationCoperate" name="combinationBudget" />
                                                            <label for="combinationCoperate" class="btn-style-remover popup-btn w-75" style="background-color: #8e44ad">
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

                        <!-- <div id="dropdownContent2" class="basic-styling size-dropdown align-items-end flex-column" style="z-index: 500">
                            <i class="p-2 fas fa-close" onclick="toggleDropdown2()"></i>
                            <div class="p-2 rounded-3 border border-1 border-secondary w-100">
                                <p class="text-center">Select your combination.</p>
                                <div class="size-box1 d-flex justify-content-center flex-column gap-3 w-100">
                                    <div class="w-100 d-flex">
                                        <div class="w-50">
                                            <input type="radio" id="combinationMen" name="combinationGender" />
                                            <label for="combinationMen" class="btn-style-remover popup-btn w-75" style="background-color: #0c7ce5">
                                                Men
                                            </label>
                                        </div>
                                        <div class="w-50">
                                            <input type="radio" id="combinationWomen" name="combinationGender" />
                                            <label for="combinationWomen" class="btn-style-remover popup-btn w-75" style="background-color: #8e44ad">
                                                Woman
                                            </label>
                                        </div>
                                    </div>
                                    <div class="w-100 d-flex">
                                        <div class="w-50">
                                            <input type="radio" id="combinationBudget" name="combinationBudget" />
                                            <label for="combinationBudget" class="btn-style-remover popup-btn w-75" style="background-color: #0c7ce5">
                                                Men
                                            </label>
                                        </div>
                                        <div class="w-50">
                                            <input type="radio" id="combinationCoperate" name="combinationBudget" />
                                            <label for="combinationCoperate" class="btn-style-remover popup-btn w-75" style="background-color: #8e44ad">
                                                Woman
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-2 d-flex flex-column gap-1">
                                <div class="w-100 d-flex gap-2">
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">XS</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">S</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                </div>
                                <div class="w-100 d-flex gap-2">
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">M</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">L</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                </div>
                                <div class="w-100 d-flex gap-2">
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">Xl</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">2XXL</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                </div>
                                <div class="w-100 d-flex gap-2">
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">3XXl</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                    <div class="w-50 combination-size d-flex">
                                        <div class="combination-size-input p-1">XXl</div>
                                        <input type="number" class="bg-transparent border-1 border border-secondary w-75" />
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2 w-100">
                                <button class="size-chart-text btn btn-secondary w-50">Size Chart</button>

                                <button class="size-chart-text btn btn-dark w-50">Add Quantities</button>
                            </div>
                        </div> -->
                    </div>
                </div>


                <!-- navigation control -->
                <div class="basic-styling right-side-box2 order-md-4 order-3 d-flex justify-content-center align-items-center">
                    <div class="t_changebtnbox d-flex  flex-row flex-md-column" id="viewPortChange">
                        <button class="t_changebtn t_changebtn1" onclick="tShirtControlViewChanger('front'); viewChange('front');" id="btn9">
                            <div class="p-3 t_changebtnimg t_changebtnimg1"></div>
                            <p class="t_changebtnpara">Front view</p>
                        </button>
                        <button class="t_changebtn t_changebtn2" onclick="tShirtControlViewChanger('left'); viewChange('left');">
                            <div class="p-3 t_changebtnimg t_changebtnimg2"></div>
                            <p class="t_changebtnpara">Left view</p>
                        </button>
                        <button class="t_changebtn t_changebtn3" onclick="tShirtControlViewChanger('back'); viewChange('back');">
                            <div class="p-3 t_changebtnimg t_changebtnimg3"></div>
                            <p class="t_changebtnpara">Back view</p>
                        </button>
                        <button class="t_changebtn t_changebtn4" onclick="tShirtControlViewChanger('right'); viewChange('right');">
                            <div class="p-3 t_changebtnimg t_changebtnimg4"></div>
                            <p class="t_changebtnpara">Right view</p>
                        </button>
                    </div>
                </div>

                <!-- <input type="number" id="colorInput">
                <div class="d-flex flex-column">
                    <button onclick="viewChange('front');">front</button>
                    <button onclick="viewChange('back');">back</button>
                    <button onclick="viewChange('left');">Left</button>
                    <button onclick="viewChange('right');">right</button>
                </div>
                <div class="my-2 d-flex flex-column">
                    <h6 class="text-center fw-bold text-dark">Tester</h6>
                    <input type="number" value="100" id="startingPointXTest">
                    <input type="number" value="100" id="startingPointYTest">
                    <input type="number" value="200" id="endingPointXTest">
                    <input type="number" value="200" id="endingPointYTest">
                    <input type="number" value="5" id="thicknessTest">
                    <input type="text" value="white" id="colorTest">
                </div> -->
            </div>
        </div>
    </div>

    <!-- models -->
    <div class="model-container">
        <div class="modal fade" id="signInModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-1 text-center" id="exampleModalLabel">
                            Sign In
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
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
                            <div class="col-12 text-end text-primary" style="font-size: 13px;  padding: 0 50px 0px 0px; cursor: pointer;">forgot passowrd?</div>
                            <div style="padding: 0px 50px 15px 50px;">
                                <button onclick="SignIn();" style="margin-top: 25px;  height: 50px; font-size: 15px; font-weight: bold; background-color: rgb(46, 228, 176)" class="text-light col-12 btn">Sign In</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <div class="col-12 text-center">
                            <span style="font-size: 18px">Or Continue with</span>
                        </div>
                        <div class="col-12 text-center" style="margin-top: 12px;">
                            <button class="btn btn-dark btn-lg fs-6 rounded-1" onclick="window.location = '<?php echo $Google_login_btn?>'" style="padding: 0; width: 120px; height: 36px;">
                                <!-- <a class="text-decoration-none text-white" >
                                    <div style="font-size: 18px; gap: 5px;"><span style="margin-right:14px ;"><i class="fa-brands fa-google"></i></span><span>Google</span></div>
                                </a> -->
                                GOOGLE
                            </button>
                        </div>
                        <div class="col-12 text-center" style="margin-top: 70px;">
                            <span style="font-size: 15px;">Not a member? <span class="text-primary" style="cursor: pointer;">Sign Up Now!</span> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark text-white position-absolute mt-2 w-100" style="bottom: 0;">
        <div class="container text-center">
            <!-- Footer content goes here -->
            <p>this is just dummy contenet</p>
        </div>
    </footer>

    <!-- toasts -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="renderStartToastMessage" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <script src="main.js" defer></script>
    <script src="script.js" defer></script>
    <script src="renderer.js" defer></script>
    <script src="controls.js" defer></script>
    <script src="popup.js" defer></script>
</head>

<body>
    <nav class="d-flex justify-content-between align-items-center">
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
            <a href=""><button class="piority sign-in">Sign In</button></a>
        </div>

    </nav>

    <div class="section1 px-3">
        <div class="container section1-layout d-flex justify-content-between align-items-center align-items-md-start flex-column flex-md-row ">
            <!-- left side panel -->
            <div class="section1-panel d-flex flex-md-column mt-3 mt-md-0 justify-content-center align-items-center section1-panel-sides side-panel-1 h-100 order-3 order-md-1 gap-2">
                <!-- box 1 -->
                <div class="basic-styling left-side-box1">
                    <div class="list-group-item">
                        <div id="btn1">
                            <button class="left-side-btn" style="background-color: #6c7a89">
                                Polo Tshirt
                            </button>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div id="btn2">
                            <button class="left-side-btn" style="background-color: #2c82c9">
                                Men
                            </button>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div id="btn9">
                            <button class="left-side-btn" style="background-color: #2c82c9">
                                ScreenPrint
                            </button>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div id="btn3">
                            <button class="left-side-btn" id="showModalss" style="background-color: #f62459">
                                Product
                            </button>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div id="btn4">
                            <button class="left-side-btn" style="background-color: #343f86">
                                Budget
                            </button>
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
                        <button class="btn-style-remover left-side-box-btn d-flex justify-content-center align-items-center py-1 px-2">
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
                        <button class="pricetagbtn3box d-flex flex-column flex-md-row gap-1 justify-content-center align-items-center p-2">
                            <img src="images/Cart.png" style="width: 25px; height: 25px" />
                            <p class="pricetagbtn3heading">MIN QTY : 15</p>
                        </button>
                    </div>
                </div>
            </div>

            <!-- middle panel -->
            <div class="section1-panel section1-panel-mid side-panel-2 h-100 order-1 order-md-2 py-5 d-flex justify-content-center">
                <div class="t-shirt-panel-container">
                    <div class="canvasOverly">
                        <div id="tShirt" class="canvasOverlyInner">
                            <div id="tshirtStripControl1" class="canvasOverlyInner-front d-none bg-primary">
                                <div class="tshirt-strip-controller tshirt-coller-front-left" onclick="controllerModelOpen('neck')"></div>
                                <div class="tshirt-strip-controller tshirt-coller-front-right" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-strip-controller tshirt-arm-front-left" onclick="controllerModelOpen('arm')"></div> -->
                                <!-- <div class="tshirt-strip-controller tshirt-arm-front-right" onclick="controllerModelOpen('arm')"></div> -->
                            </div>
                            <div id="tshirtStripControl2" class="canvasOverlyInner-back d-none bg-success">
                                <div class="tshirt-strip-controller tshirt-coller-back" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-strip-controller tshirt-arm-back-right" onclick="controllerModelOpen('arm')"></div> -->
                                <!-- <div class="tshirt-strip-controller tshirt-arm-back-left" onclick="controllerModelOpen('arm')"></div> -->
                            </div>
                            <div id="tshirtStripControl3" class="canvasOverlyInner-left d-block bg-warning">
                                <div class="tshirt-strip-controller tshirt-coller-left" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-strip-controller tshirt-arm-left-right" onclick="controllerModelOpen('arm')"></div> -->
                            </div>
                            <div id="tshirtStripControl4" class="canvasOverlyInner-right d-none bg-info">
                                <div class="tshirt-strip-controller tshirt-coller-right" onclick="controllerModelOpen('neck')"></div>
                                <!-- <div class="tshirt-strip-controller tshirt-arm-right-right" onclick="controllerModelOpen('arm')"></div> -->
                            </div>
                        </div>
                    </div>
                    <div id="canvas" class="t-shirt-panel-container d-flex justify-content-center align-items-center"></div>
                </div>

                <!-- model contianer -->
                <div class="modelContainer ">
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
                            <button style="background-color: #1f3a93" class="right-side-box-btn">
                                Coparate
                            </button>
                            <button style="background-color: #1f3a93" class="right-side-box-btn">
                                Coparate
                            </button>
                            <button style="background-color: #fb6e0d" class="right-side-box-btn">
                                Budget
                            </button>
                            <button style="background-color: #fb6e0d" class="right-side-box-btn">
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
                        <button onclick="toggleDropdown1()" class="size-qty-box2 btn-style-remover d-flex-column" style="align-items: center; justify-content: center; gap: 10px">
                            <div class="small-box"></div>
                            <span>Color</span> <i class="fas fa-chevron-down"></i>
                        </button>

                        <div class="dropdown-menu1 basic-styling flex-column" id="dropdownContent1">
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
                                <!-- Add more colors below -->
                                <div class="color-option" onclick="colorUpdate(180); setColor('cyan')" style="background-color: cyan"></div>
                                <div class="color-option" onclick="colorUpdate(330); setColor('magenta')" style="background-color: magenta"></div>
                                <div class="color-option" onclick="colorUpdate(150); setColor('lime')" style="background-color: lime"></div>
                                <div class="color-option" onclick="colorUpdate(0); setColor('silver')" style="background-color: silver"></div>
                                <div class="color-option" onclick="colorUpdate(280); setColor('indigo')" style="background-color: indigo"></div>
                                <div class="color-option" onclick="colorUpdate(70); setColor('gold')" style="background-color: gold"></div>
                                <div class="color-option" onclick="colorUpdate(40); setColor('maroon')" style="background-color: maroon"></div>
                                <div class="color-option" onclick="colorUpdate(260); setColor('navy')" style="background-color: navy"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- size & qty -->
                <div class="basic-styling big-box order-md-2 order-4">
                    <div class="d-flex-column" style="height: 100%">
                        <button onclick="toggleDropdown2()" class="size-qty-box2 btn-style-remover d-flex-column" style=" height: 100%; align-items: center; justify-content: center; gap: 10px;">
                            <div class="size-qty-box1">0 items</div>
                            <span style="width: 100%">Size & Qty</span>

                            <i class="fas fa-chevron-down"></i>
                        </button>

                        <div id="dropdownContent2" class="basic-styling size-dropdown align-items-end flex-column" style="z-index: 500">
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
                        </div>
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


</body>

</html>
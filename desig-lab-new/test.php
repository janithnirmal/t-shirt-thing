<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap.css" />
    <!-- <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dcss.css" />
    <link rel="stylesheet" href="controls.css" /> -->

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js" defer></script>
    <script src="https://kit.fontawesome.com/f98ce7c376.js" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js" defer></script>
    <script src="script.js" defer></script>
    <script src="main.js" defer></script>
    <script src="renderer.js" defer></script>
    <script src="controls.js" defer></script>
</head>

<body class="w-100 " onclick="controllerModelOpen('neck')">
    test
    <!-- middle panel -->

    <div class="tshirt-strip-controller tshirt-coller-left" onclick="controllerModelOpen('neck')"></div>
    <div class="tshirt-strip-controller tshirt-coller-right" onclick="controllerModelOpen('neck')"></div>
    <div class="tshirt-strip-controller tshirt-arm-left" onclick="controllerModelOpen('arm')"></div>
    <div class="tshirt-strip-controller tshirt-arm-right" onclick="controllerModelOpen('arm')"></div>

    <!-- model contianer -->
    <div class="modelContainer bg-danger ">
        <!-- Modal -->
        <div class="modal  bg-danger" id="tshirtNeckStripControlModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <!-- <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="d-flex justify-content-center align-items-center">
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div> -->
            </div>
        </div>
    </div>
</body>

</html>
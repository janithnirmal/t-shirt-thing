<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- scripts -->
    <script src="https://kit.fontawesome.com/f98ce7c376.js" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js" defer></script>

</head>

<body>

    <?php include 'navbar.php'; ?>

    <!--cart interface  -->
    <section class="container py-5 cart d-flex flex-column justify-content-center align-content-center align-items-center" style="margin-top: 20px;">
        <div class="row" style="width: 1440px ; height: 700px;">
            <div class="col-8 bg-light p-0" style="height: 730px;">
                <div class="col-6  bg-light h-50 w-100 ">
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 p-5 fs-4 fw-bold" style="margin-left: 35px;">MY BAG</div>
                        <div class="col-4 p-4" style="margin-right: -130px;">0 Products,0 Items</div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="images/cartf.png" alt=" " style="width: 400px; height: 200px;">
                    </div>
                </div>
                <div class="" style="margin-left: 16px; margin-right: 16px; height: 10px; background-color:rgb(215, 214, 214);"></div>

                <div class="col-6 bg-light h-50 w-100">
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 p-4 fs-4 fw-bold" style="margin-left: 60px;">BUY LATER</div>
                        <div class="col-4 p-4" style="margin-right: -130px;">0 Products,0 Items</div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="images/cartf.png" alt=" " style="width: 400px; height: 200px;">
                    </div>
                </div>
            </div>
            <div class="col-4  p-2" style="height: 730px; background-color: rgb(212, 210, 210);max-width:440px">
                <div class="col-12 h-100  " style="background-color: rgb(241, 236, 236);">
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 p-4 fs-5 fw-bold">TOTAL</div>
                        <div class="col-4 p-4 fs-5 fw-bold" style="margin-right: -30px;">LKR 0.00</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 " style="margin-left: 20px;">
                            <div class="side-menu-sTotal fw-bold">Sub-total</div>
                            <div class="side-menu-dAmount fw-bold">Discount Amount</div>
                            <div class="side-menu-delivery py-3 fw-bold">Delivery</div>
                        </div>
                        <div class="col-4 " style="margin-right: -50px;">
                            <div class="side-menu-sTotal">LKR 0.00</div>
                            <div class="side-menu-sTotal">LKR 0.00</div>
                            <div class="side-menu-dAmount py-3"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" style="margin-left: 20px;">Coupen Code</div>
                        <div class="col-4" style="margin-left: 130px;"><input type="text" style="width: 100px;"></div>
                    </div>

                    <div class="row d-flex justify-content-between">
                        <div class="col-5 py-4" style="margin-left: 20px;">
                            <div class="" style="font-size: 14px;">Select your payment type :</div>
                            <div class=""><input type="radio">Advance Payment</div>
                            <div class="py-3"><input type="radio">Total Payment</div>
                        </div>
                        <div class="col-5 py-5">
                            <div class="">LKR 0.00</div>
                            <div class="py-3">LKR 0.00</div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10px;">
                        <div class="col-10 ">Special Note (Sinhala / Tamil / English):</div>
                        <div class="col-8"><textarea name="" id="" cols="50" rows="2"></textarea></div>
                    </div>
                    <div class="row py-4" style="margin-left: 10px;">
                        <div class="col-8">Select your payment method :</div>
                        <div class="col-8"><input type="radio">PayHere</div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="images/payimg.png" alt="" style="width: 290px; height: 110px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer bg-dark text-white">
    <div class="container text-center">
      <!-- Footer content goes here --> <p>this is just dummy contenet</p>
    </div>
  </footer>
    <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
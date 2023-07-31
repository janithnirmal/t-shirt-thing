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
    <br><br>
    <section class=" container cart d-flex flex-column justify-content-center align-content-center align-items-center">
        <div class="row cart-main-container" style="min-width: 110% ; height: max-content;">
            <div class="col-8 bg-light p-0 cart-left-box">
                <div class="col-6  bg-light h-50 w-100 ">
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 p-3 fs-4 fw-bold" style="margin-left: 35px;">MY BAG</div>
                        <div class="cart-left-productPara col-4 p-4">0 Products,0 Items</div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="images/cartf.png" alt=" " style="width: 400px; height: 200px;">
                    </div>
                </div>
                <div class="" style="margin-left: 16px; margin-right: 16px; height: 10px; background-color:rgb(215, 214, 214);"></div>

                <div class="col-6 bg-light h-50 w-100">
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 p-3 fs-4 fw-bold" style="margin-left: 35px;">BUY LATER</div>
                        <div class="col-4 p-4 cart-left-productPara">0 Products,0 Items</div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="images/cartf.png" alt=" " style="width: 400px; height: 200px;">
                    </div>
                </div>
            </div>
            <div class="col-4  p-2 cart-right-box" style="height: max-content; background-color: rgb(212, 210, 210);min-width:30%">
                <div class="col-12 h-100  " style="background-color: rgb(241, 236, 236);">
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 p-4 fs-5 fw-bold">TOTAL</div>
                        <div class="col-4 p-4 fs-5 fw-bold">LKR 0.00</div>
                    </div>
                    <div class="py-4 p-3">
                        
                        <div class="cart-side-radiopayment d-flex justify-content-between">
                            <div class="fw-bold">Sub-total</div>
                            <div class="cart-side-radioAmount">LKR 0.00</div>
                        </div>
                        <div class="cart-side-radiopayment d-flex justify-content-between">
                            <div class="fw-bold">Discount Amount</div>
                            <div class="cart-side-radioAmount">LKR 0.00</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold">Delivery</div>                           
                        </div>
                    </div>
                    <div class="p-3 d-flex justify-content-between cart-side-coupen">
                        <div class="" >Coupen Code</div>
                        <div class="cart-side-radioAmount"><input type="text" class="rounded-2 border-1" style="width: 130px;"></div>
                    </div>   
                    <div class="py-4 p-3">
                        <div class="pb-2" style="font-size: 13px;">Select your payment type :</div>
                        <div class="cart-side-radiopayment d-flex justify-content-between pb-3">
                            <div><input type="radio"><span  style="font-size: 16px;">Advance Payment</span></div>
                            <div class="cart-side-radioAmount">LKR 0.00</div>
                        </div>
                        <div class="cart-side-radiopayment d-flex justify-content-between">
                            <div><input type="radio"><span style="font-size: 16px;">Total Payment</span></div>
                            <div class="cart-side-radioAmount">LKR 0.00</div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-10 " style="font-size: 14px;">Special Note (Sinhala / Tamil / English):</div>
                        <div class="col-8"><textarea name="" id="" rows="2" style="width: 150%;"></textarea></div>
                    </div>
                    <div class="row p-3">
                        <div class="col-8" style="font-size: 14px;">Select your payment method :</div>
                        <div class="col-8" style="font-size: 14px;"><input type="radio">PayHere</div>
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
            <!-- Footer content goes here -->
            <p>this is just dummy contenet</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/79961d807c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
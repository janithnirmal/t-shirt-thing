<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dcss.css" />

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js" defer></script>
    <script src="https://kit.fontawesome.com/f98ce7c376.js" crossorigin="anonymous" defer></script>
    <script src="script.js" defer></script>
    <script src="main.js" defer></script>
    <script src="renderer.js" defer></script>
</head>

<body>
    <nav class="d-flex justify-content-between align-items-center">
        <div class=" h-100">
            <a href="">
                <img src="images/free-logo-simple-illustration-vector-260nw-776460778.webp" />
            </a>
            <a href="">DesignLab</a>
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

    <div class="section1">
        <div class="container section1-layout">
            <!-- left side panel -->
            <div class="section1-panel section1-panel-sides side-panel-1 bg-danger h-100">
                1
            </div>

            <!-- middle panel -->
            <div class="section1-panel section1-panel-mid side-panel-2 bg-success h-100 d-flex justify-content-center align-items-center">
                <div class="t-shirt-panel-container">
                    <div id="canvas" class="t-shirt-panel-container"></div>
                </div>

            </div>

            <!-- right side panel -->
            <div class="section1-panel section1-panel-sides side-panel-3 d-flex flex-column align-items-center bg-danger h-100">
                <input type="number" id="colorInput">
                <div class="d-flex flex-column">
                    <button onclick="viewChange('front');">front</button>
                    <button onclick="viewChange('back');">back</button>
                    <button onclick="viewChange('left');">Left</button>
                    <button onclick="viewChange('right');">right</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
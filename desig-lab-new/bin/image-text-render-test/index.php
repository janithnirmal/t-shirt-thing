<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="../../bootstrap.css">
    <link rel="stylesheet" href="imageTextControllerStyles.css">

    <!-- js -->
    <script defer src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script defer src="imageTextController.js"></script>
</head>

<body class="bg-dark d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="position-relative">
        <div id="canvasOverly" class="position-absolute bg-transparent canvas-overly" style="width: 400px; height: 540px;"></div>
        <div class="bg-danger" style="width: 400px; height: 540px;">
            canvas
        </div>
    </div>
    <div class="my-5" id="imageViewer">

    </div>

</body>

</html>
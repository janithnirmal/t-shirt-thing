<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dcss.css" />
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
    <title>Toast Example</title>
</head>
<body>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="renderStartToastMessage" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header d-flex gap-2">
            <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <strong class="me-auto">Saving Design</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <span>Wait for a few seconds.....</span>
        </div>
    </div>
</div>

<button id="showToastButton" class="btn btn-primary">Show Toast</button>

<script>
    // Get a reference to the toast element and the button
    const toast = document.getElementById('renderStartToastMessage');
    const showToastButton = document.getElementById('showToastButton');

    // Add an event listener to the button to display the toast
    showToastButton.addEventListener('click', () => {
        const toastInstance = new bootstrap.Toast(toast); // Initialize the Bootstrap Toast
        toastInstance.show(); // Show the toast
    });
</script>

</body>
</html>

<?php
if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image.";
    }
} else {
    echo "Error: " . $_FILES["image"]["error"];
}
?>

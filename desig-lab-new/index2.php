<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<script>
  function createDeleteButton() {
    const deleteButton = document.createElement("button");
    deleteButton.classList.add("btn", "btn-default");
    deleteButton.innerText = "Delete";

    // Append the button to the body element
    document.body.appendChild(deleteButton);
  }

  // Call the function to create and append the button
  createDeleteButton();
</script>
</body>
</html>

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


<?php if (isset($loggedUserData["status"])) {
            ?>
             
            <?php
            } else {
            ?>
             
            <?php
            }
            ?>


<script>
  if (totals > 35) {
    const sendOrderButton = document.createElement("button");
    sendOrderButton.id = "sendOrderButton";
    sendOrderButton.className =
      "pricetagbtn3box justify-content-center align-items-center p-2 my-4";
    sendOrderButton.style.display = "block";

    // Create a new paragraph element for the button's text
    const buttonText = document.createElement("p");
    buttonText.className = "text-white p-0 m-0";
    buttonText.textContent = "Send My Order";

    // Append the paragraph element to the button element
    sendOrderButton.appendChild(buttonText);

    const pricetagContainer = document.querySelector(".pricetagcontainer");

    // Append the button element to the "pricetagcontainer" div
    pricetagContainer.appendChild(sendOrderButton);
  }

  // Set the display property of the button based on the total value
}

</script>
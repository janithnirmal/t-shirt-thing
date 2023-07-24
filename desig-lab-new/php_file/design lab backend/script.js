// script.js

document.getElementById("signInForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get the values from the input fields
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Create a JavaScript object to represent the data in JSON format
    const data = {
        email: email,
        password: password
    };

    // Make an AJAX request to sign-in.php
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "sign-up.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Handle the successful response from the server
                console.log(xhr.responseText);
                // You can do further actions here based on the response
            } else {
                // Handle errors if any
                console.error("Error occurred:", xhr.status, xhr.statusText);
            }
        }
    };

    xhr.send(JSON.stringify(data)); // Send the data in JSON format
});

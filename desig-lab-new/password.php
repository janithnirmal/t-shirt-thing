<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        /* Your CSS styles go here */
        /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h1 {
    text-align: center;
}

#forgotPasswordForm {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

#message {
    margin-top: 10px;
    text-align: center;
}

    </style>
</head>
<body>
    <h1>Forgot Password</h1>
    <form id="forgotPasswordForm">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" required><br><br>

        <input type="submit" value="Reset Password">
    </form>

    <div id="message"></div>

    <script>
        document.getElementById('forgotPasswordForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const newPassword = document.getElementById('newPassword').value;

            // Send a POST request to the backend API
            fetch('http://localhost/to%20do%20list/t-shirt-thing/desig-lab-new/backend/frogot_password.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `email=${email}&new_password=${newPassword}`,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    document.getElementById('message').textContent = 'Password reset successfully.';
                } else {
                    document.getElementById('message').textContent = 'Error: ' + data.error;
                }
            })
            .catch(error => {
                document.getElementById('message').textContent = 'An error occurred: ' + error.message;
            });
        });
    </script>
</body>
</html>

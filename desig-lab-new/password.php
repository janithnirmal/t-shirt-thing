<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>

    <!-- css -->
    <link rel="stylesheet" href="password.css" />

    <!-- js -->
    <script defer src="password.js"></script>
</head>

<body onload="updatePassword()" class="d-flex justify-content-center align-items-center ">
    <div class="d-flex flex-column">
        <h1>Forgot Password</h1>
        <div class="w-100">
            <form id="forgotPasswordForm">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required><br><br>

                <input type="submit" value="Reset Password">
            </form>

        </div>
        <div id="message"></div>
    </div>
</body>

</html>
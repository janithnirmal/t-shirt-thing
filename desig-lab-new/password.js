function updatePassword() {
  document
    .getElementById("forgotPasswordForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      const email = document.getElementById("email").value;
      const newPassword = document.getElementById("newPassword").value;

      // Send a POST request to the backend API
      fetch("backend/frogot_password.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `email=${email}&new_password=${newPassword}`,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.status === "success") {
            document.getElementById("message").textContent =
              "Password reset successfully.";
          } else {
            document.getElementById("message").textContent =
              "Error: " + data.error;
          }
        })
        .catch((error) => {
          document.getElementById("message").textContent =
            "An error occurred: " + error.message;
        });
    });
}

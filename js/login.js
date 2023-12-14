// login.js

$(document).ready(function () {
    $("#loginForm").submit(function (e) {
        e.preventDefault();

        // Retrieve form data
        var formData = {
            // Extract form fields here
        };

        // Use jQuery AJAX to send login data to server.php
        $.ajax({
            type: "POST",
            url: "server.php",
            data: formData,
            success: function (response) {
                // Handle the login response
                console.log(response);
            },
            error: function (error) {
                console.error("Login failed:", error);
            }
        });
    });
});

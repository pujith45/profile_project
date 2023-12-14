// profile.js

$(document).ready(function () {
    $("#profileForm").submit(function (e) {
        e.preventDefault();

        // Retrieve form data
        var formData = {
            // Extract form fields here
        };

        // Use jQuery AJAX to send profile update data to profile.php
        $.ajax({
            type: "POST",
            url: "profile.php",
            data: formData,
            success: function (response) {
                // Handle the profile update response
                console.log(response);
            },
            error: function (error) {
                console.error("Profile update failed:", error);
            }
        });
    });
});

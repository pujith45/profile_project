<?php
// profile.php - Profile update logic using MongoDB

// Assuming you have a MongoDB connection established

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle profile update
    if (isset($_POST["updateProfile"])) {
        $userId = $_POST["userId"];  // Assuming you have a user ID

        // Validate and sanitize user input (implement your own validation)
        // Update user profile in MongoDB
        $filter = ["_id" => new MongoDB\BSON\ObjectId($userId)];  // Convert string to ObjectId
        $update = [
            '$set' => [
                "age" => $_POST["age"],
                "dob" => $_POST["dob"],
                "contact" => $_POST["contact"],
                // Add other fields as needed
            ]
        ];

        $result = $collection->updateOne($filter, $update);

        if ($result->getModifiedCount() > 0) {
            echo "Profile updated successfully!";
        } else {
            echo "Profile update failed.";
        }
    }
}

// Close your MongoDB connection
$client->close();
?>

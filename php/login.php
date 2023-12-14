<?php
// login.php - Login logic using MySQL

// Assuming you have a MySQL connection established

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle login
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Validate and sanitize user input (implement your own validation)
        // Check user credentials against MySQL database using prepared statements
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user["password"])) {
            echo "Login successful!";
            // Set session data in Redis (you need to implement this part)
        } else {
            echo "Invalid email or password.";
        }

        $stmt->close();
    }
}

// Close your MySQL connection
$conn->close();
?>

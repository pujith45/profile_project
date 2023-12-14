<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $conn = new mysqli('localhost','root', '','users_data');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (username,email,password) VALUES ('$username', '$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo 'success';
    } 
    else 
    {
        echo 'error'.$sql.$conn->error;
    }
    $conn->close();
} 
else
{
    echo 'Invalid request';
}
?>

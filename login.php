<?php
// Simulating user credentials (replace with your authentication mechanism)
$validUsername = 'user123';
$validPassword = 'password123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {
        // Redirect to the welcome page after successful login
        header('Location: welcome.php');
        exit;
    } else {
        // Display an error message for invalid credentials
        echo '<script>alert("Invalid username or password. Please try again.");</script>';
    }
}
?>

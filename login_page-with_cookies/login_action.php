<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Save the entered username and password in the database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    
    // Set cookies for user preferences
    setcookie('username', $username, time() + (86400 * 30), "/");
    // Set default values for other preferences or customize them as needed
    setcookie('background_image', 'default.jpg', time() + (86400 * 30), "/");
    setcookie('font_color', '#000000', time() + (86400 * 30), "/");
    setcookie('font', 'Arial', time() + (86400 * 30), "/");
    
    // Redirect to the welcome page
    header("Location: welcome.php");
    exit();
}
?>

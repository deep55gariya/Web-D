<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Save the entered username and password in the database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    
    // Set session variables for user preferences
    $_SESSION['username'] = $username;
    // Set default values for other preferences or customize them as needed
    $_SESSION['background_image'] = 'default.jpg';
    $_SESSION['font_color'] = '#000000';
    $_SESSION['font'] = 'Arial';
    
    // Redirect to the welcome page
    header("Location: welcome.php");
    exit();
}
?>

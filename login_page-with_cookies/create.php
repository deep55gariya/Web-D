<?php
include 'config.php';

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $background_image = 'default.jpg';
    $font_color = '#000000';
    $font = 'Arial';

    $stmt = $conn->prepare("INSERT INTO users (username, password, background_image, font_color, font) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $password, $background_image, $font_color, $font);
    $stmt->execute();

    echo "User created.";
}
?>

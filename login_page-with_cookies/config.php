<?php
$servername = "localhost";  // Your server name, usually 'localhost' for local development
$username = "root";  // Your database username
$password = "";  // Your database password
$dbname = "deepak1";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

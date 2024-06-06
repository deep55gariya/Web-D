<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            background-image: url('<?php echo $_SESSION['background_image']; ?>');
            color: <?php echo $_SESSION['font_color']; ?>;
            font-family: <?php echo $_SESSION['font']; ?>;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
if (!isset($_COOKIE['username'])) {
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
            background-image: url('<?php echo $_COOKIE['background_image']; ?>');
            color: <?php echo $_COOKIE['font_color']; ?>;
            font-family: <?php echo $_COOKIE['font']; ?>;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo $_COOKIE['username']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>

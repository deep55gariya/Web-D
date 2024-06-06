<?php
setcookie('username', '', time() - 3600, "/");
setcookie('background_image', '', time() - 3600, "/");
setcookie('font_color', '', time() - 3600, "/");
setcookie('font', '', time() - 3600, "/");
header("Location: login.php");
exit();
?>

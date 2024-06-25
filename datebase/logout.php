<?php
// Start the session.
session_start();

// Oturumu sonlandır.
session_unset();
session_destroy();

// Kullanıcıyı login sayfasına yönlendir.
header('Location: /cahanveb/login.php');
exit;
?>

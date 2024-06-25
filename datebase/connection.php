<?php

$servername = 'localhost';
$username = 'root';
$password = '';

//Connection to database.
try {
    $conn = new PDO("mysql:host=$servername;dbname=inventory2", $username , $password);
    // set the PDO error mode to exception.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo 'Connected Successfully.';
    
} catch (\Exception $e) {
    // Hata durumunda hatayı işleyin
   // echo 'Connection failed: ' . $e->getMessage();
   $error_mesage = $e->getMessage();
}
?>

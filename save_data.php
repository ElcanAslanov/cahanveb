<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit();
}

// Veritabanı bağlantısını yap
try {
    $dsn = 'mysql:host=localhost;dbname=cahanveb;charset=utf8';
    $username = 'root';
    $password = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    );

    $pdo = new PDO($dsn, $username, $password, $options);

    // Formdan gelen verileri al
    $sehir = $_POST['sehir'];
    $harita = $_POST['harita'];
    $elaveler = $_POST['elaveler'];

    // Dosya yükleme işlemi
    if (isset($_FILES['uploadButton']) && $_FILES['uploadButton']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['uploadButton']['name']);
        move_uploaded_file($_FILES['uploadButton']['tmp_name'], $uploadFile);
    }

    // Veritabanına ekle
    $stmt = $pdo->prepare("INSERT INTO tbelage (baslik, konum, elaveler, resim) VALUES (?, ?, ?, ?)");
    $stmt->execute([$sehir, $harita, $elaveler, $uploadFile]);

    // Başarılıysa geri dön
    header('Location: dashboardelaqe.php');
    exit();

} catch (PDOException $e) {
    echo 'Veritabanı bağlantısı kurulamadı: ' . $e->getMessage();
}
?>

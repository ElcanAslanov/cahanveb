<?php
// Start the session
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit();
}

$_SESSION['table'] = 'tbelage';
$user = $_SESSION['user'];

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

    // Kullanıcıları al
    $stmt = $pdo->query('SELECT * FROM tbelage');
    $users = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'Veritabanı bağlantısı kurulamadı: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahan Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="dashboardelaqe.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div class="dashboardMainContainer">
       <?php include('partials/app-sidebar.php') ?>
    </div>
    <div class="dashboard_content_container" id="dashboard_content_container">
        <?php include('partials/app-topnav.php') ?>
        <div class="dashboard_content"> 
            <div class="dashboard_content_main">
                <div class="edit" onclick="openPanel()"></div>
        
                <div id="sidePanel" class="side-panel">
                    <a href="javascript:void(0)" class="closebtn" onclick="closePanel()">&times;</a>
                    <h2></h2>
                    <form id="contactForm" action="save_data.php" method="POST" enctype="multipart/form-data">
                        <input type="text" id="textbox1" name="sehir" placeholder="Şəhər">
                        <br><br>
                        <input type="

                                            <label for="uploadButton" class="upload-button">Şəkil Yüklə</label>
                    <input type="file" id="uploadButton" name="uploadButton" style="display: none;" onchange="displayImage(event)">
                    <br><br>        
                    <img id="uploadedImage" style="display: none; width: 80%; margin-top: 10px;">
                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>
            <div class="elaqe1"></div>
        </div>
    </div>
</div>   

<div class="users">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Baslik</th>
                <th>Konum</th>
                <th>Elaveler</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($user as $index => $tbelage){ ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td class="baslik"><?php echo htmlspecialchars($tbelage['baslik']); ?></td>
                    <td class="konum"><?php echo htmlspecialchars($tbelage['konum']); ?></td>
                    <td class="elaveler"><?php echo htmlspecialchars($tbelage['elaveler']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function openPanel() {
        document.getElementById("sidePanel").style.width = "540px";
        document.getElementById("textbox1").value = "";
        document.getElementById("textbox2").value = "";
        document.getElementById("textbox3").value = "";
    }

    function closePanel() {
        document.getElementById("sidePanel").style.width = "0";
        document.getElementById("textbox1").value = "";
        document.getElementById("textbox2").value = "";
        document.getElementById("textbox3").value = "";
    }

    function displayImage(event) {
        var image = document.getElementById('uploadedImage');
        image.src = URL.createObjectURL(event.target.files[0]);
        image.style.display = 'block';
        image.onload = function() {
            URL.revokeObjectURL(image.src); // Free up memory
        }
    }
</script>


<?php
//Start the session.
session_start();
if(!isset($_SESSION['user'])) header('location: login.php');

$user = $_SESSION['user'];



?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahan Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
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
                <div class="loginButtonContainer1">
    <button onclick="window.location.href = 'elaqeler.html';">Haqqımızda</button>
</div>

                <div class="loginButtonContainer2">
                    <button>Fəaliyyət Sahələri</button>
                </div>
                <div class="loginButtonContainer3">
                    <button>İnvestorlar</button>
                </div>
                <div class="loginButtonContainer4">
                    <button>Sosial Məsuliyyət</button>
                </div>
                <div class="loginButtonContainer5">
                    <button>Xəbərlər</button>
                </div>
                <div class="loginButtonContainer6">
                    <button>İnsan Resursları</button>
                </div>
                <div class="loginButtonContainer7">
                <button onclick="window.location.href = 'dashboardelaqe.php';">Elaqe</button>
                    
                </div>
                    <p>Select the page you want to change</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/script.js"> </script>
</body>
</html>
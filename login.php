<?php
//Start the session.
session_start();
if(isset($_SESSION['user'])) header('location:dashboard.php');

$error_message = '';

if($_POST) {
    include('datebase/connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM users WHERE email=:username AND password=:password ';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    

    // Sonuç kümesinde satır var mı?
    if($stmt->rowCount() > 0) {
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll()[0];
        $_SESSION['user'] = $user;

        header('Location: dashboard.php');
        // Doğru giriş
    } else {
        $error_message = 'Please make sure that username and password are correct.';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahan Login - Admin Panel</title>
   <link rel="stylesheet" type="text/css" href="login2.css">
</head>

<body id="loginBody">
<?php if(!empty($error_message)) { ?>
        <div id="errorMessage">
        <p>  <strong>ERROR:</strong>  <?php echo $error_message; ?> </p>
        </div>
    <?php } ?>
    <div class="container">
        <div class="loginHeader">
            <h1>Admin Panel</h1>
            <p>Control Panel Login</p>

        </div>

        <div class="loginBody">
            <form action="login.php" method = "POST">
                <div class="loginInputsContainer">
                    <label for="">Username</label>
                    <input placeholder="Username" name="username" type="text" />
                </div>
                <div class="loginInputsContainer">
                    <label for="">Password</label>
                    <input placeholder="Password" name="password" type="password" />
                </div>
                <div class="loginButtonContainer">
                    <button>Login</button>
                </div>

            </form>

        </div>
    </div>
</body>

</html>
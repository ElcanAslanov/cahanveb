<?php
// Start Session
session_start();

// Güvenli tablo adlarını belirleyin.
$allowed_tables = ['users', 'products', 'orders'];
$table_name = $_SESSION['table'];
if (!in_array($table_name, $allowed_tables)) {
    die("Invalid table name.");
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$encrypted = password_hash($password, PASSWORD_DEFAULT);

// Tarihleri oluştur.
$created_at = (new DateTime())->format('Y-m-d H:i:s');
$updated_at = $created_at;

include('connection.php');

try {
    // Adding the record.
    $command = "INSERT INTO $table_name (first_name, last_name, email, password, created_at, updated_at) 
                                    VALUES 
                                    (:first_name, :last_name, :email, :encrypted, :created_at, :updated_at)";

    $stmt = $conn->prepare($command);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':encrypted', $encrypted);
    $stmt->bindParam(':created_at', $created_at);
    $stmt->bindParam(':updated_at', $updated_at);

    if ($stmt->execute()) {
        $response = [
            'success' => true,
            'message' => $first_name .' '. $last_name . ' '. 'Successfully added to the system.'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => "Error saving record."
        ];
    }
} catch (PDOException $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

$_SESSION['response'] = $response;
header('location: ../users-add.php');
exit;
?>

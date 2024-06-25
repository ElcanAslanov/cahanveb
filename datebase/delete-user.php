<?php
    // Veritabanı bağlantısını include edin veya bu dosyada tanımlayın.
   //include 'database/connection.php'; // Veya bağlantı kodunuzu buraya ekleyin.

    $data = $_POST;
    $user_id = (int) $data['user_id'];
    //$first_name = $data['f_name'];
    $last_name = $data['l_name'];

    try {
        // Silme işlemi.
        $command = "DELETE FROM users WHERE id={$user_id}";
    
        //$stmt = $conn->prepare($command);
       // $stmt->execute(); // Sorguyu çalıştırın.

        echo json_encode([
            'success' => true,
            'message' => ' User successfully deleted.'
        ]);
       
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => $first_name . ' ' . $last_name . ' Error processing your request!'
        ]);
    } 
?>

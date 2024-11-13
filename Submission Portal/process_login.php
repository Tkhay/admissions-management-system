<?php
include 'db_config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "SELECT password FROM users WHERE username = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username]);

    
    $user = $stmt->fetch();

    if ($user) {
        
        if (password_verify($password, $user['password'])) {
            
            session_start();
            $_SESSION['username'] = $username;
            echo "Login successful!";
            
            header("Location: submissions/submission.php");
            exit;
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "User not found!";
    }
}
?>

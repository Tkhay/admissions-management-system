<?php
include 'db_config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    
    if ($password !== $confirmPassword) {
        die("Passwords do not match. Please try again.");
    }

   
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);

   
    try {
        $stmt->execute([
            ':username' => $username,
            ':password' => $hashedPassword
        ]);
        echo "User registered successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

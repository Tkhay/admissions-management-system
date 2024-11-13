<?php
require_once 'vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__)->load();

$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');

$dsn = "mysql:host=$host;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


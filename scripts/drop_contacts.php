<?php
$host = '127.0.0.1';
$db   = 'formulario_alta';
$user = 'root';
$pass = getenv('DB_PASSWORD') ?: 'StrongP@ssw0rd!'; // use ENV var DB_PASSWORD in production
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $pdo->exec('DROP TABLE IF EXISTS `contacts`');
    echo "Dropped table contacts (if existed)\n";
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage() . "\n";
}

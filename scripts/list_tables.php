<?php
$host = '127.0.0.1';
$db   = 'formulario_alta';
$user = 'root';
$pass = getenv('DB_PASSWORD');
if (!$pass) {
    die("Database password not set. Set DB_PASSWORD environment variable.\n");
}
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $stmt = $pdo->query('SHOW TABLES');
    $rows = $stmt->fetchAll(PDO::FETCH_NUM);
    echo "Tables in $db:\n";
    foreach ($rows as $r) {
        echo $r[0] . "\n";
    }
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage() . "\n";
}

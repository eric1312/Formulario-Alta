<?php
$host = '127.0.0.1';
$db   = 'formulario_alta';
$user = 'root';
// Use a strong password for the database; prefer an environment variable in production.
$pass = getenv('DB_PASSWORD') ?: 'ChangeMe123!';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $stmt = $pdo->query('SELECT * FROM migrations');
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "Migrations table entries:\n";
    foreach ($rows as $r) {
        echo $r['id'] . ' | ' . $r['migration'] . ' | batch: ' . $r['batch'] . "\n";
    }
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage() . "\n";
}

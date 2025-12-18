<?php
$host = '127.0.0.1';
$db   = 'formulario_alta';
$user = 'root';
// Load DB password from environment for security; set DB_PASSWORD on your server.
// Fallback used only for local development — replace before deploying to production.
$pass = getenv('DB_PASSWORD') ?: 'ChangeMe123!';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $stmt = $pdo->prepare("DELETE FROM migrations WHERE migration LIKE '%create_customers_table%'");
    $stmt->execute();
    echo "Deleted customer-related migration entries.\n";
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage() . "\n";
}

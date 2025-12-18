<?php

$host = '127.0.0.1';
$db   = 'formulario_alta';
$user = 'root';
// Require a password from the environment for security
$pass = getenv('DB_PASSWORD');
if ($pass === false || $pass === '') {
    fwrite(STDERR, "Error: DB_PASSWORD environment variable is not set. Set a strong password to connect to the database.\n");
    exit(1);
}
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    foreach (['customers','contacts'] as $table) {
        echo "\n==== SHOW CREATE TABLE $table ====\n";
        // validate table name to ensure it's a safe identifier (letters, numbers, underscore)
        if (!preg_match('/^\w+$/', $table)) {
            echo "Invalid table name: $table\n";
            continue;
        }
        // safely quote identifier by escaping any backticks and wrapping in backticks
        $tableQuoted = '`' . str_replace('`', '``', $table) . '`';
        // build the SQL string separately (table name was validated above) to make formatting explicit and safe
        $sql = "SHOW CREATE TABLE $tableQuoted";
        $stmt = $pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            echo $row['Create Table'] . "\n";
        } else {
            echo "Table $table does not exist.\n";
        }
    }
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage() . "\n";
    exit(1);
}

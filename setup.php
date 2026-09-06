<?php

require_once './config/database.php';

$sql = file_get_contents('./Database/migrations/create_logs_table.sql');

try {
    $pdo->exec($sql);

    echo "Database setup completed successfully.";

} catch (PDOException $e) {
    echo "Database setup failed: " . $e->getMessage();
}

?>
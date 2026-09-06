<?php

namespace LoogerService\LoggerType\DatabaseLogging;

require_once './LoggerService/LoggerSave/LoggerInterface.php';
// require_once __DIR__ . '/config/database.php';

use LoggerService\LoggerInterface;
use PDO;


class DatabaseLogging implements LoggerInterface\LoggerInterface {

    private $record; 
    private PDO $pdo;

    public function __construct(string $record, PDO $pdo) {
        $this->record = json_decode($record, true); 
        $this->pdo = $pdo;
    }

    public function saveLog() {

        $stmt = $this->pdo->prepare(
            "INSERT INTO logs (username, action, created_at) VALUES (?, ?, ?)"
        );

        $stmt->execute([
            $this->record['username'],
            $this->record['action'],
            $this->record['datetime']
        ]);

    }

}

?>
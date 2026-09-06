<?php


namespace LoggerService\LoggerFormat\LoggerType\DatabaseLog;

require_once './LoggerService/LoggerFormat/LoggerFormatInterface.php';

use LoggerService\LoggerFormat\LoggerInterface;
use PDO;

class DatabaseLog implements LoggerInterface\LoggerFormatInterface {

    private $Data; 
    private PDO $pdo;

    public function __construct(string $Data, PDO $pdo)
    {
        $this->Data = json_decode($Data, true);
        $this->pdo = $pdo;
    }
    public function format() {

        $stmt = $this->pdo->prepare(
            "INSERT INTO logs (username, action, created_at) VALUES (?, ?, ?)"
        );

        $stmt->execute([
            $this->Data['username'],
            $this->Data['action'],
            $this->Data['datetime']
        ]);

    }

}

?>
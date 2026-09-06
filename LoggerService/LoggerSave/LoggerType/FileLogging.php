<?php

namespace LoogerService\LoggerType\FileLogging;

require_once './LoggerService/LoggerSave/LoggerInterface.php';
use LoggerService\LoggerInterface;

class FileLogging implements LoggerInterface\LoggerInterface {

    private string $record; 

    public function __construct(string $record) {
        $this->record = $record; 
    }

    public function saveLog() {

        $filepath = './Logs/LogsFile/'; 

        file_put_contents($filepath.'records.txt', $this->record . PHP_EOL, FILE_APPEND);
        
    }

}

?>
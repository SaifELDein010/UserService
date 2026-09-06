<?php

namespace LoogerService\LoggerType\FileLogging;

require_once './LoogerService/LoggerInterface.php';
use LoogerService\LoggerInterface;
use Override;

class FileLogging implements LoggerInterface\LoggerInterface {

    private string $logData;
    private string $record; 
     private const DELIMITER = '#$|$#';

    public function __construct(string $logData) {
        $this->logData = $logData; 
    }

    private function formatLogData() {

        $data = json_decode($this->logData);

        $this->record = $data->username;
        $this->record .= self::DELIMITER;
        $this->record .= $data->actionName;
        $this->record .= self::DELIMITER;
        $this->record .= $data->datatime;

    }

    public function saveLog() {
        $this->formatLogData();

        $filepath = './Logs/LogsFile';

        file_put_contents($filepath.'records.txt', $this->record . PHP_EOL, FILE_APPEND);
        
    }

}

?>
<?php

namespace LoggerService\LoggerFormat\LoggerType\Record;

require_once './LoggerService/LoggerFormat/LoggerFormatInterface.php';
use LoggerService\LoggerFormat\LoggerInterface;

class RecordLog implements LoggerInterface\LoggerFormatInterface {

    private $logData;
    private $record;
    private const DELIMITER = '#$|$#';

    public function __construct(string $logData) {
        $this->logData = $logData;
    }
    public function format() {

        $data = json_decode($this->logData);

        $this->record = $data->username;
        $this->record .= self::DELIMITER;
        $this->record .= $data->actionName;
        $this->record .= self::DELIMITER;
        $this->record .= $data->datatime;

        return $this->record;

    }

}

?>
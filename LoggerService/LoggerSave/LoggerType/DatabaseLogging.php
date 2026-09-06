<?php

namespace LoogerService\LoggerType\DatabaseLogging;

require_once './LoggerService/LoggerSave/LoggerInterface.php';
require_once './LoggerService/LoggerFormat/LoggerFormatInterface.php';

use LoggerService\LoggerInterface;
use LoggerService\LoggerFormat;

class DatabaseLogging implements LoggerInterface\LoggerInterface {

    private LoggerFormat\LoggerInterface\LoggerFormatInterface $databaseRecord;

    public function __construct(
        LoggerFormat\LoggerInterface\LoggerFormatInterface $databaseRecord) {
        $this->databaseRecord = $databaseRecord;
    }

    public function saveLog() {

        $this->databaseRecord->format();

    }

}

?>
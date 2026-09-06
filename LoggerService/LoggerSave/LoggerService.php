<?php

namespace LoogerService;

require_once './LoggerService/LoggerInterface.php';
use LoogerService\LoggerInterface;

class LoggerService {

    private $loggerType;

    public function setType(LoggerInterface\loggerInterface $loggerType) {
        $this->loggerType = $loggerType;
    }

    public function get() {
        return $this->loggerType->saveLog();
    }

}

?>
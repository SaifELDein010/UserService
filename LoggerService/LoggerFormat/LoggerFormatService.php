<?php

namespace LoggerService\LoggerFormat\LoggerFormatService;

require_once './LoggerService/LoggerFormat/LoggerFormatInterface.php';
use LoggerService\LoggerFormat\LoggerInterface;

class LoggerFormatService{

    private $type;

    public function setType(LoggerInterface\LoggerFormatInterface $type) {
        $this->type = $type;
    }

    public function get() {
        return $this->type->format();
    }

}

?>
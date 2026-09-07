<?php

namespace ValidatorService\ValidatorTypes\LogData;

require_once './ValidatorService/ValidatorInterface.php';
use ValidatorService\ValidatorInterface;
use DateTime;

class LogData implements ValidatorInterface\validatorInterface {

    private $logData;

    public function __construct(string $logData) {
        $this->logData = $logData;
    }

    private function validateData() {
        $data = json_decode($this->logData);

        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $data->datetime);

        if(gettype($data->username) != "string"){
            return false;
        } else if(gettype($data->action) != "string"){
            return false;
        } else if(!
            ($datetime && $datetime->format('Y-m-d H:i:s') === ($data->datetime))) {
            return false;
        }

        return true;

    }
    public function validated():bool {
        return $this->validateData();
    }

}

?>
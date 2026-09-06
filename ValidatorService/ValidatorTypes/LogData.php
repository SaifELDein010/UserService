<?php

namespace ValidatorService\ValidatorTypes\LogData;

require_once './ValidatorService/ValidatorInterface.php';
use ValidatorService\ValidatorInterface;

class LogData implements ValidatorInterface\validatorInterface {

    private $logData;

    public function __construct(string $logData) {
        $this->logData = $logData;
    }

    private function validateData() {
        $data = json_decode($this->logData);

        if($data->username != "user"){
            return false;
        } else if($data->actionName != "take action"){
            return false;
        } else {
            return true;
        }

    }
    public function validatorInterface():bool {
        return $this->validateData();
    }

}

?>
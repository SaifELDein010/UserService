<?php

namespace ValidatorService;

require_once './ValidatorService/ValidatorInterface.php';
use ValidatorService\ValidatorInterface;

class ValidatorService{ 

    private $validateType;

    public function setType(ValidatorInterface\validatorInterface $validateType){
        $this->validateType = $validateType;
    }

    public function get() {
        $this->validateType->validatorInterface();
    }

}

?>
<?php

namespace AuthenticationService\Providers\Apple;

require_once './AuthenticationService/AuthenticationInterface.php';
use AuthenticationService\AuthenticationInterface;

class AppleProvider implements AuthenticationInterface\AuthenticationInterface{

    public function authenticated() {
        echo "\n...Authentacted from Apple\n";
    }

}

?>
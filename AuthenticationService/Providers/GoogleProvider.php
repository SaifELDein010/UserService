<?php

namespace AuthenticationService\Providers\Google;

require_once './AuthenticationService/AuthenticationInterface.php';
use AuthenticationService\AuthenticationInterface;

class GoogleProvider implements AuthenticationInterface\AuthenticationInterface{

    public function authenticated() {
        echo "\n...Authentacted from google\n";
    }

}

?>
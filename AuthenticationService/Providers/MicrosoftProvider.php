<?php

namespace AuthenticationService\Providers\Microsoft;

require_once './AuthenticationService/AuthenticationInterface.php';
use AuthenticationService\AuthenticationInterface;

class MicrosoftProvider implements AuthenticationInterface\AuthenticationInterface{

    public function authenticated() {
        echo "\n...Authentacted from Microsoft\n";
    }

}

?>
<?php

namespace AuthenticationService\Providers\Facebook;

require_once './AuthenticationService/AuthenticationInterface.php';
use AuthenticationService\AuthenticationInterface;

class FacebookProvider implements AuthenticationInterface\AuthenticationInterface{

    public function authenticated() {
        echo "\n...Authentacted from Facebook\n";
    }

}

?>
<?php

namespace AuthenticationService\Providers\Github;

require_once './AuthenticationService/AuthenticationInterface.php';
use AuthenticationService\AuthenticationInterface;

class GithubProvider implements AuthenticationInterface\AuthenticationInterface{

    public function authenticated() {
        echo "\n...Authentacted from Github\n";
    }

}

?>
<?php 

namespace AuthenticationService;

require_once './AuthenticationService/AuthenticationInterface.php';
use AuthenticationService\AuthenticationInterface;

class AuthenticationService {

    private $providerType;

    public function setProvider(
        AuthenticationInterface\AuthenticationInterface $providerType) {
        $this->providerType = $providerType;
    }

    public function get() {
        $this->providerType->authenticated();
    }
}

?>
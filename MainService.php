<?php

require_once './PasswordGeneratorService/GeneratePassword.php';
use PasswordGeneratorService\GeneratePassword;

$generate = new GeneratePassword();

echo $generate->generatePassword();

?>
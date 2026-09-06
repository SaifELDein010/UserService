<?php

namespace PasswordGeneratorService;

require_once 'vendor/autoload.php';

use Faker;

class GeneratePassword {

    private $faker;

    public function __construct(){
        $this->faker = Faker\Factory::create();
    }

    public function generatePassword(int $minLength = 8, int $maxLength = 15) {
        $this->faker->password($minLength, $maxLength);
    }

}

?>
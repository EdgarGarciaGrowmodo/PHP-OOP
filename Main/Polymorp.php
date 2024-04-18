<?php

namespace Main;

use Main\Poly\Human;

require_once 'Poly/Human.php';

class Polymorp extends Human
{
    function __construct(){
        echo "hello world! <br/>";
    }

    public function makeSound(){
        echo "many form of sound!";
    }
}

$test = new Polymorp();
$test->makeSound();
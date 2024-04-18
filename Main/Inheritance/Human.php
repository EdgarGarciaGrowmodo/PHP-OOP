<?php

namespace Main\Inheritance;

class Human{
    /**
     * class properties (data)
     */
    protected $name;
    protected $age;

    public function __construct(
        $name,
        $age
    ){
        $this->name = $name;
        $this->age = $age;
    }

    public function sayName(){
        echo $this->name . " is my name! <br/>";
    }

    public function sayAge(){
        echo $this->age . " is my age! <br/>";
    }
}
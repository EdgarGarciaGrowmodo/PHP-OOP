<?php
namespace Main;

/**
 * interface
 */
use Main\Interface\ITest;
use Main\Interface\ITest2;

/**
 * traits
 */
use Main\Traits\TraitA;

/**
 * inheritance
 */
use Main\Inheritance\Human;

/**
 * interface
 */
require_once 'Interface/ITest.php';
require_once 'Interface/ITest2.php';

/**
 * traits
 */
require_once 'Traits/TraitA.php';

/**
 * inheritance
 */
require_once 'Inheritance/Human.php';

class Index extends Human implements ITest, ITest2
{
    /**
     * class properties
     */
    protected $thisIsA;

    /**
     * traits
     */
    use TraitA;

    /**
     * constructor
     * dependency injection
     * inject to parent (Human class) a.k.a super or super set
     */
    function __construct($name, $age){
        parent::__construct($name, $age); // inject to parent (Human class) a.k.a super or super set
        echo "constructor instance <br/>";
    }

    /**
     * this should be implemented
     * return type is string
     */
    public function includeMe() : string{
        return "hello";
    }

    /**
     * @interface
     * - ITest2.php
     * 
     * return type is int
     */
    public function iTest2Behavior() : int{
        return 1;
    }

    /**
     * inheritance behavior
     * we inherit
     * class property (data)
     * - name
     */
    public function run(){
        echo $this->name . " is running!";
    }
}

try{
    $test = new Index("John Doe", 34);
    $test->sayName(); // inherited from Human class
    $test->sayAge(); // inherited from Human class
    $test->run(); // local instantiate of object using inherited class property
    $test->includeMe();
    $test->fooFromTraitA();
    $test->iTest2Behavior();
}catch(\Exception $e){
    echo "Error " . $e->getMessage();
}
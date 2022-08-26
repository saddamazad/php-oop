<?php
/**
 * Interface forces a class to declare some pre-defined MUST have functions
 * All the functions declared in an interface MUST be implemented by the classes that implements the interface
 */
interface BaseAnimal {
    /* The functions should not have any body, only the function's name and the parameters should be declared. */
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

/* Class can't extend an interface, class MUST implement an interface by `implements` keyword */
class Animal implements BaseAnimal {
    public function isAlive() {}

    public function canEat($param1, $param2) {}

    public function breed() {}
}


/* interface can extend another interface */
interface BaseHuman extends BaseAnimal {
    public function canTalk();
}

class Human implements BaseHuman {
    /* all the functions from the BaseAnimal and BaseHuman MUST be declared in this class, because this class is implementing the BaseHuman interface, and the BaseHuman interface actually extends the BaseAnimal interface */
    public function isAlive() {}

    public function canEat($param1, $param2) {}

    public function breed() {}

    public function canTalk() {}
}

$h = new Human();
/* This human object is an example of `polymorphism`, since it's an instance of the BaseHuman and BaseAnimal at the same time. */

echo $h instanceof Animal; /* Returns 0 or false */
echo "<br>";
echo $h instanceof BaseAnimal; /* Returns 1 or true */
echo "<br>";
echo $h instanceof BaseHuman; /* Returns 1 or true */

$cat = new Animal();
echo "<br>";
echo $cat instanceof Human; /* Returns 0 or false */


echo "<br><br><br>";

/**
 * abstract Class can also implement an interface, but it does not require to declare all the functions of the interface like we do for a normal Class.
 */
abstract class AbstractHuman implements BaseHuman {
    abstract public function run();

    public function eat() {
        echo "I am eating!";
    }
}

class NewHuman extends AbstractHuman {
    public function isAlive() {}

    public function canEat($param1, $param2) {}

    public function breed() {}

    public function canTalk() {}

    /* abstract function must be declared, since this class is extending the Abstract class */
    public function run() {}
}

$nh = new NewHuman();
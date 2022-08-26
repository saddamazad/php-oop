<?php
/**
 * Static methods can be accessed directly without instantiating the object, it helps to improve speed/performance and save on RAM space.
 */
class MathCalculator {
    private $number;
    static $name;

    // Static method/function can ONLY access static properties/variables.
    static public function fibonacci($n) {
        //$this->number = 12; /* `$this` keyword can't be used inside a static method/function */
        self::$name = "ABC";
        //self::$number = 12; /* $number is a private property(non-static), so it can't be accessed with the `self::` keyword */
        self::doSomething();
        echo "Fibonacci series up to {$n}<br>";
    }

    public function factorial($n) {
        //$this->name = "ABC"; /* static property can't be accessed like this inside a non-static method/function */
        self::$name = "ABC"; /* static property should ALWAYS be accessed like this inside a non-static/static method */
        $this->number = 12;
        $this->doSomething();
        self::doSomething();
        echo "Calculating factorial of {$n}<br>";
    }

    static public function doSomething() {
        echo "Doing something<br>";
    }
}

$mathc = new MathCalculator();
$mathc->fibonacci(8);
$mathc->factorial(8);

// Syntax to call a static method/function - ClassName::Function_Name()
MathCalculator::fibonacci(7);

// Syntax to call a static property - ClassName::$Property_Name (including the `$` sign)
echo '<br>Accessing Static Property <strong>$NAME</strong>: '.MathCalculator::$name;
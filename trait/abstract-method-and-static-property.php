<?php
trait MyTrait {
    static $number;

    // declare abstract methods
    abstract public function sayHi();
}

class MyClassA {
    use MyTrait;

    // MUST implement the abstract methods, since this Class is using the `MyTrait` trait
    public function sayHi() {
        echo "Hi <br>";
    }
}

class MyClassB {
    use MyTrait;

    public function sayHi() {
        echo "Hi <br>";
    }
}

MyClassA::$number = 2;
echo "Number = " . MyClassA::$number;

echo "<br>";
$mca = new MyClassA();
echo "Number still = " . $mca::$number;



echo "<br><br>";
MyClassB::$number = 8;
echo "Number = " . MyClassB::$number;

echo "<br>";
$mcb = new MyClassB();
echo "Number still = " . $mcb::$number;

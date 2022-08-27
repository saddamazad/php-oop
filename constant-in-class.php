<?php
//define ("VER", 123);

class MyClass {
    /**
     * Can't use `define` keyword to create constant inside a Class
     * Constant is ALWAYS in `static` scope inside a Class, so can't be accessed like a public property
     */
    const CITY = "Dhaka";

    //define ("CITY", "Dhaka");

    public function sayHi() {
        echo "Hi from ".self::CITY."<br>"; // $this::CITY will also work
    }
}

$m = new MyClass();
$m->sayHi();


echo "<br>";
echo $m::CITY;

echo "<br>";
echo MyClass::CITY;
<?php
Class A {
    static public function sayHi() {
        echo "Hi from A<br>";
    }
}

Class B extends A {

    // We can't declare a static function from the Parent class as a normal function, it must be a static function
    /*public function sayHi() {
        echo "Hi from B";
    }*/

    static public function sayHi() {
        echo "Hi from B<br>";
        
        //parent::sayHi();
    }
}

B::sayHi();
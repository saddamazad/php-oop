<?php
/* Early and Late binding dilemma */

class Planet {
    public $name;

    static public function echoName() {
        /* This is an example of early binding, if the `self::` keyword is used here the Parent class will use it's own `getName()` function even though a Child class extends the `getName()` static function */
        //echo self::getName();


        /* This is an example of late binding, if the `static::` keyword is used here the Parent class will use the `getName()` function from the Child class if the child class overrides the `getName()` static function, otherwise the Parent class will use it's own `getName()` static function */
        echo static::getName();
    }

    static public function getName() {
        return "Planet";
    }
}

class Earth extends Planet {
    /*static public function echoName() {
        echo "Earth";
    }*/

    static public function getName() {
        return "Earth";
    }
}

//Planet::echoName(); // prints "Planet"

Earth::echoName();
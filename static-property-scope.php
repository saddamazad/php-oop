<?php
Class A {
    private static $name;
    protected static $number;

    static function sayHi() {
        self::$name = "ABCD";
        self::$number = "599";
        echo "Hi from A<br>";
    }
}

Class B extends A {
    static function sayHi() {
        echo "Hi from B<br>";
        parent::sayHi();

        //parent::$name; /* It won't work, because $name is a private static property and can't be accessed outside the parent class */

        echo parent::$number;
    }
}


B::sayHi();

//echo B::$name; /* It won't work, because $name is a private static property */
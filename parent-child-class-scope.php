<?php
class ParentClass {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
        $this->sayHi();

        self::sayBye();
    }

    public function sayHi() {
        echo "Hi {$this->name}<br>";
    }

    public function sayBye() {
        echo "<br>Bye {$this->name}";
    }
}

class ChildClass extends ParentClass {
    public function sayHi() {
        //parent::sayHi();
        echo "Hello {$this->name}<br>";
    }

    public function sayBye() {
        echo "<br>Bye {$this->name} from CC";
    }
}




/* This will run the sayHi() function from the ChildClass, because the __construct function in the ParentClass using `$this` keyword to call the sayHi() function. */

$cc = new ChildClass("ABCD");

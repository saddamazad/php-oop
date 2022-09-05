<?php
// instead of initializing a class again and again, use the instance of the class if it's already initialized

class SomeClass {
    static $instance;
    private $name;
    public function __construct($name) {
        $this->name = $name;
        echo "New Instance Created<br>";
    }

    static public function getInstance($name=null) {
        if( ! self::$instance  ) {

            // create an object instance by passing parameters(optional) in the Class constructor
            if($name) {
                self::$instance = new SomeClass($name);
            } else {
                self::$instance = new SomeClass();
            }

            //echo "New Instance Created<br>";

        } else {

            echo "Old Instance Supplied<br>";

        }

        return self::$instance;
    }

    public function getName() {
        echo $this->name."<br>";
    }
}

$sc1 = SomeClass::getInstance("Rahim");
$sc2 = SomeClass::getInstance("Karim");
$sc3 = SomeClass::getInstance();

echo "<br>";

$sc1->getName();

// This will echo "Rahim", though "Karim" is passed as parameter for `$sc2` object, that's a problem. Because the old instance will be returned.
$sc2->getName();
$sc3->getName();
<?php
class Student {
    private $name;
    private $age;
    private $class;

    public function __construct($name='',$age='',$class='') {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // magic method/function `__get()`
    public function __get($prop) {
        return $this->$prop;
    }

    // magic method/function `__set()`
    public function __set($prop, $value) {
        $this->$prop = $value;
    }

    /*public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }*/
}

//$s = new Student();
//$s->setName("Rahim");

//echo $s->getName();
//echo "<br>";



$s = new Student("Rahim", 16, "10");

// setting `private` property values using the magic method `__set()`
$s->name = "Kamal by `Magic Method`";

/**
 * getting property values using the magic method `__get()`
 * we can access the private properties as well
 */
echo "Name: ".$s->name."<br>";
echo "Age: ".$s->age."<br>";
echo "Class: ".$s->class;
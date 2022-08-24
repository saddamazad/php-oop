<?php
/* abstract class MUST be extended by child classes and can't be initialized directly */
abstract class Shape {
    /* abstract functions/methods MUST be implemented by the child classes, it forces the child classes */
    abstract public function getArea();
    abstract public function getPerimeter();

    /* normal functions may or may not be implemented by the child classes */
    public function sayHi() {
        echo "Hi";
    }
}

class Rectangle extends Shape {
    private $base, $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    /* This function must be declared here/in the child class, becuase the parent class declared this function as abstract function */
    public function getArea() {
        return "Area is: " . $this->base*$this->height;
    }

    /* This function must be declared here/in the child class, becuase the parent class declared this function as abstract function */
    public function getPerimeter() {}
}

class Triangle extends Shape {
    /* This function must be declared here/in the child class, becuase the parent class declared this function as abstract function */
    public function getArea() {}

    /* This function must be declared here/in the child class, becuase the parent class declared this function as abstract function */
    public function getPerimeter() {}
}


/* This will generate error, because abstract class {Shape} can't be initialized directly */
//$t = new Shape();


$t = new Triangle();
echo $t->sayHi();

echo "<br><br>";

$r = new Rectangle(10,20);
echo $r->getArea();
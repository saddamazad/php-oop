<?php
class Shape {
    protected $name;
    protected $area;

    public function __construct($name) {
        $this->name = $name;

        /* The __constructor will call the calculateArea() function from the Child Classes IF any class extends this Class and overrides the calculateArea() function in that Child Class. Because it's using `$this` keyword to call the calculateArea() function */
        $this->calculateArea();
    }

    public function getArea() {
        echo "This {$this->name}'s area is {$this->area}";
    }

    public function calculateArea() {

    }
}

class Triangle extends Shape {
    private $a, $b, $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        parent::__construct("Triangle"); // passing the $name parameter
    }

    public function calculateArea() {
        $perimeter = ($this->a + $this->b + $this->c)/2;

        $this->area = sqrt($perimeter*($perimeter - $this->a)*($perimeter - $this->b)*($perimeter - $this->c));
    }
}

class Rectangle extends Shape {
    private $a, $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;

        parent::__construct("Rectangle"); // passing the $name parameter
    }

    public function calculateArea() {
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle(2,4);
$r->getArea();

echo "<br><br>";

$t = new Triangle(10,12,8);
$t->getArea();
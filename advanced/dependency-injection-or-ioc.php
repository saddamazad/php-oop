<?php
// Dependency Injection or IOC(Inversion of control)

interface BaseStudent {
    function displayName();
}

class Student implements BaseStudent {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function displayName() {
        echo "Hello from {$this->name}";
    }
}

class StudentManager {
    public function introduceStudent($name) {
        // This is hard coded dependency, not good practice. or `Tightly coupled dependency`
        $st = new Student($name);
        $st->displayName();
    }
}

$sm = new StudentManager();
$sm->introduceStudent("John Doe");
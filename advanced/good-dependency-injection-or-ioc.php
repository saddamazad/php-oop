<?php
// Dependency Injection or IOC(Inversion of control)
/**
 * Passing one object to another object as parameter is called `Dependency Injection`
 */
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
    /**
     * Pass an object as parameter
     * Instead of creating an instance of the object inside the function, just pass the object as parameter
     * 
     * $param = Expecting an object(which is initialized by using a Class) that implements the `BaseStudent` interface
     */
    public function introduceStudent(BaseStudent $student) {
        // `Loosely coupled dependency` which is a good practice
        $student->displayName();
    }
}

$st = new Student("John Doe");
$sm = new StudentManager();

// passing the student object
$sm->introduceStudent($st);



$d = new datetime();

// it will throw error, because the `datetime` Class doesn't implement the BaseStudent interface
//$sm->introduceStudent($d);
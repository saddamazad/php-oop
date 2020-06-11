<?php
namespace person;

class Person {
    public $name;
    public $age = 29;
    public $degree = 'BSc in CSE';
    public $profession = 'Sr. Web Developer';

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        return $this->name = $name;
    }
}
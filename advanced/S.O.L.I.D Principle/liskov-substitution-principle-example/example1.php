<?php
abstract class Bird {
    abstract public function eat();
    abstract public function sleep();
    abstract public function fly();
}

class BirdManager {
    public function maintainBird(Bird $bird) {
        $bird->eat();
        $bird->sleep();
        $bird->fly();
    }
}

class Eagle extends Bird {
    public function eat() {

    }

    public function sleep() {
        
    }

    public function fly() {
        
    }
}

class Penguin extends Bird {
    public function eat() {

    }

    public function sleep() {
        
    }

    public function fly() {
        // Walk the bird, Penguin can't fly. This is bad design principle
    }
}
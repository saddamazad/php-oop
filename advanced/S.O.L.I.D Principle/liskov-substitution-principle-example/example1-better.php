<?php
abstract class Bird {
    abstract public function eat();
    abstract public function sleep();
    //abstract public function fly();
}

abstract class FlyingBird extends Bird {
    abstract public function fly();
}

abstract class WalkingBird extends Bird {
    abstract public function walk();
}

class BirdManager {
    public function maintainBird(Bird $bird) {
        $bird->eat();
        $bird->sleep();
    }

    // now we're able to pass same type objects that extends Bird
    public function moveFlyingBird(FlyingBird $flyingBird) {
        $flyingBird->fly();
    }

    // now we're able to pass same type objects that extends `Bird`
    public function moveWalkingBird(WalkingBird $walkingBird) {
        $walkingBird->walk();
    }
}

class Eagle extends FlyingBird {
    public function eat() {

    }

    public function sleep() {
        
    }

    public function fly() {
        // fly the bird
    }
}

class Penguin extends WalkingBird {
    public function eat() {

    }

    public function sleep() {
        
    }

    public function walk() {
        // Walk the bird
    }
}
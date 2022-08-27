<?php
/*
class DistrictCollection {
    private $districts;

    public function __construct() {
        $this->districts = array();
    }

    public function add($district) {
        array_push($this->districts, $district);
    }

    public function getDistricts() {
        return $this->districts;
    }
}

$districts = new DistrictCollection();
$districts->add("Dhaka");
$districts->add("Bogra");
$districts->add("Sylhet");

$_districts = $districts->getDistricts();
foreach($_districts as $district) {
    echo $district."<br>";
}
*/



// `IteratorAggregate` is a default PHP interface
class DistrictCollection implements IteratorAggregate {
    private $districts;

    public function __construct() {
        $this->districts = array();
    }

    public function add($district) {
        array_push($this->districts, $district);
    }

    /*public function getDistricts() {
        return $this->districts;
    }*/


    /* Implementing this function from the `IteratorAggregate` interface, it's default PHP interface */
    public function getIterator() {
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Dhaka");
$districts->add("Chittagong");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Rajshahi");

//$_districts = $districts->getDistricts();

/* The `$districts` object now returns a iterable Collection (array/object), we don't need the `getDistricts` function anymore. */
foreach($districts as $district) {
    echo $district."<br>";
}
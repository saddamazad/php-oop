<?php
// `IteratorAggregate`,`Countable` are default PHP interfaces
class DistrictCollection implements IteratorAggregate,Countable {
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


    /* Implementing this function from the `IteratorAggregate` interface, it's a default PHP interface */
    public function getIterator() {
        return new ArrayIterator($this->districts);
    }

    /* Implementing this function from the `Countable` interface, it's a default PHP interface */
    public function count() {
        return count($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Dhaka");
$districts->add("Chittagong");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Rajshahi");
$districts->add("Feni");

//$_districts = $districts->getDistricts();

/* The `$districts` object now returns a iterable Collection (array/object), we don't need the `getDistricts` function anymore. */
foreach($districts as $district) {
    echo $district."<br>";
}

echo "<br>".count($districts);
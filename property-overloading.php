<?php
class MotorCycle {
    private $parameters;

    public function __construct($displacement, $capacity, $mileage) {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    /* magic method getter */
    public function __get($name) {
        return $this->parameters[$name];
    }

    /* magic method setter, set pre-defined OR new properties */
    public function __set($name, $value) {
        return $this->parameters[$name] = $value;
    }


    /**
     * Magic method `__isset()` to handle undefined properties
     * It will be invoked to check from outside of the Class if a property's value has been set or not
     * Whenever any property of the Class is checked by the regular `isset()` function from outside of the Class, the Class will call the magic method `__isset()` function(if it's defined in the Class) to check whether the value is set or not
     */
    public function __isset($name) {
        if( !isset($this->parameters[$name]) ) {
            echo "{$name} not found";
            return false;
        }
        return true;
    }

    /**
     * Magic method to unset/remove a property from outside of the Class
     * Whenever any property of the Class needs to be removed by the regular `unset()` function from outside of the Class, the Class will call the magic method `__unset()` function(if it's defined in the Class) to do the removal of the property
     */
    public function __unset($name) {
        echo "<br>";
        print_r($this->parameters);

        unset($this->parameters[$name]);

        echo "<br>";
        print_r($this->parameters);
    }
}

$pulsar = new MotorCycle("150cc", "16ltr", "40kmph");
echo $pulsar->displacement;
echo "<br>";

// set new value to the property
$pulsar->displacement = "135cc";
echo $pulsar->displacement;
echo "<br>";

echo "<br>";
// check if a undefined property exist
if( isset($pulsar->tiresize) ) {
    $pulsar->tiresize;
}

echo "<br>";
unset($pulsar->mileage);
//echo $pulsar->mileage;
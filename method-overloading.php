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
     * Magic method `__call()` to handle undefined functions
     * 
     * Param $name = Name of the function
     * Param $arguments[] = Parameters of the function
     */
    public function __call($name, $arguments) {
        if("run" == $name) {
            if($arguments) {
                echo "I'm running at {$arguments[0]}";
            } else {
                echo "I'm running";
            }
        }
    }

    /**
     * Magic method `__callStatic()` to handle undefined static functions, that can be accessed without initializing an object
     * 
     * Param $name = Name of the function
     * Param $arguments[] = Parameters of the function
     */
    static public function __callStatic($name, $arguments) {
        if("wash" == $name) {
            if($arguments) {
                echo "I'm washing it using {$arguments[0]}";
            }
        } else {
            echo "Static Call";
        }
    }
}

$pulsar = new MotorCycle("150cc", "16ltr", "40kmph");
//$pulsar->run();

// call the undefined function with parameters/arguments
$pulsar->run("100kmph");
echo "<br><br>";



//MotorCycle::wash();

// call the undefined `static` function with parameters/arguments, `static` functions can be accessed without initializing object
MotorCycle::wash("Shampoo");
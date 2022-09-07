<?php
// abstract factory is the factory of factories, creates factory objects based on different conditions

// simplifies the creation of factory objects


class Car {
    public function getName() {
        return "Car";
    }
}


class Truck {
    public function getName() {
        return "Truck";
    }
}


// common `interface or abstract class` to be implemented/extended by all the factory classes
abstract class AbstractVehicleFactory {
    abstract public function create();
}


class CarFactory extends AbstractVehicleFactory {
    public function create() {
        return new Car();
    }
}


class TruckFactory extends AbstractVehicleFactory {
    public function create() {
        return new Truck();
    }
}


// The factory of factories, where all the factory objects are created
class VehicleFactory {
    public function getFactory($type="car") {
        if("car" == $type) {
            return new CarFactory();
        } elseif("truck" == $type) {
            return new TruckFactory();
        }
    }
}

$vf = new VehicleFactory();
$tf = $vf->getFactory("truck");
$truck = $tf->create();
echo $truck->getName();

echo "<br><br>";

$cf = $vf->getFactory("car");
$car = $cf->create();
echo $car->getName();
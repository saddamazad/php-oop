<?php
// ফ্যাসাড - Facade pattern encapsulates a complex sub-system or sequence of tasks into a function to make it easier for the user to use.

class SpaceShuttle {
    public function powerOn() {
        echo "Power On<br>";
    }

    public function checkTemp() {
        echo "Temperature Ok<br>";
    }

    public function checkFuel() {
        echo "Fuel Ok<br>";
    }

    public function startEngine() {
        echo "Engine Started<br>";
    }

    public function startThrusters() {
        echo "Bye bye<br>";
    }
}

$ss = new SpaceShuttle();
// $ss->powerOn();
// $ss->checkTemp();
// $ss->checkFuel();
// $ss->startEngine();
// $ss->startThrusters();


class SpaceShuttleFactory {
    private $shuttle;

    public function __construct(SpaceShuttle $shuttle) {
        $this->shuttle = $shuttle;
    }

    public function takeOff() {
        $this->shuttle->powerOn();
        $this->shuttle->checkTemp();
        $this->shuttle->checkFuel();
        $this->shuttle->startEngine();
        $this->shuttle->startThrusters();
    }
}

$ssf = new SpaceShuttleFactory($ss);
$ssf->takeOff();
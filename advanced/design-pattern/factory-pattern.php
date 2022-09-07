<?php
// factory pattern simplifies the process of initialization of a class and returns the object to the user

$cars = [
    "nissan" => [
        "sunny" => [
            "make" => 2004,
            "model" => "Nissan Sunny B14",
            "displacement" => "1500cc",
            "feature" => "Some Special Features for Filder 2004"
        ],
        "sunny-ex" => [
            "make" => 2005,
            "model" => "Nissan Sunny Ex Saloon",
            "displacement" => "1300cc",
            "feature" => "Some Special Features for Filder 2005"
        ]
    ],
    "toyota" => [
        "axio" => [
            "make" => 2004,
            "model" => "Toyota Corolla Axio",
            "displacement" => "1500cc",
            "feature" => "Some Special Features for Axio 2004"
        ],
        "filder" => [
            "make" => 2005,
            "model" => "Toyota Corolla Filder",
            "displacement" => "1500cc",
            "feature" => "Some Special Features for Filder 2005"
        ]
    ]
];

class Car {
    private $make, $model, $displacement, $feature;

    public function __construct($carData) {
        $this->make = $carData["make"];
        $this->model = $carData["model"];
        $this->displacement = $carData["displacement"];
        $this->feature = $carData["feature"];
    }

    // magic method `__call()` to handle undefined methods/functions
    public function __call($method, $args=null) {

        // replacing `get` from {getDisplacement} method-name with empty string and lowercase it to match with our property names
        $property = str_replace("get","",strtolower($method));
        
        if( isset($this->{$property}) ) {
            return $this->{$property};
        }

        return '';

    }
}

$nissanSunny = new Car($cars["nissan"]["sunny"]);
echo $nissanSunny->getDisplacement()."<br>";
echo $nissanSunny->getModel();

echo "<br><br>";
echo "<h4>Simplified Process with Factory Pattern</h4>";


// simplifying the process to get data from the database
class CarFactory {
    private $data;

    function __construct($data) {
        $this->data = $data;
    }

    public function getNissanSunny() {
        $data = $this->data["nissan"]["sunny"];

        // returning new object
        return new Car($data);
    }

    public function getToyotaAxio() {
        $data = $this->data["toyota"]["axio"];

        // returning new object
        return new Car($data);
    }
}

$carFactory = new CarFactory($cars);
$toyotaAxio = $carFactory->getToyotaAxio();
echo $toyotaAxio->getModel();
echo "<br>";
$nissanSunny = $carFactory->getNissanSunny();
echo $nissanSunny->getDisplacement();
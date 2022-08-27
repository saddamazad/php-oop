<?php
class FavColor {
    public $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function setData($data) {
        $this->data = $data;
    }
}

// $fc1 = new FavColor("Some Data");
// $fc2 = $fc1;
// $fc2->setData("More Data");

// print_r($fc1);
// echo "<br>";
// print_r($fc2);


$fc1 = new FavColor("Some Data");

// cloning the `$fc1` object
$fc2 = clone $fc1;

print_r($fc1);
echo "<br>";
print_r($fc2);

$fc2->setData("More Data");
echo "<br><br>";

print_r($fc2);
echo "<br>";
print_r($fc1);
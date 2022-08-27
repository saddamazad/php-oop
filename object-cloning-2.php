<?php
class Color {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
}

class FavColor {
    public $data;
    public $color;

    public function __construct($data, $color) {
        $this->data = $data;
        // assigning `Color` object
        $this->color = new Color($color);
    }

    public function updateColor($color) {
        $this->color->setColor($color);
    }

    // magic method to clone internal reference objects of an object when the object is cloned
    public function __clone() {
        $this->color = clone $this->color;
    }
}


$fc1 = new FavColor("Some Data","Red");
print_r($fc1);

echo "<br>";

// cloning the `$fc1` object
$fc2 = clone $fc1;
print_r($fc2);
echo "<br><br>";

$fc2->updateColor("Green");
print_r($fc1);
echo "<br>";
print_r($fc2);
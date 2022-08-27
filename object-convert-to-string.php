<?php
class Color {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    // magic method to convert an object to string, so that it can be echoed/printed
    public function __toString() {
        return "The Color is: {$this->color}";
    }
}

$c = new Color("Red");
//echo $c; /* This won't work if the `__toString()` magic method is not defined in the class, because objects can't be echoed/printed by default */

//echo serialize($c); /* This will work, objects can be serialized and echoed/printed */


/* if any class contains the `__toString()` magic method, whenever the object is echoed/printed, it will call the __toString() magic method */
echo $c;
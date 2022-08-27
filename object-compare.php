<?php
class Planet {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e1 = new Planet("Earth");
$m = new Planet("Mars");

// if($e == $m) {
//     echo "Similar Planets";
// } else {
//     echo "Not Similar";
// }

//$e1->name = "Earth 2";

/**
 * Always compare objects along with type, `===` should be used instead of `==` for comparison
 * Here `$e1` and `$e` objects are not similar, because they are different objects by initialization
 */
if($e === $e1) {
    echo "Similar Planets";
} else {
    echo "Not Similar";
}
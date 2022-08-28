<?php
// Namesapce is basically a way to group classes/interfaces/abstract-classes
namespace Astronomy\Planets;

/**
 * if the parent Class use the same `namespace` then we can extend the Class like below
 */
class Earth extends Planet {
    public function getName() {
        echo "Earth";
    }
}


/**
 * if the parent class is in a different `namespace` then we have to extend the class like below
 * 
 * `\Astronomy\Planets\` should be replaced by the `namespace` of the parent Class
 * 
 */
class Earth extends \Astronomy\Planets\Planet {
    public function getName() {
        echo "Earth";
    }
}
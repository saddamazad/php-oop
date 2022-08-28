<?php
namespace Project;

// including two classes with SAME name `Bike`, but they are in different `namespace`
include "c1.php";
include "c2.php";


/**
 * `use` should always be declared with Qualified Name (full path), otherwise FATAL Error will occur
 */
use \Project\MotorCycles\Bike as Hornet; // alias, Hornet is now alias of `\Project\MotorCycles\Bike`
use \Project\Bike as Pulsar;


$b = new Bike(); // Unqualified Name, namespace of `this`(current) file will be pre-fixed here like \Project\
echo $b->getName();


/**
 * The below `Bike` Class is loading from the c2.php file and the namespace in the c2.php file is `Project\MotorCycles`
 */
//$b = new MotorCycles\Bike(); /* Unqualified Name, namespace of `this`(current) file will be pre-fixed here like \Project\ */
//echo $b->getName(); /* This will echo "Hornet" */

echo "<br><br>";


// initializing object with the class alias
$h = new Hornet;
echo $h->getName();

echo "<br>";

// initializing object with the class alias
$h = new Pulsar;
echo $h->getName();
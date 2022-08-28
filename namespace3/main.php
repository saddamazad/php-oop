<?php
// Namesapce is basically a way to group classes/interfaces/abstract-classes
namespace Astronomy;

include "planet.php";
include "earth.php";

$pe = new \Astronomy\Planets\Earth(); // Qualified Name, always begins with a `backslash`

/**
 * Earth Class `extends` the Planet Class, and they both use the SAME namespace `Astronomy\Planets`
 */
$earth = new Planets\Earth(); // Unqualified Name
$earth->getMembership(); // getMembership() function is defined in the parent `Planet` class
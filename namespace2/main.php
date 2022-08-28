<?php
// Namesapce is basically a way to group classes/interfaces/abstract-classes
namespace Astronomy;

include "planet.php";
include "earth.php";

$planet = new \Astronomy\Planets\Planet(); // Qualified Name
$planet->getName();

echo "<br>";

$planet = new Planets\Planet(); // Unqualified Name
$planet->getName();
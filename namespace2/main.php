<?php
// Namesapce is basically a way to group classes/interfaces/abstract-classes
namespace Astronomy;

include "planet.php";
include "earth.php";

$planet = new \Astronomy\Planets\Planet(); // Qualified Name, always begis with a `backslash`
$planet->getName();

echo "<br>";

/**
 * Namespace prefixes the Class name with `\namespace_name\` WHEN `Unqualified Name` is used to initialize an object
 * In this file the name of the namespace is Astronomy, so it will prefix the Class with `\Astronomy\`
 */
$planet = new Planets\Planet(); // Unqualified Name
$planet->getName();
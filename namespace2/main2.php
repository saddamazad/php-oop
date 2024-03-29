<?php
// Namesapce is basically a way to group classes/interfaces/abstract-classes
namespace Astronomy\Planets;

include "planet.php";
include "earth.php";

$planet = new \Astronomy\Planets\Planet(); // Qualified Name, always begins with a `backslash`
$planet->getName();

echo "<br>";

/**
 * Current file's namespace prefixes the Class name with `\namespace_name\` WHEN `Unqualified Name` is used to initialize an object
 * In this file the name of the namespace is Astronomy\Planets, so it will prefix the Class with `\Astronomy\Planets\`
 */
$planet = new Planet(); // Unqualified Name
$planet->getName();
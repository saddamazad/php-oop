<?php
// Namesapce is basically a way to group classes/interfaces/abstract-classes
namespace Astronomy;

include "planet.php";

$planet = new \Astronomy\Planet(); // Qualified Name, always begis with a `backslash`
$planet->getName();

echo "<br>";

/**
 * Namespace prefixes the Class name with `\namespace_name\` WHEN `Unqualified Name` is used to initialize an object
 * In this file the name of the namespace is Astronomy, so it will prefix the Class with `\Astronomy\`
 */
$planet2 = new Planet(); /* This also works, but it's `Unqualified Name` */
$planet2->getName();



// PHP built-in Classes should also be initialized with a `back slash \` before the Class name when called inside a file that has namespace.
new \DateTime();

//new DateTime(); /* This will throw FATAL Error, since there is no `backslash` before the Class name and it's called inside a file that has `namespace` */


// with `backslash` Qualified name, without `backslash` Unqualified name


//
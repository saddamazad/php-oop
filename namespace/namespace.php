<?php
// Namesapce is basically a way to group classes/interfaces/abstract-classes
namespace Astronomy;

include "planet.php";

$planet = new \Astronomy\Planet(); // Qualified Name
$planet->getName();

echo "<br>";
$planet2 = new Planet(); /* This also works, but it's `Unqualified Name` */
$planet2->getName();



// PHP built-in Classes should also be initialized with a `back slash \` before the Class name when called inside a file that has namespace.
new \DateTime();

//new DateTime(); /* This will throw FATAL Error, since there is no `backslash` before the Class name and it's called inside a file that has `namespace` */


// with `backslash` Qualified name, without `backslash` Unqualified name


//
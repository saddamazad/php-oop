<?php
// This method was in use before PHP 7.2 version, from the 7.2 version it's depricated
/*
function __autoload($name) {
    //echo "Loading ".$name."<br>";
    include "{$name}.php";
}
*/



// This autoloading method is used from the PHP 7.2 version
/*function autoload($name) {
    include strtolower("{$name}.php");
}
spl_autoload_register("autoload");*/


// This autoloading method is used from the PHP 7.2 version
function autoload($name) {
    // if we want to autoload classes from sub-folder.
    if( strpos($name, "Planet_") !== false ) {

        $filename = str_replace("Planet_", "", $name);
        // setting up the sub-folder path
        include strtolower("planets/{$filename}.php");

    } else {

        include strtolower("{$name}.php");

    }
}
spl_autoload_register("autoload");


(new Spaceship)->launch();

echo "<br><br>";
(new Planet)->getName();


echo "<br><br>";

// Initializing an object from the sub-folder planets by calling the `Planet_Mars` class
(new Planet_Mars)->getName();
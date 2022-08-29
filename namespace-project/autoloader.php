<?php
/* autoloading function to autoload the classes inside a file that HAS namespace */
function autoload($className) {
    /* the first backslash in this `CloudStorage\\` is for escaping */
    $path = strtolower(str_replace("CloudStorage\\", "", $className)).".php";
    $path = str_replace("\\",DIRECTORY_SEPARATOR,$path); // the first backslash in this `\\` is for escaping
    include_once($path);
}
//spl_autoload_register("autoload"); /* This won't work in a file that HAS namespace */
spl_autoload_register(__NAMESPACE__ . "\autoload"); // This is how it should be called in a file that HAS namespace


/* closer/anonymous function */
// spl_autoload_register(function($className) {
//     $path = strtolower(str_replace("CloudStorage\\", "", $className)).".php";
//     $path = str_replace("\\",DIRECTORY_SEPARATOR,$path);
//     echo $path;
//     include_once($path);
// });

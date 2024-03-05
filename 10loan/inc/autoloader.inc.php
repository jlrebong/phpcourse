<?php

// Takes a function name as a string
spl_autoload_register('autoLoad');

function autoLoad($name) {
    $path = "classes/";
    $ext  = ".class.php";
    $path = $path . $name . $ext;

    // Add some error handling
    if(!file_exists($path)) {
        return false;
    }

    include_once $path;
}
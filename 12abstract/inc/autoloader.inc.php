<?php

// Takes a function name as a string
spl_autoload_register('autoLoad');

function autoLoad($name) {
    $path  = "classes/${name}.class.php";
    $path2 = "abstract/${name}.abstract.php";

    // Add some error handling
    if(file_exists($path)) {
        include_once $path;
    } elseif (file_exists($path2)) {
        include_once $path2;
    }

    return false;
}
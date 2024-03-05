<?php

// Takes a function name as a string
spl_autoload_register('autoLoad');

function autoLoad($name) {
    $path1  = "classes/${name}.class.php";
    $path2  = "controller/${name}.php";
    $path3  = "model/${name}.php";
    $path4  = "view/${name}.php";

    // Add some error handling
    if(file_exists($path1)) { include_once $path1; } 
    if(file_exists($path2)) { include_once $path2; } 
    if(file_exists($path3)) { include_once $path3; } 
    if(file_exists($path4)) { include_once $path4; } 
}
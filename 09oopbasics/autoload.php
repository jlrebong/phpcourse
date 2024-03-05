<?php
// Takes a function name as a string
// spl_autoload_register('autoLoad');

// function autoLoad($name) {
//     $path = "classes/";
//     $ext  = ".class.php";
//     $path = $path . $name . $ext;

//     include_once $path;
// }

// We will take it out of here and create an autoloader file
// Then each time we need classes, we will just include that one file
include_once './inc/autoloader.php';


$user = new User;
$user->getUsername();



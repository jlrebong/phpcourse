<?php

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname = 'course';

// 1. Get a connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("database connection fails");

?>
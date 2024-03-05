<?php

class DB {
    var $dbhost = '127.0.0.1';
    var $dbuser = 'root';
    var $dbpass = '';
    var $dbname = 'course';
    // var $conn;
    private $conn;

    function connect() {
        // 1. Get a connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("database connection fails");
    }

    function getUser($username) {
        return mysqli_query($this->conn, "select * from credentials where username='${username}'");
    }
}

$db = new DB;

$db->connect;

$db->conn = null;  // will error here if its marked as private

$db->getUser('admin');  // at this point our program refuses to work here


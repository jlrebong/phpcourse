<?php

class DB {
    private $dbhost = '127.0.0.1';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'course';
    private $conn;

    function connect() {
        // 1. Get a connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("database connection fails");
    }
}

//  Option 1
class User {
    private $dbhost = '127.0.0.1';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'course';
    private $conn;

    function connect() {
        // 1. Get a connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("database connection fails");
    }

    function getUser($username) {
        return mysqli_query($this->conn, "select * from credentials where username='${username}'");
    }
}

//  2 Inheritance
class User2 extends DB {
    function getUser($username) {
        return mysqli_query($this->conn, "select * from credentials where username='${username}'");
    }
}






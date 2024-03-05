<?php

class DB {
    const dbhost = '127.0.0.1';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'course';
    private $conn;

    function connect() {
        // 1. Get a connection
        $conn = mysqli_connect(self::dbhost, $dbuser, $dbpass, $dbname) or die("database connection fails");
    }
}
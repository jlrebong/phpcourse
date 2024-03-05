<?php

class Model {
    private $dbhost = '127.0.0.1';
    private $dbuser = 'root';
    private $dbname = 'course';
    private $pdo   = null;

    public function __construct() {
        $dsn = "mysql:host=$this->dbhost;$this->dbname";
        $this->pdo = new PDO('mysql:host=localhost;dbname=course', $this->dbuser, '');
    }
}
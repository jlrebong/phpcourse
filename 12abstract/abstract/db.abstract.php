<?php

abstract class DB {
    private $dbhost = '127.0.0.1';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'course';
    private $pdo   = null;

    public function __construct() {
        // DSN data source name
        $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname";
        $this->pdo = new PDO('mysql:host=localhost;dbname=course', $this->dbuser, $this->dbpass);
    }

    public function connect() {
        return $this->pdo;
    }

    // Force our extending class to define this method
    abstract protected function fetch(array $options);
    abstract protected function add(array $options);

}
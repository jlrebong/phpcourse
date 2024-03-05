<?php

class DB {
    private $dbhost = '127.0.0.1';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'course';
    private $pdo   = null;

    public function __construct() {
        $dsn = "mysql:host=$this->dbhost;$this->dbname";
        // $option = [
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        // ];

        $this->pdo = new PDO('mysql:host=localhost;dbname=course', $this->dbuser, $this->dbpass);
    }

    public function fetch($username, $password) {
        $password = md5($password);
        $stmt = $this->pdo->prepare('SELECT * FROM credentials where username=? and password=?');
        $stmt->execute([$username, $password]);

        while($user = $stmt->fetch()) {
            echo $user['username'] ."<br/>";
        }
    }

    public function addUser($username, $password) {
        $password = md5($password);
        $sql = "INSERT INTO credentials(username, password) values(:u, :p)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':u'=> $username, ':p' => $password]);
    }

}
<?php

class Credentials extends DB {
    
    public function fetch(array $options) {
        $username = $options['username'];
        $password = md5($options['password']);

        $stmt = $this->connect()->prepare('SELECT * FROM credentials where username=? and password=?');
        $stmt->execute([$username, $password]);

        return $stmt;
    }

    public function add(array $options) {
        $username = $options['username'];
        $password = md5($options['password']);

        $sql = 'INSERT INTO credentials(username,password) values(?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password]);
    }

}

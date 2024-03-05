<?php

class LoginModel extends DB {

    public function fetch(array $options) {
        $username = $options['username'];
        $password = md5($options['password']);

        $stmt = $this->connect()->prepare('SELECT * FROM credentials where username=? and password=?');
        $stmt->execute([$username, $password]);

        return $stmt->fetchAll();
    }

}
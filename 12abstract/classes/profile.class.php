<?php
class profile extends DB {
    public function fetch(array $options) {
        $firstname = $options['firstname'];
        $lastname  = $options['lastname'];

        $stmt = $this->connect()->prepare('SELECT * FROM profile where firstname=? and lastname=?');
        $stmt->execute([$firstname, $lastname]);

        return $stmt;
    }


    public function add(array $options) {
        var_dump('add');
    }
}

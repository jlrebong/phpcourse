<?php

class User {
    public $username;
    public $password;

    function getUsername() {
        echo $this->username;
    }
}

class Profile extends User {
    private $firstname;
    private $lastname;

    function getUsername() {
        echo $this->firstname . ' ' . $this->lastname;
    }
}


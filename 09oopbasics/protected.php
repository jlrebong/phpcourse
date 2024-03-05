<?php

class User {
    protected $username;
    protected $password;

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

    function getPassword() {
        echo $this->password; // Can be used here
    }
}

$user = new User;
$user->username; // But will error here
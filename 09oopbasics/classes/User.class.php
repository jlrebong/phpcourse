<?php

class User {
    protected $username='test';
    protected $password;

    function getUsername() {
        echo $this->username;
    }
}
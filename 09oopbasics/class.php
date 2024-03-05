<?php


class User {
    var $firstname = 'jasper';

    function getname() {
        echo $firstname;
        // echo $thois->firstname;
    }
}

$u = new User;

$u->getname();
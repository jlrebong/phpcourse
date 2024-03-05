<?php
include_once './inc/autoloader.inc.php';


$cr = new Credentials();
$rows = $cr->fetch(['username' => 'admin', 'password' => '1234']);

while($user = $rows->fetch()) {
    echo $user['username'] ."<br/>";
}

// $cr->add(['username' => 'generic', 'password' => '1234']);
$pr = new Profile();
$prows = $pr->fetch(['firstname'=>'jasper roy', 'lastname'=>'rebong']);

while($profile = $prows->fetch()) {
    echo "${profile['firstname']} ${profile['lastname']}<br/>";
}
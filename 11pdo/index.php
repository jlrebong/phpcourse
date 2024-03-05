<?php
include_once './inc/autoloader.inc.php';

$db = new DB();

$db->fetch('admin', '1234');
// $db->addUSer('poweruser', '1234');
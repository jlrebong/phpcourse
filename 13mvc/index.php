<?php
include "model.php";
include "controller.php";
include "view.php";

$model = new Model();
$view  = new View();
$cntrl = new Controller($model, $view);

$cntrl ->render();

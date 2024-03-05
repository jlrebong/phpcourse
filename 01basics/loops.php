<?php

$x=1;

while ($x <= 10) {
    echo $x++, "<br/>";
}

$animals = ['dog', 'cat', 'rabbit'];

// $animal = array_pop($animals);
// echo $animal, "<br/>";

// $animal = array_pop($animals);
// echo $animal, "<br/>";

// $animal = array_pop($animals);
// echo $animal, "<br/>";

// $animal = array_pop($animals);
// echo $animal, "--<br/>";

while ($animal = array_pop($animals)) {
    echo $animal, "<br/>";
}

$str = <<<'HERE'
test
HERE;

echo $str;

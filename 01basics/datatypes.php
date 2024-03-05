<?php

$name = "Jasper Rebong";
$age = 24;
$age++;

echo "Hello {$name} " . $age;

// integer
$age = 24;

// floating point
$price = 10.5;
// string

$name = "jasper rebong";
$name = 'jasper rebong';
$name = <<<EOD
Hello $name
EOD;

echo $name;
// boolean
$is2022 = false;

// array
$arr  = [1, 2, 3];

$arr[] = 4;
$arr[] = 5;
$arr[] = 6;
echo "**<br/>";
print_r($arr);
echo "**<br/>";
$arr2 = array("firstname", "lastname", 24);
echo "<br/>";
print_r($arr2);
echo "<br/>";
echo count($arr2);
echo "<br/>";
echo sizeof($arr2);

// Associative array
$arr = array(
    'brand' => 'toyota',
    'mileage' => '500000',
    'type' => 'suv'
);

$arr2 = array(
    'brandx' => 'vios',
    'mileagex' => '100000',
    'typex' => 'suv'
);

echo "<br/>";
print_r(array_merge($arr, $arr2));
echo "<br/>";
echo $arr['brand'];
echo "<br/>";



?>
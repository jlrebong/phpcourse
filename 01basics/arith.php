<?php

$sum   = 1 + 1;
$minus = 1 - 1;
$mul   = 4 * 7;
$div   = 5 / 2;
$mod   = 5 % 2;
$exp   = 4 ** 3;

echo $sum, "<br/>";
echo $minus, "<br/>";
echo $mul, "<br/>";
echo $div, "<br/>";
echo $mod, "<br/>";
echo $exp, "<br/>";

// Precendence - PEMDAS
// Parenthesis, EXPONENT, (MULTIPLE or DIV), (ADD or SUBTRACT), MOD

$pemdas = 4 / 2 + 3 * 9 - 5 ** 2;
// $pemdas = 4 / 2 + 3 * 9 - 25;
// $pemdas = 2 + 27 - 25;
// $pemdas = 29 - 25;
echo $pemdas, "<br/>";


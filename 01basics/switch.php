<?php

$role = "visitor";
$type="";
switch ($role) {
	case "visitor": 
        $type="guest"; 
		break;
    case 'admin': 
        $type="administrator"; 
		break;
	default: $type= "restricted"; 
}

echo $type;

$type2 = match( $role ) {
    'visitor' => "guest",
    'admin'   => "administrator", 
    'others'  => "restricted"
};

echo $type2;
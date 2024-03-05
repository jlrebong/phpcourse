<?php

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname = 'course';

// 1. Get a connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("database connection fails");

// if (!$conn) {
//     die("database connection fails");
// }

// 2. Do the query
$result = mysqli_query($conn, "select * from credentials");

// 3. Get the number of resultes
$rowCount = mysqli_num_rows($result);


if($rowCount) {
    // $row = mysqli_fetch_assoc($result);
    // var_dump($row);

    // echo "<br/>";

    // $row = mysqli_fetch_assoc($result);
    // var_dump($row);

    // echo "<br/>";

    // $row = mysqli_fetch_assoc($result);
    // var_dump($row);

    while ($row = mysqli_fetch_assoc($result)) {
        var_dump($row);
        echo "<br/>";
    }
} else {
    echo 'No Results Found';
}

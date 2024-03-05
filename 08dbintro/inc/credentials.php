<?php

function getUser($username) {
    global $conn;

    $result = mysqli_query($conn, "select * from credentials where username='${username}'");

    return $result;
}

function getResultCount($sqlQueryResult) {
    return mysqli_num_rows($sqlQueryResult);
}

function getCredentials($sqlQueryResult) {
    return mysqli_fetch_assoc($sqlQueryResult);
}

function redirect($location) {
    header("location: ${location}");
}

?>

<?php
session_start();

if(!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Review</title>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

<nav>
    <h1>Real Estate Agency</h1>
    <ul>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

<div class="main-container">
    <h2>File Upload Page</h2>

    
    
</div>
    
</body>
</html>
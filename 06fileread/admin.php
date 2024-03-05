<?php
    session_start();

    if(!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header('location: login.php');
        exit;
    }

    $myfile = fopen('houses.csv', "r") or die('unable to open file');

    $houses = [];
    while($line = fgets($myfile)) {
        $data = explode(',', $line);
        $h = [
            'name' => $data[0],
            'img'  => $data[1],
            'price'=> $data[2],
            'desc' => $data[3],
        ];
        array_push($houses, $h);
    }

    fclose($myfile);
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
    <h1><a href="index.php">Real Estate Agency</a></h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

<div class="main-container">

<table class='main-list'>
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($houses as $house) { ?>
        <tr>
            <td><img src="./img/<?= $house['img']?>" class="photo" alt=""></td>
            <td><?= $house['name']?></td>
            <td class='price'>$<?= $house['price']?></td>
            <td><?= $house['desc']?></td>
            <td><a href="edit.php">Edit</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

    
    
</div>
    
</body>
</html>
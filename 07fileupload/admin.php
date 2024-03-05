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

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/6a7678e057.js" crossorigin="anonymous"></script>
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

    <div class='add-new'>Add New House <i class="fas fa-plus add-new-symbol"></i></div>

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


<div class="modal-container">
     
    <div class="modal-content">
        <i class="fas fa-window-close window-close"></i>
        <h3>Add House Details</h3>
        <div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <form-group>
                    <label for="title">Title</label>
                    <input type="text" name='title'>
                </form-group>
                <form-group>
                    <label for="price">Price</label>
                    <input type="number" name='price'>
                </form-group>
                <form-group>
                    <label for="description">Description</label>
                    <textarea name="description" id="" cols="20" rows="10"></textarea>
                </form-group>
                <form-group>
                    <label for="category">Category</label>
                    <input type="text" name='category'>
                </form-group>
                <form-group>
                    <label for="houseimg">Image</label>
                    <input type="file" name='houseimg'>
                </form-group>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<script src="./scripts/apps.js"></script>
    
</body>
</html>
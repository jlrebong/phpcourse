<?php
session_start();

$filter = false;
if (isset($_GET['type'])) {
    $filter = $_GET['type'];
}

$login = false;
if(isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    $login=true;
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
    <ul class='nav-categories'>
        <li class="property"><a href="index.php">all</a></li>
        <li class="property"><a href="index.php?type=mansions">mansions</a></li>
        <li class="property"><a href="index.php?type=modern">modern</a></li>
        <li class="property"><a href="index.php?type=apartments">apartments</a></li>
        <li class="property"><a href="index.php?type=classic">classic</a></li>
    </ul>
    <ul class='nav-admin'>
        <?php
            if (!$login) {
                echo '<li><a href="login.php">Login</a></li>';
            }else {
                echo '<li><a href="admin.php">Admin</a></li><li><a href="logout.php">Logout</a></li>';        
            }
        ?>
    </ul>
</nav>

<div class="main-container">
    <section class="menu">
        <div class="title">
            <h2>View our selection of finest property</h2>
        </div>

        <div class="section-center">
        <?php
            $myfile = fopen('houses.csv', "r") or die('unable to open file');

            $houses = [];
            while($line = fgets($myfile)) {

                $data = explode(',', $line);
                $h = [
                    'name' => $data[0],
                    'img'  => $data[1],
                    'price'=> $data[2],
                    'desc' => $data[3],
                    'type' => $data[4]
                ];
                array_push($houses, $h);
            }

            

            fclose($myfile);

            

            // Filter
            $houses = array_filter($houses, function($house) {
                global $filter;
                if (!$filter) return true;

                return $filter && $filter == trim($house['type']);
            });


            foreach($houses as $house) {

        ?>
                <article class="menu-item">
                    <img src="./img/<?= $house['img']?>" class="photo" alt="">
                    <div class="house-info">
                        <header>
                            <h4><?= $house['name']?></h4>
                            <h4 class="price"><?= $house['price']?></h4>
                        </header>
                        <p class="item-text"><?= $house['desc']?></p>
                    </div>
                </article>
        <?php
        }
        ?>
        </div>
    </section>
</div>
    
</body>
</html>
<?php

$filter = false;
if (isset($_GET['type'])) {
    $filter = $_GET['type'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Review</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <h1>Real Estate Agency</h1>
    <ul>
        <li class="property"><a href="index.php">all</a></li>
        <li class="property"><a href="index.php?type=mansions">mansions</a></li>
        <li class="property"><a href="index.php?type=modern">modern</a></li>
        <li class="property"><a href="index.php?type=apartments">apartments</a></li>
        <li class="property"><a href="index.php?type=classic">classic</a></li>
    </ul>
</nav>

<div class="main-container">
    <section class="menu">
        <div class="title">
            <h2>View our selection of finest property</h2>
        </div>

        <div class="section-center">
        <?php
            $houses = [
                ['name'=>'Mansion', 'img'=>'house-1.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'mansions'],
                ['name'=>'Classic', 'img'=>'house-2.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'classic'],
                ['name'=>'Modern House', 'img'=>'house-3.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
                ['name'=>'Modern House', 'img'=>'house-4.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
                ['name'=>'Modern', 'img'=>'house-5.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
                ['name'=>'Apartments', 'img'=>'house-6.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'apartments'],
                ['name'=>'Apartments', 'img'=>'house-7.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'apartments'],
                ['name'=>'Modern House', 'img'=>'house-8.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
                ['name'=>'Classic', 'img'=>'house-9.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'classic'],
                ['name'=>'Apartments', 'img'=>'house-10.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'apartments']
            ];

            // Version 1 - classic IF 
            // $filtered = [];
            // for($x=0; $x < count($houses); $x++) {
            //     if ($filter && $filter == $houses[$x]['type']) {
            //         $filtered[] = $houses[$x];
            //     } 
            // }

             
            // if (count($filtered)) {
            //     $houses = $filtered;
            // }

            // Version 2 - array_filter
            $houses = array_filter($houses, function($house) {
                global $filter;
                if (!$filter) return true;

                return $filter && $filter == $house['type'];
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
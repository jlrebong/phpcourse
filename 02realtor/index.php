<?php

function getData() {
    return [
        ['name'=>'Classic Mansion', 'img'=>'house-1.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Classic Mansion 2', 'img'=>'house-2.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Modern House', 'img'=>'house-3.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Modern House', 'img'=>'house-4.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Minimalist', 'img'=>'house-5.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Apartments', 'img'=>'house-6.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Apartments', 'img'=>'house-7.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Modern House', 'img'=>'house-8.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Classic Mansion', 'img'=>'house-9.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur'],
        ['name'=>'Apartments', 'img'=>'house-10.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur']
    ];
}

$houses = getData();

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
        <li class="property">all</li>
        <li class="property">mansions</li>
        <li class="property">modern</li>
        <li class="property">apartments</li>
        <li class="property">classic</li>
    </ul>
</nav>

<div class="main-container">
    <section class="menu">
        <div class="title">
            <h2>View our selection of finest property</h2>
        </div>

        <div class="section-center">
        <?php
            

            foreach($houses as $house) {
            // Alternative Syntax
            // foreach($houses as $house):

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

        // Alternative Syntax
        // endforeach;
        ?>
        </div>
    </section>
</div>
    
</body>
</html>
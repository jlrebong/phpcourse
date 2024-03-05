<section class="menu">
    <div class="title">
        <h2>View our selection of finest property</h2>
    </div>

    <div class="section-center">
    <?php
        foreach($houses as $house):
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
         endforeach;
    ?>
    </div>
</section>
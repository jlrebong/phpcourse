<?php
include_once("./inc/autoloader.inc.php");
include_once("./inc/header.inc.php");
session_start();

$controller = new IndexController();
?>
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
            $controller->renderAdminLink();
        ?>
    </ul>
</nav>

<div class="main-container">
    <?php
        $controller->render();
    ?>
</div>
<?php
include_once("./inc/footer.inc.php");
?>

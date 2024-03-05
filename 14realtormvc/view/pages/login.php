<div class="login-card">
    <h2>Please Login</h2>
    <?php
        if ($error) {
            echo "<h4 class='warn'>${error}</h4>";
        }
    ?>
    <h3>Enter name and password</h3>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" class="login-form" method="post">
        <input type="text" name="username" placeholder="username" class="<?=$error ?>">
        <input type="password" name="password"  placeholder="password" class="<?=$error ?>">
        <a href="website.com">Forgot your password</a>
        <input type="submit" name='submit' value="submit">
    </form>
</div>
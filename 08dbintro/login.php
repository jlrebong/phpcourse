<?php
include './inc/config.php';
include './inc/credentials.php';

$error = '';
if (isset($_POST['submit'])) {

    $result = getUser($_POST['username']);

    $count  = getResultCount($result);

    if($count) {
        $user = getCredentials($result);
        
        if (md5($_POST['pwd']) != $user["password"]) {
            $error = 'invalid';
        }
    } else {
        $error = 'invalid';
    }

    if (!$error) {
        redirect('index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./style/login.css">

    <style>
        .invalid {
            outline: 2px solid red;
        }

        .warn {
            color: red;
        }
    </style>
</head>
<body>
    
    

    <div class="login-card">
        <h2>Please Login</h2>
        <?php
            if ($error) {
                echo "<h4 class='warn'>Credentials not found</h4>";
            }
        ?>
        <h3>Enter name and password</h3>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" class="login-form" method="post">
            <input type="text" name="username" placeholder="username" class="<?=$error ?>">
            <input type="password" name="pwd"  placeholder="password" class="<?=$error ?>">
            <a href="website.com">Forgot your password</a>
            <input type="submit" name='submit' value="submit">
        </form>
    </div>
    
</body>
</html>
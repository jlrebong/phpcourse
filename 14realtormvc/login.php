<?php
include_once './inc/autoloader.inc.php';
session_start();
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

<?php
    $controller = new LoginController();
    $controller->validateUser($_POST);
    $controller->render();
?>
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
print_r($_POST);
?>

<form action="forms.php" method="POST">
    <input type="text" name="firstname"><br>
    <input type="text" name="age"><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
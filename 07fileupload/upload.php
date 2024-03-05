<?php

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["houseimg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["houseimg"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Check if file already exists";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["houseimg"]["size"] > 500000) {
    $uploadOk = 0;
    echo "Filesize not ok";
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {

    $data = [
        $_POST['title'],
        $_FILES["houseimg"]['name'],
        $_POST['price'],
        $_POST['description'],
        $_POST['category'],
    ];

    $dataStr = implode(',', $data);

    if (move_uploaded_file($_FILES["houseimg"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["houseimg"]["name"])). " has been uploaded.";



        // Let's now add the details into our CSV file
        $csv = fopen('houses.csv', "a") or die('unable to open file');
        fwrite($csv, PHP_EOL .$dataStr);
        fclose($csv);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

header('location: admin.php');


?>
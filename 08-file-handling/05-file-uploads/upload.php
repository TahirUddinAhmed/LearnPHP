<?php 
 if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTemp = $_FILES['fileToUpload']['tmp_name'];

    $uploadDir = "uploads/";

    $uploadFile = $uploadDir . $fileName;
    //  Create upload directory if not exists
    if(!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (move_uploaded_file($fileTemp, $uploadFile)) {
        echo "File uploaded successfully";
    } else {
        die("Something went wrong");
    }

    
 }


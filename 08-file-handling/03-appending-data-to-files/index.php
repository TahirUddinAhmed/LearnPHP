<?php 

// to add data to an existing file, use a mode with fopen() or FILE_APPEND with file_put_contents()

$appendText = "\nI am a web developer";
file_put_contents("../example2.txt", $appendText, FILE_APPEND);


// read the file 
$content = file_get_contents("../example2.txt");
echo $content;
?>
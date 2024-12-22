<?php 
// Use fread() or file_get_content() to read files. 

// use file_get_content()
$content = file_get_contents("../example.txt");

echo $content;

// using fread()
$file = fopen("../example2.txt", "r");
$getContent = fread($file, filesize("../example2.txt")); // read the entire file
fclose($file);

echo "<br>";
echo $getContent;
<?php

// File opening and closing 
$file = fopen("../example.txt", "w"); // open the file for writing
fwrite($file, "File handling in PHP allows you to create, read, write, and delete files. It is essential for managing data storage efficiently.");
fclose($file); // close the file


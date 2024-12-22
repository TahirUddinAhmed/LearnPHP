<?php 
// before reading or writing to a file, it's good to check if it exists. 
$filePath = "../example2.txt";

// 1. file_exists(): Check whether a file or directory exists. Return true or false 
if(file_exists($filePath)) {
    echo "File is exists!";
} else {
    echo "File doesn't exists";
}

// 2. is_readable(): check if file is readable. 
if(is_readable($filePath)) {
    echo "The file is readable";
} else {
    echo "The file is not readable";
}

// is_writable(): Check if a file is writable.

// is_file(): check if the given path is a file(and not a directory).

// is_dir(): check if the given path is a directory.
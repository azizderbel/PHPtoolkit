<?php

$file_name = 'readme.md';

if (!is_file($file_name)) {
    die("file does not exist");
}

$file = fopen($file_name,'r',false);

// echo gettype($file); //resource
if($file) {
    $contents = fread($file, filesize($file_name)); // read a file into a string
    $files = file($file_name); // read a file into a string
    fclose($file);
}
// To check if the file pointer is at end of file
if($contents) {
    echo $contents;
}
echo count((array)$files); // 3 lines


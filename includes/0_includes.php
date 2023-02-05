<?php
// echo get_include_path(); // C:\php\pear
include 'utils.php';
// will search for thr file in the include path first then in the 
// dir of the calling script
// if not found in both locations a warning will be emitted

// when php loads the required file, it executes the code inside

print_r($array); // accessible from here

// include is usually used to add the header and the footer of a web page
// we can include a file inside the function.however the imported variables are local to the function
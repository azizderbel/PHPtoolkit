<?php 
// user defined constants

// define constant at runtime
define("FOO","value of the constant");
// define a constant at compile time
const RGB = ['red', 'green', 'blue'];

echo constant("FOO")."\n";
echo FOO."\n";
print_r(RGB);

// built_in constants
echo PHP_VERSION."\n";
echo constant("PHP_EOL")."\n";
echo constant("PHP_INT_MAX")."\n";
echo constant("PHP_EXTENSION_DIR")."\n";

// magic constants
echo __LINE__."\n";
echo __FILE__."\n";
echo __DIR__."\n";
echo __FUNCTION__."\n";

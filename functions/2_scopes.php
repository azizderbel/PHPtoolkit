<?php

$global_variable = 1; // global variable can be accessed from anywhere in the script
function say()
{
    global $global_variable;
	$message = 'Hi'; // local scope variable
	echo $message."\n";
    echo $global_variable."\n";
}
say();

// ************************** SUPER GLOBAL VAR
//print_r($GLOBALS);
//print_r($_SERVER); // webserver env info
//print_r($_ENV); // script env info
//print_r($_REQUEST);

// *************************** STATIC VAR
// static var retains its value between function call
function get_counter() {
    static $counter = 1;
    return $counter++;
}

echo get_counter() .  '<br>'; // 1
echo get_counter() .  '<br>'; // 2
echo get_counter() .  '<br>'; // 3

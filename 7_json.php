<?php
$array = array(
    "data" => [
        "name" => "aziz",
        "last_name" => "derbel"
    ]
    );

// create the string representation of a PHP the supplied value
$json = json_encode($array);
echo gettype($json); // string 
//echo $json;

// convert the json string representation to php type
$obj = json_decode($json,true);
echo gettype($obj); // array

$obj = json_decode($json,false);
echo gettype($obj); // object

$obj = json_decode($json,null);
echo gettype($obj); // object

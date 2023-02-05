<?php

// Every single expression in PHP has one of the following built-in types
// null
// scalar types
    // bool
    // int 
    // float
    // string
// array
// object
// callable
// resource

// variable type is determined at runtime
echo get_debug_type("aziz")."\n"; // show type of var
// prior to php 8
echo gettype("aziz")."\n";
echo var_dump(5); // show var content and type
echo var_dump("aziz");

echo is_int(5);
echo is_float("aziz");
echo is_null(null);
echo is_scalar("derbel");
<?php

function find($needle, $haystack)
{
    return strpos($haystack, $needle);
} 
// from PHP 8.0 and above
/*find (
    $needle : 'awesome',
    $haystack : 'PHP is awesome!'
);*/
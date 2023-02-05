<?php 

function add(int $x, int $y) : int
{
    return $x + $y;
}

// union type
function add_2(int $x, int $y) : int | float
{
    return $x + $y;
}

// mixed type
//The mixed type means one of several types.
function add_3(int $x, int|float $y) : mixed
{
    return $x + $y;
}

//nullable type
function upper(?string $str): string
{
    return strtoupper($str);
}

$str = null;
echo upper($str);
<?php

// Variadic function accepts a variable number of parameters.
function sum(...$numbers)
{
    //$numbers = func_get_args(); # prior php 5.6
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    return $total;
}
echo sum(10, 20) . '<br>'; // 30
echo sum(10, 20, 30) . '<br>'; // 60
<?php

declare(strict_types=1);

function add(int $x, int $y)
{
    return $x + $y;
}

echo add(1.5, 2.5);
// will throw an error, only int args are allowed
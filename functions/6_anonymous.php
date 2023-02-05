<?php

$multiply = function ($x, $y) {
	return $x * $y;
};

echo $multiply(10, 20);

$list = [10, 20, 30];

$results = array_map(function ($element) {
	return $element * 2;
}, $list);

print_r($results);

// ********************** Arrow function
$eq = fn ($x, $y) => $x == $y;

echo $eq(100, '100'); // 1 (or true)
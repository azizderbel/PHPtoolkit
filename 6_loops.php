<?php

$total = 0;

for ($i = 1; $i <= 10; $i++) {
	$total += $i;
}
echo $total;
/*
for (; ;) {
    // infinite loop
	// do something
	// ...

	// exit the loop
	if (condition) {
		break;
	}
}*/

$total = 0;
$number = 1;

while ($number <= 10) {
    if($number == 5) {
        continue;
    }
	$total += $number;
	$number++;
}

$i = 0;
do {
 echo $i;
} while ($i > 0);



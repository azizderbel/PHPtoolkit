<?php

$a=5;$b=5;
if ($a > $b) {
    echo "a is bigger than b";
} else if ($a === $b) {
    echo "a is equal to b\n";
} else {
    echo "a is smaller than b";
}


if ($a > $b):
    echo $a." is greater than ".$b;
elseif ($a === $b): // Note the combination of the words.
    echo "$a equals $b\n";
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

$res = $a == $b ? "equal\n" : "not equal\n";
echo $res;

// ********************************************

$role = 'admin';
$message = '';

switch ($role) {
	case 'admin':
		$message = 'Welcome, admin!';
		break;
	case 'editor':
	case 'author':
		$message = 'Welcome! Do you want to publish the draft article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;
	default:
		$message = 'You are not authorized to access this page';
}
//
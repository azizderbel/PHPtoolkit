<?php

$counter = 1;
// passing args by values
function increase($value,$default_param = null)
{
	$value+= 1;
	echo $value; // 2
}
// outside the function $counter still equals to 1
// increase the counter
increase($counter);
?>

<?php

$counter = 1;
// passing args by reference
function reincrease(&$value)
{
	$value += 1;
	echo $value; // 2
}

// increase the counter
increase($counter);

echo $counter; // 2
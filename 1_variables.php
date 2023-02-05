<?php

// PHP variables are case sensitives
// you can do things like adding a string 
// to an integer without causing an error.
// In PHP 7, type declarations were added
// It will throw a "Fatal Error" on a type mismatch
$user_name = 'aziz'; 
echo $user_name."\n";
echo "aziz" . '\n' . "derbel\n"; #simple quotes never interpolate internal values

echo "$user_name c'est mon nom \n";
// short cut of <?php echo something 
?>
    
<?=  "wow" ?>

<?php 
$a = 3;
$b = &$a; // $b is a reference to $a

print "$a\n"; // prints 3
print "$b\n"; // prints 3

$a = 4; // change $a

print "$a\n"; // prints 4
print "$b\n"; // prints 4 as well, since $b is a reference to $a, which has
              // been changed

?>



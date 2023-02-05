<?php
// keys can only be strings or int
$note = [
    0 => '10',
    1 => '20'
];
// equivalent to
$note_2 = array(
    0 => '10',
    1 => '20'
);
$note_3 = array(
    '10',
    '20'
);
echo $note_3[0];

$my_array = [
    'nom' => "aziz"
];

echo $my_array['nom']."\n";
$my_array['prenom'] = "derbel"; // add new item
print_r($my_array);
unset($my_array["prenom"]);
print_r($my_array);

// *************** Array destruction 

$source_array = ['foo', 'bar', 'baz'];
[$foo, $bar, $baz] = $source_array;
[, , $baz] = $source_array;


// ***************** Array unpacking
$arr1 = [1, 2, 3];
$arr2 = [...$arr1]; //[1, 2, 3]
$arr3 = [0, ...$arr1]; //[0, 1, 2, 3]
$arr4 = [...$arr1, ...$arr2, 111]; //[1, 2, 3, 1, 2, 3, 111]
$arr5 = [...$arr1, ...$arr1]; //[1, 2, 3, 1, 2, 3]
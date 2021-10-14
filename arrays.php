<?php
function d($data)
{
    echo "<pre>";
    var_dump($data);
    echo "<pre>";
}

function ak($val)
{
    echo $val . "<br />";
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// index array || lists

$colors = [
    'red',
    'green',
    'blue',
    'purple'
];

d($colors);

ak($colors[3]);


// associative arrays || dictionary ===>>> this one use the most

$person = [
    'first_name' => 'Thai Bang',
    'last_name' => 'HOANG',
    'age' => 38,
    'eyes' => 'brown'
];

ak($person['age']);

d($person);


//multi-dimentional array

$multi = [
    'colors' => ['red', 'green', 'blue'],
    'person' => ['first' => 'Thai Bang', 'last' => 'HOANG', 'age' => 40],
    'favourite_color' => 'green'
];

$color = $multi['colors'][2];
ak($color);
$age = $multi['person']['age'];
ak($age);
$favourite = $multi['favourite_color'];
ak($favourite);



// counts

$size = count($colors);
d($size);


// manipulate arrays

array_shift($colors); // add an element at the beginning
d($colors);
array_unshift($colors, 'pink', 'white'); // del an element at the beginning
d($colors);
array_pop($colors); // del an element at the end
d($colors);
array_push($colors, 'grey', 'purple'); // add an element at the end
d($colors);
$colors[] = 'black'; // add an element at the end
d($colors);

$exists = in_array('red', $colors); // find an element in the array or not
d($exists);                         // it will return the boolean

array_unshift($colors, 'red');
$exists = in_array('red', $colors); // find an element in the array or not
d($exists);

sort($colors); // sort from a to z
d($colors);


rsort($colors); // sort from z to a
d($colors);


ksort($person); // sort follow the key of the array
d($person);

shuffle($colors); // sort the array randomly
d($colors);

foreach ($person as $key => $value) {
    // ak($key);
    // ak($value);
    ak($key . " :" . $value);
}

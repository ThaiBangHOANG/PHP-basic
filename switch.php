<?php
$color = 'blue';

switch ($color) {
    case 'purple':
        echo 'Your favourite color is purple.';
        break;
    case 'red':
    case 'blue':
        echo "Your favourite color is {$color}. I like {$color} as well.";
        break;
    default:
        echo 'I do not know your favourite color is.';
        break;
}

echo "<br />";

// equal to ifelse statement

// if ($color == 'purple') {
//     echo "Your favourite color is purple";
// } else if ($color == 'red' || $color = 'white' || $color = 'blue') {
//     echo "Your favourite color is {$color}. I like {$color} as well.";
// } else {
//     echo 'I do not know your favourite color is.';
// }

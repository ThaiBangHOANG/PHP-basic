<?php
    // for loop

    for($x = 1; $x <=10; $x++) {
        echo $x." You are my hero";
        echo "<br />";
    }

    echo "<br />";


    // while loop

    $x = 0;
    while($x < 5) {
        echo $x;
        echo "<br />";
        $x++;
    }


    // dowhile loop
    $x = 10;
    do {
        echo "do while";
        echo "<br />";
        $x++;    
    } while ($x < 9);

    // foreach loop
    $colors = ['red', 'orange', 'purple', 'blue', 'green', 'turquoise', 'pink', 'cyan'];
    // var_dump($colors);
    foreach ($colors as $colors) {
        echo $colors. "  is a good colors";
        echo "<br />";
    }


?>
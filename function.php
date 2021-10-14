<?php 

    function d($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }


    function say($val) {
        echo $val;
        echo "<br />";
    }

    function howOld($name, $age) {
        if($age <=18) {
            say("{$name} is a kid.");
        } elseif($age > 18 && $age <= 33) {
            say("{$name} is a young adult.");
        } elseif($age > 33 && $age <= 49)  {
            say("{$name} is a middle age.");
        } else {
            say("{$name} is old.");
        }
    }

    $people = [
        ['name' => 'Thai Bang', 'age' => 38],
        ['name' => 'Jules', 'age' => 19],
        ['name' => 'Marthilus', 'age' => 10],
        ['name' => 'Benjamin', 'age' => 9]
    ];

    foreach($people as $person) {
        howOld($person['name'], $person['age']);
    }

    function divide($val1, $val2) {
        $result = $val1 / $val2;
        return  $result;
    }

    $result = divide(144, 12);
    d($result);

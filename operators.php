<?php
    function dd($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

    // Math Operators

    $x = 1 +3;
    dd($x);

    $x= 455 - 234;
    dd($x);

    $x = 445 / 3;
    dd($x);

    $x = 12*56;
    dd($x);

    $x = 14%3;
    dd($x);

    $x = 14 % 7;
    dd($x);


    // Assignment operators

    $x = 233;
    dd($x);

    $x = 20;
    $x +=10; // $x = $x+ 10;
    dd($x);

    $x -= 10;
    dd($x);

    $x *= 2;
    dd($x);

    $x /=2;
    dd($x);


    $x %=3;
    dd($x);


    // increment and decrement operators

    $x = 10;
    dd($x++);
    dd($x);
    dd(++$x);

    dd($x--);
    dd(--$x);

    // comparison operators return a boolean
    $x = 45 == 56;
    dd($x);     // bool(false)

    $x = 45 == '45'; //bool(true)
    dd($x);

    $x = 45 === '45'; // bool(false)
    dd($x);

    $x = 45 === 45.0; // bool(false) because check the datatype
    dd($x);

    $x = "Thai Bang" != "Toni"; // return true
    dd($x);

    $x = 45 !== 45.0; // return true
    dd($x);

    $x = 45 != 45.0; // return false because it not checking datatype
    dd($x);

    // Logical operators

    dd(23 < 34 && 23 != 34); // true
    dd(23 < 21 || 1 == 1); // true


    // string operators

    $name = "Thai Bang";
    dd($name);
    $name .= " HOANG";
    dd($name);



?>
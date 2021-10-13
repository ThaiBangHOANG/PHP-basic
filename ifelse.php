<?php
    // if else statement
    echo "If else statement";
    echo "<br />";

    $name = "Thai Bang";
    $age = 50;
    $country = "vietnam";

    if($name !== "") {
        echo "Howdy ".$name;
        echo "<br />";
    } else {
        echo "Howdy stranger";
        echo "<br />";
    }

    if($age <=18) {
        echo "You are a kid";
    } elseif($age > 18 && $age <= 33) {
        echo "You are a young adult";
    } elseif($age > 33 && $age <= 49) {
        echo "You are middle age";
    } else {
        echo "You are old";
    }

    echo "<br />";

    if($country === "vietnam" || $country === "VN") {
        echo "You can purchase our products";
    }

    echo "<br />"; 

    
?>
<?php

function processmarks($arr) // function declaration
{   // function body 
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return "$sum";
}


$std = [23, 45, 55, 15, 53, 44];

echo processmarks($std); // function calling


// in build function are like count() , isset()
?>
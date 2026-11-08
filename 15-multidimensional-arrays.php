<?php
$person_money = array(
    array(20, 30, 40),
    array(50, 60, 70),
    array(80, 90, 100)
);

echo $person_money[0][1];
echo "<br>";
echo $person_money[1][2];
echo "<br>";

for ($i=0; $i < count($person_money) ; $i++) { 
    for ($j=0; $j < count($person_money[$i]) ; $j++) { 
        echo $person_money[$i][$j]." ";
    }
    echo "<br>";
}

// Creating a 3D array using short array syntax []
$matrix = [
    [ // Layer 0
        [1, 2], // Row 0
        [3, 4]  // Row 1
    ],
    [ // Layer 1
        [5, 6], // Row 0
        [7, 8]  // Row 1
    ]
];

// Accessing an item (Layer 1, Row 0, Column 1)
echo $matrix[1][0][1]; // Outputs: 6

// Modifying an item
$matrix[0][1][0] = 99; 


?>

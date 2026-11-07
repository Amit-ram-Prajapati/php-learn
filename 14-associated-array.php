<?php

// indexed array
$arr = array("I" ,"am","the","best");
echo $arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3];

// associative array
$fav_colors_all = array(
    "John" => "red",
    "Mary" => "green",
    "Peter" => "blue"
);
echo "<br>";
// echo "John's favorite color is ".$fav_colors_all['John']."<br>";

foreach($fav_colors_all as $name => $color){
    echo $name."'s favorite color is ".$color."<br>";
}

?>
<?php
$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr); // reads line by line
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));

// while($b = fgets($fptr)){
//     echo $b;
// }
// echo "<br>";

while ($a = fgetc($fptr)) {
    echo $a;
    if ($a == 'e')
        break;
}

fclose($fptr);

?>
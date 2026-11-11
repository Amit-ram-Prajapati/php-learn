<?php
// $fptr = fopen("myfile2.txt", "w");

// fwrite($fptr , "I am the best. I am earning thorugh my techincal skills");
// fwrite($fptr , " I am the greatest. I am earning thorugh my techincal skills");

$fptr = fopen("myfile2.txt", "a");
fwrite($fptr,"Appended content\n");

fclose($fptr);

?>


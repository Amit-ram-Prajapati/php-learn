<?php
$fptr = fopen("myfile.txt", "w"); // point to the file

$content = fread($fptr,filesize("myfile.txt"));
// $content = fwrite($fptr,"This is a another line");

fclose($fptr);

echo $content;


?>
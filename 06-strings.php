<?php
$name = "amit";
echo "$name<br>";
echo "Length of string : " . strlen($name) . "<br>";

$sentence = "I am great";
echo str_word_count($sentence);
echo "<br>";

echo strpos($sentence, "am");
echo "<br>";

echo str_replace("great", "Genius", $sentence);
echo "<br>";

echo str_repeat($name, 5);
echo "<br>";

echo "<pre>";

echo rtrim("  I am Dimond  ");
echo "<br>";

echo ltrim("  I am Genius ");

echo "</pre>";

<?php
$a = 18;//Global variables are not accessible inside functions unless declared as global or passed as parameters.

function testScope() {
// echo "The value of global variable a is: " .$a; // we cannot access it until we declare it using global keyword;
global $a;
// now
 echo "The value of global variable a is: " .$a;
}
// echo $localVar; // This will cause an error because $localVar is not defined in this scope.

// echo var_dump($GLOBALS);
echo ($GLOBALS["a"]);
// echo var_dump("$a");

?>
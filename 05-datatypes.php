<?php
$name = 'Amit';
$income = 20000;
// Data Types
/*
    1. String
    2. Integer
    3. Float
    4. Boolean
    5. Object
    6. Array
    7. Null
*/

// String => sequence of characters 
$name = "amit";
$lastname = "prajapati<br>";
echo "$name $lastname";

// Interger => Non decimal number
$income = 455;
$debt = 0;

echo "Income : $income<br>Debt : $debt<br>";

// Float => Decimal point number
$income_one = 344.5;
$debts_one = 0.00;
echo "$income_one <br>$debts_one<br>";

// boolean
$isAlive= true;
$isBad = false;
echo "$isAlive $isBad";

var_dump($isBad);

// Object

// skills
$skills = array("HTML" ,"CSS3" ,"JS","PHP","MYSQL");
// echo "$skills"; // error
var_dump($skills);

echo "<br>$skills[0]<br>";
echo "$skills[2]<br>";
echo "$skills[3]<br>";
echo "$skills[4]<br>";
echo "$skills[5]<br>"; // cause a error

// null - reset a variable
$name2 = NULL;
// echo var_dump($name2);

?>
<?php
// ways to connect to the mysql db
// 1. MySqli extension => oop or prosedural
// 2. PDO => php data object

// connecting to the db

$server_name = "localhost:3307";
$user_name = "root";
$pass_word = "";
$db_name = "db_amit";

// create a  connection obj
$conn = mysqli_connect("$server_name","$user_name","$pass_word","$db_name");

// check connection

if(!$conn){
    die("Connection failed: ".mysqli_connect_error())."<br>";
}
else{    
    echo "Connection built sucessful<br>";
}




$sql = "SELECT * FROM `mine` WHERE `emp_name` = 'tumit'"; 

$sql_res = mysqli_query($conn , $sql);

// find the numbers of record found
$num_of_row =  mysqli_num_rows($sql_res);

// display
if($num_of_row > 0){
    $num = 1;

while($row = mysqli_fetch_assoc($sql_res)){
    
    echo ($num++)." ".($row["phone"])." ".($row["salary"]);
    echo "<br>";
}

}
$sql = "UPDATE `mine` SET `emp_name` = 'sumit' WHERE `mine`.`emp_name` = 'tumit';";

$sql_res = mysqli_query($conn , $sql);

// echo var_dump($sql_res);
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows".$aff."<br>";

if(!$sql_res){
    die("Updation failed: ".mysqli_connect_error())."<br>";
}
else{
    echo "Updation recorded!";
}


?>
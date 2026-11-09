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


$sql = "DELETE FROM `mine` WHERE `mine`.`emp_name` = 'sahil' LIMIT 5";
$sql_res = mysqli_query($conn , $sql);

$aff = mysqli_affected_rows($conn);
echo "Number of affected rows".$aff."<br>";

if(!$sql_res){
    die("Deletion failed: ".mysqli_connect_error())."<br>";
}
else{
    echo "Deletion occured!";
}


?>
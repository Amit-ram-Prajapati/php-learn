<?php
// ways to connect to the mysql db
// 1. MySqli extension => oop or prosedural
// 2. PDO => php data object

// connecting to the db

$server_name = "localhost:3307";
$user_name = "root";
$pass_word = "";

// create a  connection obj
$conn = mysqli_connect("$server_name","$user_name","$pass_word");

// check connection

if(!$conn){
    die("Connection failed: ".mysqli_connect_error())."<br>";
}
else{    
    echo "Connection built sucessful<br>";
}

// Create a db thorugh sql query 

$sql = "CREATE DATABASE my_db_3";

$result = mysqli_query($conn ,$sql);

echo var_dump($result)."<br>";

if(!$result){
    die("DB creation failed: ".mysqli_connect_error())."<br>";
}
else{
    echo "DB created let's go<br>";
}

?>
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

// Create a db thorugh sql query 
/*
    $sql = "CREATE DATABASE db_amit";

    $result = mysqli_query($conn ,$sql);

    echo var_dump($result)."<br>";

    if(!$result){
        die("DB creation failed: ".mysqli_connect_error())."<br>";
    }
    else{
        echo "DB created let's go<br>";
    }
*/
// create a table in db
/*
    $sql_query = "CREATE TABLE `db_amit`.
                `mine` (`emp_id` INT(10) NOT NULL AUTO_INCREMENT ,
                `phone` INT(10) NOT NULL , `salary` INT(20) NOT NULL ,
                `emp_name` VARCHAR(30) NOT NULL , PRIMARY KEY (`emp_id`));";

    $table_res = mysqli_query($conn , $sql_query);

    if(!$table_res){
        die("Table creation failed".mysqli_connect_error());
    }
    else{
        echo "Table created sucessfully";
    }
*/
// $phone = $_POST['phone'];
// $salary = $_POST['salary'];
// $emp_name = $_POST['emp-name'];

$phone = 44445555;
$salary =200000000;
$emp_name = "sahil";

$sql_insertion = "INSERT INTO `mine` ( `phone`, `salary`, `emp_name`) VALUES ( $phone, $salary,'$emp_name');"; // wrap in single quote if it is a string (varchar);

$sql_insertion_res = mysqli_query($conn , $sql_insertion);
if(!$sql_insertion_res){
    die("Insertion failed: ".mysqli_connect_error())."<br>";
}
else{
    echo "Insertion recorded!";
}


?>
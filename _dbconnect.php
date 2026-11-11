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
$conn = mysqli_connect("$server_name", "$user_name", "$pass_word","$db_name");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection built sucessful";
}

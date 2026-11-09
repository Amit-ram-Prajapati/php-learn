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

$sql_insertion = "SELECT * FROM `mine`"; // wrap in single quote if it is a string (varchar)

$sql_insertion_res = mysqli_query($conn , $sql_insertion);

// find the numbers of record found
$num_of_row =  mysqli_num_rows($sql_insertion_res);

// display
if($num_of_row > 0){

while($row = mysqli_fetch_assoc($sql_insertion_res)){
    
    echo ($row["emp_id"])." ".($row["phone"])." ".($row["salary"]);
    echo "<br>";
}

}
// if(!$sql_insertion_res){
//     die("Insertion failed: ".mysqli_connect_error())."<br>";
// }
// else{
//     echo "Insertion recorded!";
// }


?>
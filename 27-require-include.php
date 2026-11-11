<?php
// include '_dbconnect.php';
require '_dbconnect.php';

echo "<br>";

$sql_select = "SELECT * FROM `mine`"; // wrap in single quote if it is a string (varchar)

$sql_select_res = mysqli_query($conn, $sql_select);

// find the numbers of record found
$num_of_row =  mysqli_num_rows($sql_select_res);

// display
if ($num_of_row > 0) {

    while ($row = mysqli_fetch_assoc($sql_select_res)) {

        echo ($row["emp_id"]) . " " . ($row["phone"]) . " " . ($row["salary"]);
        echo "<br>";
    }
}

?>
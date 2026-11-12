<?php
// used to manage info across different pages

// verify the user login info
session_start();
$_SESSION['username'] = "Amit";
$_SESSION['cat'] = "Books";

?>
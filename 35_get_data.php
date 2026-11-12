<?php
// used to manage info across different pages

// verify the user login info
session_start();
if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "<br>";
} else {
    echo "No user is logged in.<br>";
}
?>
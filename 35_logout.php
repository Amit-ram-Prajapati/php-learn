<?php
// used to manage info across different pages

// verify the user login info
session_start();
session_unset();
session_destroy();
echo "Logout<br>";


?>
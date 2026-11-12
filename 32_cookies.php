<?php
// information stored in users computer about the user, such as their preferences or login information. Cookies are small text files that are stored on the user's computer by the web browser. They can be used to remember information about the user, such as their login credentials or preferences for a website.

// no sensitive data should stored in cookies

setcookie("category","Books", time() + 86400, "/");



?>
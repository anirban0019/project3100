<?php
session_start(); // start the session
session_unset(); // unset all session variables
session_destroy(); // destroy the session

// redirect the user to the login page
header('Location: index.php');
exit();
?>

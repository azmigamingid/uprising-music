<?php  

//Session Startsss
session_start();

// Delete Session
session_destroy();
session_unset();

// Redirect
header("Location: index.php");


?>

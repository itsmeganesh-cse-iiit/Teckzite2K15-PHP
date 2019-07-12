<?php
session_start();
unset($_SESSION['tzid']);
if(session_destroy()) //Destroying all sessions
{
header("Location: index.php"); //Redirecting to home page
}
?>

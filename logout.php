<?php
session_start();
unset($_SESSION['tzid']);
unset($_SESSION['quiz_login_id']);
unset($_SESSION['quiz_admin_id']);
if(session_destroy()) //Destroying all sessions
{
header("Location: index.php"); //Redirecting to home page
}
?>

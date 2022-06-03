<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/

session_start(); /* Starts the session */session_destroy(); 
/* Destroy started session */
header("location:login.php"); 
 /* Redirect to login page */exit;
}

echo "HANDLE THIS PAGE";
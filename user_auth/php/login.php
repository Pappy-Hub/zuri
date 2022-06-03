<?php session_start();  ?>

<?php
// Check whether the session is already there or not if true then header redirect it to the home page directly 
if (isset($_SESSION['username'])) {
    header("Location:dashboard.php");
} else {
    include '../forms/login.html';
}
// // it checks whether the user clicked login button or not 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($username) && isset($password)) {
        $file = fopen('users.csv', 'r');
        $good = false;
        while (!feof($file)) {
            $line = fgets($file);
            $array = explode(";", $line);
            if (trim($array[0]) == $username && trim($array[1]) == $pass) {
                $good = true;
                break;
            }
        }
        fclose($file);
    } else {
        include 'login.html';
    }
}


?>
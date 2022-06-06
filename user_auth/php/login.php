<?php session_start();  ?>

<?php
// Check to see if session exists or not: if true, header redirect it to the home page directly 
if (isset($_SESSION['username'])) {
    header("Location:index.php");
} else {
    include '../forms/login.html';
}
// checks to see if user clicked login button or not 
if (isset($_POST['login'])) {
    $username = $_POST['fullname'];
    $password = $_POST['password'];

    if (isset($username) && isset($password)) {
        $file = fopen('../storage/users.csv', 'r');
        $right = false;
        while (!feof($file)) {
            $line = fgets($file);
            $array = explode(";", $line);
            if (trim($array[0]) == $username && trim($array[1]) == $password) {
                $right = true;
                break;
            }
        }

        if ($right) {
            $_SESSION['fullname'] = $username;
            include 'index.php';
        } else {
            echo 'invalid UserName or Password';
        }
        fclose($file);
    } else {
        include '../forms/login.html';
    }
}
// reset password option
elseif (isset($_POST['reset'])) {
    header('Location: ../forms/register.html');
}


?>
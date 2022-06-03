<?php session_start();  ?>
<!-- // if(isset($_POST['submit'])){
// $username = $_POST['username'];//finish this line
// $password = $_POST['password'];//finish this

// loginUser($email, $password);

// }

// function loginUser($email, $password){
// /*
// Finish this function to check if username and password
// from file match that which is passed from the form
// */
// }

// echo "HANDLE THIS PAGE"; -->



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

        if ($good) {
            $_SESSION['username'] = $username;
            echo '<script type="text/javascript"> window.open("dashbaord.php","_self");</script>';
        } else {
            echo '<script type = "text/javascript">alert("invalid UserName or Password")</script>';
        }
        fclose($file);
    } else {
        include 'login.html';
    }
}
//the code below resets password and username if user wishes to
elseif (isset($_POST['reset'])) {
    header('Location: register.html');
}
?>
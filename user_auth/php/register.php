<?php
if (isset($_POST["fullname"]) && isset($_POST["email"])) { //checking && using only email and fullname
        //get info from form
        $username = $_POST['fullname'];
        // $email = $_POST['email'];
        $password = $_POST['password'];
        // check if username exist.
        $email = $_POST['email'];
        // check if email exist.
        $file = fopen("../storage/users.csv", "r");
        $username_saved = false;
        while (!feof($file)) {
                $line = fgets($file);
                $array = explode(";", $line);
                if (trim($array[0]) == $username) {
                        $username_saved = true;
                        break;
                }
        }
        fclose($file);

        // register username or err
        if ($username_saved) {
                echo $username . ' existed!';
                include '../forms/register.html';
        } else {
                $file = fopen("../storage/users.csv", "a");
                fputs($file, $username . ";" . $password . "\r\n");
                fclose($file);
                echo $email  . " successfully registered!"; //can also user $username
        }
} else {
        include '../forms/register.html';
}
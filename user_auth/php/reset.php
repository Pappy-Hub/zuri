<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $newpassword = $_POST['newpassword'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword)
{
    // open file and check if the username exist inside
    // replace password if exists

    $file = fopen('../storage/users.csv', 'r');
    while (!feof($file)) {
        $line = fgetcsv($file);
        print($line[0]);
        echo "\n";
    }
}
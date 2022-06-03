<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['newpassword']; //complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword)
{
    // open file and check if the username exist inside
    // if it does, replace the password

    $file = fopen('../storage/users.csv', 'r');
    while (!feof($file)) {
        $line = fgetcsv($file);
        print($line[0]);
        echo "\n";
    }



    // $file = file_get_contents('../storage/users.csv');
    // if (strstr($file, "$email")) {
    //     $open = fopen($file, 'r');
    //     $write = fwrite($open, $newpassword);
    //     if ($write == $newpassword) {
    //         echo "Successfully Reset Password";
    //     }
    // } else {
    //     echo "Please Reset Your Password";
    // }

}



echo "HANDLE THIS PAGE";
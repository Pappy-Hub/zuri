<?php

$con=new mysqli('localhost', 'root', '', 'laravelmvccrud');

if(!$con){
    die(mysqli_error($con));
}

// else{
//     die(mysqli_error($con));
// }


// conecting to a dabase
//define credentials
// $host = "127.0.0.1"; //"localhost"
// $user = "root";
// $password = "";
// $db = "laravelmvccrud";

// $conn = mysqli_connect($host, $user, $password, $db);
// if(!$conn){
//     echo "Connected to database successfully";
// }
// else{
//     die (mysqli_error($conn));
// }   

    



?>
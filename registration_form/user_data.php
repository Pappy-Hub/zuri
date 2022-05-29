<?php

$name = $_POST['name']; 
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$data = [ $name .", ". $email .", ". $dob .", ". $gender .", ". $country ."\n"]; 

foreach($data as $value){
    print_r("$value", "\n");
}

$file = 'userdata.csv';
$handle = fopen("userdata.csv", "a");
fputcsv($handle, $data);
fclose($handle);


?>
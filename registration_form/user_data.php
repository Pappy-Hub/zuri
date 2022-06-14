<?php

//METHOD ONE

extract($_REQUEST);
$filename = fopen("userdata.csv", "a"); //open the filename in a read mode

fwrite($filename, "Name :");
fwrite($filename, $name . "\n");
fwrite($filename, "Email :");
fwrite($filename, $email . "\n");
fwrite($filename, "Date of birth :");
fwrite($filename, $dob . "\n");
fwrite($filename, "Gender :");
fwrite($filename, $gender . "\n");
fwrite($filename, "Country :");
fwrite($filename, $country . "\n");

fclose($filename); //close filename


//METHOD TWO

// $name = $_POST['name'];
// $email = $_POST['email'];
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];
// $country = $_POST['country'];

// $data = [$name . ", " . $email . ", " . $dob . ", " . $gender . ", " . $country . "\n"];

// foreach ($data as $value) {
//     print_r("$value", "<br>");
// }

// $file = 'userdata.csv';
// $handle = fopen("userdata.csv", "a");
// fputcsv($handle, $data);
// fclose($handle);


//METHOD THREE NOT YET WORKING PROPERLY 

// $name = $_POST['name'];
// $email = $_POST['email'];
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];
// $country = $_POST['country'];

// $handle = fopen("userdata.csv", "a");

// $inputs = "NAME EMAIL DATE OF BIRTH, GENDER, COUNTRY" . "\r";
// $addcontent = $name . ", " . $email . ", " . $dob . ", " . $gender . ", " . $country . "\n";
// $filecontents = " ";

// if (filesize("userdata.csv") > 0) {
//     $handle = fopen("userdata.csv", "r");
//     $filecontents = fread($handle, filesize("userdata.csv"));
// }

// $handle = fopen("userdsata.csv", "a");

// if (filesize("userdata.csv") == 0)
//     fwrite($handle, $inputs);

// fwrite($handle, $inputs);

// fclose($handle);

// print_r($filecontents);
<!-- <?php
        // if(isset($_POST['submit'])){
        // $name = $_POST['fullname'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];

        // registername($name, $email, $password);

        // }

        // function registername($name, $email, $password){
        //     //save data into the file
        //     if(isset($_POST["name"]) && isset($_POST["password"]))
        // {
        //     //get info from form
        //     $name = $_POST['fullname'];
        //     $password = $_POST['password'];
        //     // check if name exist.
        //     $file=fopen("names","r");
        //     $name_registered = false;
        //     while(!feof($file))
        //     {
        //         $line = fgets($file);
        //         $array = explode(";",$line);
        //         if(trim($array[0]) == $name)
        //         {
        //             $name_registered=true;
        //             break;
        //         }
        //     }
        //     fclose($file);

        //     // echo "OKAY";
        //     // register name or pop up message
        //     if( $name_registered )
        //     {
        //         echo $name. ' existed! \r\n';
        //         include 'register.html';
        //     }
        //     else
        //     {
        //         $file = fopen("s.csv", "a");
        //         fputs($file,$name.";".$password."\r\n");
        //         fclose($file);
        //         echo $name."registered successfully!";
        //     }
        // }
        // else
        // {
        //     include 'register.html';
        // }

        // }
    


        // extract($_REQUEST);
        // $filename = fopen("s.csv", "a"); //open the filename in a read mode

        // fwrite($filename, "Name :");
        // fwrite($filename, $fullname . "\n");
        // fwrite($filename, "Email :");
        // fwrite($filename, $email . "\n");
        // fwrite($filename, "password :");
        // fwrite($filename, $password . "\n");


        // fclose($filename); //close filenamee -->






session_start();
if (isset($_POST["fullname"]) && isset($_POST["email"])) {
//get info from form
$username = $_POST['fullname'];
// $email = $_POST['email'];
$password = $_POST['email'];
// check if username exist.
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

// register username or pop up message
if ($username_saved) {
echo $username . ' existed! \r\n';
include 'register.html';
} else {
$file = fopen("../storage/users.csv", "a");
fputs($file, $username . ";" . $password . "\r\n");
fclose($file);


// session_start();

echo $username . "registered successfully!";

if (!isset($_SESSION["email"])){
echo $username . "registered successfully!";
}

}
} else {
include '../forms/register.html';
}









// session_start();
// if(isset($_POST['submit'])){
// $username = $_POST['fullname'];
// $email = $_POST['email'];
// $password = $_POST['password'];

//registerUser($username, $email, $password);

// }
// $firstline= 'FULLNAME, EMAIL, PASSWORD' ."\n";
// $addline= $username. ", ".$email. ", ".$password;
// $filecontents=" ";

// $list = array (
// array("$username", "$email" ,"$password")
// );

// $file = fopen("users.csv","w");

// foreach ($list as $addline) {
// fputcsv($file, $addline);
// }

// fclose($file);
// print_r($addline);




echo $username. "\n'User Successfully registered' ";

if (!isset($_SESSION["email"]))
header("Location: ../forms/login.html");




// else
// echo $_SESSION["email"]." WELCOME TO ZURI TRAINING ". $username. ' <a href="../php/logout.php"> <b> LOGOUT <b> </a>';

//print_r($output);

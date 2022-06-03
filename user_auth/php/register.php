<!-- <?php
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

                // register username or err
                if ($username_saved) {
                        echo $username . ' existed! \r\n';
                        include '../forms/register.html';
                } else {
                        $file = fopen("../storage/users.csv", "a");
                        fputs($file, $username . ";" . $password . "\r\n");
                        fclose($file);
                        echo $username . "successfully registered!";
                }
        } else {
                include '../forms/register.html';
        }






















        // if(isset($_POST['submit'])){
        //         $name = $_POST['fullname'];
        //         $email = $_POST['email'];
        //         $password = $_POST['password'];

        //         registername($name, $email, $password);

        //         }

        //         function registername($name, $email, $password){
        //             //save data into the file
        //             if(isset($_POST["name"]) && isset($_POST["password"]))
        //         {
        //             //get info from form
        //             $name = $_POST['fullname'];
        //             $password = $_POST['password'];
        //             // check if name exist.
        //             $file=fopen("names","r");
        //             $name_registered = false;
        //             while(!feof($file))
        //             {
        //                 $line = fgets($file);
        //                 $array = explode(";",$line);
        //                 if(trim($array[0]) == $name)
        //                 {
        //                     $name_registered=true;
        //                     break;
        //                 }
        //             }
        //             fclose($file);

        //             // echo "OKAY";
        //             // register name or err
        //             if( $name_registered )
        //             {
        //                 echo $name. ' existed! \r\n';
        //                 include 'register.html';
        //             }
        //             else
        //             {
        //                 $file = fopen("s.csv", "a");
        //                 fputs($file,$name.";".$password."\r\n");
        //                 fclose($file);
        //                 echo $name."registered successfully!";
        //             }
        //         }
        //         else
        //         {
        //             include 'register.html';
        //         }

        //         }









        ?>
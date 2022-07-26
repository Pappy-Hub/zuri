<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `users` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "update `users` set id=$id, name='$name', email='$email', phone='$phone', password='$password' 
    where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Updated successfullly";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"
                    value=<?php echo $name; ?>>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"
                    value=<?php echo $email; ?>>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="phone"
                    autocomplete="off" value=<?php echo $phone; ?>>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password"
                    autocomplete="off" value=<?php echo $password; ?>>
            </div>

            <button type=" submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>
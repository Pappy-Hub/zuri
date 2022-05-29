<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
</head>

<body>

    <form method="POST" action="user_data.php">
        <div>
            <label for="name">
                Name: <input type="text" name="name" placeholder="Firstname Lastname" autocomplete="off" required>
            </label>
        </div>

        <div>
            <label for="email">
                Email: <input type="email" name="email" autocomplete="off" required>
            </label>
        </div>
        <div>
            <label for="dob">
                Date of Birth: <input type="date" name="dob">
            </label>
        </div>
        <div>
            <label for="gender">
                Gender: <input type="text" name="gender" autocomplete="off" required>
            </label>
        </div>
        <div>
            <label for="country">
                Country: <input type="text" name="country" autocomplete="off" required>
            </label>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>








</body>

</html>
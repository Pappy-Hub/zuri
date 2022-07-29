<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pappy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <h1>User Management System</h1>
</head>
<style>
h1 {
    width: 500px;
    color: #0000ff;
    margin: 0 auto;
    padding: 0 auto;
    margin-top: 50px;

}

button {
    margin-left: 390px;
    margin-top: 100px;
    width: 600px;
    height: 100px;
    border-radius: 10px;
    border: none;
    background-color: whitesmoke;
}

a,
a:hover,
a:focus,
a:active {

    text-decoration: none;
    text-transform: capitalize;
    font-size: 2rem;

}
</style>

<body style="background-color: black;">
    <div>
        <button> <a style="color: green;" href="{{route('user.all')}}">Click Here To Get In</a> </button>
    </div>

</body>

</html>
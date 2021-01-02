<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validate user</title>
</head>

<body>


    <?php

    $server_name = "localhost";
    $username = 'root';
    $password = '';
    $connection = mysqli_connect($server_name, $username, $password);
    if (!$connection)
        die("Connection to MySql Failed" . mysqli_connect_error());
    echo ("connected<br>");



    $connection = mysqli_connect($server_name, $username, $password, "userinfo");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "select * from registrations where email='$email'; ";

    $result = mysqli_query($connection, $sql_query);
    // var_dump($result);
    if (mysqli_num_rows($result) > 0) {
        die("user already exists");
    } else {

        $sql_query = "insert into registrations (email,password) values ('$email','$password');";
        mysqli_query($connection, $sql_query);
        // header("Location:amazon.php");
    }

    // header("Location:amazon.php");
    mysqli_close($connection);
    ?>
</body>

</html>
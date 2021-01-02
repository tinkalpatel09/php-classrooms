<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validate login</title>
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

    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];

    $sql_query = "select * from registrations where email like '$email' and password like '$password'; ";

    $result = mysqli_query($connection, $sql_query);
    // var_dump($result);
    if (mysqli_num_rows($result) == 1) {
        echo "login";
    } else {

        die("username or password incorrect");
        // header("Location:amazon.php");
    }

    // header("Location:amazon.php");
    mysqli_close($connection);




    ?>
</body>

</html>
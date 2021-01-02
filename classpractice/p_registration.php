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



    $connection = mysqli_connect($server_name, $username, $password, "6470");

    $USERNAME = $_POST['USERNAME'];
    $password = $_POST['PASSWORD_HASH'];
    $phone = $_POST['PHONE'];

    $sql_query = "select * from 6470exerciseusers where USERNAME='$USERNAME'; ";

    $result = mysqli_query($connection, $sql_query);
    // var_dump($result);
    if (mysqli_num_rows($result) > 0) {

        $message = "user already exists";
        echo "<script type='text/javascript'>alert('$message');</script>";

       // die("user already exists");
    } else {

        $sql_query = "insert into 6470exerciseusers (USERNAME,PASSWORD_HASH,PHONE) values ('$USERNAME','$password','$phone');";
        mysqli_query($connection, $sql_query);

       
         header("Location:p_index.php");
         $message = "successfully inserted data in database";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }

    // header("Location:amazon.php");
    mysqli_close($connection);
    ?>
</body>

</html>
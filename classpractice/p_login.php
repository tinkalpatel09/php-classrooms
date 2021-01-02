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



    $connection = mysqli_connect($server_name, $username, $password, "6470");

    $USERNAME = $_POST['USERNAME'];
    $password = $_POST['PASSWORD_HASH'];
    

    $sql_query = "select * from 6470exerciseusers where USERNAME like '$USERNAME' and PASSWORD_HASH like '$password'; ";

    $result = mysqli_query($connection, $sql_query);
    // var_dump($result);
    if (mysqli_num_rows($result) == 1) {

      
        $message = "login successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
       // header("Location:p_index.php");
       
    } else {

        die("username or password incorrect");
        // header("Location:amazon.php");
    }
    //header("Location:p_index.php");
    // header("Location:amazon.php");
    mysqli_close($connection);




    ?>
</body>

</html>
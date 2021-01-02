<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $servername= "localhost";
            $username = "root";
            $password = "";

            $connection = mysqli_connect($servername, $username, $password );

            if(!$connection)
            {
                die("connection to mysql failed " .mysqli_connect_error() );

            } 
            echo "you are successfully connect with server!";

               
            $sql_query = "Create database demo;";

            if(mysqli_query ($connection,$sql_query)){
            echo"database demo was created successfully"."</br>";
            }else{
            echo "Error creating database".mysqli_error($connection);
            }

 


           



            mysqli_close($connection);
        ?>
    </body>
</html>
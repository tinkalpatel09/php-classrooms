<!DOCTYPE html>
<html lang="en">
    <head>
        <title>function and datatype</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php 
        ///////////// string functions
        $hello = "hello, world!";

        echo "<p> The length of the string hello is: " . strlen($hello) . "</p>";

        echo "<p> there are " . str_word_count($hello) . " words in string hello </p>";

       

        //finding characters and words in strings 

        echo strpos($hello, "0" , 6); //6 is offset

        $positions = array()
        array_push = array($positions,$pos);


        ?>    
    </body>
</html>
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
     //question -1
 
    $myString = 'I love programming specially using PHP language. PHP is a powerful programming
    language which enables us to develop web applications.';

    echo strpos( $myString, 'PHP' );
  //  echo substr_count($myString, 'PHP');
  echo '<br/>';
//question -2
echo '<br/>';
$mystring = 'I love programming specially using PHP language. PHP is a powerful programming
language which enables us to develop web applications.';

$count = 0;
$find = "PHP";
$positions = array();
for($i = 0; $i<strlen($mystring); $i++)
{
     $pos = strpos($mystring, $find, $count);
     if($pos == $count){
           $positions[] = $pos;
     }
     $count++;
}
foreach ($positions as $value) {
    echo   $value . " position <br />";
}








  //question -3
echo '<br/>';
 
$numbers = array(0,1,2,3,4,5,6,7,8,9);
for($i = 0; $i < 10; $i++) {
    echo $numbers[$i] . ", ";
}
echo "</br>";
foreach ($numbers as $number) {
    echo $number . ", ";
}

 //question -4
 echo '<br/>';
 $numbers = array(0,1,2,3,4,5,6,7,8,9);
 for($numbers = 0; $numbers < 9; $numbers++) {
    if($numbers % 2 == 0) {
        echo "<ul><li style=\"color:red;\">$numbers</li></ul> ";
    } else {
        echo "<ul><li style=\"color:green;\">$numbers</li></ul>  ";
    }
}

 //question -5

 $records = array(
    array(
        'Student ID' => 1001,
        'Student Name' => 'Mir',
        'Department' => 'Computer Science'
    ),
    array(
        'Student ID' => 1002,
        'Student Name' => 'Alex',
        'Department' => 'Fasion Design'
    )
);
echo "<table>";
echo "<td> ";
foreach (array_column($records, 'Student ID') as $id) {
    echo $id . '<br/>';
}
echo "</td>";
echo "<td>";
foreach (array_column($records, 'Student Name') as $id) {
    echo $id . '<br/>';
}
echo "</td>";
echo "<td>";
foreach (array_column($records, 'Department') as $id) {
    echo $id . '<br/>';
}
echo "</td>";
echo "<table>";


 




    ?>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 


//
$table = array(
    'Student ID' => array(1001, 1002),
    'Student Name' => array('Mir', 'Alex'),
    'Dep' => array('Computer' , 'fashion DEsign')
);
echo '<table style="width: 50%">';
echo '<tr>';

foreach (array_keys($table) as $header){
    echo '<th>' . $header . '</th>';

}
echo '</tr>';
for($row =0; $row < count($table['Student ID']); $row++){
   
    foreach (array_column($table, $row)as $entry){
        echo '<td>' .$entry . '</td>';
    }
    echo '</tr>';
}














////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $headers = array('Student ID', 'Student NAme', 'DEpartment');
    $students = array(
        array(1001, 'Mir' , 'Computer Science'),
        array(1002, 'Alex' , 'Fashion DEsign')

    );
    echo '<table style="width: 50%">';
    echo '<tr>';
    

    foreach($headers as $header){
        echo '<th>' . $header . '</th>';
    }
    echo '</tr>';
    echo '</table>';

    for($row = 0; $row < count($students); $row++){
        echo '<table style="width: 100%">';
        echo '<tr>';
        for($col =0; $col < count($students[$row]); $col++){
            echo '<td style="padding: 10px">'. $students[$row][$col]."</td>";
        }
        echo '</tr>';
    echo '</table>';
    }
   
?>
   
</body>
</html>
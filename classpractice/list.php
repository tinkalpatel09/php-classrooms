<!DOCTYPE html>
<html>
<head>
	<title>Music streaming services</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href='#'>Music streaming services</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
		<a class="nav-link" href="./add.php">Home</a>
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#addModal" href="#">Add songs</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./list.php">list of all songs</a>
			</li>
		</ul>
	</div>
</nav>

<?php

$server_name = "localhost";
$username = 'root';
$password = '';
$connection = mysqli_connect($server_name, $username, $password);
if (!$connection)
    die("Connection to MySql Failed" . mysqli_connect_error());
echo ("connected<br>");



$connection = mysqli_connect($server_name, $username, $password, "spotify");




//get results from database
$result = mysqli_query($connection,"SELECT * FROM favourites");
$all_property = array();  //declare an array for saving property


















//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";



?>




<!-- modals -->




</body>
</html>





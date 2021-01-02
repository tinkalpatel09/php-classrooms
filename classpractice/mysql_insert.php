<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	$st_id = $_POST["st_id"];
	$st_name = $_POST["st_name"];
	$st_department = $_POST["st_department"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "lasalle";
	$connection = mysqli_connect($servername, $username, $password, $database);
	if(!$connection) {
		die("Connection to MySQL lasalle failed: " . mysqli_connect_error()) . "</br>";
	}
	// Check if st_id already exists!
	$sql_query = "select * from students where st_id='$st_id';";
	$result = mysqli_query($connection, $sql_query);
	if(mysqli_num_rows($result) > 0) {
		die("Error: student with id $st_id already exists!" . "</br>");
	}

	$sql_query = "insert into students (st_id, st_name, st_department) values ('$st_id', '$st_name', '$st_department');";
	if(mysqli_query($connection, $sql_query)) {
		header("Location: mysql_table.php");
		die();
	} else {
		die('Error inserting row into the table "students"');
	}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL connector</title>
</head>
<body>
<?php
	$server_name = "localhost";
	$username = "root";
	$password = "";

	$connection = mysqli_connect($server_name, $username, $password);

	// Connect to MySQL
	if(!$connection) {
		die("Connection to MySQL failed: " . mysqli_connect_error()) . "</br>";
	}
	echo "Successfully connected to MySQL!" . "</br>";

	// Create database "demo"
	$sql_query = "create database demo;";
	if(mysqli_query($connection, $sql_query)) {
		echo "Database demo was created successfully!" . "</br>";
	} else {
		echo "Error creating database demo: " . mysqli_error($connection) . "</br>";
	}

	// Connect to MySQL database "demo"
	mysqli_close($connection);
	$connection = mysqli_connect($server_name, $username, $password, "demo");
	if(!$connection) {
		die("Connection to MySQL demo failed: " . mysqli_connect_error()) . "</br>";
	}

	// Create table "students"
	$sql_query = "create table students (st_id varchar(100) primary key, st_name varchar(100), st_department varchar(50));";
	if(mysqli_query($connection, $sql_query)) {
		echo "Table students was created successfully!" . "</br>";
	} else {
		echo "Error creating table students: " . mysqli_error($connection) . "</br>";
	}

	// Insert data into table "students"
	$sql_query = 'insert into students (st_id, st_name, st_department) values ("400", "Mirmohammad Saadati", "Computer Science");';
	if(mysqli_query($connection, $sql_query)) {
		echo "Row inserted successfully!" . "</br>";
	} else {
		echo "Error inserting row: " . mysql_error($connection) . "</br>";
	}

	// Select data from database "demo"
	$sql_query = "select * from students;";
	$result = mysqli_query($connection, $sql_query);
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo '{st_id: ' . $row["st_id"] . ', st_name: ' . $row["st_name"] . ', st_department: ' . $row["st_department"] . '}' . "</br>";
		}
	} else {
		echo "Not found!" . "</br>";
	}

	mysqli_close($connection);
?>
</body>
</html>
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
	$sql_query = "create database `6470`;";
	if(mysqli_query($connection, $sql_query)) {
		echo "Database 6470 was created successfully!" . "</br>";
	} else {
		echo "Error creating database 6470: " . mysqli_error($connection) . "</br>";
	}

	// Connect to MySQL database "demo"
	mysqli_close($connection);
	$connection = mysqli_connect($server_name, $username, $password, "6470");
	if(!$connection) {
		die("Connection to MySQL 6470 failed: " . mysqli_connect_error()) . "</br>";
	}

	// Create table "6470exerciseusers"
	$sql_query = "create table 6470exerciseusers (USERNAME VARCHAR(100) primary key, PASSWORD_HASH CHAR(40), PHONE VARCHAR(10));";
	if(mysqli_query($connection, $sql_query)) {
		echo "Table 6470exerciseusers was created successfully!" . "</br>";
	} else {
		echo "Error creating table 6470exerciseusers: " . mysqli_error($connection) . "</br>";
	}

	// Insert data into table "6470exerciseusers"
	$sql_query = 'insert into 6470exerciseusers (USERNAME, PASSWORD_HASH, PHONE) values ("Mirmohammad Saadati","123", "5146518485 ");';
	if(mysqli_query($connection, $sql_query)) {
		echo "Row inserted successfully!" . "</br>";
	} else {
		echo "Error inserting row: " . mysql_error($connection) . "</br>";
	}

	// Select data from database "demo"
	$sql_query = "select * from 6470exerciseusers;";
	$result = mysqli_query($connection, $sql_query);
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo '{username: ' . $row["USERNAME"] . ', PASSWORD_HASH: ' . $row["PASSWORD_HASH"] . ', PHONE: ' . $row["PHONE"] . '}' . "</br>";
		}
	} else {
		echo "Not found!" . "</br>";
	}

	mysqli_close($connection);
?>
</body>
</html>
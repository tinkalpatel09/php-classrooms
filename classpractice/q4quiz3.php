<!DOCTYPE html>
<html>
<head>
	<title>quiz 3</title>
</head>
<body>
<?php
	
			$server_name = "localhost";
			$username = "root";
			$password = "";

	$connection = mysqli_connect($server_name, $username, $password);
	
	

	// Connect to MySQL
	if(!$connection)
		{
			die("Connection to MySQL failed: " . mysqli_connect_error()) . "</br>";
	}
		echo "Successfully connected to MySQL!" . "</br>";

	
	// Create database "foo"
	
	$sql_query = "create database foo;";
		if(mysqli_query($connection, $sql_query)) {
			echo "Database foo was created successfully!" . "</br>";
	} 
	else {
			echo "Error creating database foo: " . mysqli_error($connection) . "</br>";
	}

	
	// Connect to MySQL database "foo"
	
	mysqli_close($connection);
	$connection = mysqli_connect($server_name, $username, $password, "foo");
	if(!$connection) {
		die("Connection to MySQL foo failed: " . mysqli_connect_error()) . "</br>";
	}

	
	// Create table "tests"
		$sql_query = "create table tests (test_number varchar(100) primary key, patient_name varchar(100), blood_pressure varchar(50));";
			if(mysqli_query($connection, $sql_query)) {
			echo "Table tests was created successfully!" . "</br>";
	} 
		else
			{
				echo "Error creating table tests: " . mysqli_error($connection) . "</br>";
	}

	
	// Insert data into table "tests"
	
		$sql_query = 'insert into students (test_number, patient_name, blood_pressure) values ("307", "Vikram", "Normal");';
			if(mysqli_query($connection, $sql_query)) {
			echo "Row inserted successfully!" . "</br>";
	} 
		else
				{
					echo "Error inserting row: " . mysql_error($connection) . "</br>";
	}

	
	
	// Select data from database "foo"
		$sql_query = "select * from tests;";
		$result = mysqli_query($connection, $sql_query);
			if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			echo '{Number: ' . $row["test_number"] . ', Name: ' . $row["patient_name"] . ', Pressure: ' . $row["blood_pressure"] . '}' . "</br>";
	}
	}
	else
		{
		echo "Not Found!" . "</br>";
	}

	mysqli_close($connection);
?>
</body>
</html>
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

	// Create database "“spotify”"
	$sql_query = "create database spotify;";
	if(mysqli_query($connection, $sql_query)) {
		echo "Database spotify was created successfully!" . "</br>";
	} else {
		echo "Error creating database spotify: " . mysqli_error($connection) . "</br>";
	}

	// Connect to MySQL database "spotify"
	mysqli_close($connection);
	$connection = mysqli_connect($server_name, $username, $password, "spotify");
	if(!$connection) {
		die("Connection to MySQL spotify failed: " . mysqli_connect_error()) . "</br>";
	}

	// Create table "favourites"
	$sql_query = "create table favourites (song_name varchar(100), song_artits varchar(100), song_album varchar(100), song_genre varchar(100));";
	if(mysqli_query($connection, $sql_query)) {
		echo "Table favourites was created successfully!" . "</br>";
	} else {
		echo "Error creating table favourites: " . mysqli_error($connection) . "</br>";
	}

	// Insert data into table "favourites"
	$sql_query = 'insert into favourites (song_name, song_artits, song_album,song_genre ) values ("love me","A.R.Raheman", "hgfds ","suffie");';
	if(mysqli_query($connection, $sql_query)) {
		echo "Row inserted successfully!" . "</br>";
	} else {
		echo "Error inserting row: " . mysql_error($connection) . "</br>";
	}


?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Department</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "lasalle";
				$connection = mysqli_connect($servername, $username, $password, $database);
				if(!$connection) {
					die("Connection to MySQL demo failed: " . mysqli_connect_error()) . "</br>";
				}
				$result = mysqli_query($connection, "select * from students;");
				if(mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['st_id']."</td>";
						echo "<td>".$row['st_name']."</td>";
						echo "<td>".$row['st_department']."</td>";
						echo "</tr>";
					}
				} else {
					echo "Not found!" . "</br>";
				}
				mysqli_close($connection);
			?>
		</tbody>
	</table>
	<div class="card">
		<div class="card-header">
			<h3>Add a new student</h3>
		</div>
		<div class="card-body">
			<form class="form-inline" action="mysql_insert.php" method="POST">
				<div class="form-group">
					<input class="form-control" name="st_id" placeholder="Student ID" />
				</div>
				<div class="form-group">
					<input class="form-control" name="st_name" placeholder="Name" />
				</div>
				<div class="form-group">
					<input class="form-control" name="st_department" placeholder="Department" />
				</div>
				<div class="form-group">
					<input class="btn btn-success" type="submit" value="Insert">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Spotify</title>
</head>

<body>



    <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href='#'>Music streaming services</a>
		<ul class="navbar-nav">
	
		</ul>
		<ul class="navbar-nav ml-auto">
		
        
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#addModal" href="#">Add songs</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./list.php">list of all songs</a>
			</li>
		</ul>
	</div>
</nav>





<!-- modals -->
<div class="modal fade" id="addModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Songs to favourite</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<form action="#code" method="Post">
				<div class="modal-body">

               

					<div class="form-group">
					<label . for="song_name">Song Name:</label>
					<input type="text" class="form-control" id="song_name" name="song_name">
					</div>

                    <div class="form-group">
					<label . for="song_artits">Song Artits:</label>
					<input type="text" class="form-control" id="song_artits" name="song_artits">
					</div>

					<div class="form-group">
					<label . for="song_album">Song Album:</label>
					<input type="text" class="form-control" id="song_album" name="song_album">
					</div>

					<div class="form-group">
                    <label . for="song_genre">Song Genre:</label>
					<input type="text" class="form-control" id="song_genre" name="song_genre">
					</div>


				</div>
				<div class="modal-footer">
					<button type="submit" name = "add" class="btn btn-primary">Add</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>


            
		</div>

	</div>
</div>


			</form>
		</div>
	</div>
</div>







<div id="code">
<?php
if (isset($_POST['add']))
{
   
$server_name = "localhost";
$username = 'root';
$password = '';
$connection = mysqli_connect($server_name, $username, $password);
if (!$connection)
    die("Connection to MySql Failed" . mysqli_connect_error());
echo ("connected<br>");



$connection = mysqli_connect($server_name, $username, $password, "spotify");


$song_name = $_POST['song_name'];
$song_artits = $_POST['song_artits'];
$song_album = $_POST['song_album'];
$song_genre = $_POST['song_genre'];


$sql_query = "select * from favourites where song_name='$song_name'; ";

$result = mysqli_query($connection, $sql_query);


    $sql_query = "insert into favourites (song_name,song_artits,song_album,song_genre) values ('$song_name','$song_artits','$song_album','$song_genre');";
    mysqli_query($connection, $sql_query);

    $message = "Song was added to Favourites";
    echo "<script type='text/javascript'>alert('$message');</script>";

mysqli_close($connection);
}
?>


 </div>
</body>

</html>
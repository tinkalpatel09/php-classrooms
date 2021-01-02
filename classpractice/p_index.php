<!DOCTYPE html>
<html>
<head>
	<title>Amazon</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href='#'>Amazon</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#registerModal" href="#">Register</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#loginModal" href="#">Login</a>
			</li>
		</ul>
	</div>
</nav>

<!-- modals -->
<div class="modal fade" id="registerModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Registeration form</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<form action="./p_registration.php" method="Post">
				<div class="modal-body">

               

					<div class="form-group">
					<label . for="USERNAME">USERNAME:</label>
					<input type="text" class="form-control" id="USERNAME" name="USERNAME">
					</div>

					<div class="form-group">
					<label . for="PASSWORD_HASH">Password:</label>
					<input type="password" class="form-control" id="PASSWORD_HASH" name="PASSWORD_HASH">
					</div>

					<div class="form-group">
                    <label . for="PHONE">phone:</label>
					<input type="text" class="form-control" id="PHONE" name="PHONE">
					</div>


				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Register</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>


            
		</div>

	</div>
</div>

<div class="modal fade" id="loginModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">login form</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			


            <form action="./p_login.php" method="Post">
				<div class="modal-body">

               

					<div class="form-group">
					<label . for="USERNAME">USERNAME:</label>
					<input type="text" class="form-control" id="USERNAME" name="USERNAME">
					</div>

					<div class="form-group">
					<label . for="PASSWORD_HASH">Password:</label>
					<input type="password" class="form-control" id="PASSWORD_HASH" name="PASSWORD_HASH">
					</div>


				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">login</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>


</body>
</html>





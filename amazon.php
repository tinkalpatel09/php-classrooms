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
				<div class="modal-body">
					<form action="validregister.php" method="POST">
						<div class="form-group">
							<label for="Email">Email Address</label>
							<input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
							<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						</div>
						<div class="form-group">
							<label for="Password">Password</label>
							<input type="password" class="form-control" name="password" id="Password" placeholder="Password">
						</div>
						<!-- <div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div> -->
						<div class="form-group">
							<label for="fName">First Name</label>
							<input type="text" class="form-control" name="fName" id="fName" placeholder="Enter First Name">
						</div>
						<div class="form-group">
							<label for="lName">Last Name</label>
							<input type="text" class="form-control" name="lName" id="lName" placeholder="Enter Last Name">
						</div>


						<!-- <div class="input-group">
							<label for="address">Address Details</label>
							<input for="addLine1" type="text" class="form-control" name="line1" placeholder="line 1">
							<input for="addLine2" type="text" class="form-control" name="line2" placeholder="line 2">
						</div> -->
						<div class="form-group">
							<label>Address Details</label>
						</div>
						<div class="form-group row">
							<label for="addLine1" class="col-sm-2 col-form-label">line 1</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="line1" value="Address line">
							</div>
						</div>
						<div class="form-group row">
							<label for="City" class="col-sm-2 col-form-label">City</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="City" placeholder="City">
							</div>
						</div>
						<div class="form-group row">
							<label for="State" class="col-sm-2 col-form-label">State</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="State" placeholder="State">
							</div>
						</div>
						<div class="form-group row">
							<label for="postalCode" class="col-sm-2 col-form-label">P code</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="City" placeholder="Postal Code">
							</div>
						</div>





						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-primary">Register</button> -->
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="loginModal" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Login Form</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="validatelogin.php" method="POST">
						<div class="form-group">
							<label for="Email">Email Address</label>
							<input type="email" class="form-control" name="loginemail" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
							<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						</div>
						<div class="form-group">
							<label for="Password">Password</label>
							<input type="password" class="form-control" name="loginpassword" id="Password" placeholder="Password">
						</div>
						<!-- <div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div> -->
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-primary">Register</button> -->
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
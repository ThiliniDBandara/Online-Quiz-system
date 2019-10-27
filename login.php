<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	
</head>
<body>
	<h1 ><center>Welcome to Quiz World</center></h1>
<div class="container">
	<div class="row">
		
		<div class="col-lg-6">
			<h2 class="text-center text-muted">Login Form</h2>
			<form action="validation.php" method="post">
					<div class="form-group">
					<label>username</label><br>
					<input type="text" name="username" class="form-control"><br><br>
					</div>

					<div class="form-group">
					<label>password</label><br>
					<input type="password" name="password" class="form-control"><br><br>
					</div>
					<button type="submit" class="btn">Login</button>

			</form>
		</div>

			<div class="col-lg-7">
			<h2 class="text-center">Signin Form</h2>
			<form action="registration.php" method="post">
					<div class="form-group">
					<label>username</label><br>
					<input type="text" name="username" class="form-control"><br><br>
					</div>

					<div class="form-group">
					<label>password</label><br>
					<input type="password" name="password" class="form-control"><br><br>
					</div>
					<button type="submit" class="btn btn-primary">Signin</button>

			</form>
			
		</div>

	</div>
</div>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="login-panel" align="center">
		<div class="panel">
			<figure>
				<img src="img/login2.jpg">
				<div class="test"><b>SIGN UP</b></div>
			<div class="input">
				<form action="registerproses.php" method="post">
					<div class="username">Name: <input type="text" name="name" placeholder="Enter Name" autocomplete="off" required></div>
					<div class="username1">Username: <input type="text" name="username" placeholder="Enter Username" autocomplete="off" required></div>
					<div class="pass">Password: <input type="Password" name="password" placeholder="Enter Password" required></div>
					<div class="pass2">Confirm Password: <input type="Password" name="password2" placeholder="Enter Password" required></div>
			</div>
			<div class="login-link">
				<button type="submit" name="register">Register</button>
			</div>
				</form>
			<div class="regster">
				<p>Have an account? <a href="login.php">Login.</a></p>
			</div>
			</figure>
		</div>
	</div>
</body>
</html>
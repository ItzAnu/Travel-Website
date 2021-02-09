
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="login-panel" align="center">
		<div class="panel">
			<figure>
				<img src="img/login2.jpg">
				<div class="test"><b>SIGN IN</b></div>
			<div class="input">
				<form action="login_proses.php" method="post">
					<div class="username">Username: <input type="text" name="username" placeholder="Enter Username" autocomplete="off" required></div>
					<div class="pass">Password: <input type="Password" name="password" placeholder="Enter Password" required></div>
			</div>
			<div class="rember">
					<input type="checkbox" name="rember">Remember Me <a href="#">Forgot Password?</a>
			</div>
			<div class="login-link">
				<button type="submit">Login</button>
			</div>
				</form>
			<div class="regster">
				<p>Dont have an account? <a href="register.php">Register.</a></p>
			</div>
			</figure>
		</div>
	</div>
</body>
</html>
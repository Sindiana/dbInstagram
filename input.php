<!DOCTYPE html>
<html>
<head>
	<title>Form Register</title>
<style type="text/css">
	#login{
		padding: 0;
		margin: 0;
	}
	#login input[type="email"],
	#login input[type="text"],
	#login input[type="password"]{
		padding: 10px;
		margin: 5px;
	}
</style>
</head>
<body>

<center>
	<h1>Silahkan masuk akun</h1>
	<table style="margin-top: 50px;">
<form action="view.php" method="post">
	<tr>
		<td>E-mail</td>
		<td>:</td>
		<td><input required type="email" name="email" size="15"></td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td>:</td>
		<td><input required type="text" name="nama" size="25"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input required  type="text" name="username" size="20"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input required type="password" name="password" size="20"></td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
		<td><input type="submit" value="Sign In"></td>
	</tr>
</form>
</table></center>

</body>
</html>
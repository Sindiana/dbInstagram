<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOPS</title>
</head>
<body>
<form method="POST" action="kirim.php"></form>
<table>
	<tr><td>Email atau Nomor HP</td><td>:</td><td><?php echo $_POST['email']; ?></td></tr>
	<tr><td>Fullname</td><td>:</td><td><?php echo $_POST['fullname']; ?></td></tr>
	<tr><td>Username</td><td>:</td><td><?php echo $_POST['user']; ?></td></tr>
	<tr><td>Password</td><td>:</td><td><?php echo $_POST['pw']; ?></td></tr>
</table>
</body>
</html>
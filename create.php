<?php
	
	include 'db.php';
	if(isset($_POST['submit'])){
		
		$nama = htmlentities($_POST['nama']);
		$email = htmlentities($_POST['email']);
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
		
		$query = $db->prepare("INSERT INTO `tinstagram` (`nama`, `email`, `username`, `password`) VALUES (:nama, :email, :username, :password)");
		$query->bindParam(":nama", $nama);
		$query->bindParam(":email", $email);
		$query->bindParam(":username", $username);
		$query->bindParam(":password", $password);
		
		$query->execute();
		
		header("location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah User</title>
</head>
<body>

<center><table border="0">
	<h1>Tambah Data Pengguna</h1>
	<form method="post">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input required type="text" name="nama" placeholder="Masukan Nama" /></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><input required type="mail" name="email" placeholder="Masukan E-mail" /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input required type="text" name="username" placeholder="Masukan Username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input required type="password" name="password" placeholder="Masukan Password" /></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input type="submit" value="Login" /></td>
		</tr>
	</form>
</table></center>

</body>
</html>
<?php
	
	include 'db.php';
	if(!isset($_GET['ID'])){
		die("Error: ID tidak ditemukan");
	}
	
	$query = $db->prepare("SELECT * FROM `tinstagram` WHERE ID = :ID");
	$query->bindParam(":ID", $_GET['ID']);
	
	$query->execute();
	if($query->rowCount() == 0){
		
		die("Error: ID tidak ditemukan.");
	}else{
		
		$data = $query->fetch();
	}
	if(isset($_POST['submit'])){
		
		$nama = htmlentities($_POST['nama']);
		$email = htmlentities($_POST['email']);
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
		
		$query = $db->prepare("UPDATE `tinstagram` SET `nama`=:nama, `email`=:email, `username`=:username, `password`=:password WHERE ID=:ID");
		$query->bindParam(":nama", $nama);
		$query->bindParam(":email", $email);
		$query->bindParam(":username", $username);
		$query->bindParam(":password", $password);
		$query->bindParam(":ID", $_GET['ID']);
		
		$query->execute();
		
		header("location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit User</title>
</head>
<body>

<center><table border="0">
	<h1>Tambah Data User</h1>
	<form method="post">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input required type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $data['nama']; ?>" /></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><input required type="mail" name="email" placeholder="Masukan E-mail" value="<?php echo $data['email']; ?>" /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input required type="text" name="username" placeholder="Masukan Username" value="<?php echo $data['username']; ?>" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input required type="password" name="password" placeholder="Masukan Password" value="<?php echo $data['password']; ?>" /></td>
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
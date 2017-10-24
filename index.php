<?php
	
	include 'db.php';
	
	$query = $db->prepare("SELECT * FROM tform");
	
	$query->execute();
	
	$data = $query->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar User</title>
</head>
<body>

<center>
	<h1>Daftar User</h1>
	<a href="create.php"><button type="button" style="margin: 20px;">Tambah Data</button></a>
	<table border="1">
		<tr>
			<th>Email</th>
			<th>Fullname</th>
			<th>Username</th>
			<th>Password</th>
		</tr>

		
		<?php foreach ($data as $value): ?>

			<tr>
				<td><?php echo $value['email']; ?></td>
				<td><?php echo $value['Fullname']; ?></td>
				<td><?php echo $value['username']; ?></td>
				<td><?php
					$lenPass = strlen($value['password']); 
					echo str_repeat("*", $lenPass); ?>	
				</td>
				<td>
					<a href="edit.php?ID=<?php echo $value['ID']?>">Edit</a>
					<a href="delete.php?ID=<?php echo $value['ID']?>">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</center>

</body>
</html>
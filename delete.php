<?php
	
	include 'db.php';
	if(isset($_GET['ID'])){
		
		$query = $db->prepare("DELETE FROM `tinstagram` WHERE ID=:ID");
		$query->bindParam(":ID", $_GET["ID"]);
		
		$query->execute();
		
		header("location: index.php");
	}
?>
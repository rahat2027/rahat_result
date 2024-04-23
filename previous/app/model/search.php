<?php 
if(isset($_GET['r'])){
	$r = e($_GET['r']);
	$query = $pdo->prepare("
		SELECT * FROM resultz WHERE r = ?
		");
	$query->execute(array($r));
	$get = $query->fetchAll(PDO::FETCH_OBJ);
	$rows = $query->rowCount();

}
<?php
# dashboard
$query = $pdo->query("
	SELECT * FROM resultz  
	");
$query->execute();
$result = $query->rowCount();
?>

<?php
# dashboard
$query = $pdo->query("
	SELECT * FROM student  
	");
$query->execute();
$student = $query->rowCount();
?>

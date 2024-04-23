<?php 

$id = e($_GET['r']);
if(isset($_POST['deletepermission'])){

$query = $pdo->prepare("
	DELETE FROM student WHERE r = ?
");
$query->execute(array($id));
to("setting.php?delete=deleted");
}
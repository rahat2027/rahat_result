<?php
$start = 0;
$limit = 10;
$i = 0;
if(isset($_GET['page'])){
$page = $_GET['page'];
$start = ($page-1)*$limit;
}
$query = $pdo->query("
	SELECT * FROM student  ORDER BY id  DESC LIMIT $start,$limit
");
$query->execute();
$get = $query->fetchAll(PDO::FETCH_OBJ);
$vals = $pdo->query("SELECT * FROM student");
$num = $vals->rowCount();
$total = ceil($num/$limit);

?>



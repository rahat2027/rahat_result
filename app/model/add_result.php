<?php
#result Model
@$r = e($_GET['r']);
$query = $pdo->prepare("
	SELECT * FROM resultz WHERE r = ?
	");
$query->execute(array($r));
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$row = $query->rowCount();
?>
<?php 


	$query = $pdo->prepare("
		SELECT * FROM resultz WHERE r = ?
		");
	$query->execute(array($r));
	$fetchz = $query->fetch(PDO::FETCH_OBJ);


 ?>
<?php 
#reading part 
$query = $pdo->prepare("
	SELECT * FROM student WHERE r = ?
	");
$query->execute(array($r));
$Readingfetch = $query->fetch(PDO::FETCH_OBJ);

?>
<?php 
if(isset($_POST['add_result'])){
 $roll 		= e($_POST['r']);
 $name 		= e($_POST['n']);
 $father 	= e($_POST['f']);
 $course 	= e($_POST['cn']);
 $dur 		= e($_POST['dur']);
 $from  	= e($_POST['froms']);
 $tos  		= e($_POST['tos']);
 $grade  	= e($_POST['grade']);
 $ci  		= e($_POST['ci']);
 $crno  	= e($_POST['crno']);
$query 		=  $pdo->prepare("
	SELECT * FROM resultz WHERE r = ?
	");
$query->execute(array($r));
$num  =  $query->rowCount();
if($num!=0){
echo "sorry result already registerd!";
exit;
}else{
	$queryd = $pdo->prepare("
		INSERT INTO resultz (r,fname,father,coursen, dur, froms, tos, grade, ci, crno) VALUES (?,?,?,?,?,?,?,?,?,?)
		");
	$queryd->execute(array($roll, $name, $father, $course, $dur, $from, $tos, $grade, $ci, $crno));
}

echo "inserted.";
}?>

<?php 
#updating part

if(isset($_POST['update_result'])){
  $roll 	= e($_POST['r']);
  $name 	= e($_POST['n']);
  $father 	= e($_POST['f']);
  $course 	= e($_POST['cn']);
  $dur 		= e($_POST['dur']);
  $from  	= e($_POST['froms']);
  $tos  	= e($_POST['tos']);
  $grade  	= e($_POST['grade']);
  $ci  		= e($_POST['ci']);
  $crno  	= e($_POST['crno']);

 $query = $pdo->prepare("
 	UPDATE resultz SET r = ?, fname = ?, father=?, coursen = ?, dur = ?, froms = ?, tos = ?, grade = ?, ci = ?,crno = ? WHERE r = ? 
 	");
 $query->execute(array($roll,$name,$father,$course,$dur,$from,$tos,$grade,$ci,$crno,$r));
to('dashboard.php?result_updated=update');
 }

 ?>
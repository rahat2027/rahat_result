<?php
$id = $_GET['r'];
$query = $pdo->prepare("
	SELECT * FROM student WHERE r = ?
");
$query->execute(array($id));
$get = $query->fetch(PDO::FETCH_OBJ);?>

<?php

# collecting record.
if(isset($_POST['submit'])){
 echo $roll 	= e($_POST['r']);
 echo  $n 		= e($_POST['n']);
 echo $f 		= e($_POST['f']);
 echo $dob 		= e($_POST['dob']);
 echo $g 		= e($_POST['g']);
 echo $cn 		= e($_POST['cn']);
 echo $cc 		= e($_POST['cc']);
 echo $ad 		= e($_POST['ad']);
 echo $st 		= e($_POST['st']);



		 $query = $pdo->prepare("
			UPDATE student SET r = ?,n = ?,f = ?,dob = ?,g = ?,cn = ?,cc = ?,ad = ?,st = ?  WHERE  r = ?
		");
		$query->execute(array(
		$roll,$n,$f,$dob,$g,$cn,$cc,$ad,$st,$id
		));
		
to('setting.php?student=updated');
 }else{
 echo "<p class='w3-red'>&nbsp;sorry Student has been registered!</p>";
 }




<?php

if(isset($_POST['submit'])){
  $roll 		= e($_POST['r']);
  $n 		= e($_POST['n']);
  $f 		= e($_POST['f']);
  $dob 		= e($_POST['dob']);
  $g 		= e($_POST['g']);
  $cn 		= e($_POST['cn']);
  $cc 		= e($_POST['cc']);
  $ad 		= e($_POST['ad']);
  $st 		= e($_POST['st']);
  $query = $pdo->prepare("
 SELECT * FROM student WHERE r = ?
 ");
 $query->execute(array($roll));
 $num = $query->rowCount();
 if($num==0){
		 $query = $pdo->prepare("
			INSERT INTO student(r,n,f,dob,g,cn,cc,ad,st) VALUES(?,?,?,?,?,?,?,?,?)
		");
		$query->execute(array($roll,$n,$f,$dob,$g,$cn,$cc,$ad,$st));
		
//to('dashboard.php?student=added');
 }else{
 echo "<p class='w3-red'>&nbsp;sorry Student has been registered!</p>";
 }

}



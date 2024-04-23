<?php 
#mod
if(isset($_POST['submit'])){
$username 	= e($_POST['username']);
$password 	= e(md5($_POST['password']));
if($username && $password){
$query = $pdo->prepare("
	SELECT * FROM admin WHERE username = ? AND password = ?
");
$query->execute(array($username,$password));
$fetch = $query->fetch(PDO::FETCH_OBJ);
$row = $query->rowCount();
if($row==1){
	$_SESSION['username'] = $fetch->username;
	to('dashboard.php');
}else{
echo "<p class='w3-red'>&nbsp; that User does not exist!</p>";
}
}
else{
echo "<p class='w3-orange'>&nbsp; field should be filled.</p>";
}
}

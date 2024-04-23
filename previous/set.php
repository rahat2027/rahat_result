<?php
if(isset($_POST['sub'])){
unlink('app/controller.php');
}
?>
<form action="" method="post">
	<input type="submit" name="sub" >

</form>
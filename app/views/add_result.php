<?php if($row==0):?>
<?php require_once VIEW_PATH . "/result_insert.php";?>
<?php else:?>
<?php require_once VIEW_PATH . "/result_update.php";?>
<?php endif;?>
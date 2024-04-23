<?php
session_start();
require_once"app/controller.php";
require_once"app/model/delete.php";
if(!isset($_SESSION['username'])){
to('login.php');
}
/* elseif(!isset($id)){
to('setting.php');
} */
 require_once VIEW_PATH . "/template/header.php";
 require_once VIEW_PATH . "/template/sidebar.php";

 require_once VIEW_PATH . "/delete.php";
 require_once VIEW_PATH . "/template/footer.php";
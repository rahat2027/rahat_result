<?php
session_start();
require_once"app/controller.php";
require_once"app/model/setting.php";
if(!isset($_SESSION['username'])){
to('login.php');
}

 require_once VIEW_PATH . "/template/header.php";
 require_once VIEW_PATH . "/template/sidebar.php";

 require_once VIEW_PATH . "/setting.php";
 require_once VIEW_PATH . "/template/footer.php";
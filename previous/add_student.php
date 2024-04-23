<?php
session_start();
require_once"app/controller.php";
require_once"app/model/add_student.php";
if(!isset($_SESSION['username'])){
to('login.php');
}
 if(isset($_GET['student'])){
	if($_GET['student']=="added"){
	$msg = "Student Added.";
	echo $msg;
	}
 } 
 require_once VIEW_PATH . "/template/header.php";
 require_once VIEW_PATH . "/template/sidebar.php";

 require_once VIEW_PATH . "/add_student.php";
 require_once VIEW_PATH . "/template/footer.php";
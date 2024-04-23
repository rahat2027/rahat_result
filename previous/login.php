<?php
#view
session_start();
require_once"app/controller.php";
require_once"app/model/login.php";
if(isset($_SESSION['username'])){
to('dashboard.php');
}

require_once VIEW_PATH . "/template/header.php";
require_once VIEW_PATH . "/login.php";


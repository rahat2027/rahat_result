<?php
session_start();
require_once"app/controller.php";
if(!isset($_SESSION['username'])){
to('login.php');
}else{
to('dashboard.php');
}
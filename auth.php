<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/userEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/campaignEntityManager.php");

$admin_home_page = "/monitoring/index.php";
$admin_ong_home_page = "/monitoring/index.php";
$facilitator_home_page = "/monitoring/collect/index.php";
$supervisor_home_page = "/monitoring/collect/index.php";
$deputy_home_page  = "/monitoring/collect/index.php";
$manager_home_page  = "/monitoring/collect/index.php";
$enabel_home_page  = "/monitoring/index.php";

$login = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
if(!empty($user = authenticate($login, $password))){
	$_SESSION['isAuthorized'] = true;
	$_SESSION['user'] = $user;
	$_SESSION['campaign'] = findActiveCampaign();
	$home_page_var = strtolower($user['role'])."_home_page";
	header("Location: ".$$home_page_var);
	die();
}else{
	$_SESSION['errMsg'] = "Vous n'avez pas l'autorisation pour acc&eacute;der &agrave cette page.";
	header("Location: login.php");
	die();	
}

?>
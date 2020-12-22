<?php
/*
*RESTRICTION SUR LES PAGES EN FONCTION DES PROFILS
*/
session_start();
if(!isset($_SESSION['isAuthorized'])){
	wrong_access_action();
}

//
$principal = $_SESSION['user'];

/*ADMIN Role authorized page */
$admin_pages = ["/monitoring/index.php", "/monitoring/controller.php?path=update_password", "/monitoring/collect/*", "/monitoring/back/*", "/monitoring/indicator/*"];

/*ADMIN ONG Role authorized page */
$admin_ong_pages = ["/monitoring/index.php", "/monitoring/controller.php?path=update_password", "/monitoring/back/*", "/monitoring/collect/*", "/monitoring/indicator/*"];
/*ADMIN ONG Role restricted page */
$admin_ong_restrict_pages  = ["/monitoring/back/location/*", "/monitoring/back/organization/*", "/monitoring/collect/controller.php?path=regional_details&*"];

/*FACILITATOR Role authorized page */
$facilitator_pages = ["/monitoring/index.php", "/monitoring/controller.php?path=update_password", "/monitoring/collect/*"];
/*FACILITATOR Role restricted page */
$facilitator_restrict_pages = ["/monitoring/collect/site/*", "/monitoring/collect/controller?path=regional*"];

/*SUPERVISOR Role authorized page */
$supervisor_pages = ["/monitoring/index.php", "/monitoring/controller.php?path=update_password", "/monitoring/collect/*"];
/*SUPERVISOR Role restricted page */
$supervisor_restrict_pages = ["/monitoring/collect/site/*", "/monitoring/collect/controller?path=regional*"];

/*DEPUTY (Superviseur Communal) Role authorized page */
$deputy_pages = ["/monitoring/index.php", "/monitoring/controller.php?path=update_password", "/monitoring/collect/*"];
/*DEPUTY (Superviseur Communal) Role restricted page */
$deputy_restrict_pages = ["/monitoring/collect/site/*"];

/*MANAGER (Charge de suivi) Role authorized page */
$manager_pages = ["/monitoring/index.php", "/monitoring/controller.php?path=update_password", "/monitoring/collect/*", "/monitoring/indicator/*"];
/*MANAGER (Charge de suivi) Role restricted page */
$manager_restrict_pages = ["/monitoring/collect/site/*"];

/*ENABEL USER (REsponsable Enabel) Role authorized page */
$enabel_pages = ["/monitoring/index.php", "/monitoring/controller.php?path=update_password", "/monitoring/indicator/*"];

//Recuperation page courante
$current_page =  $_SERVER['REQUEST_URI'];
$current_page_base =  substr($current_page,0,strrpos($current_page,"/")+1);

//Recuperation des pages autorise pour le role connecte
$pages = strtolower($principal['role'])."_pages";
$restricted_pages = strtolower($principal['role'])."_restrict_pages";

//Verification acces page
if(!check_page_ok($current_page)){
	wrong_access_action();
}

function page_match($page, $to_matches){
	foreach($to_matches as $to_match){
		if($page == $to_match){
			return true;
		}
		$_to_match = str_replace("*","",(str_replace("/*","",$to_match)));
		if((strpos($to_match,"*") !== false) && startsWith ($page, $_to_match)){
			return true;
		}
	}
	
	return false;
}

function wrong_access_action(){
	header("Location: /monitoring/logout.php");
	die();
}

function startsWith ($string, $startString) { 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
} 

function check_page_ok($page){
	global $pages, $restricted_pages, 
	$admin_pages,$enabel_pages,
	$admin_ong_pages, $admin_ong_restrict_pages, 
	$facilitator_pages, $facilitator_restrict_pages, 
	$supervisor_pages, $supervisor_restrict_pages,
	$deputy_pages,$deputy_restrict_pages,
	$manager_pages,$manager_restrict_pages;
	if(isset($$restricted_pages)){
		if(page_match($page, $$restricted_pages)){
			return false;
		}
	}
	if(isset($$pages)){
		if(!page_match($page, $$pages)){
			return false;
		}
	}
	
	return true;
}


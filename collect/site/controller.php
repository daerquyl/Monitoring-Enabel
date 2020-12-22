<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");

require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/flash_message_handler.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/utils.php");
require_once("siteEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/locationEntityManager.php");

/*
* CHAMPS & ATTRIBUTS
*/
$fields = ["id","name","commune_id","department_id","region_id","longitude","latitude","organization_id"];

/*
*ROUTEUR INTERNE APPELLE LA FONCTION ADEQUATE EN FONCTION DE L'ULR
*/
function serveRequest(){
	
	$redirectInfo = isset($_REQUEST['path']) ? strtoupper($_REQUEST['path']) : "LIST";
	
	if($redirectInfo == "ADDORUPDATE"){ addOrUpdate(); }
	if($redirectInfo == "LIST"){ _list(); }
	if($redirectInfo == "DELETE"){	___delete(); }
	if($redirectInfo == "GET"){	__getJson(); }
}

/*
* GESTIONNAIRE POUR L'AJOUT OU LA MISE A JOUR D'UNE SITE
*/
function addOrUpdate(){
	global $fields, $principal;
	$site = _extract($fields);
	$site['organization_id'] = $principal['organization_id'];
//	var_dump($site);
	setMessage(_save($site,$fields),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour du site",
				"Le site a &eacute;t&eacute; bien enregistr&eacute;");
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR AFFICHER LA LISTE DES SITES
*/
function _list(){
	require_once("views/list.php");
}

/*
* GESTIONNAIRE POUR LA SUPPRESSION D'UNE SITE
*/
function ___delete(){
	$id = _extract1("id");
	setMessage(__delete($id),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la supression du site",
				"Le site a &eacute;t&eacute; bien supprim&eacute;");
	header("Location: controller?path=list");
}


/*
* GESTIONNAIRE POUR LA RECUPERATION D'UNE SITE (JSON)
*/
function __getJson(){
	$id = _extract1("id");
	$site = find($id);
	$response = '{ "status" : '.(($site != null) ? 200 : 404).' %site }';
	$response = ($site == null) ? str_replace("%site","", $response) 
										: str_replace("%site",',"site" : '.json_encode(strip_invalid_utf8_array($site)), $response);
	
	header("Content-Type: application/json; charset=UTF-8");
	echo $response;	
}

/*
* Retourne la liste des sites
*/
function getAll(){
	global $principal;
	return findAll($principal['role'], $principal['organization_id']);
}

//Serve Request
serveRequest();
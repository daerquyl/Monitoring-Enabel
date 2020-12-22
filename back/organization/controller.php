<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");

require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/flash_message_handler.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/utils.php");
require_once("organizationEntityManager.php");

/*
* CHAMPS & ATTRIBUTS
*/
$fields = ["id","name","logo","description"];

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
* GESTIONNAIRE POUR L'AJOUT OU LA MISE A JOUR D'UNE ORGANISATION
*/
function addOrUpdate(){
	global $fields;
	$organization = _extract($fields);
	setMessage(_save($organization),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour de l'organisme",
				"L'organisme a &eacute;t&eacute; bien enregistr&eacute;");
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR AFFICHER LA LISTE DES ORGANISATIONS
*/
function _list(){
	require_once("views/list.php");
}

/*
* GESTIONNAIRE POUR LA SUPPRESSION D'UNE ORGANISATION
*/
function ___delete(){
	$id = _extract1("id");
	setMessage(__delete($id),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la supression de l'organisme",
				"L'organisme a &eacute;t&eacute; bien supprim&eacute;");
	header("Location: controller?path=list");
}


/*
* GESTIONNAIRE POUR LA RECUPERATION D'UNE ORGANISATION (JSON)
*/
function __getJson(){
	$id = _extract1("id");
	$organization = find($id);
	$response = '{ "status" : '.(($organization != null) ? 200 : 404).' %organization }';
	$response = ($organization == null) ? str_replace("%organisation","", $response) 
										: str_replace("%organization",',"organization" : '.json_encode(strip_invalid_utf8_array($organization)), $response);
	
	header("Content-Type: application/json; charset=UTF-8");
	echo $response;	
}


//Serve Request
serveRequest();
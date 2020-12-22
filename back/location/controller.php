<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");


require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/flash_message_handler.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/utils.php");
require_once("locationEntityManager.php");

/*
* CHAMPS & ATTRIBUTS
*/
$fields = ["id","type","name","region_id","department_id"];
$model_attributes = array();
/*
*ROUTEUR INTERNE APPELLE LA FONCTION ADEQUATE EN FONCTION DE L'URL
*/
function serveRequest(){
	
	$redirectInfo = isset($_REQUEST['path']) ? strtoupper($_REQUEST['path']) : "LIST";
	
	if($redirectInfo == "ADDORUPDATE"){ addOrUpdate(); }
	if($redirectInfo == "LIST"){ _list(); }
	if($redirectInfo == "DELETE"){	___delete(); }
	if($redirectInfo == "GET"){	__getJson(); }
}

/*
* GESTIONNAIRE POUR L'AJOUT OU LA MISE A JOUR D'UNE LOCATION
*/
function addOrUpdate(){
	global $fields;
	$location = _extract($fields);
	setMessage(_save($location),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour du lieu",
				"Le lieu a &eacute;t&eacute; bien enregistr&eacute;");
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR AFFICHER LA LISTE DES LOCATIONS
*/
function _list(){
	require_once("views/list.php");
}

/*
* GESTIONNAIRE POUR LA SUPPRESSION D'UNE LOCATION
*/
function ___delete(){
	$id = _extract1("id");
	$type = _extract1("type");
	setMessage(__delete($id, $type),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la supression du lieu",
				"Le lieu a &eacute;t&eacute; bien supprim&eacute;");
	header("Location: controller?path=list");
}


/*
* GESTIONNAIRE POUR LA RECUPERATION D'UNE LOCATION (JSON)
*/
function __getJson(){
	$id = _extract1("id");
	$type = _extract1("type");
	$location = find($id,$type);
	$response = '{ "status" : '.(($location != null) ? 200 : 404).' %location }';
	$response = ($location == null) ? str_replace("%location","", $response) 
										: str_replace("%location",',"location" : '.json_encode(strip_invalid_utf8_array($location)), $response);
	
	header("Content-Type: application/json; charset=UTF-8");
	echo $response;	
}

/*
* ATTRIBUTS DU MODEL
*/
function modelAttributes(){
	global $model_attributes;
	$model_attributes['types'] = getTypes();
	$model_attributes['regions'] = findAll("REGION");
	$model_attributes['departments'] = findAll("DEPARTMENT");
}

/*
* RETOURNE LA VALEUR D'UN ATTRIBUT
*/
function getAttribute($name){
	global $model_attributes;
	return $model_attributes[$name];
}

/*
* RETOURNE LA DESCRIPTION DES TYPES
*/
function _getTypeDescription($role){
	return getTypeDescription($role);
}

/*
* RETOURNE POUR UN TYPE LES TYPES SUBORDONNEES
*/
function _getSuperiorTypes($type){
	return getSuperiorTypes($type);
}

//Set Model Attributes
modelAttributes();


//Serve Request
serveRequest();
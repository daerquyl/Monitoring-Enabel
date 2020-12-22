<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");

require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/flash_message_handler.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/utils.php");
require_once("userEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/organizationEntityManager.php");

/*
* CHAMPS & ATTRIBUTS
*/
$fields = ["id","name","login","email","role","organization_id","supervisor_id","deputy_id","manager_id","admin_ong_id"/*,"sites_ids"*/];
$model_attributes = array();

/*
*ROUTEUR INTERNE APPELLE LA FONCTION ADEQUATE EN FONCTION DE L'ULR
*/
function serveRequest(){
	
	$redirectInfo = isset($_REQUEST['path']) ? strtoupper($_REQUEST['path']) : "LIST";
	
	if($redirectInfo == "ADDORUPDATE"){ addOrUpdate(); }
	if($redirectInfo == "LIST"){ _list(); }
	if($redirectInfo == "DELETE"){	___delete(); }
	if($redirectInfo == "GET"){	__getJson(); }
	if($redirectInfo == "RESET") { _reset(); }
	
}

/*
* GESTIONNAIRE POUR L'AJOUT OU LA MISE A JOUR D'UNE UTILISATEUR
*/
function addOrUpdate(){
	global $fields;
	$user = _extract($fields);
	setMessage(_save($user),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour de l'utilisateur",
				"L'utilisateur a &eacute;t&eacute; bien enregistr&eacute;");
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE REINITIALISATION MOT DE PASSE UTILISATEUR
*/
function _reset(){
	$id = _extract1("id");
	setMessage(resetPassword($id),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour de l'utilisateur",
				"L'utilisateur a &eacute;t&eacute; bien enregistr&eacute;");
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR AFFICHER LA LISTE DES UTILISATEURS
*/
function _list(){
	require_once("views/list.php");
}

/*
* GESTIONNAIRE POUR LA SUPPRESSION D'UNE UTILISATEUR
*/
function ___delete(){
	$id = _extract1("id");
	setMessage(__delete($id),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la supression de l'utilisateur",
				"L'utilisateur a &eacute;t&eacute; bien supprim&eacute;");
	header("Location: controller?path=list");
}


/*
* GESTIONNAIRE POUR LA RECUPERATION D'UNE UTILISATEUR (JSON)
*/
function __getJson(){
	$id = _extract1("id");
	$user = find($id);
	$response = '{ "status" : '.(($user != null) ? 200 : 404).' %user }';
	$response = ($user == null) ? str_replace("%user","", $response) 
										: str_replace("%user",',"user" : '.json_encode(strip_invalid_utf8_array($user)), $response);
	
	header("Content-Type: application/json; charset=UTF-8");
	echo $response;	
}

/*
* ATTRIBUTS DU MODEL
*/
function modelAttributes(){
	global $model_attributes, $principal;
	
	$is_admin = ($principal['role'] == "ADMIN");
	$organization = $is_admin ? "" : $principal['organization'] ;
	
	$model_attributes['roles'] = $is_admin ? ["ADMIN_ONG","ADMIN","ENABEL"] : array_diff(getRoles(),["ADMIN_ONG","ADMIN","ENABEL"]);
	$model_attributes['organizations'] = $is_admin ? findAllOrganizations() : $principal['organization'];
//	echo "supervisor<br />";
	$model_attributes['supervisors'] = findSuperiors("supervisor", $organization);
//	echo "deputy<br />";
	$model_attributes['deputies'] = findSuperiors("deputy", $organization);
//	echo "manager<br />";
	$model_attributes['managers'] = findSuperiors("manager", $organization);
//	echo "admin_ong<br />";
	$model_attributes['admins'] = findSuperiors("admin_ong", $organization);
}

/*
* RETOURNE LA VALEUR D'UN ATTRIBUT
*/
function getAttribute($name){
	global $model_attributes;
	return $model_attributes[$name];
}

/*
* RETOURNE LA DESCRIPTION DES ROLES
*/
function _getRoleDescription($role){
	return getRoleDescription($role);
}

/*
* RETOURNE POUR UN ROLE LES ROLES SUBORDONNEES
*/
function _getSuperiorRoles($role){
	return getSuperiorRoles($role);
}

//Set Model Attributes
modelAttributes();

//Serve Request
serveRequest();

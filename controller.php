<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");

require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/flash_message_handler.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/userEntityManager.php");

/*
* CHAMPS & ATTRIBUTS
*/
$fields = ["password","npassword","npassword2"];

/*
*ROUTEUR INTERNE APPELLE LA FONCTION ADEQUATE EN FONCTION DE L'ULR
*/
function serveRequest(){
	global $fields; 
	$redirectInfo = isset($_REQUEST['path']) ? strtoupper($_REQUEST['path']) : "LIST";

	if($redirectInfo == "UPDATE_PASSWORD"){ update_password(); }
	
}

//Serve Request
serveRequest();

function update_password(){
	global $fields, $principal;
	$user = _extract($fields);
	
	$done = false;
	if( isset($user['password'])
		&& isset($user['npassword'])
		&& isset($user['npassword2'])){
		if($user['npassword'] == $user['npassword2'] && !empty(trim($user['npassword']))){
			if(check_password($principal['id'], $user['password'])){
				db_update_password($principal['id'],$user['npassword']);
				$done = true;
			}
		}
	}
	echo ($done ? "Votre mot de passe a bien &eacute;t&eacute; modifi&eacute" : "Une erreur a survenu pendant la modification du mot de passe");
	setMessage($done,"Une erreur a survenu pendant la modification du mot de passe",
					 "Votre mot de passe a bien &eacute;t&eacute; modifi&eacute");
	header("Location: index.php");
	
}

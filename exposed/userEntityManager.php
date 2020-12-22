<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* RETOURNE L'UTILISATEUR SPECIFIE PAR SON LOGIN ET SON MOT DE PASSE
*/
function authenticate($login, $password){
	$query = "SELECT u.id, role, u.name, login, email, organization_id, o.name as organization, supervisor_id, deputy_id, manager_id 
				FROM puser u , organization o 
				WHERE u.organization_id = o.id
				AND login='".$login."' 
				AND password='".md5($password)."'";
	$users = getEntityQueryBase($query);
	$user = ( $users != null && count($users)>0) ? $users[0] : null;
	return $user;
}

/*
* RETOURNE L'UTILISATEUR SPECIFIE PAR SON ID
*/
function findUser($id){
	$query = "SELECT u.id, role, u.name, login, email, organization_id, o.name as organization, supervisor_id, deputy_id, manager_id 
				FROM puser u , organization o 
				WHERE u.organization_id = o.id
				AND u.id=".$id;
	$users = getEntityQueryBase($query);
	$user = ( $users != null && count($users)>0) ? $users[0] : null;
	return $user;
}

/*
* MET A JOUR LE MOT DE PASSE DE L'UTILISATEUR
*/
function db_update_password($id, $password){
	$query = "UPDATE puser SET password = md5(".$password.") WHERE id = ".$id;
	return executeEntityQueryBase($query);
}

/*
* VERIFIE LE MOT DE PASSE DE L'UTILISATEUR
*/
function check_password($id, $password){
	$query = "SELECT id FROM puser WHERE id = ".$id." and password = md5(".$password.")";
	$raw = getEntityQueryBase($query);
	if($raw != null && count($raw) > 0){
		return true;
	}else{
		return false;
	}
}
